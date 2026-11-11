@extends('layouts.fasilitasqu')

@section('title', 'ADM-06 Daftar Prioritas — FasilitasQu')
@section('page-code', 'ADM-06')

@section('content')

    <!-- ADM-06 Daftar Prioritas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app" style="">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-06-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-06 Daftar Prioritas — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-06-layer-7">
                <div>
                  <div class="eyebrow">PENANGANAN BERBASIS DATA</div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Prioritas Perbaikan" data-layer-id="ADM-06-layer-8">
                    Prioritas Perbaikan
                  </h1>
                  <p class="muted">
                    Urutan penanganan berdasarkan skor prioritas, dari yang tertinggi.
                  </p>
                </div>
                <div class="page-heading-actions">
                  <button class="button button--outline button--md" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw" aria-hidden="true">
                      <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                      <path d="M21 3v5h-5"></path>
                      <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                      <path d="M8 16H3v5"></path>
                    </svg>
                    Hitung Ulang Skor
                  </button>
                </div>
              </div>
              <div class="priority-explainer">
                <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered" aria-hidden="true">
                    <path d="M11 5h10"></path>
                    <path d="M11 12h10"></path>
                    <path d="M11 19h10"></path>
                    <path d="M4 4h1v5"></path>
                    <path d="M4 9h2"></path>
                    <path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path></svg></span>
                <div>
                  <strong>Skor = 0,346K + 0,325D + 0,200F + 0,129U</strong>
                  <p>K: Kerusakan · D: Dampak · F: Frekuensi laporan 30 hari · U: Umur laporan</p>
                </div>
                <div class="priority-legend">
                  <span class="badge priority priority--tinggi"><span class="badge-dot"></span>Tinggi</span><span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span><span class="badge priority priority--rendah"><span class="badge-dot"></span>Rendah</span>
                </div>
              </div>
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-06-layer-9">
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-06-layer-10">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-06-layer-11">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor atau fasilitas..." placeholder="Cari nomor atau fasilitas..." id="_r_27_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-06-layer-12">
                    <div class="select-wrap">
                      <select aria-label="Filter level prioritas" id="_r_28_" data-field="2">
                        <option value="" selected="">Semua Level</option>
                        <option value="Tinggi">Tinggi</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Rendah">Rendah</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-06-layer-13">
                    <div class="select-wrap">
                      <select aria-label="Filter kategori" id="_r_29_" data-field="3">
                        <option value="" selected="">Semua Kategori</option>
                        <option value="toilet">Toilet &amp; Saluran Air</option>
                        <option value="kursi">Kursi &amp; Meja Kelas</option>
                        <option value="wifi">Jaringan Internet/Wi-Fi</option>
                        <option value="ac">AC &amp; Pendingin Udara</option>
                        <option value="proyektor">Proyektor &amp; Perangkat Kelas</option>
                        <option value="lampu">Lampu &amp; Kelistrikan</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-06-layer-14">
                  <table class="data-table priority-table">
                    <thead>
                      <tr>
                        <th>Peringkat</th>
                        <th>No. Laporan</th>
                        <th>Fasilitas</th>
                        <th>Kategori</th>
                        <th>K</th>
                        <th>D</th>
                        <th>F</th>
                        <th>U</th>
                        <th>Skor</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Petugas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="rank-badge rank-badge--first">#1</span></td>
                        <td><span class="report-id">LP-2026-0001</span></td>
                        <td>
                          <strong>Toilet Gedung A Lt.2</strong><span class="table-sub">Gedung A</span>
                        </td>
                        <td>Toilet &amp; Saluran Air</td>
                        <td class="score-component">5</td>
                        <td class="score-component">5</td>
                        <td class="score-component">3</td>
                        <td class="score-component">2</td>
                        <td><span class="table-score">4,28</span></td>
                        <td>
                          <span class="badge priority priority--tinggi"><span class="badge-dot"></span>Tinggi</span>
                        </td>
                        <td>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                        </td>
                        <td class="no-wrap">Belum ditugaskan</td>
                      </tr>
                      <tr>
                        <td><span class="rank-badge">#2</span></td>
                        <td><span class="report-id">LP-2026-0002</span></td>
                        <td>
                          <strong>Kursi &amp; Meja Ruang B.204</strong><span class="table-sub">Gedung B</span>
                        </td>
                        <td>Kursi &amp; Meja Kelas</td>
                        <td class="score-component">5</td>
                        <td class="score-component">4</td>
                        <td class="score-component">4</td>
                        <td class="score-component">3</td>
                        <td><span class="table-score">4,25</span></td>
                        <td>
                          <span class="badge priority priority--tinggi"><span class="badge-dot"></span>Tinggi</span>
                        </td>
                        <td>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                        </td>
                        <td class="no-wrap">Belum ditugaskan</td>
                      </tr>
                      <tr>
                        <td><span class="rank-badge">#3</span></td>
                        <td><span class="report-id">LP-2026-0003</span></td>
                        <td>
                          <strong>Wi-Fi Lab Komputer</strong><span class="table-sub">Laboratorium Komputer</span>
                        </td>
                        <td>Jaringan Internet/Wi-Fi</td>
                        <td class="score-component">4</td>
                        <td class="score-component">4</td>
                        <td class="score-component">4</td>
                        <td class="score-component">3</td>
                        <td><span class="table-score">3,89</span></td>
                        <td>
                          <span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span>
                        </td>
                        <td>
                          <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                        </td>
                        <td class="no-wrap">Budi Santoso</td>
                      </tr>
                      <tr>
                        <td><span class="rank-badge">#4</span></td>
                        <td><span class="report-id">LP-2026-0004</span></td>
                        <td>
                          <strong>AC Ruang A.101</strong><span class="table-sub">Gedung A</span>
                        </td>
                        <td>AC &amp; Pendingin Udara</td>
                        <td class="score-component">3</td>
                        <td class="score-component">3</td>
                        <td class="score-component">4</td>
                        <td class="score-component">2</td>
                        <td><span class="table-score">3,10</span></td>
                        <td>
                          <span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span>
                        </td>
                        <td>
                          <span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                              <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                        </td>
                        <td class="no-wrap">Budi Santoso</td>
                      </tr>
                      <tr>
                        <td><span class="rank-badge">#5</span></td>
                        <td><span class="report-id">LP-2026-0008</span></td>
                        <td>
                          <strong>Lampu Koridor Gedung C</strong><span class="table-sub">Gedung C</span>
                        </td>
                        <td>Lampu &amp; Kelistrikan</td>
                        <td class="score-component">1</td>
                        <td class="score-component">3</td>
                        <td class="score-component">0</td>
                        <td class="score-component">6</td>
                        <td><span class="table-score">2,10</span></td>
                        <td>
                          <span class="badge priority priority--rendah"><span class="badge-dot"></span>Rendah</span>
                        </td>
                        <td>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                        </td>
                        <td class="no-wrap">Belum ditugaskan</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-summary">
                  <span>5 laporan terurut berdasarkan skor</span><span>Diperbarui 09 Nov 2026 · 13.30</span>
                </div>
              </div>
              <div class="priority-thresholds">
                <span><strong>Tinggi</strong> Skor ≥ 4,00</span><span><strong>Sedang</strong> Skor ≥ 2,50</span><span><strong>Rendah</strong> Skor &lt; 2,50</span>
              </div>
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-admin')

      </div>
    </div>
  


@endsection
