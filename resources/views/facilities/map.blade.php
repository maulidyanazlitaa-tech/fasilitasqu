@extends('layouts.fasilitasqu')

@section('title', 'PEL-03 Peta Fasilitas — FasilitasQu')
@section('page-code', 'PEL-03')

@section('content')

    <!-- PEL-03 Peta Fasilitas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-03-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-03 Peta Fasilitas — Desktop / Mobile">
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-03-layer-4">
              <div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Peta Fasilitas" data-layer-id="PEL-03-layer-5">
                  Peta Fasilitas
                </h1>
                <p class="muted">Jelajahi lokasi dan kondisi fasilitas di kampus.</p>
              </div>
              <div class="page-heading-actions">
                <div class="view-toggle">
                  <a class="button button--ghost button--sm" href="PEL-02.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid" aria-hidden="true">
                      <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                      <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                    </svg>
                    Daftar </a><a class="button button--primary button--sm" href="PEL-03.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map" aria-hidden="true">
                      <path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path>
                      <path d="M15 5.764v15"></path>
                      <path d="M9 3.236v15"></path>
                    </svg>
                    Peta
                  </a>
                </div>
              </div>
            </div>
            <div class="map-layout">
              <aside class="map-list-panel" data-layer="Peta/Daftar Fasilitas" data-layer-id="PEL-03-layer-6">
                <div class="field search-field" data-layer="Form/Isian" data-layer-id="PEL-03-layer-7">
                  <div class="input-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                      <path d="m21 21-4.34-4.34"></path>
                      <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari fasilitas..." placeholder="Cari fasilitas..." id="_r_f_" class="has-icon" aria-invalid="false" type="search" value="" data-field="0">
                  </div>
                </div>
                <div class="field" data-layer="Form/Isian" data-layer-id="PEL-03-layer-8">
                  <div class="select-wrap">
                    <select aria-label="Kategori" id="_r_g_" data-field="1">
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
                <div class="map-filters-row">
                  <div class="field" data-layer="Form/Isian" data-layer-id="PEL-03-layer-9">
                    <div class="select-wrap">
                      <select aria-label="Gedung" id="_r_h_" data-field="2">
                        <option value="" selected="">Semua Gedung</option>
                        <option value="Gedung A">Gedung A</option>
                        <option value="Gedung B">Gedung B</option>
                        <option value="Gedung C">Gedung C</option>
                        <option value="Laboratorium Komputer">Laboratorium Komputer</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="PEL-03-layer-10">
                    <div class="select-wrap">
                      <select aria-label="Kondisi" id="_r_i_" data-field="3">
                        <option value="" selected="">Semua Kondisi</option>
                        <option value="Baik">Baik</option>
                        <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                        <option value="Rusak">Rusak</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="map-list-count">7 fasilitas di sekitar kampus</div>
                <div class="map-facility-list">
                  <button class="map-facility-item" data-facility="1" type="button">
                    <img alt="" src="../assets/images/faucet.jpg"><span><strong>Toilet Gedung A Lt.2</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung A</small><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="2" type="button">
                    <img alt="" src="../assets/images/classroom.jpg"><span><strong>Kursi &amp; Meja Ruang B.204</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung B</small><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="3" type="button">
                    <img alt="" src="../assets/images/classroom.jpg"><span><strong>Wi-Fi Lab Komputer</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Laboratorium Komputer</small><span class="badge condition condition--repair"><span class="badge-dot"></span>Dalam Perbaikan</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="4" type="button">
                    <img alt="" src="../assets/images/classroom.jpg"><span><strong>AC Ruang A.101</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung A</small><span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="5" type="button">
                    <img alt="" src="../assets/images/campus.jpg"><span><strong>Lampu Koridor Gedung C</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung C</small><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="6" type="button">
                    <img alt="" src="../assets/images/classroom.jpg"><span><strong>Proyektor Ruang B.101</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung B</small><span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg></button><button class="map-facility-item" data-facility="7" type="button">
                    <img alt="" src="../assets/images/faucet.jpg"><span><strong>Toilet Gedung B Lt.1</strong><small><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung B</small><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg>
                  </button>
                </div>
                <div class="map-legend">
                  <span><i></i>Baik</span><span><i class="broken"></i>Rusak / dalam perbaikan</span>
                </div>
              </aside>
              <div class="campus-map" data-layer="Peta/Kanvas" data-layer-id="PEL-03-layer-11">
                <div class="map-artwork" style="transform: scale(1)">
                  <svg viewBox="0 0 1000 700" class="map-svg" aria-label="Peta ilustrasi Kampus Mendalo Universitas Jambi">
                    <defs>
                      <pattern id="map-grid-_r_j_" width="28" height="28" patternUnits="userSpaceOnUse">
                        <path d="M 28 0 L 0 0 0 28" class="map-grid-line" fill="none"></path>
                      </pattern>
                    </defs>
                    <rect width="1000" height="700" class="map-land"></rect>
                    <rect width="1000" height="700" fill="url(#map-grid-_r_j_)"></rect>
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
                      <text x="700" y="157" transform="rotate(-14 700 157)">Jl. Lintas Kampus</text>
                    </g></svg><button class="map-pin map-pin--broken" aria-label="Pilih Toilet Gedung A Lt.2" data-facility="1" style="left: 35%; top: 35%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--broken" aria-label="Pilih Kursi &amp; Meja Ruang B.204" data-facility="2" style="left: 64%; top: 43%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--broken" aria-label="Pilih Wi-Fi Lab Komputer" data-facility="3" style="left: 45%; top: 69%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--good" aria-label="Pilih AC Ruang A.101" data-facility="4" style="left: 29%; top: 43%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--broken" aria-label="Pilih Lampu Koridor Gedung C" data-facility="5" style="left: 77%; top: 64%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--good" aria-label="Pilih Proyektor Ruang B.101" data-facility="6" style="left: 61%; top: 52%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span></button><button class="map-pin map-pin--broken" aria-label="Pilih Toilet Gedung B Lt.1" data-facility="7" style="left: 69%; top: 35%" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg><span class="map-pin-center"></span>
                  </button>
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
            </div>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
