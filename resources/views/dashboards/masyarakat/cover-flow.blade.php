@extends('layouts.fasilitasqu')

@section('title', 'COV-00 Cover & Flow — FasilitasQu')
@section('page-code', 'COV-00')

@section('content')

    <!-- COV-00 Cover & Flow — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="prototype-page" data-screen="00 Cover &amp; Flow">
      <header class="prototype-header" data-layer="Header" data-layer-id="COV-00-layer-1">
        <a class="text-link logo" href="PUB-01.html"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a><span>00 Cover &amp; Flow</span><a class="button button--outline button--sm" href="PUB-01.html">
          Buka prototype
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
            <path d="M7 7h10v10"></path>
            <path d="M7 17 17 7"></path></svg></a>
      </header>
      <div class="container">
        <section class="prototype-cover" data-layer="Cover" data-layer-id="COV-00-layer-2">
          <div>
            <div class="eyebrow">PROTOTYPE HIGH-FIDELITY · 2026</div>
            <h1 class="title title--1" data-layer="Teks/Judul Utama — FasilitasQu." data-layer-id="COV-00-layer-3">
              FasilitasQu<span class="hero-heading-period">.</span>
            </h1>
            <p>
              Platform Pelaporan Kerusakan dan Prioritas<br>Perbaikan Fasilitas Kampus Berbasis
              Web.
            </p>
            <span>Program Studi Informatika · Fakultas Sains dan Teknologi · Universitas Jambi</span>
          </div>
          <div class="cover-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
            </svg>
          </div>
        </section>
        <div class="prototype-tabs">
          <a class="text-link is-active" href="../index.html#alur"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid" aria-hidden="true">
              <rect width="7" height="7" x="3" y="3" rx="1"></rect>
              <rect width="7" height="7" x="14" y="3" rx="1"></rect>
              <rect width="7" height="7" x="14" y="14" rx="1"></rect>
              <rect width="7" height="7" x="3" y="14" rx="1"></rect></svg>00 Cover &amp; Flow</a><a class="text-link" href="DS-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml lucide-code-2" aria-hidden="true">
              <path d="m18 16 4-4-4-4"></path>
              <path d="m6 8-4 4 4 4"></path>
              <path d="m14.5 4-5 16"></path></svg>01 Design System</a>
        </div>
        <div class="section-bar">
          <div>
            <h3 class="title title--3" data-layer="Teks/Subjudul — Empat peran. Satu kepedulian." data-layer-id="COV-00-layer-4">
              Empat peran. Satu kepedulian.
            </h3>
            <p class="muted">Semua alur dimulai dari Landing Page → Login → pilihan peran demo.</p>
          </div>
          <div class="flow-legend">
            <span><i></i>Halaman</span><span><i class="overlay"></i>Overlay / state</span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path></svg>Navigasi</span>
          </div>
        </div>
        <div class="prototype-flows">
          <section class="flow-card" data-layer="Flow/Peran" data-layer-id="COV-00-layer-5">
            <div class="flow-card-header">
              <div>
                <span class="eyebrow">FLOW 1 — PELAPOR</span>
                <h4 class="title title--4" data-layer="Teks/Judul Kartu — Laporkan kerusakan dan pantau perkembangannya." data-layer-id="COV-00-layer-6">
                  Laporkan kerusakan dan pantau perkembangannya.
                </h4>
              </div>
              <a class="button button--outline button--sm" href="PUB-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
                  <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"></path>
                </svg>
                Mulai Flow 1
              </a>
            </div>
            <div class="flow-nodes">
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--0" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-hero"><span></span><span></span><span></span></div>
                    <div class="mini-cards"><i></i><i></i><i></i></div>
                  </div>
                  <span>PUB-01</span><strong>Landing Page</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--2" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-form"><span></span><i></i><i></i><i></i><span></span></div>
                  </div>
                  <span>PUB-02</span><strong>Login</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-01</span><strong>Beranda</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-02</span><strong>Fasilitas</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-04</span><strong>Detail Fasilitas</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-05</span><strong>Isi Laporan</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-06</span><strong>Terkirim</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PEL-08</span><strong>Pantau Status</strong>
                </button>
              </div>
            </div>
            <div class="flow-alternatives">
              <span>Cabang:</span><a class="text-link" href="PEL-05b.html">PEL-05b Validasi gagal</a><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                <path d="m9 18 6-6-6-6"></path></svg><a class="text-link" href="PEL-08b.html">PEL-08b Ditolak</a><a class="text-link" href="PEL-03.html">Peta fasilitas</a><a class="text-link" href="PEL-07b.html">Laporan kosong</a>
            </div>
          </section>
          <section class="flow-card" data-layer="Flow/Peran" data-layer-id="COV-00-layer-7">
            <div class="flow-card-header">
              <div>
                <span class="eyebrow">FLOW 2 — ADMIN</span>
                <h4 class="title title--4" data-layer="Teks/Judul Kartu — Verifikasi laporan dan kelola fasilitas kampus." data-layer-id="COV-00-layer-8">
                  Verifikasi laporan dan kelola fasilitas kampus.
                </h4>
              </div>
              <a class="button button--outline button--sm" href="PUB-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
                  <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"></path>
                </svg>
                Mulai Flow 2
              </a>
            </div>
            <div class="flow-nodes">
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--0" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-hero"><span></span><span></span><span></span></div>
                    <div class="mini-cards"><i></i><i></i><i></i></div>
                  </div>
                  <span>PUB-01</span><strong>Landing Page</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--2" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-form"><span></span><i></i><i></i><i></i><span></span></div>
                  </div>
                  <span>PUB-02</span><strong>Login</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-01</span><strong>Dashboard</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-02</span><strong>Antrian</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-03a</span><strong>Periksa Laporan</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-03b</span><strong>Verifikasi</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-04</span><strong>Hasil &amp; Skor</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>ADM-06</span><strong>Prioritas</strong>
                </button>
              </div>
            </div>
            <div class="flow-alternatives">
              <span>Cabang:</span><a class="text-link" href="ADM-03c.html">Tidak valid → Tolak laporan</a><a class="text-link" href="ADM-05b.html">Perbarui status</a><a class="text-link" href="ADM-07.html">Kelola fasilitas</a><a class="text-link" href="ADM-09.html">Kelola kategori</a>
            </div>
          </section>
          <section class="flow-card" data-layer="Flow/Peran" data-layer-id="COV-00-layer-9">
            <div class="flow-card-header">
              <div>
                <span class="eyebrow">FLOW 3 — PETUGAS</span>
                <h4 class="title title--4" data-layer="Teks/Judul Kartu — Tangani perbaikan sesuai urutan prioritas." data-layer-id="COV-00-layer-10">
                  Tangani perbaikan sesuai urutan prioritas.
                </h4>
              </div>
              <a class="button button--outline button--sm" href="PUB-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
                  <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"></path>
                </svg>
                Mulai Flow 3
              </a>
            </div>
            <div class="flow-nodes">
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--0" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-hero"><span></span><span></span><span></span></div>
                    <div class="mini-cards"><i></i><i></i><i></i></div>
                  </div>
                  <span>PUB-01</span><strong>Landing Page</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--2" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-form"><span></span><i></i><i></i><i></i><span></span></div>
                  </div>
                  <span>PUB-02</span><strong>Login</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PTG-01</span><strong>Daftar Tugas</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PTG-02</span><strong>Ambil Tugas</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PTG-03a</span><strong>Catat Progres</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PTG-03b</span><strong>Perbaikan Selesai</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node flow-node--state" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>PTG-04</span><strong>Konfirmasi</strong>
                </button>
              </div>
            </div>
            <div class="flow-alternatives">
              <span>Cabang:</span><a class="text-link" href="PTG-03a.html">Belum selesai → Simpan progres → Daftar tugas</a><a class="text-link" href="PTG-01b.html">Riwayat selesai</a>
            </div>
          </section>
          <section class="flow-card" data-layer="Flow/Peran" data-layer-id="COV-00-layer-11">
            <div class="flow-card-header">
              <div>
                <span class="eyebrow">FLOW 4 — KOORDINATOR</span>
                <h4 class="title title--4" data-layer="Teks/Judul Kartu — Pantau kondisi dan prioritas perbaikan kampus." data-layer-id="COV-00-layer-12">
                  Pantau kondisi dan prioritas perbaikan kampus.
                </h4>
              </div>
              <a class="button button--outline button--sm" href="PUB-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
                  <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"></path>
                </svg>
                Mulai Flow 4
              </a>
            </div>
            <div class="flow-nodes">
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--0" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-hero"><span></span><span></span><span></span></div>
                    <div class="mini-cards"><i></i><i></i><i></i></div>
                  </div>
                  <span>PUB-01</span><strong>Landing Page</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--2" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-form"><span></span><i></i><i></i><i></i><span></span></div>
                  </div>
                  <span>PUB-02</span><strong>Login</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>KRD-01</span><strong>Rekap Kondisi</strong></button><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right flow-arrow" aria-hidden="true">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </div>
              <div class="flow-node-wrap">
                <button class="flow-node" type="button">
                  <div class="mini-screen mini-screen--1" aria-hidden="true">
                    <div class="mini-nav"><span></span><span></span><span></span></div>
                    <div class="mini-sidebar"></div>
                    <div class="mini-content">
                      <span></span>
                      <div><i></i><i></i><i></i></div>
                      <span></span><span></span><span></span>
                    </div>
                  </div>
                  <span>KRD-02</span><strong>Lihat Prioritas</strong>
                </button>
              </div>
            </div>
            <div class="flow-alternatives">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true">
                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                <circle cx="12" cy="12" r="3"></circle></svg><span>Semua halaman hanya lihat. Tanpa tindakan ubah data.</span>
            </div>
          </section>
        </div>
        <section class="prototype-screen-index" data-layer="Indeks/Halaman — Indeks Halaman &amp; State" data-layer-id="COV-00-layer-13">
          <h3 class="title title--3" data-layer="Teks/Subjudul — Indeks Halaman &amp; State" data-layer-id="COV-00-layer-14">
            Indeks Halaman &amp; State
          </h3>
          <p class="muted">
            Buka setiap halaman dan variasi secara langsung. Halaman Publik dan Pelapor responsif
            hingga lebar 390 px.
          </p>
          <section data-layer="Section — 02 Publik &amp; Auth" data-layer-id="COV-00-layer-15">
            <h4 class="title title--4" data-layer="Teks/Judul Kartu — 02 Publik &amp; Auth" data-layer-id="COV-00-layer-16">
              02 Publik &amp; Auth
            </h4>
            <div class="screen-index-grid">
              <a class="text-link" href="PUB-01.html"><span>PUB-01</span><strong>Landing Page</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PUB-02.html"><span>PUB-02</span><strong>Login</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PUB-02b.html"><span>PUB-02b</span><strong>Login — Error</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
          </section>
          <section data-layer="Section — 03 Pelapor" data-layer-id="COV-00-layer-17">
            <h4 class="title title--4" data-layer="Teks/Judul Kartu — 03 Pelapor" data-layer-id="COV-00-layer-18">
              03 Pelapor
            </h4>
            <div class="screen-index-grid">
              <a class="text-link" href="PEL-01.html"><span>PEL-01</span><strong>Beranda Pelapor</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-02.html"><span>PEL-02</span><strong>Daftar Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-03.html"><span>PEL-03</span><strong>Peta Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-03b.html"><span>PEL-03b</span><strong>Peta — Pin Dipilih</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-04.html"><span>PEL-04</span><strong>Detail Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-05.html"><span>PEL-05</span><strong>Form Laporan Kerusakan</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-05b.html"><span>PEL-05b</span><strong>Form — Validasi Gagal</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-05c.html"><span>PEL-05c</span><strong>Form — Data Lengkap</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-06.html"><span>PEL-06</span><strong>Konfirmasi Laporan Terkirim</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-07.html"><span>PEL-07</span><strong>Laporan Saya</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-07b.html"><span>PEL-07b</span><strong>Laporan Saya — Kosong</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-08.html"><span>PEL-08</span><strong>Detail &amp; Status Laporan</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PEL-08b.html"><span>PEL-08b</span><strong>Detail Laporan — Ditolak</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
          </section>
          <section data-layer="Section — 04 Admin" data-layer-id="COV-00-layer-19">
            <h4 class="title title--4" data-layer="Teks/Judul Kartu — 04 Admin" data-layer-id="COV-00-layer-20">
              04 Admin
            </h4>
            <div class="screen-index-grid">
              <a class="text-link" href="ADM-01.html"><span>ADM-01</span><strong>Dashboard Admin</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-02.html"><span>ADM-02</span><strong>Antrian Verifikasi</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-03a.html"><span>ADM-03a</span><strong>Detail Verifikasi — Default</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-03b.html"><span>ADM-03b</span><strong>Detail Verifikasi — Valid</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-03c.html"><span>ADM-03c</span><strong>Detail Verifikasi — Tidak Valid</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-04.html"><span>ADM-04</span><strong>Hasil Verifikasi — Modal</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-05.html"><span>ADM-05</span><strong>Semua Laporan</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-05b.html"><span>ADM-05b</span><strong>Detail &amp; Perbarui Status</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-06.html"><span>ADM-06</span><strong>Daftar Prioritas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-07.html"><span>ADM-07</span><strong>Kelola Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-08.html"><span>ADM-08</span><strong>Tambah Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-08b.html"><span>ADM-08b</span><strong>Edit Fasilitas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-09.html"><span>ADM-09</span><strong>Kelola Kategori</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="ADM-09b.html"><span>ADM-09b</span><strong>Tambah Kategori — Modal</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
          </section>
          <section data-layer="Section — 05 Petugas" data-layer-id="COV-00-layer-21">
            <h4 class="title title--4" data-layer="Teks/Judul Kartu — 05 Petugas" data-layer-id="COV-00-layer-22">
              05 Petugas
            </h4>
            <div class="screen-index-grid">
              <a class="text-link" href="PTG-01.html"><span>PTG-01</span><strong>Dashboard Petugas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PTG-01b.html"><span>PTG-01b</span><strong>Riwayat Selesai</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PTG-02.html"><span>PTG-02</span><strong>Detail Tugas</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PTG-03a.html"><span>PTG-03a</span><strong>Perbarui Progres — Belum Selesai</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PTG-03b.html"><span>PTG-03b</span><strong>Perbarui Progres — Selesai</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="PTG-04.html"><span>PTG-04</span><strong>Konfirmasi Selesai — Modal</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
          </section>
          <section data-layer="Section — 06 Koordinator" data-layer-id="COV-00-layer-23">
            <h4 class="title title--4" data-layer="Teks/Judul Kartu — 06 Koordinator" data-layer-id="COV-00-layer-24">
              06 Koordinator
            </h4>
            <div class="screen-index-grid">
              <a class="text-link" href="KRD-01.html"><span>KRD-01</span><strong>Dashboard Rekap Kondisi</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a><a class="text-link" href="KRD-02.html"><span>KRD-02</span><strong>Prioritas Perbaikan</strong><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path></svg></a>
            </div>
          </section>
        </section>
      </div>
      <div class="prototype-footnote">
        Prototype web interaktif · Data demo tersimpan selama sesi ini · Transisi 300 ms Ease-Out
      </div>
    </div>
@endsection