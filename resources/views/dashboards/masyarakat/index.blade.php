@extends('layouts.fasilitasqu')

@section('title', 'PEL-01 Beranda Pelapor — FasilitasQu')
@section('page-code', 'PEL-01')

@section('content')

    <!-- PEL-01 Beranda Pelapor — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="reporter-app">
@include('layouts.partials.navbar-pelapor')

      <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-01-layer-3">
        <div class="page-enter">
          <div data-screen="PEL-01 Beranda Pelapor — Desktop / Mobile">
            <div class="reporter-welcome">
              <div>
                <div class="eyebrow">RUANG PEDULI KAMPUS</div>
                <h1 class="title title--1" data-layer="Teks/Judul Utama — Halo, Aulia." data-layer-id="PEL-01-layer-4">
                  Halo, {{ auth()->user()->name }}<span class="greeting-dot">.</span>
                </h1>
                <p>Senang melihatmu kembali. Mari jaga fasilitas kampus bersama.</p>
              </div>
              <a class="button button--primary button--lg" href="{{ route('reports.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="M12 5v14"></path>
                </svg>
                Laporkan Kerusakan
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
            <div class="kpi-grid kpi-grid--3" data-layer="Grid/KPI" data-layer-id="PEL-01-layer-5">
              <div class="kpi-card kpi-card--accent" data-layer="Card/KPI" data-layer-id="PEL-01-layer-6">
                <div class="kpi-top">
                  <span>Menunggu Verifikasi</span>
                  <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 6v6h4"></path>
                    </svg>
                  </div>
                </div>
                <div class="kpi-value">{{ $pendingReports }}</div>
                <p>Laporanmu sedang menunggu pemeriksaan</p>
              </div>
              <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PEL-01-layer-7">
                <div class="kpi-top">
                  <span>Dalam Penanganan</span>
                  <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                      <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                    </svg>
                  </div>
                </div>
                <div class="kpi-value">{{ $inProgressReports }}</div>
                <p>Petugas sedang melakukan perbaikan</p>
              </div>
              <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PEL-01-layer-8">
                <div class="kpi-top">
                  <span>Selesai</span>
                  <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-check" aria-hidden="true">
                      <path d="M18 6 7 17l-5-5"></path>
                      <path d="m22 10-7.5 7.5L13 16"></path>
                    </svg>
                  </div>
                </div>
                <div class="kpi-value">{{ $completedReports }}</div>
                <p>Terima kasih sudah ikut peduli</p>
              </div>
            </div>
            <section class="app-section" data-layer="Section" data-layer-id="PEL-01-layer-9">
              <div class="section-bar">
                <div>
                  <h3 class="title title--3" data-layer="Teks/Subjudul — Laporan Terbaru" data-layer-id="PEL-01-layer-10">
                    Laporan Terbaru
                  </h3>
                  <p class="muted">Ikuti perkembangan laporan yang kamu kirimkan.</p>
                </div>
                <a class="text-link" href="{{ route('reports.index') }}">Lihat Semua<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg></a>
              </div>
              <div class="card-grid" data-layer="Grid/Kartu" data-layer-id="PEL-01-layer-11">
                <article class="report-card" data-layer="Card/Laporan — Lampu Koridor Gedung C" data-layer-id="PEL-01-layer-12">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0008</span><span class="badge badge--verified"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path></svg>Terverifikasi</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Lampu Koridor Gedung C" data-layer-id="PEL-01-layer-13">
                    <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08.html?report=LP-2026-0008') }}">Lampu Koridor Gedung C</a>
                  </h4>
                  <p class="muted">Lampu berkedip</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>03 Nov 2026</span><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08.html?report=LP-2026-0008') }}">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Toilet Gedung B Lt.1" data-layer-id="PEL-01-layer-14">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0007</span><span class="badge badge--waiting"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-3" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6h4"></path></svg>Menunggu Verifikasi</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Toilet Gedung B Lt.1" data-layer-id="PEL-01-layer-15">
                    <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08.html?report=LP-2026-0007') }}">Toilet Gedung B Lt.1</a>
                  </h4>
                  <p class="muted">Pintu rusak</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>09 Nov 2026</span><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08.html?report=LP-2026-0007') }}">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
                <article class="report-card" data-layer="Card/Laporan — Proyektor Ruang B.101" data-layer-id="PEL-01-layer-16">
                  <div class="report-card-top">
                    <span class="report-id">LP-2026-0006</span><span class="badge badge--rejected"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path></svg>Ditolak</span>
                  </div>
                  <h4 class="title title--4" data-layer="Teks/Judul Kartu — Proyektor Ruang B.101" data-layer-id="PEL-01-layer-17">
                    <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08b.html') }}">Proyektor Ruang B.101</a>
                  </h4>
                  <p class="muted">Proyektor tidak menyala</p>
                  <div class="report-card-footer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days" aria-hidden="true">
                        <path d="M8 2v3"></path>
                        <path d="M16 2v3"></path>
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M8 13h.01"></path>
                        <path d="M12 13h.01"></path>
                        <path d="M16 13h.01"></path>
                        <path d="M8 17h.01"></path>
                        <path d="M12 17h.01"></path>
                        <path d="M16 17h.01"></path></svg>07 Nov 2026</span><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-08b.html') }}">Lihat Detail
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path></svg></a>
                  </div>
                </article>
              </div>
            </section>
            <section class="app-section" data-layer="Section" data-layer-id="PEL-01-layer-18">
              <div class="section-bar">
                <div>
                  <h3 class="title title--3" data-layer="Teks/Subjudul — Fasilitas yang Perlu Perhatian" data-layer-id="PEL-01-layer-19">
                    Fasilitas yang Perlu Perhatian
                  </h3>
                  <p class="muted">Bantu kami mengenali kerusakan di sekitarmu.</p>
                </div>
                <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-02.html') }}">Lihat Fasilitas<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg></a>
              </div>
              <div class="card-grid" data-layer="Grid/Kartu" data-layer-id="PEL-01-layer-20">
                <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-01-layer-21">
                  <div class="facility-card-photo">
                    <img alt="Toilet Gedung A Lt.2" loading="lazy" src="../assets/images/faucet.jpg"><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                  </div>
                  <div class="facility-card-body">
                    <div class="facility-card-category">Toilet &amp; Saluran Air</div>
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Toilet Gedung A Lt.2" data-layer-id="PEL-01-layer-22">
                      <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-04.html') }}">Toilet Gedung A Lt.2</a>
                    </h4>
                    <p class="facility-card-location">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle></svg>Gedung A
                    </p>
                    <div class="facility-card-actions">
                      <a class="button button--outline button--sm" href="{{ asset('fasilitasqu/pages/PEL-04.html') }}">
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg> </a><a class="button button--primary button--sm" href="{{ route('reports.create', ['facility' => 1]) }}">
                        Laporkan
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                          <path d="M5 12h14"></path>
                          <path d="m12 5 7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </article>
                <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-01-layer-23">
                  <div class="facility-card-photo">
                    <img alt="Kursi &amp; Meja Ruang B.204" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--broken"><span class="badge-dot"></span>Rusak</span>
                  </div>
                  <div class="facility-card-body">
                    <div class="facility-card-category">Kursi &amp; Meja Kelas</div>
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Kursi &amp; Meja Ruang B.204" data-layer-id="PEL-01-layer-24">
                      <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-04.html?facility=2') }}">Kursi &amp; Meja Ruang B.204</a>
                    </h4>
                    <p class="facility-card-location">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle></svg>Gedung B
                    </p>
                    <div class="facility-card-actions">
                      <a class="button button--outline button--sm" href="{{ asset('fasilitasqu/pages/PEL-04.html?facility=2') }}">
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg> </a><a class="button button--primary button--sm" href="{{ route('reports.create', ['facility' => 2]) }}">
                        Laporkan
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                          <path d="M5 12h14"></path>
                          <path d="m12 5 7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </article>
                <article class="facility-card" data-layer="Card/Fasilitas" data-layer-id="PEL-01-layer-25">
                  <div class="facility-card-photo">
                    <img alt="Wi-Fi Lab Komputer" loading="lazy" src="../assets/images/classroom.jpg"><span class="badge condition condition--repair"><span class="badge-dot"></span>Dalam Perbaikan</span>
                  </div>
                  <div class="facility-card-body">
                    <div class="facility-card-category">Jaringan Internet/Wi-Fi</div>
                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Wi-Fi Lab Komputer" data-layer-id="PEL-01-layer-26">
                      <a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-04.html?facility=3') }}">Wi-Fi Lab Komputer</a>
                    </h4>
                    <p class="facility-card-location">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle></svg>Laboratorium Komputer
                    </p>
                    <div class="facility-card-actions">
                      <a class="button button--outline button--sm" href="{{ asset('fasilitasqu/pages/PEL-04.html?facility=3') }}">
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg> </a><a class="button button--primary button--sm" href="{{ route('reports.create', ['facility' => 3]) }}">
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
            </section>
          </div>
        </div>
      </main>
@include('layouts.partials.footer-pelapor')
@include('layouts.partials.navigasi-mobile')
    </div>
@endsection