@extends('layouts.fasilitasqu')

@section('title', 'ADM-07 Kelola Fasilitas — FasilitasQu')
@section('page-code', 'ADM-07')

@section('content')

    <!-- ADM-07 Kelola Fasilitas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app" style="">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-07-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-07 Kelola Fasilitas — Desktop">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-07-layer-7">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Kelola Fasilitas" data-layer-id="ADM-07-layer-8">
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
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-07-layer-9">
                <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-07-layer-10">
                  <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-11">
                    <div class="input-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari fasilitas..." placeholder="Cari fasilitas..." id="_r_2a_" class="has-icon" aria-invalid="false" type="search" value="" data-field="1">
                    </div>
                  </div>
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-12">
                    <div class="select-wrap">
                      <select aria-label="Kategori" id="_r_2b_" data-field="2">
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
                  <div class="field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-13">
                    <div class="select-wrap">
                      <select aria-label="Gedung" id="_r_2c_" data-field="3">
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
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-07-layer-14">
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
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-admin')

      </div>
    </div>
  


@endsection
