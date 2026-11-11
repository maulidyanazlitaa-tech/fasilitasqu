@extends('layouts.fasilitasqu')

@section('title', 'PEL-07b Laporan Saya — Kosong — FasilitasQu')
@section('page-code', 'PEL-07b')

@section('content')

    <!-- PEL-07b Laporan Saya — Kosong — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app" style="">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-07b-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-07b Laporan Saya — Kosong">
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-07b-layer-4">
              <div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Laporan Saya" data-layer-id="PEL-07b-layer-5">
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
            <div class="panel" data-layer="Panel/Konten" data-layer-id="PEL-07b-layer-6">
              <div class="tabs" role="tablist" aria-label="Filter status laporan" data-layer="Navigasi/Tabs" data-layer-id="PEL-07b-layer-7">
                <button role="tab" aria-selected="true" class="is-active" type="button">
                  Semua<span>0</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Menunggu Verifikasi<span>0</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Terverifikasi<span>0</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Dalam Penanganan<span>0</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Selesai<span>0</span></button><button role="tab" aria-selected="false" class="" type="button">
                  Ditolak<span>0</span>
                </button>
              </div>
              <div class="panel-search">
                <div class="field search-field" data-layer="Form/Isian" data-layer-id="PEL-07b-layer-8">
                  <div class="input-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                      <path d="m21 21-4.34-4.34"></path>
                      <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari nomor atau deskripsi laporan..." placeholder="Cari nomor atau deskripsi laporan..." id="_r_1a_" class="has-icon" aria-invalid="false" type="search" value="" data-field="0">
                  </div>
                </div>
              </div>
              <div class="empty-state">
                <div class="empty-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-inbox" aria-hidden="true">
                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                    <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                  </svg>
                </div>
                <h3 class="title title--3" data-layer="Teks/Subjudul — Belum ada laporan" data-layer-id="PEL-07b-layer-9">
                  Belum ada laporan
                </h3>
                <p class="muted">
                  Temukan kerusakan? Buat laporan pertamamu dan pantau perkembangannya.
                </p>
                <button class="button button--primary button--md" type="button">
                  Laporkan Kerusakan
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
