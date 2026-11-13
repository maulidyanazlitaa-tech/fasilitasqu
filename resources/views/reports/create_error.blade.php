@extends('layouts.fasilitasqu')

@section('title', 'PEL-05b Form — Validasi Gagal — FasilitasQu')
@section('page-code', 'PEL-05b')

@section('content')

    <!-- PEL-05b Form — Validasi Gagal — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-05b-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-05b Form Laporan Kerusakan — Validasi Gagal">
            <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PEL-05b-layer-4">
              <span><a class="text-link" href="PEL-01.html">Beranda</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path></svg>Laporkan Kerusakan</span>
            </div>
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-05b-layer-5">
              <div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Laporkan Kerusakan" data-layer-id="PEL-05b-layer-6">
                  Laporkan Kerusakan
                </h1>
                <p class="muted">
                  Ceritakan kerusakan yang kamu temukan. Laporanmu membantu kampus menjadi lebih
                  baik.
                </p>
              </div>
            </div>
            <div class="alert" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-exclamation-point lucide-alert-circle lucide-circle-alert" aria-hidden="true">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" x2="12" y1="8" y2="12"></line>
                <line x1="12" x2="12.01" y1="16" y2="16"></line></svg>Data belum lengkap. Periksa kembali isian Anda.
            </div>
            <form novalidate="" data-layer="Form" data-layer-id="PEL-05b-layer-7">
              <div class="form-layout">
                <div class="form-main panel" data-layer="Panel/Konten" data-layer-id="PEL-05b-layer-8">
                  <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05b-layer-9">
                    <div class="form-section-heading">
                      <span class="form-step">01</span>
                      <div>
                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Fasilitas" data-layer-id="PEL-05b-layer-10">
                          Fasilitas
                        </h4>
                        <p class="muted">Pilih fasilitas yang ingin dilaporkan.</p>
                      </div>
                    </div>
                    <div class="form-section-content">
                      <div class="facility-select-row">
                        <div class="field" data-layer="Form/Isian" data-layer-id="PEL-05b-layer-11">
                          <div class="select-wrap">
                            <select aria-label="Pilih fasilitas" aria-invalid="true" id="_r_v_" data-field="0">
                              <option value="" selected="">Pilih fasilitas kampus</option>
                              <option value="1">Toilet Gedung A Lt.2</option>
                              <option value="2">Kursi &amp; Meja Ruang B.204</option>
                              <option value="3">Wi-Fi Lab Komputer</option>
                              <option value="4">AC Ruang A.101</option>
                              <option value="5">Lampu Koridor Gedung C</option>
                              <option value="6">Proyektor Ruang B.101</option>
                              <option value="7">Toilet Gedung B Lt.1</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                              <path d="m6 9 6 6 6-6"></path>
                            </svg>
                          </div>
                        </div>
                        <button class="button button--outline button--md" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map" aria-hidden="true">
                            <path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path>
                            <path d="M15 5.764v15"></path>
                            <path d="M9 3.236v15"></path>
                          </svg>
                          Pilih dari peta
                        </button>
                      </div>
                      <span class="field-hint field-hint--error">Fasilitas wajib dipilih</span>
                    </div>
                  </section>
                  <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05b-layer-12">
                    <div class="form-section-heading">
                      <span class="form-step">02</span>
                      <div>
                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Deskripsi kerusakan" data-layer-id="PEL-05b-layer-13">
                          Deskripsi kerusakan
                        </h4>
                        <p class="muted">Jelaskan kondisi dan bagian yang mengalami kerusakan.</p>
                      </div>
                    </div>
                    <div class="form-section-content">
                      <div class="field" data-layer="Form/Isian" data-layer-id="PEL-05b-layer-14">
                        <textarea aria-label="Deskripsi kerusakan" placeholder="Contoh: Pintu toilet tidak bisa ditutup karena engselnya rusak..." rows="4" maxlength="1000" id="_r_10_" class="input-error" aria-invalid="true" aria-describedby="_r_10_-hint" data-field="1"></textarea><span id="_r_10_-hint" class="field-hint field-hint--error">Deskripsi wajib diisi</span>
                      </div>
                      <div class="character-counter">0/1.000 karakter</div>
                    </div>
                  </section>
                  <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05b-layer-15">
                    <div class="form-section-heading">
                      <span class="form-step">03</span>
                      <div>
                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Tingkat kerusakan" data-layer-id="PEL-05b-layer-16">
                          Tingkat kerusakan
                        </h4>
                        <p class="muted">Pilih berdasarkan kondisi yang kamu amati.</p>
                      </div>
                    </div>
                    <div class="form-section-content">
                      <div class="radio-cards radio-cards--error" data-layer="Form/Radio Card — RinganMasih dapat digunakan" data-layer-id="PEL-05b-layer-17">
                        <label class="radio-card"><input type="radio" value="Ringan" name="severity" data-field="2"><span class="radio-indicator"></span><span><strong>Ringan</strong><small>Masih dapat digunakan</small></span></label><label class="radio-card"><input type="radio" value="Sedang" name="severity" data-field="3"><span class="radio-indicator"></span><span><strong>Sedang</strong><small>Fungsi sebagian terganggu</small></span></label><label class="radio-card"><input type="radio" value="Berat" name="severity" data-field="4"><span class="radio-indicator"></span><span><strong>Berat</strong><small>Tidak dapat digunakan</small></span></label>
                      </div>
                      <span class="field-hint field-hint--error">Pilih tingkat kerusakan</span>
                    </div>
                  </section>
                  <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05b-layer-18">
                    <div class="form-section-heading">
                      <span class="form-step">04</span>
                      <div>
                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Foto bukti" data-layer-id="PEL-05b-layer-19">
                          Foto bukti
                        </h4>
                        <p class="muted">Tambahkan foto yang menunjukkan kerusakan dengan jelas.</p>
                      </div>
                    </div>
                    <div class="form-section-content">
                      <input class="visually-hidden" multiple="" accept="image/jpeg,image/png" aria-label="Unggah foto bukti" type="file" data-field="5" value="">
                      <div class="upload-dropzone has-error" data-layer="Form/Dropzone Foto" data-layer-id="PEL-05b-layer-20">
                        <span class="upload-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-upload lucide-upload-cloud" aria-hidden="true">
                            <path d="M12 13v8"></path>
                            <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                            <path d="m8 17 4-4 4 4"></path></svg></span><button class="button button--ghost button--md" type="button">
                          Klik untuk unggah
                          <span class="muted">atau tarik foto ke sini</span></button><span class="muted">Format JPG/PNG · Dapat mengunggah lebih dari satu foto</span>
                      </div>
                      <span class="field-hint field-hint--error">Minimal 1 foto diperlukan</span>
                    </div>
                  </section>
                  <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05b-layer-21">
                    <div class="form-section-heading">
                      <span class="form-step">05</span>
                      <div>
                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lokasi" data-layer-id="PEL-05b-layer-22">
                          Lokasi
                        </h4>
                        <p class="muted">Geser pin agar sesuai dengan lokasi kerusakan.</p>
                      </div>
                    </div>
                    <div class="form-section-content">
                      <div class="campus-map campus-map--mini campus-map--draggable" data-layer="Peta/Kanvas" data-layer-id="PEL-05b-layer-23">
                        <div class="map-artwork" style="transform: scale(1)">
                          <svg viewBox="0 0 1000 700" class="map-svg" aria-label="Peta ilustrasi Kampus Mendalo Universitas Jambi">
                            <defs>
                              <pattern id="map-grid-_r_11_" width="28" height="28" patternUnits="userSpaceOnUse">
                                <path d="M 28 0 L 0 0 0 28" class="map-grid-line" fill="none"></path>
                              </pattern>
                            </defs>
                            <rect width="1000" height="700" class="map-land"></rect>
                            <rect width="1000" height="700" fill="url(#map-grid-_r_11_)"></rect>
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
                            </g></svg><button class="map-pin map-pin--broken map-draggable-pin" aria-label="Geser pin lokasi kerusakan" style="left: 50%; top: 47%" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
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
                        <span class="map-drag-hint"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crosshair" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="22" x2="18" y1="12" y2="12"></line>
                            <line x1="6" x2="2" y1="12" y2="12"></line>
                            <line x1="12" x2="12" y1="6" y2="2"></line>
                            <line x1="12" x2="12" y1="22" y2="18"></line></svg>Geser pin ke lokasi kerusakan</span>
                        <div class="map-attribution">
                          Peta ilustrasi kampus · Bukan untuk navigasi
                        </div>
                      </div>
                      <div class="coordinates-row">
                        <div class="field" data-layer="Form/Isian — Latitude" data-layer-id="PEL-05b-layer-24">
                          <label for="_r_12_">Latitude</label>
                          <div class="input-wrap">
                            <input readonly="" id="_r_12_" class="" aria-invalid="false" value="-1.611052" data-field="6">
                          </div>
                        </div>
                        <div class="field" data-layer="Form/Isian — Longitude" data-layer-id="PEL-05b-layer-25">
                          <label for="_r_13_">Longitude</label>
                          <div class="input-wrap">
                            <input readonly="" id="_r_13_" class="" aria-invalid="false" value="103.521328" data-field="7">
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <aside class="form-aside" data-layer="Panel/Samping" data-layer-id="PEL-05b-layer-26">
                  <div class="panel form-summary" data-layer="Panel/Konten" data-layer-id="PEL-05b-layer-27">
                    <div class="panel-heading" data-layer="Panel/Judul — Ringkasan Fasilitas" data-layer-id="PEL-05b-layer-28">
                      <h4 class="title title--4" data-layer="Teks/Judul Kartu — Ringkasan Fasilitas" data-layer-id="PEL-05b-layer-29">
                        Ringkasan Fasilitas
                      </h4>
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                    </div>
                    <div class="form-summary-placeholder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                      <p>Pilih fasilitas untuk melihat<br>ringkasannya di sini.</p>
                    </div>
                  </div>
                  <div class="tips-card" data-layer="Card/Tips — Laporan yang baik, lebih cepat ditindaklanjuti." data-layer-id="PEL-05b-layer-30">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-question-mark lucide-help-circle lucide-circle-help" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                      <path d="M12 17h.01"></path>
                    </svg>
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Laporan yang baik, lebih cepat ditindaklanjuti." data-layer-id="PEL-05b-layer-31">
                      Laporan yang baik, lebih cepat ditindaklanjuti.
                    </h4>
                    <ul>
                      <li>Pastikan fasilitas dan lokasi sesuai.</li>
                      <li>Jelaskan kerusakan secara singkat dan jelas.</li>
                      <li>Gunakan foto yang terang dan fokus.</li>
                      <li>Hindari menyertakan data pribadi.</li>
                    </ul>
                  </div>
                  <p class="privacy-note">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                      <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                      <path d="m9 12 2 2 4-4"></path></svg>Laporan akan diperiksa oleh admin sebelum ditindaklanjuti.
                  </p>
                </aside>
              </div>
              <div class="form-bottom" data-layer="Form/Aksi" data-layer-id="PEL-05b-layer-32">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                    <path d="m9 12 2 2 4-4"></path></svg>Pastikan semua informasi sudah benar.</span>
                <div class="button-row">
                  <a class="button button--ghost button--md" href="PEL-01.html"> Batal </a><button class="button button--primary button--lg" type="submit">
                    Kirim Laporan
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send" aria-hidden="true">
                      <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                      <path d="m21.854 2.147-10.94 10.939"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
