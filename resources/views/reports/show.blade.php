@extends('layouts.fasilitasqu')

@section('title', 'PEL-08 Detail & Status Laporan — FasilitasQu')
@section('page-code', 'PEL-08')

@section('content')

    <!-- PEL-08 Detail & Status Laporan — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app" style="">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-08-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-08 Detail &amp; Status Laporan — Desktop / Mobile">
            <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PEL-08-layer-4">
              <span><a class="text-link" href="PEL-01.html">Beranda</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path></svg><a class="text-link" href="PEL-07.html">Laporan Saya</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path></svg>LP-2026-0003</span>
            </div>
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-08-layer-5">
              <div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Detail &amp; Status Laporan" data-layer-id="PEL-08-layer-6">
                  Detail &amp; Status Laporan
                </h1>
                <p class="muted">Lihat informasi dan perkembangan penanganan laporanmu.</p>
              </div>
              <div class="page-heading-actions">
                <a class="button button--outline button--md" href="PEL-07.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left" aria-hidden="true">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                  </svg>
                  Kembali ke Laporan
                </a>
              </div>
            </div>
            <div class="report-detail-layout">
              <div>
                <section class="panel report-info-panel" data-layer="Panel/Konten" data-layer-id="PEL-08-layer-7">
                  <div class="panel-heading" data-layer="Panel/Judul — Informasi Laporan" data-layer-id="PEL-08-layer-8">
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Informasi Laporan" data-layer-id="PEL-08-layer-9">
                      Informasi Laporan
                    </h4>
                    <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                  </div>
                  <div class="panel-body">
                    <div class="report-facility-heading">
                      <span class="eyebrow">Jaringan Internet/Wi-Fi</span>
                      <h3 class="title title--3" data-layer="Teks/Subjudul — Wi-Fi Lab Komputer" data-layer-id="PEL-08-layer-10">
                        Wi-Fi Lab Komputer
                      </h3>
                      <span class="muted location-inline"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Laboratorium Komputer · Universitas Jambi</span>
                    </div>
                    <div class="info-list">
                      <div>
                        <span>No. Laporan</span><strong class="report-id">LP-2026-0003</strong>
                      </div>
                      <div><span>Tanggal laporan</span><strong>07 Nov 2026</strong></div>
                      <div><span>Tingkat kerusakan pelapor</span><strong>Sedang</strong></div>
                    </div>
                    <div class="description-block">
                      <strong>Deskripsi kerusakan</strong>
                      <p>Sinyal tidak stabil</p>
                    </div>
                    <div class="description-block">
                      <strong>Foto bukti</strong>
                      <div class="report-photo-gallery">
                        <button aria-label="Perbesar foto bukti 1" type="button">
                          <img alt="Bukti kerusakan Wi-Fi Lab Komputer, foto 1" src="../assets/images/classroom.jpg"><span><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path></svg></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="panel report-location-panel" data-layer="Panel/Konten" data-layer-id="PEL-08-layer-11">
                  <div class="panel-heading" data-layer="Panel/Judul — Lokasi Kerusakan" data-layer-id="PEL-08-layer-12">
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lokasi Kerusakan" data-layer-id="PEL-08-layer-13">
                      Lokasi Kerusakan
                    </h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </div>
                  <div class="campus-map campus-map--mini" data-layer="Peta/Kanvas" data-layer-id="PEL-08-layer-14">
                    <div class="map-artwork" style="transform: scale(1)">
                      <svg viewBox="0 0 1000 700" class="map-svg" aria-label="Peta ilustrasi Kampus Mendalo Universitas Jambi">
                        <defs>
                          <pattern id="map-grid-_r_1b_" width="28" height="28" patternUnits="userSpaceOnUse">
                            <path d="M 28 0 L 0 0 0 28" class="map-grid-line" fill="none"></path>
                          </pattern>
                        </defs>
                        <rect width="1000" height="700" class="map-land"></rect>
                        <rect width="1000" height="700" fill="url(#map-grid-_r_1b_)"></rect>
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
                        </g></svg><span class="map-pin map-pin--broken" aria-label="Pilih Wi-Fi Lab Komputer" style="left: 45%; top: 69%"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
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
                  <div class="location-coordinates">
                    <span>Laboratorium Komputer · Kampus Mendalo</span><span>-1.612250, 103.520856</span>
                  </div>
                </section>
              </div>
              <aside data-layer="Panel/Samping" data-layer-id="PEL-08-layer-15">
                <section class="panel" data-layer="Panel/Konten" data-layer-id="PEL-08-layer-16">
                  <div class="panel-heading" data-layer="Panel/Judul — Riwayat Status" data-layer-id="PEL-08-layer-17">
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Riwayat Status" data-layer-id="PEL-08-layer-18">
                      Riwayat Status
                    </h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 6v6h4"></path>
                    </svg>
                  </div>
                  <div class="panel-body">
                    <div class="timeline" data-layer="Timeline/Riwayat Status" data-layer-id="PEL-08-layer-19">
                      <div class="timeline-item">
                        <div class="timeline-dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                          </svg>
                        </div>
                        <div class="timeline-content">
                          <div class="timeline-date">07 Nov 2026 · 09.15</div>
                          <span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                              <circle cx="12" cy="12" r="10"></circle>
                              <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                          <p>Laporan diterima dan menunggu pemeriksaan admin.</p>
                          <span class="muted">oleh Aulia Rahman</span>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="timeline-dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                          </svg>
                        </div>
                        <div class="timeline-content">
                          <div class="timeline-date">08 Nov 2026 · 10.30</div>
                          <span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                              <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                          <div class="timeline-transition">
                            Menunggu Verifikasi
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                            Terverifikasi
                          </div>
                          <p>Laporan telah diperiksa dan dinyatakan valid.</p>
                          <span class="muted">oleh Admin FST</span>
                        </div>
                      </div>
                      <div class="timeline-item is-current">
                        <div class="timeline-dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 6v6h4"></path>
                          </svg>
                        </div>
                        <div class="timeline-content">
                          <div class="timeline-date">09 Nov 2026 · 08.00</div>
                          <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                          <div class="timeline-transition">
                            Terverifikasi
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                            Dalam Penanganan
                          </div>
                          <p>Petugas mulai memeriksa dan menangani kerusakan.</p>
                          <span class="muted">oleh Budi Santoso</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <div class="report-status-help">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                  <p>Setiap perubahan status tercatat agar proses penanganan tetap transparan.</p>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
