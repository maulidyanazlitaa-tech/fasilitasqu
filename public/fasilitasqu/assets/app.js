(async () => {
  "use strict";
  const script = document.currentScript;
  const assets = new URL(".", script.src);
  const code = document.body.dataset.page || "";
  const params = new URLSearchParams(location.search);
  const workspace = params.has("workspace") && parent !== window;
  const $ = (selector, root = document) => root.querySelector(selector);
  const $$ = (selector, root = document) => [...root.querySelectorAll(selector)];
  const text = (node) => node?.textContent.replace(/\s+/g, " ").trim() || "";
  const layerRules = new Map(
    $$("[data-layer-id]").map((node) => [
      `${node.tagName}.${node.classList[0] || ""}`,
      node.dataset.layer.split(" — ")[0],
    ]),
  );
  let dynamicLayer = 0,
    lastLayerTree = "";
  function publishLayers() {
    const ids = new Set();
    $$("[data-layer-id]").forEach((node) => {
      if (ids.has(node.dataset.layerId)) node.dataset.layerId = `${code}-dynamic-${++dynamicLayer}`;
      ids.add(node.dataset.layerId);
    });
    $$("*").forEach((node) => {
      if (!node.dataset.layerId) {
        const name = layerRules.get(`${node.tagName}.${node.classList[0] || ""}`);
        if (!name) return;
        node.dataset.layer = name;
        node.dataset.layerId = `${code}-dynamic-${++dynamicLayer}`;
      }
      if (/^H[1-4]$/.test(node.tagName))
        node.dataset.layer = `${node.dataset.layer.split(" — ")[0]} — ${text(node).slice(0, 70)}`;
    });
    if (!workspace) return;
    const collect = (root) =>
      [...root.children].flatMap((node) => {
        const children = collect(node);
        return node.dataset.layerId
          ? [
              {
                id: node.dataset.layerId,
                name: node.dataset.layer,
                tag: node.tagName.toLowerCase(),
                children,
              },
            ]
          : children;
      });
    const layers = collect(document.body),
      serialized = JSON.stringify(layers);
    if (serialized === lastLayerTree) return;
    lastLayerTree = serialized;
    parent.postMessage({ type: "fq:layers", page: code, layers }, location.origin);
  }
  const escape = (value) =>
    String(value ?? "").replace(
      /[&<>"']/g,
      (c) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" })[c],
    );
  const icon = (name, size = 16) => {
    const paths = {
      check: '<path d="m5 12 4 4L19 6"/>',
      close: '<path d="m6 6 12 12M6 18 18 6"/>',
      clock: '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
      shield: '<path d="M12 2 3 6v6c0 5 9 10 9 10s9-5 9-10V6Z"/><path d="m8 12 3 3 5-6"/>',
      wrench: '<path d="m14 6 4-4a6 6 0 0 1-7 8L3 18l3 3 8-8a6 6 0 0 0 8-7l-4 4Z"/>',
      pin: '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>',
      arrow: '<path d="M4 12h16m-6-6 6 6-6 6"/>',
      up: '<path d="M7 17 17 7M7 7h10v10"/>',
      calendar:
        '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 2v6m10-6v6M3 11h18"/>',
      logout: '<path d="M9 3H3v18h6m5-14 5 5-5 5m-7-5h14"/>',
      menu: '<path d="M4 6h16M4 12h16M4 18h16"/>',
      edit: '<path d="m15 4 5 5M3 21l5-1L21 7l-5-5L3 15Z"/>',
      left: '<path d="m15 5-7 7 7 7"/>',
      right: '<path d="m9 5 7 7-7 7"/>',
      image:
        '<rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8" cy="8" r="1.5"/><path d="m21 15-6-6L3 21"/>',
    };
    return `<svg width="${size}" height="${size}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${paths[name] || paths.check}</svg>`;
  };
  const image = (src) =>
    src?.startsWith("/images/") ? new URL(`images/${src.slice(8)}`, assets).href : src;
  const number = (n) => Number(n).toFixed(2).replace(".", ",");
  const priority = (n) => (n >= 4 ? "Tinggi" : n >= 2.5 ? "Sedang" : "Rendah");
  const calculate = (values) =>
    values.reduce((sum, n, i) => sum + n * [0.346, 0.325, 0.2, 0.129][i], 0);
  const statusClasses = {
    "Menunggu Verifikasi": "waiting",
    Terverifikasi: "verified",
    Ditolak: "rejected",
    "Dalam Penanganan": "progress",
    Selesai: "done",
  };
  const statusIcons = {
    "Menunggu Verifikasi": "clock",
    Terverifikasi: "shield",
    Ditolak: "close",
    "Dalam Penanganan": "wrench",
    Selesai: "check",
  };
  const badge = (status) =>
    `<span class="badge badge--${statusClasses[status]}">${icon(statusIcons[status], 14)}${escape(status)}</span>`;
  const levelBadge = (score) =>
    `<span class="badge priority priority--${priority(score).toLowerCase()}"><span class="badge-dot"></span>${priority(score)}</span>`;
  const conditionBadge = (condition) =>
    `<span class="badge condition condition--${condition === "Baik" ? "good" : condition === "Rusak" ? "broken" : "repair"}"><span class="badge-dot"></span>${escape(condition)}</span>`;
  const link = (label, href, variant = "outline", extra = "") =>
    `<a class="button button--${variant} button--sm" href="${escape(href)}" ${extra}>${label}</a>`;
  function go(href) {
    const url = new URL(href, location.href);
    if (url.origin !== location.origin) return;
    if (workspace) parent.postMessage({ type: "fq:navigate", href: url.href }, location.origin);
    else location.assign(url.href);
  }
  function notify(message, next = false) {
    if (next) {
      try {
        sessionStorage.setItem("fq-html-toast", message);
      } catch {}
      return;
    }
    $(".fq-toast")?.remove();
    const node = document.createElement("div");
    node.className = "fq-toast";
    node.setAttribute("role", "status");
    node.innerHTML = `${icon("check", 18)}<span>${escape(message)}</span><button type="button" aria-label="Tutup pemberitahuan" data-action="dismiss-toast">${icon("close")}</button>`;
    document.body.append(node);
    setTimeout(() => node.remove(), 5000);
  }
  let model;
  try {
    const response = await fetch(new URL("data.json", assets));
    if (!response.ok) throw new Error();
    model = await response.json();
  } catch {
    notify("Data demo belum dapat dimuat. Buka halaman melalui server web.");
    document.body.dataset.ready = "error";
    return;
  }
  let data;
  try {
    data = JSON.parse(sessionStorage.getItem("fq-html-demo"));
  } catch {}
  if (!data || data.version !== 1 || !Array.isArray(data.reports))
    data = { version: 1, ...structuredClone(model) };
  const save = () => {
    try {
      sessionStorage.setItem("fq-html-demo", JSON.stringify(data));
      return true;
    } catch {
      notify("Penyimpanan demo penuh. Kurangi jumlah atau ukuran foto, lalu coba lagi.");
      return false;
    }
  };
  const facility = (id) => data.facilities.find((f) => f.id === Number(id)) || data.facilities[0];
  const reportById = (id) => data.reports.find((r) => r.id === id) || data.reports[0];
  const category = (id) => data.categories.find((c) => c.id === id);
  const reportId =
    params.get("report") ||
    text($(".report-info-panel .report-id, .result-report-id, .completion-facility .report-id")) ||
    (code === "PEL-06" ? "LP-2026-0007" : code === "PTG-04" ? "LP-2026-0004" : "LP-2026-0003");
  let currentReport = reportById(reportId);
  let selectedFacility =
    params.get("facility") || (code === "PEL-04" || code === "ADM-08b" ? "1" : "");
  let viewPage = 1,
    activeStatus = "Semua",
    mapSelection = code === "PEL-03b" ? 1 : null,
    photoList = [],
    finished = code === "PTG-03b" || code === "PTG-04";
  let selectedCategory = params.get("category") || "",
    mapPickerSelection = null;
  const field = (label, root = document) => {
    const element = $$("label", root).find((item) => text(item) === label);
    return element?.htmlFor ? root.querySelector(`#${CSS.escape(element.htmlFor)}`) : null;
  };
  const value = (label, root = document) => field(label, root)?.value || "";
  const setValue = (label, val, root = document) => {
    const input = field(label, root);
    if (input) input.value = val ?? "";
  };
  const setError = (input, message) => {
    if (!input) return;
    const wrapper = input.closest(".field") || input.parentElement;
    $(".fq-inline-error", wrapper)?.remove();
    input.setAttribute("aria-invalid", message ? "true" : "false");
    if (message) {
      const node = document.createElement("span");
      node.className = "fq-inline-error";
      node.textContent = message;
      wrapper.append(node);
    }
  };
  function changeStatus(report, status, note, by, extra = {}) {
    const previous = report.status;
    Object.assign(report, extra, { status });
    report.history.push({ previous, status, date: "09 Nov 2026", time: "13.30", by, note });
  }
  function timeline(report) {
    return report.history
      .map(
        (entry, i) =>
          `<div class="timeline-item ${i === report.history.length - 1 ? "is-current" : ""}"><div class="timeline-dot">${icon(i === report.history.length - 1 ? "clock" : "check", 14)}</div><div class="timeline-content"><div class="timeline-date">${escape(entry.date)} · ${escape(entry.time)}</div>${badge(entry.status)}${entry.previous ? `<div class="timeline-transition">${escape(entry.previous)} ${icon("arrow", 12)} ${escape(entry.status)}</div>` : ""}<p>${escape(entry.note)}</p><span class="muted">oleh ${escape(entry.by)}</span></div></div>`,
      )
      .join("");
  }
  function reportRows(reports, mode = "pelapor", verify = false) {
    return reports
      .map((report) => {
        const f = facility(report.facilityId);
        const href =
          mode === "admin"
            ? `${verify ? "ADM-03a" : "ADM-05b"}.html?report=${report.id}`
            : `${report.status === "Ditolak" ? "PEL-08b" : "PEL-08"}.html?report=${report.id}`;
        return `<tr ${mode === "admin" ? `class="clickable-row" data-href="${href}"` : ""}><td><span class="report-id">${report.id}</span></td>${mode === "admin" ? `<td><div class="table-person"><span class="avatar avatar--small">AR</span>${escape(report.reporter)}</div></td>` : ""}<td><strong>${escape(f.name)}</strong><span class="table-sub">${escape(verify ? f.building : report.description)}</span></td>${verify ? `<td>${escape(category(f.category)?.name)}</td>` : ""}<td class="no-wrap">${report.date}</td><td>${badge(report.status)}</td><td class="text-right">${link(`${verify ? "Periksa" : "Detail"} ${icon("up", 14)}`, href)}</td></tr>`;
      })
      .join("");
  }
  function reportCard(report) {
    const f = facility(report.facilityId),
      href = `${report.status === "Ditolak" ? "PEL-08b" : "PEL-08"}.html?report=${report.id}`;
    return `<article class="report-card"><div class="report-card-top"><span class="report-id">${report.id}</span>${badge(report.status)}</div><h4 class="title title--4"><a class="text-link" href="${href}">${escape(f.name)}</a></h4><p class="muted">${escape(report.description)}</p><div class="report-card-footer"><span>${icon("calendar", 14)}${report.date}</span><a class="text-link" href="${href}">Lihat Detail ${icon("up", 16)}</a></div></article>`;
  }
  function facilityCard(f) {
    return `<article class="facility-card"><div class="facility-card-photo"><img src="${escape(image(f.image))}" alt="${escape(f.name)}" loading="lazy">${conditionBadge(f.condition)}</div><div class="facility-card-body"><div class="facility-card-category">${escape(category(f.category)?.name)}</div><h4 class="title title--4"><a class="text-link" href="PEL-04.html?facility=${f.id}">${escape(f.name)}</a></h4><p class="facility-card-location">${icon("pin", 15)}${escape(f.building)}</p><div class="facility-card-actions">${link(`Detail ${icon("up", 15)}`, `PEL-04.html?facility=${f.id}`)}${link(`Laporkan ${icon("arrow", 15)}`, `PEL-05.html?facility=${f.id}`, "primary")}</div></div></article>`;
  }
  function pagination(total, perPage = 6) {
    const node = $(".pagination");
    if (!node) return;
    const pages = Math.max(1, Math.ceil(total / perPage));
    viewPage = Math.min(viewPage, pages);
    node.innerHTML = `<span class="muted">Menampilkan ${total ? (viewPage - 1) * perPage + 1 : 0}–${Math.min(viewPage * perPage, total)} dari ${total} data</span><div><button class="button button--outline button--sm" type="button" data-page-number="${viewPage - 1}" aria-label="Halaman sebelumnya" ${viewPage === 1 ? "disabled" : ""}>${icon("left")}</button>${Array.from({ length: pages }, (_, i) => `<button class="button button--${viewPage === i + 1 ? "primary" : "ghost"} button--sm" type="button" data-page-number="${i + 1}" aria-label="Halaman ${i + 1}">${i + 1}</button>`).join("")}<button class="button button--outline button--sm" type="button" data-page-number="${viewPage + 1}" aria-label="Halaman berikutnya" ${viewPage === pages ? "disabled" : ""}>${icon("right")}</button></div>`;
  }
  const empty = (title, description, action = "") =>
    `<div class="empty-state"><div class="empty-icon">${icon("info", 32)}</div><h3 class="title title--3">${escape(title)}</h3><p class="muted">${escape(description)}</p>${action ? link("Laporkan Kerusakan", "PEL-05.html", "primary") : ""}</div>`;
  function kpis() {
    $$(".kpi-card").forEach((card) => {
      const label = text($(".kpi-top>span", card));
      let count;
      if (["Tugas Baru", "Terverifikasi"].includes(label))
        count = data.reports.filter((r) => r.status === "Terverifikasi").length;
      else if (data.statuses.includes(label))
        count = data.reports.filter((r) => r.status === label).length;
      if (count !== undefined && $(".kpi-value", card))
        $(".kpi-value", card).textContent = String(count).padStart(2, "0");
    });
    const counter = $(".sidebar-counter");
    if (counter)
      counter.textContent = data.reports.filter((r) => r.status === "Menunggu Verifikasi").length;
  }
  function updateHome() {
    const grids = $$(".reporter-main .card-grid");
    if (grids[0])
      grids[0].innerHTML = [...data.reports]
        .sort((a, b) => b.id.localeCompare(a.id))
        .slice(0, 3)
        .map(reportCard)
        .join("");
    if (grids[1])
      grids[1].innerHTML = data.facilities
        .filter((f) => f.condition !== "Baik")
        .slice(0, 3)
        .map(facilityCard)
        .join("");
    kpis();
  }
  function filteredFacilities() {
    const input = $("input[type=search]"),
      selects = $$(".filter-bar select");
    const search = (input?.value || "").toLowerCase();
    return data.facilities.filter(
      (f) =>
        `${f.name} ${f.building}`.toLowerCase().includes(search) &&
        (!selects[0]?.value || f.category === selects[0].value) &&
        (!selects[1]?.value || f.building === selects[1].value) &&
        (!selects[2]?.value || f.condition === selects[2].value),
    );
  }
  function updateFacilityList() {
    const list = filteredFacilities(),
      grid = $(".card-grid");
    if (!grid) return;
    const label = $(".results-label");
    if (label) label.textContent = `${list.length} fasilitas ditemukan`;
    const pages = Math.max(1, Math.ceil(list.length / 6));
    viewPage = Math.min(viewPage, pages);
    grid.innerHTML = list.length
      ? list
          .slice((viewPage - 1) * 6, viewPage * 6)
          .map(facilityCard)
          .join("")
      : empty("Fasilitas tidak ditemukan", "Coba kata kunci atau pilihan filter lain.");
    pagination(list.length);
  }
  function updateReportList() {
    const search = (
      $(".panel-search input, .filter-bar input[type=search]")?.value || ""
    ).toLowerCase();
    const selects = $$(".filter-bar select");
    const forcedEmpty = code === "PEL-07b";
    let reports = forcedEmpty ? [] : data.reports;
    if (code === "ADM-02")
      reports = reports.filter(
        (r) =>
          r.status === "Menunggu Verifikasi" &&
          (!selects[0]?.value || facility(r.facilityId).category === selects[0].value) &&
          (!selects[1]?.value || r.date === selects[1].value),
      );
    if (code === "ADM-05" && selects[0]?.value)
      reports = reports.filter((r) => r.status === selects[0].value);
    if (code.startsWith("PEL-07") && activeStatus !== "Semua")
      reports = reports.filter((r) => r.status === activeStatus);
    reports = reports.filter((r) =>
      `${r.id} ${r.reporter} ${r.description} ${facility(r.facilityId).name}`
        .toLowerCase()
        .includes(search),
    );
    const perPage = code === "ADM-02" ? 100 : 6;
    viewPage = Math.min(viewPage, Math.max(1, Math.ceil(reports.length / perPage)));
    const shown = reports.slice((viewPage - 1) * perPage, viewPage * perPage);
    const table = $(".data-table tbody");
    if (table)
      table.innerHTML = reportRows(
        shown,
        code.startsWith("ADM") ? "admin" : "pelapor",
        code === "ADM-02",
      );
    const mobile = $(".mobile-report-list");
    if (mobile) mobile.innerHTML = shown.map(reportCard).join("");
    $(".fq-list-empty")?.remove();
    if (!reports.length) {
      const node = document.createElement("div");
      node.className = "fq-list-empty";
      node.innerHTML = empty(
        code === "PEL-07b" ? "Belum ada laporan" : "Tidak ada laporan di sini",
        code === "PEL-07b"
          ? "Buat laporan pertamamu dan pantau perkembangannya."
          : "Coba kata kunci atau filter lain.",
        code.startsWith("PEL"),
      );
      $(".panel")?.append(node);
    }
    $$(".tabs [role=tab]").forEach((button) => {
      const name = button.dataset.status || button.firstChild?.textContent.trim() || "Semua";
      button.dataset.status = name;
      button.classList.toggle("is-active", name === activeStatus);
      button.setAttribute("aria-selected", String(name === activeStatus));
      const count = $("span", button);
      if (count)
        count.textContent = forcedEmpty
          ? 0
          : name === "Semua"
            ? data.reports.length
            : data.reports.filter((r) => r.status === name).length;
    });
    const summary = $(".table-summary");
    if (summary) summary.textContent = `${reports.length} laporan ditampilkan`;
    if (code === "ADM-02") {
      const count = $(".queue-count");
      if (count)
        count.innerHTML = `<span class="accent-dot"></span>${data.reports.filter((r) => r.status === "Menunggu Verifikasi").length} laporan menunggu`;
    }
    pagination(reports.length, perPage);
    kpis();
  }
  function hydrateReport() {
    currentReport = reportById(reportId);
    const r = currentReport,
      f = facility(r.facilityId);
    const info = $(".report-info-panel");
    if (info) {
      const heading = $(".report-facility-heading", info);
      if (heading) {
        $(".eyebrow", heading).textContent = category(f.category)?.name || "";
        $(".title", heading).textContent = f.name;
        $(".location-inline", heading).innerHTML =
          `${icon("pin", 15)}${escape(f.building)} · Universitas Jambi`;
      }
      const status = $(".panel-heading .badge", info);
      if (status) status.outerHTML = badge(r.status);
      const values = {
        "No. Laporan": r.id,
        "Tanggal laporan": r.date,
        Pelapor: r.reporter,
        "Tingkat kerusakan pelapor": r.severity,
      };
      $$(".info-list>div", info).forEach((row) => {
        const label = text($("span", row));
        if (values[label] && $("strong", row)) $("strong", row).textContent = values[label];
      });
      const description = $(".description-block>p", info);
      if (description) description.textContent = r.description;
      const gallery = $(".report-photo-gallery", info);
      if (gallery)
        gallery.innerHTML = r.photos
          .map(
            (src, i) =>
              `<button type="button" data-action="photo" data-src="${escape(image(src))}" aria-label="Perbesar foto bukti ${i + 1}"><img src="${escape(image(src))}" alt="Bukti kerusakan ${escape(f.name)}, foto ${i + 1}"><span>${icon("up", 17)}</span></button>`,
          )
          .join("");
    }
    $$(".timeline").forEach((node) => (node.innerHTML = timeline(r)));
    const coordinates = $(".location-coordinates");
    if (coordinates)
      coordinates.innerHTML = `<span>${escape(f.building)} · Kampus Mendalo</span><span>${escape(r.lat)}, ${escape(r.lng)}</span>`;
    const current = $(".current-status .badge");
    if (current) current.outerHTML = badge(r.status);
    const rejection = $(".rejection-card");
    if (rejection) {
      const note = $("p", rejection);
      if (note) note.textContent = r.rejection || "Foto tidak menunjukkan kerusakan";
      const a = $("a", rejection);
      if (a) a.href = `PEL-05.html?facility=${f.id}`;
    }
    $$(".task-big-score").forEach(
      (node) => (node.innerHTML = `${number(r.score || 0)}<span>/ 5,00</span>`),
    );
    const task = $(".task-priority-card>.priority");
    if (task) task.outerHTML = levelBadge(r.score || 0);
    const location = $(".report-location-panel .map-artwork>.map-pin");
    if (location) {
      location.style.left = f.x + "%";
      location.style.top = f.y + "%";
    }
    if (code === "ADM-05b" && !["Terverifikasi", "Dalam Penanganan"].includes(r.status)) {
      const form = $(".panel-body form.stack-form");
      if (form)
        form.outerHTML = `<div class="status-locked-note">${icon("info", 18)}<span>${r.status === "Selesai" ? "Penanganan laporan ini sudah selesai." : "Laporan perlu diperiksa sebelum memperbarui status."}</span></div>`;
    }
  }
  function updateFacilityDetail() {
    const f = facility(selectedFacility || 1),
      info = $(".facility-detail-info");
    if (!info) return;
    $(".eyebrow", info).textContent = category(f.category)?.name;
    $(".title", info).textContent = f.name;
    $(".condition", info).outerHTML = conditionBadge(f.condition);
    $("p.muted", info).textContent = f.description;
    const photo = $(".facility-detail-photo>img");
    if (photo) {
      photo.src = image(f.image);
      photo.alt = f.name;
    }
    const rows = $$(".info-list strong", info);
    [f.building, category(f.category)?.name, `${f.lat}, ${f.lng}`].forEach((item, i) => {
      if (rows[i]) rows[i].textContent = item;
    });
    const action = $("a.button", info);
    if (action) action.href = `PEL-05.html?facility=${f.id}`;
    const reports = data.reports.filter((r) => r.facilityId === f.id);
    const table = $(".data-table tbody");
    if (table) table.innerHTML = reportRows(reports);
    const count = $(".subtle-count");
    if (count) count.textContent = `${reports.length} laporan`;
  }
  function priorityRows(reports, coordinator = false) {
    const all = data.reports.filter((r) => r.score !== undefined).sort((a, b) => b.score - a.score);
    return reports
      .map((r) => {
        const f = facility(r.facilityId);
        return `<tr ${coordinator ? 'class="clickable-row" data-href="KRD-02.html"' : ""}><td><span class="rank-badge ${all.indexOf(r) === 0 ? "rank-badge--first" : ""}">#${all.indexOf(r) + 1}</span></td>${coordinator ? `<td><strong>${escape(f.name)}</strong><span class="table-sub">${escape(f.building)}</span></td><td class="report-id">${r.id}</td>` : `<td><span class="report-id">${r.id}</span></td><td><strong>${escape(f.name)}</strong><span class="table-sub">${escape(f.building)}</span></td><td>${escape(category(f.category)?.name)}</td>${(r.values || [3, 3, 3, 3]).map((n) => `<td class="score-component">${n}</td>`).join("")}`}<td><span class="table-score">${number(r.score)}</span></td><td>${levelBadge(r.score)}</td><td>${badge(r.status)}</td>${coordinator ? "" : `<td class="no-wrap">${escape(r.assigned || "Belum ditugaskan")}</td>`}</tr>`;
      })
      .join("");
  }
  function updatePriorities() {
    const search = ($("input[type=search]")?.value || "").toLowerCase(),
      selects = $$(".filter-bar select");
    const reports = data.reports
      .filter(
        (r) =>
          r.score !== undefined &&
          (!selects[0]?.value || priority(r.score) === selects[0].value) &&
          (!selects[1]?.value || facility(r.facilityId).category === selects[1].value) &&
          `${r.id} ${facility(r.facilityId).name}`.toLowerCase().includes(search),
      )
      .sort((a, b) => b.score - a.score);
    const table = $(".priority-table tbody");
    if (table) table.innerHTML = priorityRows(reports);
    const summary = $(".table-summary>span");
    if (summary) summary.textContent = `${reports.length} laporan terurut berdasarkan skor`;
  }
  function updateAdminDashboard() {
    const pending = data.reports.filter((r) => r.status === "Menunggu Verifikasi"),
      table = $(".data-table tbody");
    if (table) table.innerHTML = reportRows(pending.slice(0, 5), "admin", true);
    const count = $(".button-count");
    if (count) count.textContent = pending.length;
    const top = $(".top-priority-list");
    if (top)
      top.innerHTML = data.reports
        .filter((r) => r.score !== undefined && r.status !== "Selesai")
        .sort((a, b) => b.score - a.score)
        .slice(0, 3)
        .map(
          (r, i) =>
            `<a class="text-link top-priority-item" href="ADM-06.html"><span class="priority-rank">${i + 1}</span><div><strong>${escape(facility(r.facilityId).name)}</strong><span class="muted">${r.id}</span>${levelBadge(r.score)}</div><span class="top-priority-score">${number(r.score)}</span></a>`,
        )
        .join("");
    kpis();
  }
  function updateFacilityManagement() {
    const search = ($("input[type=search]")?.value || "").toLowerCase(),
      selects = $$(".filter-bar select");
    const list = data.facilities.filter(
      (f) =>
        f.name.toLowerCase().includes(search) &&
        (!selects[0]?.value || f.category === selects[0].value) &&
        (!selects[1]?.value || f.building === selects[1].value),
    );
    const table = $(".data-table tbody");
    if (table)
      table.innerHTML = list
        .map(
          (f) =>
            `<tr><td><div class="table-facility"><img src="${escape(image(f.image))}" alt=""><strong>${escape(f.name)}</strong></div></td><td>${escape(category(f.category)?.name)}</td><td class="no-wrap">${escape(f.building)}</td><td><span class="coordinate-value">${f.lat}<br>${f.lng}</span></td><td>${conditionBadge(f.condition)}</td><td>${link(`${icon("edit", 14)}Edit`, `ADM-08b.html?facility=${f.id}`)}</td></tr>`,
        )
        .join("");
    const summary = $(".table-summary");
    if (summary) summary.textContent = `${list.length} fasilitas terdaftar`;
  }
  function updateCategoryManagement() {
    const table = $(".data-table tbody");
    if (!table) return;
    table.innerHTML = data.categories
      .map(
        (c) =>
          `<tr><td><div class="table-person"><span class="icon-box">${icon("file", 19)}</span><strong>${escape(c.name)}</strong></div></td><td><div class="weight-meter">${Array.from({ length: 5 }, (_, i) => `<span class="${i < c.weight ? "filled" : ""}"></span>`).join("")}<strong>${c.weight}</strong><span>/ 5</span></div></td><td>${data.facilities.filter((f) => f.category === c.id).length} fasilitas</td><td><button type="button" class="button button--outline button--sm" data-action="edit-category" data-category="${c.id}">${icon("edit", 14)}Edit</button></td></tr>`,
      )
      .join("");
    const summary = $(".table-summary");
    if (summary) summary.textContent = `${data.categories.length} kategori fasilitas`;
  }
  function updateStaff() {
    const history = code === "PTG-01b",
      search = ($("input[type=search]")?.value || params.get("q") || "").toLowerCase(),
      status = $(".filter-bar select")?.value;
    const reports = data.reports
      .filter(
        (r) =>
          (history
            ? r.status === "Selesai"
            : ["Terverifikasi", "Dalam Penanganan"].includes(r.status)) &&
          (!status || r.status === status) &&
          `${r.id} ${facility(r.facilityId).name}`.toLowerCase().includes(search),
      )
      .sort((a, b) => (b.score || 0) - (a.score || 0));
    const table = $(".task-table tbody");
    if (table)
      table.innerHTML = reports
        .map((r, i) => {
          const f = facility(r.facilityId);
          return `<tr><td><span class="rank-badge ${i === 0 && !history ? "rank-badge--first" : ""}">#${i + 1}</span></td><td><div class="task-score"><strong>${number(r.score || 0)}</strong>${levelBadge(r.score || 0)}</div></td><td><strong>${escape(f.name)}</strong><span class="table-sub">${r.id} · ${escape(r.description)}</span></td><td><span class="location-inline">${icon("pin", 14)}${escape(f.building)}</span></td><td>${badge(r.status)}</td><td>${link(`${history ? "Detail" : r.status === "Dalam Penanganan" ? "Lanjutkan" : "Ambil Tugas"} ${icon("up", 14)}`, `${history ? "PTG-02" : r.status === "Dalam Penanganan" ? "PTG-03a" : "PTG-02"}.html?report=${r.id}`, r.status === "Terverifikasi" ? "primary" : "outline")}</td></tr>`;
        })
        .join("");
    const summary = $(".table-summary");
    if (summary) summary.textContent = `${reports.length} tugas ditampilkan`;
    kpis();
  }
  function updateCoordinator() {
    const selects = $$(".coordinator-filters select"),
      search = (params.get("q") || "").toLowerCase();
    const facilities = data.facilities.filter(
      (f) =>
        (!selects[0]?.value || f.building === selects[0].value) &&
        (!selects[1]?.value || f.category === selects[1].value) &&
        f.name.toLowerCase().includes(search),
    );
    const ids = new Set(facilities.map((f) => f.id)),
      reports = data.reports.filter(
        (r) => ids.has(r.facilityId) && selects[2]?.value !== "Oktober 2026",
      );
    const counts = ["Baik", "Dalam Perbaikan", "Rusak"].map(
      (condition) => facilities.filter((f) => f.condition === condition).length,
    );
    const values = [
      facilities.length,
      counts[0],
      counts[1] + counts[2],
      reports.filter((r) => r.status === "Selesai").length,
    ];
    $$(".kpi-value").forEach((node, i) => (node.textContent = String(values[i]).padStart(2, "0")));
    const total = $(".donut-center>strong");
    if (total) total.textContent = facilities.length;
    const circumference = 2 * Math.PI * 72;
    $$(".donut-segment").forEach((node, i) => {
      node.setAttribute(
        "stroke-dasharray",
        `${facilities.length ? (counts[i] / facilities.length) * circumference : 0} ${circumference}`,
      );
      node.setAttribute(
        "stroke-dashoffset",
        (-counts.slice(0, i).reduce((a, b) => a + b, 0) / (facilities.length || 1)) * circumference,
      );
    });
    $$(".chart-legend>div").forEach((node, i) => {
      const strong = $("strong", node),
        small = $("small", node);
      if (strong) strong.textContent = counts[i];
      if (small)
        small.textContent =
          (facilities.length ? Math.round((counts[i] / facilities.length) * 100) : 0) + "%";
    });
    const bars = data.categories.map((c) => ({
        ...c,
        count: reports.filter((r) => facility(r.facilityId).category === c.id).length,
      })),
      max = Math.max(1, ...bars.map((c) => c.count));
    const chart = $(".bar-chart");
    if (chart)
      chart.innerHTML = bars
        .map(
          (c) =>
            `<div class="bar-chart-row"><span>${escape(c.name)}</span><div class="bar-track"><div class="bar-fill ${c.count === max ? "bar-fill--accent" : ""}" style="width:${(c.count / max) * 100}%"></div></div><strong>${c.count}</strong></div>`,
        )
        .join("");
    const top = reports
        .filter((r) => r.score !== undefined)
        .sort((a, b) => b.score - a.score)
        .slice(0, 5),
      table = $(".coordinator-priority-table tbody");
    if (table) table.innerHTML = priorityRows(top, true);
    $(".fq-chart-empty")?.remove();
    const panel = $(".coordinator-priority-table")?.closest(".panel");
    if (!top.length && panel) {
      const emptyNode = document.createElement("div");
      emptyNode.className = "fq-chart-empty";
      emptyNode.innerHTML = empty(
        "Belum ada data prioritas",
        "Tidak ada laporan sesuai filter dan periode yang dipilih.",
      );
      panel.append(emptyNode);
    }
  }
  function fillCategorySelects() {
    $$("select").forEach((select) => {
      const label =
        select.getAttribute("aria-label") || text($(`label[for="${CSS.escape(select.id)}"]`));
      if (!/Kategori|kategori/.test(label)) return;
      const previous = select.value,
        placeholder = select.querySelector('option[value=""]')?.textContent;
      select.innerHTML = `${placeholder ? `<option value="">${escape(placeholder)}</option>` : ""}${data.categories.map((c) => `<option value="${c.id}">${escape(c.name)}</option>`).join("")}`;
      select.value = previous;
    });
  }
  function renderMapPins(map, list) {
    const artwork = $(".map-artwork", map);
    if (!artwork) return;
    $$(".map-pin:not(.map-draggable-pin)", artwork).forEach((node) => node.remove());
    artwork.insertAdjacentHTML(
      "beforeend",
      list
        .map(
          (f) =>
            `<button type="button" class="map-pin ${f.condition === "Baik" ? "map-pin--good" : "map-pin--broken"} ${mapSelection === f.id ? "is-selected" : ""}" style="left:${f.x}%;top:${f.y}%" data-facility="${f.id}" aria-label="Pilih ${escape(f.name)}"><svg width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1.7"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z"/></svg><span class="map-pin-center"></span></button>`,
        )
        .join(""),
    );
  }
  function updateMap() {
    const panel = $(".map-list-panel");
    if (!panel) return;
    const query = ($("input[type=search]", panel)?.value || "").toLowerCase(),
      selects = $$("select", panel);
    const list = data.facilities.filter(
      (f) =>
        f.name.toLowerCase().includes(query) &&
        (!selects[0]?.value || f.category === selects[0].value) &&
        (!selects[1]?.value || f.building === selects[1].value) &&
        (!selects[2]?.value || f.condition === selects[2].value),
    );
    const count = $(".map-list-count");
    if (count) count.textContent = `${list.length} fasilitas di sekitar kampus`;
    const listNode = $(".map-facility-list", panel);
    if (listNode)
      listNode.innerHTML = list
        .map(
          (f) =>
            `<button type="button" class="map-facility-item ${mapSelection === f.id ? "is-selected" : ""}" data-facility="${f.id}"><img src="${escape(image(f.image))}" alt=""><span><strong>${escape(f.name)}</strong><small>${icon("pin", 12)}${escape(f.building)}</small>${conditionBadge(f.condition)}</span>${icon("right", 16)}</button>`,
        )
        .join("");
    const map = $(".map-layout>.campus-map");
    if (!map) return;
    renderMapPins(map, list);
    $(".map-popup", map)?.remove();
    const f = list.find((f) => f.id === mapSelection);
    if (f)
      map.insertAdjacentHTML(
        "beforeend",
        `<div class="map-popup" data-layer="Peta/Popup Fasilitas"><button type="button" class="button button--ghost button--sm map-popup-close" aria-label="Tutup informasi fasilitas">${icon("close")}</button>${conditionBadge(f.condition)}<h4 class="title title--4">${escape(f.name)}</h4><p class="muted">${escape(f.building)} · Universitas Jambi</p><div class="button-row">${link("Detail", `PEL-04.html?facility=${f.id}`)}${link("Laporkan", `PEL-05.html?facility=${f.id}`, "primary")}</div></div>`,
      );
  }
  function formFacilityChanged(id) {
    selectedFacility = id;
    const f = data.facilities.find((f) => f.id === Number(id));
    const summary = $(".form-summary");
    if (f) {
      setValue("Latitude", f.lat);
      setValue("Longitude", f.lng);
      if (summary) {
        const heading = $(".panel-heading", summary)?.outerHTML || "";
        summary.innerHTML = `${heading}<img src="${escape(image(f.image))}" alt="${escape(f.name)}"><div class="form-summary-content">${conditionBadge(f.condition)}<h4 class="title title--4">${escape(f.name)}</h4><p class="muted">${escape(f.building)}</p><span>${escape(category(f.category)?.name)}</span></div>`;
      }
    }
  }
  function syncReportValidation() {
    if (code !== "PEL-05b") return;
    const select = $('select[aria-label="Pilih fasilitas"]');
    const description = $('textarea[aria-label="Deskripsi kerusakan"]');
    const severity = !!$("input[name=severity]:checked");
    if (select) select.setAttribute("aria-invalid", String(!select.value));
    if (description) description.setAttribute("aria-invalid", String(!description.value.trim()));
    $(".radio-cards")?.classList.toggle("radio-cards--error", !severity);
    $(".upload-dropzone")?.classList.toggle("has-error", !photoList.length);
    $$(".field-hint--error").forEach((hint) => {
      const message = text(hint);
      if (message === "Fasilitas wajib dipilih") hint.hidden = !!select?.value;
      if (message === "Deskripsi wajib diisi") hint.hidden = !!description?.value.trim();
      if (message === "Pilih tingkat kerusakan") hint.hidden = severity;
      if (message === "Minimal 1 foto diperlukan") hint.hidden = !!photoList.length;
    });
  }
  function renderPhotos() {
    let previews = $(".photo-previews");
    if (!previews) {
      previews = document.createElement("div");
      previews.className = "photo-previews";
      $(".upload-dropzone")?.after(previews);
    }
    previews.innerHTML =
      photoList
        .map(
          (src, i) =>
            `<div><img src="${escape(image(src))}" alt="Foto bukti ${i + 1}"><button type="button" class="button button--white button--sm" data-action="remove-photo" data-photo-index="${i}" aria-label="Hapus foto ${i + 1}">${icon("close", 14)}</button></div>`,
        )
        .join("") +
      (photoList.length
        ? `<button type="button" class="button button--outline button--md" data-action="upload">${icon("image", 18)}Tambah Foto</button>`
        : "");
    syncReportValidation();
  }
  async function addFiles(files) {
    for (const file of files || []) {
      if (!["image/jpeg", "image/png"].includes(file.type)) {
        notify("Gunakan foto dengan format JPG atau PNG.");
        continue;
      }
      const src = await new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = () => resolve(reader.result);
        reader.onerror = reject;
        reader.readAsDataURL(file);
      });
      photoList.push(src);
    }
    renderPhotos();
  }
  function storeDraft() {
    data.draft = {
      facility: $('select[aria-label="Pilih fasilitas"]')?.value || "",
      description: $('textarea[aria-label="Deskripsi kerusakan"]')?.value || "",
      severity: $("input[name=severity]:checked")?.value || "",
      photos: photoList,
      lat: value("Latitude"),
      lng: value("Longitude"),
    };
    return save();
  }
  function initReportForm() {
    const select = $('select[aria-label="Pilih fasilitas"]');
    if (!select) return;
    select.innerHTML =
      '<option value="">Pilih fasilitas kampus</option>' +
      data.facilities.map((f) => `<option value="${f.id}">${escape(f.name)}</option>`).join("");
    const draft = code === "PEL-05b" ? data.draft : null;
    if (draft) {
      select.value = draft.facility;
      const description = $('textarea[aria-label="Deskripsi kerusakan"]');
      if (description) description.value = draft.description;
      $$("input[name=severity]").forEach(
        (input) => (input.checked = input.value === draft.severity),
      );
      photoList = draft.photos || [];
      setValue("Latitude", draft.lat);
      setValue("Longitude", draft.lng);
    } else if (code === "PEL-05c") {
      select.value = selectedFacility || "7";
      photoList = $$(".photo-previews img").map((img) => img.getAttribute("src"));
    } else if (selectedFacility) select.value = selectedFacility;
    formFacilityChanged(select.value);
    if (photoList.length) renderPhotos();
    const description = $('textarea[aria-label="Deskripsi kerusakan"]');
    if (description && $(".character-counter"))
      $(".character-counter").textContent = `${description.value.length}/1.000 karakter`;
    syncReportValidation();
  }
  function submitReport() {
    if (!storeDraft()) return;
    const draft = data.draft;
    if (!draft.facility || !draft.description.trim() || !draft.severity || !draft.photos.length) {
      go(`PEL-05b.html${draft.facility ? "?facility=" + draft.facility : ""}`);
      return;
    }
    const report = {
      id: "LP-2026-0007",
      facilityId: Number(draft.facility),
      description: draft.description.trim(),
      severity: draft.severity,
      photos: draft.photos,
      lat: draft.lat,
      lng: draft.lng,
      date: "09 Nov 2026",
      reporter: "Aulia Rahman",
      status: "Menunggu Verifikasi",
      history: [
        {
          status: "Menunggu Verifikasi",
          date: "09 Nov 2026",
          time: "13.30",
          by: "Aulia Rahman",
          note: "Laporan diterima dan menunggu pemeriksaan admin.",
        },
      ],
    };
    const index = data.reports.findIndex((r) => r.id === report.id);
    if (index >= 0) data.reports[index] = report;
    else data.reports.unshift(report);
    delete data.draft;
    if (save()) go("PEL-06.html?report=LP-2026-0007");
  }
  function hydrateConfirmation() {
    const r = reportById(params.get("report") || "LP-2026-0007"),
      f = facility(r.facilityId),
      summary = $(".confirmation-summary");
    if (summary) {
      $(".report-id", summary).textContent = r.id;
      $(".badge", summary).outerHTML = badge(r.status);
      $(".title", summary).textContent = f.name;
      $("p", summary).textContent = r.description;
    }
    const action = $(".confirmation-card>a.button--primary");
    if (action) action.href = `PEL-08.html?report=${r.id}`;
  }
  async function openModalFrom(file, kind, setup) {
    const response = await fetch(new URL(file, location.href));
    if (!response.ok) {
      notify("Modal belum dapat dimuat.");
      return;
    }
    const parsed = new DOMParser().parseFromString(await response.text(), "text/html"),
      overlay = $(".modal-backdrop", parsed);
    if (!overlay) return;
    overlay.dataset.transient = "1";
    overlay.dataset.kind = kind;
    document.body.append(overlay);
    document.body.style.overflow = "hidden";
    setup?.(overlay);
    $(".modal", overlay)?.focus();
  }
  function closeModal(overlay = $(".modal-backdrop")) {
    if (!overlay) return;
    if (overlay.dataset.transient) {
      overlay.remove();
      document.body.style.overflow = "";
      return;
    }
    go(
      code === "ADM-04"
        ? "ADM-02.html"
        : code.startsWith("ADM-08")
          ? "ADM-07.html"
          : code === "ADM-09b"
            ? "ADM-09.html"
            : code === "PTG-04"
              ? "PTG-01.html"
              : "PEL-05.html",
    );
  }
  function photoModal(src) {
    const overlay = document.createElement("div");
    overlay.className = "modal-backdrop";
    overlay.dataset.transient = "1";
    overlay.innerHTML = `<div class="modal modal--wide" role="dialog" aria-modal="true" aria-label="Foto Bukti Kerusakan" tabindex="-1"><div class="modal-header"><h3 class="title title--3">Foto Bukti Kerusakan</h3><button type="button" class="button button--ghost button--sm" aria-label="Tutup modal">${icon("close")}</button></div><img class="enlarged-photo" src="${escape(src)}" alt="Foto bukti kerusakan diperbesar"></div>`;
    document.body.append(overlay);
    document.body.style.overflow = "hidden";
    $(".modal", overlay).focus();
  }
  function openMapPicker() {
    const original = $(".form-section .campus-map");
    if (!original) return;
    const clone = original.cloneNode(true);
    clone.classList.remove("campus-map--mini", "campus-map--draggable");
    $$(".map-draggable-pin,.map-drag-hint", clone).forEach((node) => node.remove());
    renderMapPins(clone, data.facilities);
    mapPickerSelection = Number(selectedFacility) || null;
    const overlay = document.createElement("div");
    overlay.className = "modal-backdrop";
    overlay.dataset.transient = "1";
    overlay.dataset.kind = "map-picker";
    overlay.innerHTML = `<div class="modal modal--wide" role="dialog" aria-modal="true" aria-label="Pilih Fasilitas dari Peta" tabindex="-1"><div class="modal-header"><h3 class="title title--3">Pilih Fasilitas dari Peta</h3><button type="button" class="button button--ghost button--sm" aria-label="Tutup modal">${icon("close")}</button></div><div class="fq-map-picker"></div><div class="field"><label for="fq-map-facility">Fasilitas terpilih</label><div class="select-wrap"><select id="fq-map-facility"><option value="">Pilih pin pada peta</option>${data.facilities.map((f) => `<option value="${f.id}">${escape(f.name)}</option>`).join("")}</select></div></div><div class="modal-actions"><button type="button" class="button button--ghost button--md" data-action="close-modal">Batal</button><button type="button" class="button button--primary button--md" data-action="use-map-facility">Gunakan Fasilitas Ini</button></div></div>`;
    $(".fq-map-picker", overlay).append(clone);
    document.body.append(overlay);
    document.body.style.overflow = "hidden";
    $("#fq-map-facility").value = String(mapPickerSelection || "");
    $(".modal", overlay).focus();
  }
  function hydrateVerification() {
    const f = facility(currentReport.facilityId),
      impact = category(f.category)?.weight || 3;
    const impactNode = $(".impact-info span");
    if (impactNode)
      impactNode.innerHTML = `Bobot dampak kategori (D): <strong>${impact}</strong><small>${escape(category(f.category)?.name)}</small>`;
    $$(".decision-radios input").forEach(
      (input, i) => (input.value = i === 0 ? "valid" : "invalid"),
    );
    if (code === "ADM-04") {
      const values = params.has("report")
          ? currentReport.values || [5, impact, 3, 3]
          : [5, 4, 3, 3],
        score = calculate(values);
      const large = $(".result-score");
      if (large) large.textContent = number(score);
      const level = $(".verification-result>.priority");
      if (level) level.outerHTML = levelBadge(score);
      const id = $(".result-report-id");
      if (id) id.textContent = currentReport.id;
      $$(".calculation-table tbody tr").forEach((row, i) => {
        const strong = $("strong", row);
        if (strong) strong.textContent = values[i];
      });
    }
  }
  function verifyReport() {
    const values = [
      Number(value("Tingkat Kerusakan (K)") || 5),
      category(facility(currentReport.facilityId).category)?.weight || 3,
      3,
      3,
    ];
    changeStatus(
      currentReport,
      "Terverifikasi",
      "Laporan dinyatakan valid. Skor prioritas telah dihitung.",
      "Admin FST",
      {
        values,
        score: calculate(values),
        assigned: value("Tugaskan Petugas (opsional)") || undefined,
      },
    );
    if (save()) go(`ADM-04.html?report=${currentReport.id}`);
  }
  function rejectReport() {
    const reason = field("Alasan penolakan");
    if (!reason?.value.trim()) {
      setError(reason, "Alasan penolakan wajib diisi");
      return;
    }
    changeStatus(currentReport, "Ditolak", reason.value.trim(), "Admin FST", {
      rejection: reason.value.trim(),
      score: undefined,
    });
    if (save()) {
      notify("Laporan ditolak dan riwayat status tercatat", true);
      go("ADM-02.html");
    }
  }
  function initFacilityEditor() {
    if (code === "ADM-08b") {
      const f = facility(selectedFacility || 1);
      setValue("Nama Fasilitas", f.name);
      setValue("Kategori", f.category);
      setValue("Gedung", f.building);
      setValue("Deskripsi", f.description);
      setValue("Latitude", f.lat);
      setValue("Longitude", f.lng);
      setValue("Kondisi", f.condition);
    }
  }
  function saveFacility(form) {
    const name = value("Nama Fasilitas", form).trim(),
      cat = value("Kategori", form),
      building = value("Gedung", form);
    if (!name || !cat || !building) {
      setError(field("Nama Fasilitas", form), !name ? "Nama fasilitas wajib diisi" : "");
      notify("Lengkapi nama, kategori, dan gedung fasilitas.");
      return;
    }
    const old = code === "ADM-08b" ? facility(selectedFacility || 1) : null;
    const f = {
      ...(old || {}),
      id: old?.id || Math.max(...data.facilities.map((f) => f.id)) + 1,
      name,
      category: cat,
      building,
      description: value("Deskripsi", form),
      lat: value("Latitude", form) || "-1.610248",
      lng: value("Longitude", form) || "103.520641",
      condition: value("Kondisi", form) || "Baik",
      image: old?.image || (cat === "toilet" ? "/images/faucet.jpg" : "/images/classroom.jpg"),
      x: old?.x || 48,
      y: old?.y || 45,
    };
    const index = data.facilities.findIndex((item) => item.id === f.id);
    if (index >= 0) data.facilities[index] = f;
    else data.facilities.push(f);
    if (save()) {
      notify("Data fasilitas berhasil disimpan", true);
      go("ADM-07.html");
    }
  }
  function initCategoryEditor(overlay, id = "") {
    selectedCategory = id;
    const c = data.categories.find((c) => c.id === id);
    setValue("Nama Kategori", c?.name || "", overlay);
    setValue("Bobot Dampak (D)", String(c?.weight || 3), overlay);
    const heading = $(".modal-header .title", overlay);
    if (heading) heading.textContent = c ? "Edit Kategori" : "Tambah Kategori";
  }
  function saveCategory(form) {
    const input = field("Nama Kategori", form),
      name = input?.value.trim();
    if (!name) {
      setError(input, "Nama kategori wajib diisi");
      return;
    }
    const existing = data.categories.find((c) => c.id === selectedCategory);
    const record = {
      ...(existing || {}),
      id: existing?.id || `kategori-${Date.now()}`,
      name,
      weight: Number(value("Bobot Dampak (D)", form) || 3),
      description: existing?.description || "",
      icon: existing?.icon || "building",
    };
    const index = data.categories.findIndex((c) => c.id === record.id);
    if (index >= 0) data.categories[index] = record;
    else data.categories.push(record);
    if (!save()) return;
    const overlay = form.closest(".modal-backdrop");
    if (overlay?.dataset.transient) {
      closeModal(overlay);
      updateCategoryManagement();
      notify("Kategori berhasil disimpan");
    } else {
      notify("Kategori berhasil disimpan", true);
      go("ADM-09.html");
    }
  }
  function hydrateProgress() {
    const f = facility(currentReport.facilityId);
    const heading = $(".progress-layout>.panel>.panel-heading");
    if (heading) {
      $(".title", heading).textContent = f.name;
      const muted = $(".muted", heading);
      if (muted) muted.textContent = `${currentReport.id} · ${f.building}`;
      const status = $(".badge", heading);
      if (status) status.outerHTML = badge(currentReport.status);
    }
    const summary = $(".progress-summary");
    if (summary) {
      const img = $("img", summary);
      if (img) img.src = image(f.image);
      $(".title", summary).textContent = f.name;
      $("p.muted", summary).textContent = currentReport.description;
      const score = $(".task-score", summary);
      if (score)
        score.innerHTML = `<strong>${number(currentReport.score || 0)}</strong>${levelBadge(currentReport.score || 0)}`;
    }
    const complete = $(".completion-facility");
    if (complete) {
      $("strong", complete).textContent = f.name;
      $(".report-id", complete).textContent = currentReport.id;
    }
    setFinished(finished);
  }
  function setFinished(yes) {
    finished = yes;
    $$(".yes-no-toggle button").forEach((button) => {
      const active = (text(button) === "Ya") === yes;
      button.classList.toggle("button--primary", active);
      button.classList.toggle("button--ghost", !active);
      button.setAttribute("aria-pressed", String(active));
    });
    let fields = $(".completion-fields");
    if (yes && !fields) {
      fields = document.createElement("div");
      fields.className = "completion-fields";
      fields.innerHTML = `<div class="field"><label for="fq-after-condition">Kondisi fasilitas setelah perbaikan</label><div class="select-wrap"><select id="fq-after-condition"><option value="Baik">Baik</option></select></div></div><div class="completion-hint">${icon("check", 18)}Kondisi fasilitas akan diperbarui menjadi Baik.</div>`;
      $(".progress-toggle-row")?.after(fields);
    }
    if (fields) fields.hidden = !yes;
    const submit = $(".progress-layout form button[type=submit]");
    if (submit)
      submit.innerHTML = `${icon("check", 18)}${yes ? "Tandai Selesai" : "Simpan Progres"}`;
  }
  function saveProgress() {
    const note = field("Catatan progres");
    if (!note?.value.trim()) {
      setError(note, "Catatan progres wajib diisi");
      return;
    }
    changeStatus(
      currentReport,
      finished ? "Selesai" : "Dalam Penanganan",
      note.value.trim(),
      "Budi Santoso",
      { assigned: "Budi Santoso" },
    );
    if (finished) facility(currentReport.facilityId).condition = "Baik";
    if (!save()) return;
    if (finished) go(`PTG-04.html?report=${currentReport.id}`);
    else {
      notify("Status tetap Dalam Penanganan, catatan tersimpan", true);
      go("PTG-01.html");
    }
  }
  function updateByCode() {
    if (code === "PEL-02") updateFacilityList();
    if (code === "PEL-07" || code === "PEL-07b" || code === "ADM-02" || code === "ADM-05")
      updateReportList();
    if (code === "PEL-03" || code === "PEL-03b") updateMap();
    if (code === "ADM-06" || code === "KRD-02") updatePriorities();
    if (code === "ADM-07" || code === "ADM-08" || code === "ADM-08b") updateFacilityManagement();
    if (code === "ADM-09" || code === "ADM-09b") updateCategoryManagement();
    if (code === "PTG-01" || code === "PTG-01b") updateStaff();
    if (code === "KRD-01") updateCoordinator();
  }
  // Real anchors provide the base flow even when JavaScript is unavailable.
  document.addEventListener("click", (event) => {
    const anchor = event.target.closest("a[href]");
    if (anchor && !anchor.hasAttribute("download") && anchor.target !== "_blank") {
      const href = anchor.getAttribute("href");
      if (href === "#") {
        event.preventDefault();
        const section = {
          Beranda: "beranda",
          Fasilitas: "fasilitas",
          "Fasilitas Kampus": "fasilitas",
          "Cara Kerja": "cara-kerja",
          Prioritas: "prioritas",
          "Prioritas Perbaikan": "prioritas",
          Tentang: "tentang",
        }[text(anchor)];
        if (section) {
          document.getElementById(section)?.scrollIntoView({ behavior: "smooth" });
          $(".public-menu")?.classList.remove("is-open");
        }
      } else if (workspace) {
        event.preventDefault();
        go(href);
      }
    }
    const button = event.target.closest("button"),
      action = button?.dataset.action,
      aria = button?.getAttribute("aria-label") || "",
      label = text(button);
    if (action === "dismiss-toast") {
      button.closest(".fq-toast")?.remove();
      return;
    }
    if (action === "close-modal" || aria === "Tutup modal" || button?.closest(".modal-header")) {
      if (button) closeModal(button.closest(".modal-backdrop"));
      return;
    }
    if (action === "photo" || aria.startsWith("Perbesar foto bukti")) {
      photoModal(button.dataset.src || $("img", button)?.src);
      return;
    }
    if (action === "upload" || label.startsWith("Klik untuk unggah") || label === "Tambah Foto") {
      $("input[type=file]")?.click();
      return;
    }
    if (action === "remove-photo" || aria.startsWith("Hapus foto")) {
      const index = Number(button.dataset.photoIndex ?? aria.match(/\d+/)?.[0] - 1);
      photoList.splice(index, 1);
      renderPhotos();
      return;
    }
    if (action === "use-map-facility") {
      const id = $("#fq-map-facility")?.value;
      if (!id) {
        notify("Pilih fasilitas pada peta terlebih dahulu.");
        return;
      }
      const select = $('select[aria-label="Pilih fasilitas"]');
      select.value = id;
      formFacilityChanged(id);
      closeModal();
      return;
    }
    if (label === "Pilih dari peta") {
      openMapPicker();
      return;
    }
    if (aria === "Menu akun Aulia Rahman") {
      const area = button.closest(".avatar-area"),
        old = $(".avatar-dropdown", area);
      if (old) old.remove();
      else
        area.insertAdjacentHTML(
          "beforeend",
          `<div class="avatar-dropdown"><strong>Aulia Rahman</strong><span class="muted">Akun demo · Pelapor</span><a class="button button--ghost button--md" href="PUB-01.html">${icon("logout", 18)}Keluar</a></div>`,
        );
      return;
    }
    if (aria.includes("password")) {
      const input = $("input[autocomplete=current-password]");
      if (input) {
        input.type = input.type === "password" ? "text" : "password";
        button.setAttribute(
          "aria-label",
          input.type === "password" ? "Tampilkan password" : "Sembunyikan password",
        );
      }
      return;
    }
    if (aria === "Buka menu" || aria === "Tutup menu") {
      $(".public-menu")?.classList.toggle("is-open");
      return;
    }
    if (aria === "Menu navigasi") {
      $(".reporter-navbar>nav")?.classList.toggle("is-open");
      return;
    }
    if (aria === "Buka sidebar") {
      $(".dashboard-app")?.classList.toggle("sidebar-is-open");
      return;
    }
    if (aria === "Tutup informasi fasilitas") {
      mapSelection = null;
      updateMap();
      return;
    }
    if (button?.dataset.facility) {
      const id = Number(button.dataset.facility),
        picker = button.closest('[data-kind="map-picker"]');
      if (picker) {
        mapPickerSelection = id;
        $("#fq-map-facility").value = String(id);
      } else {
        mapSelection = mapSelection === id ? null : id;
        updateMap();
      }
      return;
    }
    if (aria === "Perbesar peta" || aria === "Perkecil peta" || aria === "Pusatkan peta kampus") {
      const map = button.closest(".campus-map"),
        artwork = $(".map-artwork", map),
        zoom = Number(map.dataset.zoom || 1);
      map.dataset.zoom = String(
        aria === "Pusatkan peta kampus"
          ? 1
          : Math.max(1, Math.min(1.8, zoom + (aria === "Perbesar peta" ? 0.2 : -0.2))),
      );
      artwork.style.transform = `scale(${map.dataset.zoom})`;
      return;
    }
    if (button?.dataset.pageNumber) {
      viewPage = Number(button.dataset.pageNumber);
      updateByCode();
      return;
    }
    if (button?.getAttribute("role") === "tab") {
      activeStatus = button.dataset.status || button.firstChild?.textContent.trim() || "Semua";
      viewPage = 1;
      updateReportList();
      return;
    }
    if (code.startsWith("ADM-03") && label === "Verifikasi & Hitung Prioritas") {
      verifyReport();
      return;
    }
    if (code.startsWith("ADM-03") && label === "Tolak Laporan") {
      rejectReport();
      return;
    }
    if (code === "ADM-06" && label === "Hitung Ulang Skor") {
      data.reports
        .filter((r) => r.score !== undefined)
        .forEach((r) => {
          const values = [...(r.values || [3, 3, 3, 3])];
          values[1] = category(facility(r.facilityId).category)?.weight || 3;
          r.values = values;
          r.score = calculate(values);
        });
      if (save()) {
        updatePriorities();
        notify("Skor diperbarui");
      }
      return;
    }
    if (
      (code === "ADM-09" || code === "ADM-09b") &&
      (label === "Tambah Kategori" || action === "edit-category")
    ) {
      const id = button.dataset.category || "";
      openModalFrom("ADM-09b.html", "category", (overlay) => initCategoryEditor(overlay, id));
      return;
    }
    if (code === "PTG-02" && label === "Ambil Tugas") {
      changeStatus(
        currentReport,
        "Dalam Penanganan",
        "Tugas diambil. Petugas mulai melakukan pemeriksaan dan perbaikan.",
        "Budi Santoso",
        { assigned: "Budi Santoso" },
      );
      facility(currentReport.facilityId).condition = "Dalam Perbaikan";
      if (save()) {
        notify("Status diubah menjadi Dalam Penanganan", true);
        go(`PTG-03a.html?report=${currentReport.id}`);
      }
      return;
    }
    if (button?.closest(".yes-no-toggle")) {
      setFinished(label === "Ya");
      return;
    }
    if (button?.closest(".modal-actions") && label === "Batal") {
      event.preventDefault();
      closeModal(button.closest(".modal-backdrop"));
      return;
    }
    if (code === "DS-01" && label === "Tampilkan Toast") {
      notify("Perubahan berhasil disimpan");
      return;
    }
    if (code === "DS-01" && label === "Buka Modal") {
      photoModal(new URL("images/campus.jpg", assets).href);
      return;
    }
    const row = event.target.closest("tr[data-href]");
    if (row && !anchor && !button) go(row.dataset.href);
    const overlay = event.target.classList.contains("modal-backdrop") ? event.target : null;
    if (overlay) closeModal(overlay);
    if (!event.target.closest(".avatar-area")) $(".avatar-dropdown")?.remove();
  });
  document.addEventListener("submit", (event) => {
    const form = event.target;
    event.preventDefault();
    if (form.closest(".topbar-search")) {
      const query = $("input", form)?.value || "";
      go(
        `${code.startsWith("ADM") ? "ADM-05" : code.startsWith("PTG") ? "PTG-01" : "KRD-01"}.html?q=${encodeURIComponent(query)}`,
      );
      return;
    }
    if (code === "PUB-02" || code === "PUB-02b") {
      const email = value("Email"),
        password = value("Password");
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) || password.length < 6) go("PUB-02b.html");
      else go("PEL-01.html");
      return;
    }
    if (form.closest('[data-kind="category"]') || code === "ADM-09b") {
      saveCategory(form);
      return;
    }
    if (code === "PEL-05" || code === "PEL-05b" || code === "PEL-05c") {
      submitReport();
      return;
    }
    if (code === "ADM-08" || code === "ADM-08b") {
      saveFacility(form);
      return;
    }
    if (code === "ADM-05b") {
      const status = value("Status berikutnya", form),
        note = value("Catatan penanganan", form).trim();
      if (!["Dalam Penanganan", "Selesai"].includes(status)) return;
      changeStatus(currentReport, status, note || "Status penanganan diperbarui.", "Admin FST");
      facility(currentReport.facilityId).condition =
        status === "Selesai" ? "Baik" : "Dalam Perbaikan";
      if (save()) {
        hydrateReport();
        notify("Perubahan status tersimpan dan riwayat diperbarui");
      }
      return;
    }
    if (code === "PTG-03a" || code === "PTG-03b") {
      saveProgress();
      return;
    }
  });
  document.addEventListener("input", (event) => {
    if (event.target.matches("input[type=search]") && !event.target.closest(".topbar-search")) {
      viewPage = 1;
      updateByCode();
    }
    if (event.target.matches('textarea[aria-label="Deskripsi kerusakan"]')) {
      const count = $(".character-counter");
      if (count) count.textContent = `${event.target.value.length}/1.000 karakter`;
      syncReportValidation();
    }
  });
  document.addEventListener("change", (event) => {
    const input = event.target;
    if (input.matches("input[type=file]")) {
      addFiles(input.files).catch(() => notify("Foto belum dapat dibaca. Silakan coba foto lain."));
      return;
    }
    if (input.matches("input[name=severity]")) {
      $$(".radio-card").forEach((card) =>
        card.classList.toggle("is-selected", $("input", card)?.checked),
      );
      syncReportValidation();
      return;
    }
    if (input.closest(".decision-radios") && input.matches("input[type=radio]")) {
      go(`${input.value === "valid" ? "ADM-03b" : "ADM-03c"}.html?report=${currentReport.id}`);
      return;
    }
    if (input.matches('select[aria-label="Pilih fasilitas"]')) {
      formFacilityChanged(input.value);
      syncReportValidation();
      return;
    }
    if (
      input.matches("select") &&
      input.closest(".filter-bar,.map-list-panel,.coordinator-filters")
    ) {
      viewPage = 1;
      updateByCode();
    }
  });
  document.addEventListener("dragover", (event) => {
    if (event.target.closest(".upload-dropzone")) {
      event.preventDefault();
      event.target.closest(".upload-dropzone").classList.add("is-dragging");
    }
  });
  document.addEventListener("dragleave", (event) =>
    event.target.closest(".upload-dropzone")?.classList.remove("is-dragging"),
  );
  document.addEventListener("drop", (event) => {
    const zone = event.target.closest(".upload-dropzone");
    if (zone) {
      event.preventDefault();
      zone.classList.remove("is-dragging");
      addFiles(event.dataTransfer.files).catch(() => notify("Foto belum dapat dibaca."));
    }
  });
  let dragging = null;
  const movePin = (event) => {
    if (!dragging) return;
    const map = dragging.closest(".campus-map"),
      rect = map.getBoundingClientRect(),
      zoom = Number(map.dataset.zoom || 1);
    const x = Math.max(
        8,
        Math.min(92, (((event.clientX - rect.left) / rect.width) * 100 - 50) / zoom + 50),
      ),
      y = Math.max(
        8,
        Math.min(92, (((event.clientY - rect.top) / rect.height) * 100 - 50) / zoom + 50),
      );
    dragging.style.left = x + "%";
    dragging.style.top = y + "%";
    setValue("Latitude", (-1.608 + y * -0.000055).toFixed(6));
    setValue("Longitude", (103.518 + x * 0.000055).toFixed(6));
  };
  document.addEventListener("pointerdown", (event) => {
    const pin = event.target.closest(".map-draggable-pin");
    if (pin) {
      dragging = pin;
      pin.setPointerCapture(event.pointerId);
      movePin(event);
    }
  });
  document.addEventListener("pointermove", movePin);
  document.addEventListener("pointerup", () => (dragging = null));
  document.addEventListener("keydown", (event) => {
    const modal = $(".modal-backdrop .modal");
    if (event.key === "Escape" && modal) {
      closeModal(modal.closest(".modal-backdrop"));
      return;
    }
    if (event.key === "Tab" && modal) {
      const nodes = $$(
          'a[href],button:not(:disabled),input:not([type=hidden]),select,textarea,[tabindex="0"]',
          modal,
        ),
        first = nodes[0],
        last = nodes.at(-1);
      if (
        event.shiftKey &&
        (document.activeElement === first || document.activeElement === modal)
      ) {
        event.preventDefault();
        last?.focus();
      } else if (!event.shiftKey && document.activeElement === last) {
        event.preventDefault();
        first?.focus();
      }
    }
    const pin = event.target.closest(".map-draggable-pin"),
      delta = { ArrowUp: [0, -2], ArrowDown: [0, 2], ArrowLeft: [-2, 0], ArrowRight: [2, 0] }[
        event.key
      ];
    if (pin && delta) {
      event.preventDefault();
      const x = Math.max(8, Math.min(92, parseFloat(pin.style.left || 50) + delta[0])),
        y = Math.max(8, Math.min(92, parseFloat(pin.style.top || 47) + delta[1]));
      pin.style.left = x + "%";
      pin.style.top = y + "%";
      setValue("Latitude", (-1.608 + y * -0.000055).toFixed(6));
      setValue("Longitude", (103.518 + x * 0.000055).toFixed(6));
    }
  });
  if (workspace) {
    window.addEventListener("message", (event) => {
      if (
        event.origin !== location.origin ||
        event.source !== parent ||
        event.data?.type !== "fq:highlight"
      )
        return;
      $$(".fq-layer-selected").forEach((node) => node.classList.remove("fq-layer-selected"));
      const node = $$("[data-layer-id]").find((node) => node.dataset.layerId === event.data.id);
      if (!node) return;
      node.classList.add("fq-layer-selected");
      node.scrollIntoView({ behavior: "smooth", block: "center" });
      $(".fq-inspector-label")?.remove();
      const label = document.createElement("div");
      label.className = "fq-inspector-label";
      label.textContent = node.dataset.layer;
      document.body.append(label);
    });
    document.addEventListener(
      "click",
      (event) => {
        if (!event.altKey) return;
        const node = event.target.closest("[data-layer-id]");
        if (node) {
          event.preventDefault();
          event.stopPropagation();
          parent.postMessage(
            { type: "fq:layer-selected", id: node.dataset.layerId },
            location.origin,
          );
        }
      },
      true,
    );
  }
  fillCategorySelects();
  const navCode = code.startsWith("PEL-")
    ? /^PEL-0[78]/.test(code)
      ? "PEL-07"
      : /^PEL-0[24]/.test(code)
        ? "PEL-02"
        : code.startsWith("PEL-03")
          ? "PEL-03"
          : code === "PEL-01"
            ? "PEL-01"
            : ""
    : code.startsWith("ADM-03") || code === "ADM-04"
      ? "ADM-02"
      : code === "ADM-05b"
        ? "ADM-05"
        : code.startsWith("ADM-08")
          ? "ADM-07"
          : code === "ADM-09b"
            ? "ADM-09"
            : code.startsWith("PTG-")
              ? code === "PTG-01b"
                ? "PTG-01b"
                : "PTG-01"
              : code;
  $$(".dashboard-sidebar>nav a,.reporter-navbar>nav a,.bottom-nav>a").forEach((anchor) => {
    const active = anchor.getAttribute("href")?.split("?")[0] === `${navCode}.html`;
    anchor.classList.toggle("is-active", active);
    if (active) anchor.setAttribute("aria-current", "page");
    else anchor.removeAttribute("aria-current");
  });
  const flow = params.get("flow");
  if (flow)
    $$(".demo-role-grid a").forEach((node) =>
      node.classList.toggle("fq-flow-role", text(node).toLowerCase().endsWith(flow)),
    );
  if (params.has("q")) {
    const input = $(".filter-bar input[type=search]");
    if (input) input.value = params.get("q");
  }
  if (code === "PEL-01") updateHome();
  if (code === "PEL-04") updateFacilityDetail();
  if (["PEL-05", "PEL-05b", "PEL-05c"].includes(code)) initReportForm();
  if (code === "PEL-06") hydrateConfirmation();
  if ($(".report-info-panel")) hydrateReport();
  if (code.startsWith("ADM-03") || code === "ADM-04") hydrateVerification();
  if (code === "ADM-01") updateAdminDashboard();
  if (code === "ADM-08" || code === "ADM-08b") initFacilityEditor();
  if (code === "ADM-09b") initCategoryEditor($(".modal-backdrop"), selectedCategory);
  if (code.startsWith("PTG-03") || code === "PTG-04") hydrateProgress();
  if (code === "PTG-02") {
    const button = $(".task-priority-card button");
    if (button && currentReport.status === "Dalam Penanganan") {
      const anchor = document.createElement("a");
      anchor.className = button.className;
      anchor.href = `PTG-03a.html?report=${currentReport.id}`;
      anchor.innerHTML = `Perbarui Progres ${icon("arrow", 18)}`;
      button.replaceWith(anchor);
    } else if (button && currentReport.status === "Selesai") button.outerHTML = badge("Selesai");
  }
  updateByCode();
  kpis();
  if ($(".modal-backdrop")) {
    document.body.style.overflow = "hidden";
    $(".modal")?.focus();
  }
  try {
    const message = sessionStorage.getItem("fq-html-toast");
    if (message) {
      sessionStorage.removeItem("fq-html-toast");
      notify(message);
    }
  } catch {}
  document.body.dataset.ready = "true";
  publishLayers();
  let layerFrame = 0;
  new MutationObserver(() => {
    cancelAnimationFrame(layerFrame);
    layerFrame = requestAnimationFrame(publishLayers);
  }).observe(document.body, { childList: true, subtree: true });
})();
