(() => {
  const icons = {
    grid: '<rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>',
    layers: '<path d="m12 3 10 5-10 5L2 8Z"/><path d="m2 12 10 5 10-5M2 16l10 5 10-5"/>',
    flow: '<rect x="2" y="3" width="7" height="6" rx="1.5"/><rect x="15" y="15" width="7" height="6" rx="1.5"/><path d="M5.5 9v9H15M9 6h9.5v9"/>',
    code: '<path d="m8 7-5 5 5 5m8-10 5 5-5 5m-3-13-2 20"/>',
    book: '<path d="M4 3h7a3 3 0 0 1 3 3v16a4 4 0 0 0-4-3H4Z"/><path d="M14 6a3 3 0 0 1 3-3h4v16h-3a4 4 0 0 0-4 3"/>',
    download: '<path d="M12 3v12m-5-5 5 5 5-5M4 15v5a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-5"/>',
    arrow: '<path d="M4 12h16m-6-6 6 6-6 6"/>',
    arrowup: '<path d="M7 17 17 7M7 7h10v10"/>',
    back: '<path d="M20 12H4m6-6-6 6 6 6"/>',
    chevron: '<path d="m9 5 7 7-7 7"/>',
    close: '<path d="m6 6 12 12M6 18 18 6"/>',
    search: '<circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/>',
    desktop: '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/>',
    mobile: '<rect x="6" y="2" width="12" height="20" rx="2"/><path d="M10 18h4"/>',
    play: '<path d="m8 4 12 8-12 8Z"/>',
    copy: '<rect x="8" y="8" width="13" height="13" rx="2"/><path d="M16 8V3H3v13h5"/>',
    info: '<circle cx="12" cy="12" r="9"/><path d="M12 11v6m0-10v1"/>',
    menu: '<path d="M4 6h16M4 12h16M4 18h16"/>',
    check: '<path d="m5 12 4 4L19 6"/>',
    file: '<path d="M14 2H5v20h14V7Z"/><path d="M14 2v5h5M8 12h8m-8 4h6"/>',
    shield: '<path d="M12 2 3 6v6c0 5 9 10 9 10s9-5 9-10V6Z"/><path d="m8 12 3 3 5-6"/>',
  };
  const icon = (name) =>
    `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${icons[name] || icons.file}</svg>`;
  const escape = (value) =>
    String(value ?? "").replace(
      /[&<>"']/g,
      (char) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" })[char],
    );
  const main = document.getElementById("workspace-main");
  const panel = document.getElementById("layer-panel");
  const guide = document.getElementById("laravel-guide");
  let pages = [],
    group = "semua",
    search = "",
    selected = null,
    currentMode = "gallery",
    contentMode = "preview",
    viewport = 1440,
    flowRole = "";
  let source = "",
    sourcePage = "",
    renderToken = 0;
  const flows = [
    {
      role: "pelapor",
      name: "Pelapor",
      person: "Aulia Rahman",
      description: "Laporkan kerusakan, lalu pantau sampai selesai.",
      nodes: ["PUB-01", "PUB-02", "PEL-01", "PEL-02", "PEL-04", "PEL-05", "PEL-06", "PEL-08"],
      branches: [
        ["PEL-03", "Peta fasilitas"],
        ["PEL-05b", "Validasi gagal"],
        ["PEL-07b", "Belum ada laporan"],
        ["PEL-08b", "Laporan ditolak"],
      ],
    },
    {
      role: "admin",
      name: "Admin",
      person: "Admin FST",
      description: "Verifikasi laporan dan tentukan prioritas perbaikan.",
      nodes: ["PUB-01", "PUB-02", "ADM-01", "ADM-02", "ADM-03a", "ADM-03b", "ADM-04", "ADM-06"],
      branches: [
        ["ADM-03c", "Tidak valid → Tolak laporan"],
        ["ADM-05b", "Perbarui status"],
        ["ADM-07", "Kelola fasilitas"],
        ["ADM-09", "Kelola kategori"],
      ],
    },
    {
      role: "petugas",
      name: "Petugas",
      person: "Budi Santoso",
      description: "Ambil tugas, catat progres, dan selesaikan perbaikan.",
      nodes: ["PUB-01", "PUB-02", "PTG-01", "PTG-02", "PTG-03a", "PTG-03b", "PTG-04"],
      branches: [
        ["PTG-03a", "Belum selesai → Simpan progres"],
        ["PTG-01b", "Riwayat selesai"],
      ],
    },
    {
      role: "koordinator",
      name: "Koordinator",
      person: "Koordinator Fasilitas",
      description: "Lihat rekap kondisi dan urutan prioritas. Tanpa mengubah data.",
      nodes: ["PUB-01", "PUB-02", "KRD-01", "KRD-02"],
      branches: [],
    },
  ];
  function hydrateIcons(root = document) {
    root
      .querySelectorAll("[data-icon]")
      .forEach((node) => (node.innerHTML = icon(node.dataset.icon)));
  }
  function toast(message) {
    const node = document.getElementById("workspace-toast");
    node.textContent = message;
    node.hidden = false;
    clearTimeout(toast.timer);
    toast.timer = setTimeout(() => (node.hidden = true), 3500);
  }
  function sidebar() {
    const groups = [...new Set(pages.map((page) => page.group))];
    document.getElementById("page-groups").innerHTML =
      `<a class="group-link ${group === "semua" ? "is-active" : ""}" href="#halaman"><span>${icon("grid")}</span>Semua Halaman<span class="group-count">${pages.length}</span></a>${groups.map((name) => `<a class="group-link ${group === name ? "is-active" : ""}" href="#grup/${encodeURIComponent(name)}"><span>${name.slice(0, 2)}</span>${escape(name.slice(3))}<span class="group-count">${pages.filter((page) => page.group === name).length}</span></a>`).join("")}`;
  }
  function setTabs(active) {
    document
      .querySelectorAll("[data-tab]")
      .forEach((node) => node.classList.toggle("is-active", node.dataset.tab === active));
  }
  const layerCount = (list) =>
    list.reduce((count, layer) => count + 1 + layerCount(layer.children), 0);
  function gallery() {
    currentMode = "gallery";
    selected = null;
    panel.hidden = true;
    document.body.classList.remove("is-running");
    main.className = "workspace-main";
    setTabs("halaman");
    const inGroup = pages.filter((page) => group === "semua" || page.group === group);
    const filtered = inGroup.filter((page) =>
      `${page.code} ${page.name} ${page.group}`.toLowerCase().includes(search.toLowerCase()),
    );
    const ordered = [...filtered].sort((a, b) =>
      a.code.startsWith("PUB") && !b.code.startsWith("PUB")
        ? -1
        : !a.code.startsWith("PUB") && b.code.startsWith("PUB")
          ? 1
          : 0,
    );
    main.innerHTML = `<section class="gallery-heading"><div><span class="eyebrow">FASILITASQU / PROTOTYPE HTML</span><h1>Jelajahi setiap halaman.</h1><p>Desain yang sama, kini dalam HTML terpisah. Pilih halaman untuk melihat layer, membaca kode, atau mencoba alur prototypenya.</p></div><div class="project-stats"><div><strong>${pages.length}</strong><span>Halaman & state</span></div><div><strong>04</strong><span>Alur pengguna</span></div></div></section><div class="workspace-notice"><span>${icon("code")}</span><p><strong>Siap untuk Laravel Blade.</strong> Setiap halaman memiliki file HTML sendiri dan aset bersama, tanpa React di prototype.</p><span class="notice-format">HTML · CSS · JAVASCRIPT · BLADE</span></div><div class="gallery-tools"><div><h2>${group === "semua" ? "Semua Halaman" : escape(group.slice(3))}</h2><span class="count-pill">${filtered.length} halaman</span></div><div class="gallery-search"><span>${icon("search")}</span><input type="search" id="page-search" placeholder="Cari nama atau kode halaman..." aria-label="Cari halaman prototype" value="${escape(search)}"></div></div><div class="page-grid">${ordered.length ? ordered.map((page) => `<a class="page-card" href="#halaman/${page.code}" aria-label="Buka ${escape(page.code + " " + page.name)}"><div class="page-thumbnail"><img src="${page.thumbnail}" alt="Pratinjau ${escape(page.name)}" loading="lazy"><div class="thumbnail-open"><span>${icon("layers")}Lihat halaman & layer</span></div></div><div class="page-card-info"><div class="page-code-row"><span class="page-code">${page.code}</span><span>${escape(page.group.slice(3))}</span></div><h3>${escape(page.name)}</h3><div class="page-card-footer"><span>${icon("layers")}${layerCount(page.layers)} layer</span><span>${page.code.startsWith("PEL") || page.code.startsWith("PUB") ? icon("desktop") + icon("mobile") : icon("desktop")}<b class="html-format">HTML</b></span></div></div></a>`).join("") : '<div class="gallery-empty"><strong>Halaman tidak ditemukan</strong><p>Coba nama, kode, atau kelompok halaman lain.</p></div>'}</div><div class="gallery-bottom"><span>${icon("shield")}Palet dan komponen sesuai sistem desain FasilitasQu.</span><span>Universitas Jambi · Prototype antarmuka · 2026</span></div>`;
    const input = document.getElementById("page-search");
    input.addEventListener("input", () => {
      const start = input.selectionStart;
      search = input.value;
      gallery();
      const next = document.getElementById("page-search");
      next.focus();
      try {
        next.setSelectionRange(start, start);
      } catch {}
    });
  }
  function treeMarkup(layers, depth = 0) {
    return `<ul>${layers.map((layer) => `<li><button class="layer-row" data-layer-id="${escape(layer.id)}" ${layer.children.length ? `aria-expanded="${depth < 1}"` : ""} title="${escape(layer.name)}"><span class="layer-chevron">${layer.children.length ? icon("chevron") : ""}</span><span>${escape(layer.name)}</span><small class="layer-type">${escape(layer.tag)}</small></button>${layer.children.length ? `<div class="layer-children" ${depth < 1 ? "" : "hidden"}>${treeMarkup(layer.children, depth + 1)}</div>` : ""}</li>`).join("")}</ul>`;
  }
  function inspector(page) {
    panel.hidden = false;
    panel.innerHTML = `<div class="layer-panel-heading"><div><strong>Layer Halaman</strong><span class="html-format">HTML</span></div><p>${escape(page.file)} · ${layerCount(page.layers)} layer</p></div><div class="layer-tree">${treeMarkup(page.layers)}</div><div class="layer-panel-footer"><div>${icon("info")}<p>Klik layer untuk menyorot elemen pada halaman. Nama layer juga tersedia sebagai atribut <code>data-layer</code> di HTML.</p></div><a href="${page.file}" download>${icon("download")}Unduh HTML halaman ini</a></div>`;
  }
  function scaleFrame() {
    const iframe = document.getElementById("page-frame"),
      wrap = document.querySelector(".frame-wrap"),
      canvas = document.querySelector(".preview-canvas"),
      label = document.querySelector(".frame-label");
    if (!iframe || !canvas) return;
    const available = Math.max(240, canvas.clientWidth - (viewport === 390 ? 42 : 40));
    const scale = Math.min(viewport === 390 ? 1 : 1, available / viewport);
    const height =
      viewport === 390
        ? 844
        : currentMode === "run"
          ? Math.max(900, Math.round((innerHeight - 240) / scale))
          : 1000;
    iframe.width = viewport;
    iframe.height = height;
    iframe.style.width = `${viewport}px`;
    iframe.style.height = `${height}px`;
    iframe.style.transform = `scale(${scale})`;
    wrap.style.width = `${viewport * scale}px`;
    wrap.style.height = `${height * scale}px`;
    wrap.classList.toggle("is-mobile", viewport === 390);
    if (label) label.style.width = `${viewport * scale}px`;
    const info = document.querySelector(".viewport-info");
    if (info) info.textContent = `${viewport} × ${height} · ${Math.round(scale * 100)}%`;
  }
  function showSource() {
    const target = document.querySelector(".code-text");
    if (target) target.textContent = sourcePage === selected?.code ? source : "Memuat kode HTML...";
  }
  function preview(page, run = false, extra = "") {
    currentMode = run ? "run" : "inspect";
    selected = page;
    group = page.group;
    document.body.classList.toggle("is-running", run);
    main.className = "workspace-main is-inspecting";
    setTabs(page.code === "DS-01" ? "desain" : "halaman");
    sidebar();
    if (run) panel.hidden = true;
    else inspector(page);
    const params = new URLSearchParams(extra);
    params.set("workspace", "1");
    if (flowRole) params.set("flow", flowRole);
    main.innerHTML = `<div class="preview-topline"><div class="preview-breadcrumb"><a href="#halaman">Semua Halaman</a>${icon("chevron")}<span>${escape(page.code)}</span>${icon("chevron")}<strong>${escape(page.name)}</strong></div><div class="preview-actions">${run ? `<a class="button button-outline" href="#alur">${icon("back")}Kembali ke Alur</a>` : `<button class="button button-outline layer-mobile-button" data-action="layers" style="display:none">${icon("layers")}Layer</button><a class="button button-outline" href="${page.file}" download>${icon("download")}HTML</a><a class="button button-primary" href="#jalankan/${page.code}">${icon("play")}Jalankan</a>`}<a class="button button-outline" href="${page.file}${extra ? "?" + escape(extra) : ""}" target="_blank" rel="noopener">${icon("arrowup")}Buka Terpisah</a></div></div><div class="preview-tools">${run ? `<div class="run-label"><span class="status-dot"></span>Prototype berjalan${flowRole ? ` · Alur ${escape(flows.find((flow) => flow.role === flowRole)?.name || "")}` : ""}</div>` : `<div class="segmented"><button data-view="preview" class="${contentMode === "preview" ? "is-active" : ""}">${icon("desktop")}Tampilan</button><button data-view="code" class="${contentMode === "code" ? "is-active" : ""}">${icon("code")}Kode HTML</button></div>`}<div class="device-tools"><div class="segmented"><button data-viewport="1440" class="${viewport === 1440 ? "is-active" : ""}">${icon("desktop")}Desktop</button><button data-viewport="390" class="${viewport === 390 ? "is-active" : ""}">${icon("mobile")}Mobile</button></div><span class="viewport-info"></span></div></div><div class="preview-canvas" ${!run && contentMode === "code" ? "hidden" : ""}><div class="frame-label"><strong>${escape(page.code)} ${escape(page.name)} — ${viewport === 390 ? "Mobile" : "Desktop"}</strong><span>HTML / ${viewport} PX</span></div><div class="frame-wrap"><iframe id="page-frame" title="${escape(page.code + " " + page.name)}" src="${page.file}?${params}" sandbox="allow-scripts allow-same-origin allow-forms allow-downloads allow-popups"></iframe></div></div><div class="code-source" ${run || contentMode !== "code" ? "hidden" : ""}><div class="code-toolbar"><span>${escape(page.file)} · HTML yang dapat diedit</span><button class="button button-outline" data-action="copy">${icon("copy")}Salin Kode</button></div><pre><code class="code-text"></code></pre></div>${run ? "" : `<p class="code-layer-note">Struktur HTML menjadi sumber tampilan. Di paket Laravel, halaman ini juga tersedia sebagai <code>resources/views/fasilitasqu/pages/${page.code.toLowerCase()}.blade.php</code>.</p>`}`;
    scaleFrame();
    if (!run) {
      const token = ++renderToken;
      fetch(page.file)
        .then((response) => {
          if (!response.ok) throw new Error();
          return response.text();
        })
        .then((text) => {
          if (token !== renderToken) return;
          source = text;
          sourcePage = page.code;
          showSource();
        })
        .catch(() => toast("Kode halaman belum dapat dimuat. Silakan coba lagi."));
    }
  }
  function flowView() {
    selected = null;
    currentMode = "flow";
    panel.hidden = true;
    group = "00 Cover & Flow";
    sidebar();
    main.className = "workspace-main";
    document.body.classList.remove("is-running");
    setTabs("alur");
    main.innerHTML = `<div class="flow-heading"><span class="eyebrow">00 COVER & FLOW / PETA ALUR</span><h1>Lihat gambaran besarnya.</h1><p>Empat peran, satu platform. Klik halaman untuk memeriksa layer, atau jalankan alur dari Landing Page.</p></div><div class="flow-legend"><span><i></i>Halaman</span><span><i class="state-key"></i>State / overlay</span><span>${icon("arrow")}Arah navigasi</span></div>${flows
      .map(
        (flow, i) =>
          `<section class="flow-card"><div class="flow-card-heading"><div><span class="eyebrow">FLOW ${i + 1} — ${flow.name.toUpperCase()}</span><h2>${flow.description}</h2><p>${flow.person}${flow.role === "koordinator" ? " · Akses hanya lihat" : ""}</p></div><a class="button button-primary" href="#jalankan/PUB-01?flow=${flow.role}">${icon("play")}Mulai Alur ${flow.name}</a></div><div class="flow-track">${flow.nodes
            .map((code, index) => {
              const page = pages.find((page) => page.code === code);
              return `<div class="flow-step-wrap"><a class="flow-step ${/[a-c]$/.test(code) || ["ADM-04", "PTG-04"].includes(code) ? "is-state" : ""}" href="#halaman/${code}"><img src="${page.thumbnail}" alt="" loading="lazy"><div><span>${code}</span><strong>${escape(page.name)}</strong></div></a>${index < flow.nodes.length - 1 ? `<span class="flow-arrow">${icon("arrow")}</span>` : ""}</div>`;
            })
            .join(
              "",
            )}</div><div class="flow-branches">${flow.branches.length ? `<span>Cabang alur:</span>${flow.branches.map(([code, name]) => `<a href="#halaman/${code}">${escape(name)}</a>`).join("")}` : `${icon("shield")}Seluruh halaman Koordinator hanya lihat, tanpa tombol ubah data.`}</div></section>`,
      )
      .join(
        "",
      )}<div class="flow-return-note">${icon("info")}Semua tombol Keluar menuju PUB-01. Pilih peran demo pada halaman Login untuk melanjutkan alur.</div>`;
  }
  function route() {
    const hash = location.hash.slice(1) || "halaman";
    const [path, query = ""] = hash.split("?");
    document.querySelector(".workspace-body").classList.remove("menu-open");
    panel.classList.remove("mobile-layer-open");
    if (path === "alur") return flowView();
    if (path.startsWith("grup/")) {
      group = decodeURIComponent(path.slice(5));
      search = "";
      sidebar();
      return gallery();
    }
    if (path.startsWith("halaman/") || path.startsWith("jalankan/")) {
      const page = pages.find((page) => page.code === path.split("/")[1]);
      if (page) {
        const params = new URLSearchParams(query);
        flowRole = params.get("flow") || flowRole;
        return preview(page, path.startsWith("jalankan/"), query);
      }
    }
    group = "semua";
    search = "";
    sidebar();
    gallery();
  }
  document.addEventListener("click", async (event) => {
    const action = event.target.closest("[data-action]")?.dataset.action;
    if (action === "guide") guide.showModal();
    if (action === "close-guide") guide.close();
    if (action === "menu") document.querySelector(".workspace-body").classList.toggle("menu-open");
    if (action === "layers") panel.classList.toggle("mobile-layer-open");
    if (action === "copy") {
      try {
        if (sourcePage !== selected?.code) throw new Error();
        await navigator.clipboard.writeText(source);
        toast("Kode HTML berhasil disalin");
      } catch {
        toast("Gunakan tombol HTML untuk mengunduh kode halaman ini.");
      }
    }
    const view = event.target.closest("[data-view]")?.dataset.view;
    if (view && selected) {
      contentMode = view;
      preview(selected, currentMode === "run");
      return;
    }
    const device = event.target.closest("[data-viewport]")?.dataset.viewport;
    if (device && selected) {
      viewport = Number(device);
      document
        .querySelectorAll("[data-viewport]")
        .forEach((node) => node.classList.toggle("is-active", node.dataset.viewport === device));
      scaleFrame();
      const label = document.querySelector(".frame-label");
      if (label)
        label.innerHTML = `<strong>${escape(selected.code + " " + selected.name)} — ${viewport === 390 ? "Mobile" : "Desktop"}</strong><span>HTML / ${viewport} PX</span>`;
    }
    const row = event.target.closest(".layer-row");
    if (row) {
      panel
        .querySelectorAll(".layer-row")
        .forEach((node) => node.classList.toggle("is-selected", node === row));
      if (row.hasAttribute("aria-expanded")) {
        const expanded = row.getAttribute("aria-expanded") === "true";
        row.setAttribute("aria-expanded", String(!expanded));
        row.nextElementSibling.hidden = expanded;
      }
      document
        .getElementById("page-frame")
        ?.contentWindow.postMessage(
          { type: "fq:highlight", id: row.dataset.layerId },
          location.origin,
        );
    }
  });
  guide.addEventListener("click", (event) => {
    if (event.target === guide) {
      const rect = guide.getBoundingClientRect();
      if (
        event.clientX < rect.left ||
        event.clientX > rect.right ||
        event.clientY < rect.top ||
        event.clientY > rect.bottom
      )
        guide.close();
    }
  });
  window.addEventListener("message", (event) => {
    if (
      event.origin !== location.origin ||
      event.source !== document.getElementById("page-frame")?.contentWindow
    )
      return;
    if (event.data?.type === "fq:layers" && selected?.code === event.data.page) {
      selected.layers = event.data.layers;
      if (currentMode !== "run") {
        const expanded = new Map(
          [...panel.querySelectorAll(".layer-row[aria-expanded]")].map((node) => [
            node.dataset.layerId,
            node.getAttribute("aria-expanded"),
          ]),
        );
        inspector(selected);
        panel.querySelectorAll(".layer-row[aria-expanded]").forEach((node) => {
          if (!expanded.has(node.dataset.layerId)) return;
          const open = expanded.get(node.dataset.layerId) === "true";
          node.setAttribute("aria-expanded", String(open));
          node.nextElementSibling.hidden = !open;
        });
      }
      return;
    }
    if (event.data?.type === "fq:navigate") {
      const url = new URL(event.data.href, location.href);
      const code = url.pathname.split("/").pop()?.replace(".html", "");
      if (!pages.some((page) => page.code === code)) {
        if (url.pathname.endsWith("/index.html")) location.hash = "alur";
        return;
      }
      const query = new URLSearchParams(url.search);
      query.delete("workspace");
      if (flowRole) query.set("flow", flowRole);
      location.hash = `${currentMode === "run" ? "jalankan" : "halaman"}/${code}${query.size ? "?" + query : ""}`;
    }
    if (event.data?.type === "fq:layer-selected") {
      const row = [...panel.querySelectorAll(".layer-row")].find(
        (node) => node.dataset.layerId === event.data.id,
      );
      panel
        .querySelectorAll(".layer-row")
        .forEach((node) => node.classList.toggle("is-selected", node === row));
      if (row) {
        let parent = row.parentElement;
        while (parent && parent !== panel) {
          if (parent.classList.contains("layer-children")) {
            parent.hidden = false;
            parent.previousElementSibling?.setAttribute("aria-expanded", "true");
          }
          parent = parent.parentElement;
        }
        row.scrollIntoView({ block: "nearest", behavior: "smooth" });
      }
    }
  });
  window.addEventListener("resize", scaleFrame);
  window.addEventListener("hashchange", route);
  hydrateIcons();
  fetch("manifest.json")
    .then((response) => {
      if (!response.ok) throw new Error();
      return response.json();
    })
    .then((data) => {
      pages = data;
      route();
      document.body.dataset.ready = "true";
    })
    .catch(() => {
      main.innerHTML =
        '<div class="project-error"><h1>Halaman belum dapat dimuat.</h1><p>Buka prototype melalui server web agar berkas HTML dan manifest dapat dibaca.</p></div>';
    });
})();
