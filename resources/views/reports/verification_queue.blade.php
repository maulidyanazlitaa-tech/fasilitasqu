@extends('layouts.fasilitasqu')

@section('title', 'ADM-02 Antrian Verifikasi — FasilitasQu')
@section('page-code', 'ADM-02')

@section('content')

    <!-- ADM-02 Antrian Verifikasi — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-02-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-02 Antrian Verifikasi — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-02-layer-7">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Antrian Verifikasi" data-layer-id="ADM-02-layer-8">
                    Antrian Verifikasi
                  </h1>
                  <p class="muted">
                    Periksa kelengkapan dan validitas laporan sebelum ditindaklanjuti.
                  </p>
                </div>
                <div class="page-heading-actions">
                  <span class="queue-count"><span class="accent-dot"></span>2 laporan menunggu</span>
                </div>
              </div>
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-02-layer-9">
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-02-layer-10">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-02-layer-11">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor, pelapor, atau fasilitas..." placeholder="Cari nomor, pelapor, atau fasilitas..." id="_r_1j_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-02-layer-12">
                    <div class="select-wrap">
                      <select aria-label="Kategori" id="_r_1k_" data-field="2">
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
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-02-layer-13">
                    <div class="select-wrap">
                      <select aria-label="Tanggal laporan" id="_r_1l_" data-field="3">
                        <option value="" selected="">Semua Tanggal</option>
                        <option value="09 Nov 2026">09 Nov 2026</option>
                        <option value="08 Nov 2026">08 Nov 2026</option>
                        <option value="07 Nov 2026">07 Nov 2026</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-02-layer-14">
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th>No. Laporan</th>
                        <th>Pelapor</th>
                        <th>Fasilitas</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-right">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0005</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
                        <td>
                          <strong>Lampu Koridor Gedung C</strong><span class="table-sub">Gedung C</span>
                        </td>
                        <td>Lampu &amp; Kelistrikan</td>
                        <td class="no-wrap">09 Nov 2026</td>
                        <td>
                          <span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                              <circle cx="12" cy="12" r="10"></circle>
                              <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="ADM-03a.html">
                            Periksa
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0007</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
                        <td>
                          <strong>Toilet Gedung B Lt.1</strong><span class="table-sub">Gedung B</span>
                        </td>
                        <td>Toilet &amp; Saluran Air</td>
                        <td class="no-wrap">09 Nov 2026</td>
                        <td>
                          <span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                              <circle cx="12" cy="12" r="10"></circle>
                              <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="ADM-03a.html?report=LP-2026-0007">
                            Periksa
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-summary">2 laporan dalam antrian verifikasi</div>
              </div>
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-admin')

      </div>
    </div>
  


@endsection
