@extends('layouts.fasilitasqu')

@section('title', 'ADM-09b Tambah Kategori — Modal — FasilitasQu')
@section('page-code', 'ADM-09b')

@section('content')

    <!-- ADM-09b Tambah Kategori — Modal — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app">
      
@include('layouts.partials.sidebar-admin')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-09b-layer-6">
          <div class="page-enter">
            <div data-screen="ADM-09b Tambah Kategori — Modal">
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-09b-layer-7">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Kelola Kategori" data-layer-id="ADM-09b-layer-8">
                    Kelola Kategori
                  </h1>
                  <p class="muted">
                    Atur kategori fasilitas dan bobot dampaknya dalam perhitungan prioritas.
                  </p>
                </div>
                <div class="page-heading-actions">
                  <button class="button button--primary button--md" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                      <path d="M5 12h14"></path>
                      <path d="M12 5v14"></path>
                    </svg>
                    Tambah Kategori
                  </button>
                </div>
              </div>
              <div class="category-weight-note">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info" aria-hidden="true">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M12 16v-4"></path>
                  <path d="M12 8h.01"></path>
                </svg>
                <p>
                  Bobot dampak (D) berkisar <strong>1–5</strong>. Semakin tinggi bobot, semakin
                  besar dampak kerusakan terhadap aktivitas kampus.
                </p>
              </div>
              <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-09b-layer-9">
                <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-09b-layer-10">
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th>Nama Kategori</th>
                        <th>Bobot Dampak (D)</th>
                        <th>Jumlah Fasilitas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>Toilet &amp; Saluran Air</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class="filled"></span><span class="filled"></span><strong>5</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>2 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>Kursi &amp; Meja Kelas</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class="filled"></span><span class=""></span><strong>4</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>1 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>Jaringan Internet/Wi-Fi</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class="filled"></span><span class=""></span><strong>4</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>1 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>AC &amp; Pendingin Udara</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class=""></span><span class=""></span><strong>3</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>1 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>Proyektor &amp; Perangkat Kelas</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class=""></span><span class=""></span><strong>3</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>1 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="table-person">
                            <span class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags" aria-hidden="true">
                                <path d="M13.172 2a2 2 0 0 1 1.414.586l6.71 6.71a2.4 2.4 0 0 1 0 3.408l-4.592 4.592a2.4 2.4 0 0 1-3.408 0l-6.71-6.71A2 2 0 0 1 6 9.172V3a1 1 0 0 1 1-1z"></path>
                                <path d="M2 7v6.172a2 2 0 0 0 .586 1.414l6.71 6.71a2.4 2.4 0 0 0 3.191.193"></path>
                                <circle cx="10.5" cy="6.5" r=".5" fill="currentColor"></circle></svg></span><strong>Lampu &amp; Kelistrikan</strong>
                          </div>
                        </td>
                        <td>
                          <div class="weight-meter">
                            <span class="filled"></span><span class="filled"></span><span class="filled"></span><span class=""></span><span class=""></span><strong>3</strong><span>/ 5</span>
                          </div>
                        </td>
                        <td>1 fasilitas</td>
                        <td>
                          <button class="button button--outline button--sm" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil" aria-hidden="true">
                              <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                              <path d="m15 5 4 4"></path>
                            </svg>
                            Edit
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-summary">6 kategori fasilitas</div>
              </div>
              <div class="modal-backdrop" data-layer="Overlay/Modal" data-layer-id="ADM-09b-layer-11">
                <div tabindex="-1" class="modal" role="dialog" aria-modal="true" aria-label="Tambah Kategori" data-layer="Modal/Konten" data-layer-id="ADM-09b-layer-12">
                  <div class="modal-header" data-layer="Modal/Judul — Tambah Kategori" data-layer-id="ADM-09b-layer-13">
                    <h3 class="title title--3" data-layer="Teks/Subjudul — Tambah Kategori" data-layer-id="ADM-09b-layer-14">
                      Tambah Kategori
                    </h3>
                    <button class="button button--ghost button--sm" aria-label="Tutup modal" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <form class="stack-form" data-layer="Form" data-layer-id="ADM-09b-layer-15">
                    <div class="field" data-layer="Form/Isian — Nama Kategori" data-layer-id="ADM-09b-layer-16">
                      <label for="_r_33_">Nama Kategori</label>
                      <div class="input-wrap">
                        <input placeholder="Masukkan nama kategori" id="_r_33_" class="" aria-invalid="false" value="" data-field="1">
                      </div>
                    </div>
                    <div class="field" data-layer="Form/Isian — Bobot Dampak (D)" data-layer-id="ADM-09b-layer-17">
                      <label for="_r_34_">Bobot Dampak (D)</label>
                      <div class="select-wrap">
                        <select id="_r_34_" data-field="2">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3" selected="">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </div>
                    </div>
                    <p class="muted small">
                      Bobot ini digunakan otomatis saat admin memverifikasi laporan.
                    </p>
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
