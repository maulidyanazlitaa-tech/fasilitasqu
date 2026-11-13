@extends('layouts.fasilitasqu')

@section('title', 'ADM-08 Tambah Fasilitas — FasilitasQu')
@section('page-code', 'ADM-08')

@section('content')

    <!-- ADM-08 Tambah Fasilitas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-08-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-08 Form Tambah Fasilitas — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-08-layer-7">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Kelola Fasilitas" data-layer-id="ADM-08-layer-8">
                    Kelola Fasilitas
                  </h1>
                  <p class="muted">Jaga informasi dan kondisi fasilitas kampus tetap akurat.</p>
                </div>
                <div class="page-heading-actions">
                  <a class="button button--primary button--md" href="ADM-08.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                      <path d="M5 12h14"></path>
                      <path d="M12 5v14"></path>
                    </svg>
                    Tambah Fasilitas
                  </a>
                </div>
              </div>
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-08-layer-9">
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-08-layer-10">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-08-layer-11">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari fasilitas..." placeholder="Cari fasilitas..." id="_r_2d_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-08-layer-12">
                    <div class="select-wrap">
                      <select aria-label="Kategori" id="_r_2e_" data-field="2">
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
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-08-layer-13">
                    <div class="select-wrap">
                      <select aria-label="Gedung" id="_r_2f_" data-field="3">
                        <option value="" selected="">Semua Gedung</option>
                        <option value="Gedung A">Gedung A</option>
                        <option value="Gedung B">Gedung B</option>
                        <option value="Gedung C">Gedung C</option>
                        <option value="Laboratorium Komputer">Laboratorium Komputer</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-08-layer-14">
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th>Nama Fasilitas</th>
                        <th>Kategori</th>
                        <th>Gedung</th>
                        <th>Koordinat</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/faucet.jpg"><strong>Toilet Gedung A Lt.2</strong>
                          </div>
                        </td>
                        <td>Toilet &amp; Saluran Air</td>
                        <td class="no-wrap">Gedung A</td>
                        <td>
                          <span class="coordinate-value">-1.610248<br>103.520641</span>
                        </td>
                        <td>
                          <span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/classroom.jpg"><strong>Kursi &amp; Meja Ruang B.204</strong>
                          </div>
                        </td>
                        <td>Kursi &amp; Meja Kelas</td>
                        <td class="no-wrap">Gedung B</td>
                        <td>
                          <span class="coordinate-value">-1.611125<br>103.521282</span>
                        </td>
                        <td>
                          <span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/classroom.jpg"><strong>Wi-Fi Lab Komputer</strong>
                          </div>
                        </td>
                        <td>Jaringan Internet/Wi-Fi</td>
                        <td class="no-wrap">Laboratorium Komputer</td>
                        <td>
                          <span class="coordinate-value">-1.612250<br>103.520856</span>
                        </td>
                        <td>
                          <span class="badge condition condition--repair"><span class="badge-dot"></span>Dalam Perbaikan</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=3"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/classroom.jpg"><strong>AC Ruang A.101</strong>
                          </div>
                        </td>
                        <td>AC &amp; Pendingin Udara</td>
                        <td class="no-wrap">Gedung A</td>
                        <td>
                          <span class="coordinate-value">-1.610422<br>103.520522</span>
                        </td>
                        <td>
                          <span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=4"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/campus.jpg"><strong>Lampu Koridor Gedung C</strong>
                          </div>
                        </td>
                        <td>Lampu &amp; Kelistrikan</td>
                        <td class="no-wrap">Gedung C</td>
                        <td>
                          <span class="coordinate-value">-1.611380<br>103.522194</span>
                        </td>
                        <td>
                          <span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=5"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/classroom.jpg"><strong>Proyektor Ruang B.101</strong>
                          </div>
                        </td>
                        <td>Proyektor &amp; Perangkat Kelas</td>
                        <td class="no-wrap">Gedung B</td>
                        <td>
                          <span class="coordinate-value">-1.611492<br>103.521211</span>
                        </td>
                        <td>
                          <span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=6"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-facility">
                            <img alt="" src="../assets/images/faucet.jpg"><strong>Toilet Gedung B Lt.1</strong>
                          </div>
                        </td>
                        <td>Toilet &amp; Saluran Air</td>
                        <td class="no-wrap">Gedung B</td>
                        <td>
                          <span class="coordinate-value">-1.611052<br>103.521328</span>
                        </td>
                        <td>
                          <span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                        </td>
                        <td>
                          <a class="button button--outline button--sm" href="ADM-08b.html?facility=7"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-summary">7 fasilitas terdaftar</div>
              </div>
              <div class="modal-backdrop" data-layer="Overlay/Modal" data-layer-id="ADM-08-layer-15">
                <div tabindex="-1" class="modal modal--wide" role="dialog" aria-modal="true" aria-label="Tambah Fasilitas" data-layer="Modal/Konten" data-layer-id="ADM-08-layer-16">
                  <div class="modal-header" data-layer="Modal/Judul — Tambah Fasilitas" data-layer-id="ADM-08-layer-17">
                    <h3 class="title title--3" data-layer="Teks/Subjudul — Tambah Fasilitas" data-layer-id="ADM-08-layer-18">
                      Tambah Fasilitas
                    </h3>
                    <button class="button button--ghost button--sm" aria-label="Tutup modal" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <form class="stack-form" data-layer="Form" data-layer-id="ADM-08-layer-19">
                    <div class="field" data-layer="Form/Isian — Nama Fasilitas" data-layer-id="ADM-08-layer-20">
                      <label for="_r_2g_">Nama Fasilitas</label>
                      <div class="input-wrap">
                        <input placeholder="Contoh: Toilet Gedung A Lt.2" id="_r_2g_" class="" aria-invalid="false" value="" data-field="4">
                      </div>
                    </div>
                    <div class="two-inputs">
                      <div class="field" data-layer="Form/Isian — Kategori" data-layer-id="ADM-08-layer-21">
                        <label for="_r_2h_">Kategori</label>
                        <div class="select-wrap">
                          <select id="_r_2h_" data-field="5">
                            <option value="" selected="">Pilih kategori</option>
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
                      <div class="field" data-layer="Form/Isian — Gedung" data-layer-id="ADM-08-layer-22">
                        <label for="_r_2i_">Gedung</label>
                        <div class="select-wrap">
                          <select id="_r_2i_" data-field="6">
                            <option value="" selected="">Pilih gedung</option>
                            <option value="Gedung A">Gedung A</option>
                            <option value="Gedung B">Gedung B</option>
                            <option value="Gedung C">Gedung C</option>
                            <option value="Laboratorium Komputer">
                              Laboratorium Komputer
                            </option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="field" data-layer="Form/Isian — Deskripsi" data-layer-id="ADM-08-layer-23">
                      <label for="_r_2j_">Deskripsi</label><textarea rows="2" placeholder="Informasi singkat mengenai fasilitas..." id="_r_2j_" class="" aria-invalid="false" data-field="7"></textarea>
                    </div>
                    <div class="editor-map">
                      <div class="campus-map campus-map--mini campus-map--draggable" data-layer="Peta/Kanvas" data-layer-id="ADM-08-layer-24">
                        <div class="map-artwork" style="transform: scale(1)">
                          <svg viewBox="0 0 1000 700" class="map-svg" aria-label="Peta ilustrasi Kampus Mendalo Universitas Jambi">
                            <defs>
                              <pattern id="map-grid-_r_2k_" width="28" height="28" patternUnits="userSpaceOnUse">
                                <path d="M 28 0 L 0 0 0 28" class="map-grid-line" fill="none"></path>
                              </pattern>
                            </defs>
                            <rect width="1000" height="700" class="map-land"></rect>
                            <rect width="1000" height="700" fill="url(#map-grid-_r_2k_)"></rect>
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
                    </div>
                    <div class="two-inputs">
                      <div class="field" data-layer="Form/Isian — Latitude" data-layer-id="ADM-08-layer-25">
                        <label for="_r_2l_">Latitude</label>
                        <div class="input-wrap">
                          <input step="any" id="_r_2l_" class="" aria-invalid="false" type="number" value="-1.610248" data-field="8">
                        </div>
                      </div>
                      <div class="field" data-layer="Form/Isian — Longitude" data-layer-id="ADM-08-layer-26">
                        <label for="_r_2m_">Longitude</label>
                        <div class="input-wrap">
                          <input step="any" id="_r_2m_" class="" aria-invalid="false" type="number" value="103.520641" data-field="9">
                        </div>
                      </div>
                    </div>
                    <div class="field" data-layer="Form/Isian — Kondisi" data-layer-id="ADM-08-layer-27">
                      <label for="_r_2n_">Kondisi</label>
                      <div class="select-wrap">
                        <select id="_r_2n_" data-field="10">
                          <option value="Baik" selected="">Baik</option>
                          <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                          <option value="Rusak">Rusak</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="modal-actions">
                      <button class="button button--ghost button--md" type="button">Batal</button><button class="button button--primary button--md" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                          <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                        Simpan
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-admin')

      </div>
    </div>
  


@endsection
