@extends('layouts.fasilitasqu')

@section('title', 'ADM-05 Semua Laporan — FasilitasQu')
@section('page-code', 'ADM-05')

@section('content')

    <!-- ADM-05 Semua Laporan — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app" style="">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-05-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-05 Semua Laporan — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-05-layer-7">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Semua Laporan" data-layer-id="ADM-05-layer-8">
                    Semua Laporan
                  </h1>
                  <p class="muted">Kelola dan pantau seluruh laporan kerusakan fasilitas kampus.</p>
                </div>
              </div>
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-05-layer-9">
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-05-layer-10">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-05-layer-11">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor, pelapor, atau fasilitas..." placeholder="Cari nomor, pelapor, atau fasilitas..." id="_r_1v_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-05-layer-12">
                    <div class="select-wrap">
                      <select aria-label="Filter status" id="_r_20_" data-field="2">
                        <option value="" selected="">Semua Status</option>
                        <option value="Menunggu Verifikasi">Menunggu Verifikasi</option>
                        <option value="Terverifikasi">Terverifikasi</option>
                        <option value="Dalam Penanganan">Dalam Penanganan</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Ditolak">Ditolak</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                  <span class="filter-total">8 laporan</span>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-05-layer-13">
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th>No. Laporan</th>
                        <th>Pelapor</th>
                        <th>Fasilitas</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-right">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0001</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
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
                          <a class="button button--outline button--sm" href="ADM-05b.html?report=LP-2026-0001">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0002</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
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
                          <a class="button button--outline button--sm" href="ADM-05b.html?report=LP-2026-0002">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0003</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
                        <td>
                          <strong>Wi-Fi Lab Komputer</strong><span class="table-sub">Sinyal tidak stabil</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="ADM-05b.html">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0004</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
                        <td>
                          <strong>AC Ruang A.101</strong><span class="table-sub">AC tidak dingin</span>
                        </td>
                        <td class="no-wrap">07 Nov 2026</td>
                        <td>
                          <span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                              <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                        </td>
                        <td class="text-right">
                          <a class="button button--outline button--sm" href="ADM-05b.html?report=LP-2026-0004">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0005</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
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
                          <a class="button button--outline button--sm" href="ADM-05b.html?report=LP-2026-0005">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                      <tr class="clickable-row">
                        <td><span class="report-id">LP-2026-0006</span></td>
                        <td>
                          <div class="table-person">
                            <span class="avatar avatar--small">AR</span>Aulia Rahman
                          </div>
                        </td>
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
                          <a class="button button--outline button--sm" href="ADM-05b.html?report=LP-2026-0006">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="pagination" data-layer="Navigasi/Pagination" data-layer-id="ADM-05-layer-14">
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
        
@include('layouts.partials.footer-admin')

      </div>
    </div>
  


@endsection
