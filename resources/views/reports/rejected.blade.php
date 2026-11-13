@extends('layouts.fasilitasqu')

@section('title', 'PTG-03a Perbarui Progres — Belum Selesai — FasilitasQu')
@section('page-code', 'PTG-03a')

@section('content')

    <!-- PTG-03a Perbarui Progres — Belum Selesai — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app">
      
@include('layouts.partials.sidebar-petugas')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-petugas')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="PTG-03a-layer-6">
          <div class="page-enter">
            <div data-screen="PTG-03a Perbarui Progres — Desktop">
              <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PTG-03a-layer-7">
                <span><a class="text-link" href="PTG-01.html">Daftar Tugas</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path></svg><a class="text-link" href="PTG-02.html?report=LP-2026-0003">LP-2026-0003</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path></svg>Perbarui Progres</span>
              </div>
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PTG-03a-layer-8">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Perbarui Progres" data-layer-id="PTG-03a-layer-9">
                    Perbarui Progres
                  </h1>
                  <p class="muted">
                    Catat perkembangan perbaikan agar semua pihak mengetahui kondisinya.
                  </p>
                </div>
              </div>
              <div class="progress-layout">
                <section class="panel" data-layer="Panel/Konten" data-layer-id="PTG-03a-layer-10">
                  <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="PTG-03a-layer-11">
                    <div>
                      <h4 class="title title--4" data-layer="Teks/Judul Kartu — Wi-Fi Lab Komputer" data-layer-id="PTG-03a-layer-12">
                        Wi-Fi Lab Komputer
                      </h4>
                      <span class="muted">LP-2026-0003 · Laboratorium Komputer</span>
                    </div>
                    <span class="badge badge--progress"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg>Dalam Penanganan</span>
                  </div>
                  <form class="panel-body stack-form" data-layer="Form" data-layer-id="PTG-03a-layer-13">
                    <div class="field" data-layer="Form/Isian — Catatan progres" data-layer-id="PTG-03a-layer-14">
                      <label for="_r_39_">Catatan progres</label><textarea rows="5" placeholder="Tuliskan tindakan perbaikan yang telah dilakukan dan kondisi terkini..." id="_r_39_" class="" aria-invalid="false" data-field="1"></textarea>
                    </div>
                    <div class="progress-toggle-row">
                      <div>
                        <strong>Perbaikan selesai?</strong>
                        <p class="muted">Aktifkan jika fasilitas sudah berfungsi dengan baik.</p>
                      </div>
                      <div class="yes-no-toggle">
                        <button class="button button--primary button--sm" type="button" aria-pressed="true">
                          Tidak</button><button class="button button--ghost button--sm" type="button" aria-pressed="false">
                          Ya
                        </button>
                      </div>
                    </div>
                    <div class="form-bottom form-bottom--inside" data-layer="Form/Aksi" data-layer-id="PTG-03a-layer-15">
                      <a class="button button--ghost button--md" href="PTG-01.html"> Batal </a><button class="button button--primary button--md" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                          <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                        Simpan Progres
                      </button>
                    </div>
                  </form>
                </section>
                <aside data-layer="Panel/Samping" data-layer-id="PTG-03a-layer-16">
                  <div class="panel progress-summary" data-layer="Panel/Konten" data-layer-id="PTG-03a-layer-17">
                    <img alt="Wi-Fi Lab Komputer" src="../assets/images/classroom.jpg">
                    <div class="panel-body">
                      <div class="eyebrow">RINGKASAN TUGAS</div>
                      <h4 class="title title--4" data-layer="Teks/Judul Kartu — Wi-Fi Lab Komputer" data-layer-id="PTG-03a-layer-18">
                        Wi-Fi Lab Komputer
                      </h4>
                      <p class="muted">Sinyal tidak stabil</p>
                      <div class="task-score">
                        <strong>3,89</strong><span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span>
                      </div>
                      <span class="location-inline"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Laboratorium Komputer</span>
                    </div>
                  </div>
                  <div class="report-status-help">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 16v-4"></path>
                      <path d="M12 8h.01"></path>
                    </svg>
                    <p>Catatan progres dan perubahan status akan tampil di riwayat laporan.</p>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-petugas')

      </div>
    </div>
  


@endsection
