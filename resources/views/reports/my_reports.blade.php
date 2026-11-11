@extends('layouts.fasilitasqu')

@section('title', 'PEL-07 Laporan Saya — FasilitasQu')
@section('page-code', 'PEL-07')

@section('content')

    <!-- PEL-07 Laporan Saya — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app" style="">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-07-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-07 Laporan Saya — Desktop / Mobile">
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-07-layer-4">
              <div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Laporan Saya" data-layer-id="PEL-07-layer-5">
                  Laporan Saya
                </h1>
                <p class="muted">
                  Setiap laporanmu adalah langkah kecil untuk kampus yang lebih nyaman.
                </p>
              </div>
              <div class="page-heading-actions">
                <a class="button button--primary button--md" href="PEL-05.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                  </svg>
                  Laporkan Kerusakan
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                    <path d="M7 7h10v10"></path>
                    <path d="M7 17 17 7"></path></svg></a>
              </div>
            </div>
            <div class="panel" data-layer="Panel/Konten" data-layer-id="PEL-07-layer-6">
              <div class="tabs" role="tablist" aria-label="Filter status laporan" data-layer="Navigasi/Tabs" data-layer-id="PEL-07-layer-7">
                <button role="tab" aria-selected="true" class="is-active" type="button">
                  Semua<span>8</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Menunggu Verifikasi<span>2</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Terverifikasi<span>3</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Dalam Penanganan<span>1</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Selesai<span>1</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Ditolak<span>1</span>
                </button>
              </div>
              <div class="panel-search">
                <div class="field search-field" data-layer="Form/Isian" data-layer-id="PEL-07-layer-8">
                  <div class="input-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                      <path d="m21 21-4.34-4.34"></path>
                      <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor atau deskripsi laporan..." placeholder="Cari nomor atau deskripsi laporan..." id="_r_19_" class="has-icon" aria-invalid="false" type="search" value="" data-field="0">
                  </div>
                </div>
              </div>
              <div class="desktop-table">
                <div class="table-scroll" data-layer="Tabel" data-layer-id="PEL-07-layer-9">
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th>No. Laporan</th>
                        <th>Fasilitas</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-right">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0001</span></td>
                        <td>
                          <strong>Toilet Gedung A Lt.2</strong><span class="table-sub">Keran bocor dan saluran tersumbat</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08.html?report=LP-2026-0001">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0002</span></td>
                        <td>
                          <strong>Kursi &amp; Meja Ruang B.204</strong><span class="table-sub">Kursi patah</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08.html?report=LP-2026-0002">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0003</span></td>
                        <td>
                          <strong>Wi-Fi Lab Komputer</strong><span class="table-sub">Sinyal tidak stabil</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08.html">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0004</span></td>
                        <td>
                          <strong>AC Ruang A.101</strong><span class="table-sub">AC tidak dingin</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                              <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08.html?report=LP-2026-0004">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0005</span></td>
                        <td>
                          <strong>Lampu Koridor Gedung C</strong><span class="table-sub">Lampu mati</span>
                        </td>
                        <td class="no-wrap">09 Nov 2026</td>
                        <td>
                          <span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                              <circle cx="12" cy="12" r="10"></circle>
                              <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08.html?report=LP-2026-0005">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="">
                        <td><span class="report-id">LP-2026-0006</span></td>
                        <td>
                          <strong>Proyektor Ruang B.101</strong><span class="table-sub">Proyektor tidak menyala</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--rejected"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                              <path d="M18 6 6 18"></path>
                              <path d="m6 6 12 12"></path></svg>Ditolak</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="PEL-08b.html">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="mobile-report-list">
                <article class="report-card" data-layer="Card/Laporan — Toilet Gedung A Lt.2" data-layer-id="PEL-07-layer-10">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0001</span><span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Toilet Gedung A Lt.2" data-layer-id="PEL-07-layer-11">
                    <a class="text-link" href="PEL-08.html?report=LP-2026-0001">Toilet Gedung A Lt.2</a>
                  </h4>
                  <p class="muted">Keran bocor dan saluran tersumbat</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="PEL-08.html?report=LP-2026-0001">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Kursi &amp; Meja Ruang B.204" data-layer-id="PEL-07-layer-12">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0002</span><span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Kursi &amp; Meja Ruang B.204" data-layer-id="PEL-07-layer-13">
                    <a class="text-link" href="PEL-08.html?report=LP-2026-0002">Kursi &amp; Meja Ruang B.204</a>
                  </h4>
                  <p class="muted">Kursi patah</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="PEL-08.html?report=LP-2026-0002">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Wi-Fi Lab Komputer" data-layer-id="PEL-07-layer-14">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0003</span><span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Wi-Fi Lab Komputer" data-layer-id="PEL-07-layer-15">
                    <a class="text-link" href="PEL-08.html">Wi-Fi Lab Komputer</a>
                  </h4>
                  <p class="muted">Sinyal tidak stabil</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="PEL-08.html">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — AC Ruang A.101" data-layer-id="PEL-07-layer-16">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0004</span><span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — AC Ruang A.101" data-layer-id="PEL-07-layer-17">
                    <a class="text-link" href="PEL-08.html?report=LP-2026-0004">AC Ruang A.101</a>
                  </h4>
                  <p class="muted">AC tidak dingin</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="PEL-08.html?report=LP-2026-0004">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Lampu Koridor Gedung C" data-layer-id="PEL-07-layer-18">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0005</span><span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lampu Koridor Gedung C" data-layer-id="PEL-07-layer-19">
                    <a class="text-link" href="PEL-08.html?report=LP-2026-0005">Lampu Koridor Gedung C</a>
                  </h4>
                  <p class="muted">Lampu mati</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>09 Nov 2026</span><a class="text-link" href="PEL-08.html?report=LP-2026-0005">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Proyektor Ruang B.101" data-layer-id="PEL-07-layer-20">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0006</span><span class="badge badge--rejected"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path></svg>Ditolak</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Proyektor Ruang B.101" data-layer-id="PEL-07-layer-21">
                    <a class="text-link" href="PEL-08b.html">Proyektor Ruang B.101</a>
                  </h4>
                  <p class="muted">Proyektor tidak menyala</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="PEL-08b.html">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
              </div>
              <div class="pagination" data-layer="Navigasi/Pagination" data-layer-id="PEL-07-layer-22">
                <span class="muted">Menampilkan 1–6 dari 8 data</span>
                <div>
                  <button class="button button--outline button--sm" aria-label="Halaman sebelumnya" disabled="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left" aria-hidden="true">
                      <path d="m15 18-6-6 6-6"></path>
                    </svg></button><button class="button button--primary button--sm" aria-label="Halaman 1" type="button">
                    1</button><button class="button button--ghost button--sm" aria-label="Halaman 2" type="button">
                    2</button><button class="button button--outline button--sm" aria-label="Halaman berikutnya" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
