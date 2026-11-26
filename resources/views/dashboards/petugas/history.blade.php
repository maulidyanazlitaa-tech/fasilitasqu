@extends('layouts.fasilitasqu')

@section('title', 'PTG-01b Riwayat Selesai — FasilitasQu')
@section('page-code', 'PTG-01b')

@section('content')

    <!-- PTG-01b Riwayat Selesai — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app">
@include('layouts.partials.sidebar-petugas')

      <div class="dashboard-body">
@include('layouts.partials.topbar-petugas')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="PTG-01b-layer-6">
          <div class="page-enter">
            <div data-screen="PTG-01b Riwayat Selesai — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PTG-01b-layer-7">
                <div>
                  <div class="eyebrow">RUANG KERJA PETUGAS</div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Riwayat Selesai" data-layer-id="PTG-01b-layer-8">
                    Riwayat Selesai
                  </h1>
                  <p class="muted">Daftar perbaikan fasilitas yang telah diselesaikan.</p>
                </div>
              </div>
              <div class="kpi-grid kpi-grid--3" data-layer="Grid/KPI" data-layer-id="PTG-01b-layer-9">
                <div class="kpi-card kpi-card--accent" data-layer="Card/KPI" data-layer-id="PTG-01b-layer-10">
                  <div class="kpi-top">
                    <span>Tugas Baru</span>
                    <div class="icon-box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-checks" aria-hidden="true">
                        <path d="M13 5h8"></path>
                        <path d="M13 12h8"></path>
                        <path d="M13 19h8"></path>
                        <path d="m3 17 2 2 4-4"></path>
                        <path d="m3 7 2 2 4-4"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="kpi-value">03</div>
                  <p>Siap diambil dan ditangani</p>
                </div>
                <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PTG-01b-layer-11">
                  <div class="kpi-top">
                    <span>Dalam Penanganan</span>
                    <div class="icon-box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="kpi-value">01</div>
                  <p>Perbaikan yang sedang dikerjakan</p>
                </div>
                <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PTG-01b-layer-12">
                  <div class="kpi-top">
                    <span>Selesai</span>
                    <div class="icon-box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-check" aria-hidden="true">
                        <path d="M18 6 7 17l-5-5"></path>
                        <path d="m22 10-7.5 7.5L13 16"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="kpi-value">01</div>
                  <p>Fasilitas sudah kembali berfungsi</p>
                </div>
              </div>
              <section class="panel app-section" data-layer="Panel/Konten" data-layer-id="PTG-01b-layer-13">
                <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="PTG-01b-layer-14">
                  <div>
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Tugas yang Telah Selesai" data-layer-id="PTG-01b-layer-15">
                      Tugas yang Telah Selesai
                    </h4>
                    <p class="muted">Riwayat penanganan tercatat dan dapat ditelusuri.</p>
                  </div>
                  <span class="subtle-count">1 tugas</span>
                </div>
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="PTG-01b-layer-16">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="PTG-01b-layer-17">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor laporan atau fasilitas..." placeholder="Cari nomor laporan atau fasilitas..." id="_r_37_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="PTG-01b-layer-18">
                  <table class="data-table task-table">
                    <thead>
                      <tr>
                        <th>Peringkat</th>
                        <th>Prioritas</th>
                        <th>Fasilitas</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="rank-badge">#1</span></td>
                        <td>
                          <div class="task-score">
                            <strong>3,10</strong><span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span>
                          </div>
                        </td>
                        <td>
                          <strong>AC Ruang A.101</strong><span class="table-sub">LP-2026-0004 · AC tidak dingin</span>
                        </td>
                        <td>
                          <span class="location-inline"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                              <circle cx="12" cy="10" r="3"></circle></svg>Gedung A</span>
                        </td>
                        <td>
                          <span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                              <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="{{ asset('fasilitasqu/pages/PTG-02.html?report=LP-2026-0004') }}">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-summary">1 tugas ditampilkan</div>
              </section>
            </div>
          </div>
        </main>
@include('layouts.partials.footer-petugas')
      </div>
    </div>
@endsection