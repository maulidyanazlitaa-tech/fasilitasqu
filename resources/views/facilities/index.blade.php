@extends('layouts.fasilitasqu')

@section('title', 'PEL-02 Daftar Fasilitas — FasilitasQu')
@section('page-code', 'PEL-02')

@section('content')

    <!-- PEL-02 Daftar Fasilitas — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app">
      
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-02-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-02 Daftar Fasilitas — Desktop / Mobile">
            <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-02-layer-4">
              <div>
                <div class="eyebrow">KENALI KAMPUSMU</div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Fasilitas Kampus" data-layer-id="PEL-02-layer-5">
                  Fasilitas Kampus
                </h1>
                <p class="muted">
                  Temukan fasilitas, lihat kondisinya, dan laporkan jika ada kerusakan.
                </p>
              </div>
              <div class="page-heading-actions">
                <div class="view-toggle">
                  <a class="button button--primary button--sm" href="PEL-02.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid" aria-hidden="true">
                      <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                      <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                    </svg>
                    Daftar </a><a class="button button--ghost button--sm" href="PEL-03.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map" aria-hidden="true">
                      <path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path>
                      <path d="M15 5.764v15"></path>
                      <path d="M9 3.236v15"></path>
                    </svg>
                    Peta
                  </a>
                </div>
              </div>
            </div>
            <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="PEL-02-layer-6">
              <div class="field search-field" data-layer="Form/Isian" data-layer-id="PEL-02-layer-7">
                <div class="input-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                    <path d="m21 21-4.34-4.34"></path>
                    <circle cx="11" cy="11" r="8"></circle></svg><input aria-label="Cari fasilitas..." placeholder="Cari fasilitas..." id="_r_b_" class="has-icon" aria-invalid="false" type="search" value="" data-field="0">
                </div>
              </div>
              <div class="field" data-layer="Form/Isian" data-layer-id="PEL-02-layer-8">
                <div class="select-wrap">
                  <select aria-label="Kategori fasilitas" id="_r_c_" data-field="1">
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
              <div class="field" data-layer="Form/Isian" data-layer-id="PEL-02-layer-9">
                <div class="select-wrap">
                  <select aria-label="Gedung" id="_r_d_" data-field="2">
                    <option value="" selected="">Semua Gedung</option>
                    <option value="Gedung A">Gedung A</option>
                    <option value="Gedung B">Gedung B</option>
                    <option value="Gedung C">Gedung C</option>
                    <option value="Laboratorium Komputer">Laboratorium Komputer</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </div>
              </div>
              <div class="field" data-layer="Form/Isian" data-layer-id="PEL-02-layer-10">
                <div class="select-wrap">
                  <select aria-label="Kondisi fasilitas" id="_r_e_" data-field="3">
                    <option value="" selected="">Semua Kondisi</option>
                    <option value="Baik">Baik</option>
                    <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                    <option value="Rusak">Rusak</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="results-label">7 fasilitas ditemukan</div>
            <div class="card-grid" data-layer="Grid/Kartu" data-layer-id="PEL-02-layer-11">
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-12">
                <div class="facility-card-photo">
                  <img alt="Toilet Gedung A Lt.2" loading="lazy" src="../assets/images/faucet.jpg"><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">Toilet &amp; Saluran Air</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Toilet Gedung A Lt.2" data-layer-id="PEL-02-layer-13">
                    <a class="text-link" href="PEL-04.html">Toilet Gedung A Lt.2</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Gedung A
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=1">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-14">
                <div class="facility-card-photo">
                  <img alt="Kursi &amp; Meja Ruang B.204" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">Kursi &amp; Meja Kelas</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Kursi &amp; Meja Ruang B.204" data-layer-id="PEL-02-layer-15">
                    <a class="text-link" href="PEL-04.html?facility=2">Kursi &amp; Meja Ruang B.204</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Gedung B
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html?facility=2">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=2">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-16">
                <div class="facility-card-photo">
                  <img alt="Wi-Fi Lab Komputer" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--repair"><span class="badge-dot"></span>Dalam Perbaikan</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">Jaringan Internet/Wi-Fi</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Wi-Fi Lab Komputer" data-layer-id="PEL-02-layer-17">
                    <a class="text-link" href="PEL-04.html?facility=3">Wi-Fi Lab Komputer</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Laboratorium Komputer
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html?facility=3">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=3">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-18">
                <div class="facility-card-photo">
                  <img alt="AC Ruang A.101" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">AC &amp; Pendingin Udara</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — AC Ruang A.101" data-layer-id="PEL-02-layer-19">
                    <a class="text-link" href="PEL-04.html?facility=4">AC Ruang A.101</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Gedung A
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html?facility=4">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=4">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-20">
                <div class="facility-card-photo">
                  <img alt="Lampu Koridor Gedung C" loading="lazy" src="../assets/images/campus.jpg"><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">Lampu &amp; Kelistrikan</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lampu Koridor Gedung C" data-layer-id="PEL-02-layer-21">
                    <a class="text-link" href="PEL-04.html?facility=5">Lampu Koridor Gedung C</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Gedung C
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html?facility=5">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=5">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
              <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-02-layer-22">
                <div class="facility-card-photo">
                  <img alt="Proyektor Ruang B.101" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--good"><span class="badge-dot"></span>Baik</span>
                </div>
                <div class="facility-card-body">
                  <div class="facility-card-category">Proyektor &amp; Perangkat Kelas</div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Proyektor Ruang B.101" data-layer-id="PEL-02-layer-23">
                    <a class="text-link" href="PEL-04.html?facility=6">Proyektor Ruang B.101</a>
                  </h4>
                  <p class="facility-card-location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                      <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                      <circle cx="12" cy="10" r="3"></circle></svg>Gedung B
                  </p>
                  <div class="facility-card-actions">
                    <a class="button button--outline button--sm" href="PEL-04.html?facility=6">
                      Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                      </svg> </a><a class="button button--primary button--sm" href="PEL-05.html?facility=6">
                      Laporkan
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </article>
            </div>
            <div class="pagination" data-layer="Navigasi/Pagination" data-layer-id="PEL-02-layer-24">
              <span class="muted">Menampilkan 1–6 dari 7 data</span>
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
      </main>
      
@include('layouts.partials.footer-pelapor')

      
@include('layouts.partials.navigasi-mobile')

    </div>
  


@endsection
