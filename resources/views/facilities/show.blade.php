@extends('layouts.fasilitasqu')

@section('title', 'PEL-04 Detail Fasilitas — FasilitasQu')
@section('page-code', 'PEL-04')

@section('content')

    <!-- PEL-04 Detail Fasilitas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app" style="">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-04-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-04 Detail Fasilitas — Desktop / Mobile">
            <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PEL-04-layer-4">
              <span><a class="text-link" href="PEL-01.html">Beranda</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path></svg><a class="text-link" href="PEL-02.html">Fasilitas</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path></svg>Toilet Gedung A Lt.2</span>
            </div>
            <div class="facility-detail-layout">
              <div class="facility-detail-photo">
                <img alt="Toilet Gedung A Lt.2" src="../assets/images/faucet.jpg"><span class="photo-label">Foto ilustrasi fasilitas</span>
              </div>
              <div class="facility-detail-info">
                <div class="eyebrow">Toilet &amp; Saluran Air</div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Toilet Gedung A Lt.2" data-layer-id="PEL-04-layer-5">
                  Toilet Gedung A Lt.2
                </h1>
                <span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                <p class="muted">
                  Toilet bersama di lantai 2 Gedung A, di sisi timur dekat tangga utama.
                </p>
                <div class="info-list">
                  <div><span>Gedung</span><strong>Gedung A</strong></div>
                  <div><span>Kategori</span><strong>Toilet &amp; Saluran Air</strong></div>
                  <div><span>Koordinat</span><strong>-1.610248, 103.520641</strong></div>
                </div>
                <a class="button button--primary button--lg" href="PEL-05.html?facility=1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                  </svg>
                  Laporkan Kerusakan
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                    <path d="M7 7h10v10"></path>
                    <path d="M7 17 17 7"></path></svg></a>
              </div>
            </div>
            <div class="two-columns app-section">
              <section class="panel" data-layer="Panel/Konten" data-layer-id="PEL-04-layer-6">
                <div class="panel-heading" data-layer="Panel/Judul — Riwayat Laporan" data-layer-id="PEL-04-layer-7">
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Riwayat Laporan" data-layer-id="PEL-04-layer-8">
                    Riwayat Laporan
                  </h4>
                  <span class="subtle-count">1 laporan</span>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="PEL-04-layer-9">
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
                    </tbody>
                  </table>
                </div>
              </section>
              <section class="panel location-panel" data-layer="Panel/Konten" data-layer-id="PEL-04-layer-10">
                <div class="panel-heading" data-layer="Panel/Judul — Lokasi Fasilitas" data-layer-id="PEL-04-layer-11">
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lokasi Fasilitas" data-layer-id="PEL-04-layer-12">
                    Lokasi Fasilitas
                  </h4>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </div>
                <div class="campus-map campus-map--mini" data-layer="Peta/Kanvas" data-layer-id="PEL-04-layer-13">
                  <div class="map-artwork" style="transform: scale(1)">
                    <svg viewBox="0 0 1000 700" class="map-svg" aria-label="Peta ilustrasi Kampus Mendalo Universitas Jambi">
                      <defs>
                        <pattern id="map-grid-_r_p_" width="28" height="28" patternUnits="userSpaceOnUse">
                          <path d="M 28 0 L 0 0 0 28" class="map-grid-line" fill="none"></path>
                        </pattern>
                      </defs>
                      <rect width="1000" height="700" class="map-land"></rect>
                      <rect width="1000" height="700" fill="url(#map-grid-_r_p_)"></rect>
                      <g class="map-gardens">
                        <path d="M0 20H230V200H0Z"></path>
                        <path d="M720 0H1000V172H720Z"></path>
                        <path d="M0 510H200V700H0Z"></path>
                        <path d="M795 480H1000V700H795Z"></path>
                        <ellipse cx="490" cy="335" rx="56" ry="52"></ellipse>
                      </g>
                      <g class="map-road-border" fill="none">
                        <path d="M-80 585C200 580 180 150 520 165S800 240 1080 80"></path>
                        <path d="M-50 345H420Q490 345 560 380L1070 610"></path>
                        <path d="M530 -40V265Q530 320 540 420L560 760"></path>
                      </g>
                      <g class="map-roads" fill="none">
                        <path d="M-80 585C200 580 180 150 520 165S800 240 1080 80"></path>
                        <path d="M-50 345H420Q490 345 560 380L1070 610"></path>
                        <path d="M530 -40V265Q530 320 540 420L560 760"></path>
                      </g>
                      <g class="map-building">
                        <rect x="255" y="200" width="145" height="90" rx="8"></rect>
                        <rect x="275" y="410" width="140" height="72" rx="7"></rect>
                        <rect x="595" y="218" width="130" height="105" rx="8"></rect>
                        <rect x="605" y="435" width="110" height="76" rx="7"></rect>
                        <rect x="730" y="390" width="128" height="72" rx="7"></rect>
                        <rect x="374" y="530" width="116" height="81" rx="7"></rect>
                        <rect x="630" y="60" width="110" height="69" rx="6"></rect>
                        <rect x="85" y="210" width="105" height="72" rx="7"></rect>
                      </g>
                      <g class="map-building-roof">
                        <path d="M270 216H385V273H270Z"></path>
                        <path d="M610 233H710V308H610Z"></path>
                        <path d="M390 546H475V595H390Z"></path>
                      </g>
                      <g class="map-trees">
                        <circle cx="60" cy="40" r="8"></circle>
                        <circle cx="197" cy="137" r="9"></circle>
                        <circle cx="334" cy="234" r="10"></circle>
                        <circle cx="471" cy="331" r="11"></circle>
                        <circle cx="608" cy="428" r="12"></circle>
                        <circle cx="745" cy="525" r="8"></circle>
                        <circle cx="882" cy="622" r="9"></circle>
                        <circle cx="139" cy="109" r="10"></circle>
                        <circle cx="276" cy="206" r="11"></circle>
                        <circle cx="413" cy="303" r="12"></circle>
                        <circle cx="550" cy="400" r="8"></circle>
                        <circle cx="687" cy="497" r="9"></circle>
                        <circle cx="824" cy="594" r="10"></circle>
                        <circle cx="81" cy="81" r="11"></circle>
                        <circle cx="218" cy="178" r="12"></circle>
                        <circle cx="355" cy="275" r="8"></circle>
                        <circle cx="492" cy="372" r="9"></circle>
                        <circle cx="629" cy="469" r="10"></circle>
                        <circle cx="766" cy="566" r="11"></circle>
                        <circle cx="903" cy="53" r="12"></circle>
                        <circle cx="160" cy="150" r="8"></circle>
                        <circle cx="297" cy="247" r="9"></circle>
                        <circle cx="434" cy="344" r="10"></circle>
                        <circle cx="571" cy="441" r="11"></circle>
                        <circle cx="708" cy="538" r="12"></circle>
                        <circle cx="845" cy="635" r="8"></circle>
                        <circle cx="102" cy="122" r="9"></circle>
                        <circle cx="239" cy="219" r="10"></circle>
                      </g>
                      <g class="map-text">
                        <text x="320" y="311">Gedung A</text>
                        <text x="645" y="348">Gedung B</text>
                        <text x="775" y="485">Gedung C</text>
                        <text x="424" y="635">Laboratorium Komputer</text>
                        <text x="344" y="505">Perpustakaan</text>
                        <text x="650" y="52">Gedung Rektorat</text>
                      </g>
                      <g class="map-road-text">
                        <text x="80" y="336">Jl. Kampus Mendalo</text>
                        <text x="700" y="157" transform="rotate(-14 700 157)">
                          Jl. Lintas Kampus
                        </text>
                      </g></svg><span class="map-pin map-pin--broken" aria-label="Pilih Toilet Gedung A Lt.2" style="left: 35%; top: 35%"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></span>
                  </div>
                  <div class="map-location-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-complex lucide-building-2" aria-hidden="true">
                      <path d="M10 12h4"></path>
                      <path d="M10 8h4"></path>
                      <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                      <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                      <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path></svg><span>Kampus Mendalo</span>
                  </div>
                  <div class="map-controls">
                    <button class="button button--white button--sm" aria-label="Perbesar peta" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                      </svg></button><button class="button button--white button--sm" aria-label="Perkecil peta" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus" aria-hidden="true">
                        <path d="M5 12h14"></path>
                      </svg></button><button class="button button--white button--sm" aria-label="Pusatkan peta kampus" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-locate-fixed" aria-hidden="true">
                        <line x1="2" x2="5" y1="12" y2="12"></line>
                        <line x1="19" x2="22" y1="12" y2="12"></line>
                        <line x1="12" x2="12" y1="2" y2="5"></line>
                        <line x1="12" x2="12" y1="19" y2="22"></line>
                        <circle cx="12" cy="12" r="7"></circle>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>
                    </button>
                  </div>
                  <div class="map-attribution">Peta ilustrasi kampus · Bukan untuk navigasi</div>
                </div>
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                    <circle cx="12" cy="10" r="3"></circle></svg>Gedung A · Kampus Mendalo, Universitas Jambi
                </p>
              </section>
            </div>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
