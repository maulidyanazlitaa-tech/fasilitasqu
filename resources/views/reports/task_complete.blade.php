@extends('layouts.fasilitasqu')

@section('title', 'PTG-04 Konfirmasi Selesai — Modal — FasilitasQu')
@section('page-code', 'PTG-04')

@section('content')

    <!-- PTG-04 Konfirmasi Selesai — Modal — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="dashboard-app" style="">
      
@include('layouts.partials.sidebar-petugas')

      <div class="dashboard-body">
        
@include('layouts.partials.topbar-petugas')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="PTG-04-layer-6">
          <div class="page-enter">
            <div data-screen="PTG-04 Konfirmasi Selesai — Modal">
              <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PTG-04-layer-7">
                <span><a class="text-link" href="PTG-01.html">Daftar Tugas</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path></svg><a class="text-link" href="PTG-02.html?report=LP-2026-0004">LP-2026-0004</a></span><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path></svg>Perbarui Progres</span>
              </div>
              <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PTG-04-layer-8">
                <div>
                  <h1 class="title title--1" data-layer="Teks/Judul Utama — Perbarui Progres" data-layer-id="PTG-04-layer-9">
                    Perbarui Progres
                  </h1>
                  <p class="muted">
                    Catat perkembangan perbaikan agar semua pihak mengetahui kondisinya.
                  </p>
                </div>
              </div>
              <div class="progress-layout">
                <section class="panel" data-layer="Panel/Konten" data-layer-id="PTG-04-layer-10">
                  <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="PTG-04-layer-11">
                    <div>
                      <h4 class="title title--4" data-layer="Teks/Judul Kartu — AC Ruang A.101" data-layer-id="PTG-04-layer-12">
                        AC Ruang A.101
                      </h4>
                      <span class="muted">LP-2026-0004 · Gedung A</span>
                    </div>
                    <span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                  </div>
                  <form class="panel-body stack-form" data-layer="Form" data-layer-id="PTG-04-layer-13">
                    <div class="field" data-layer="Form/Isian — Catatan progres" data-layer-id="PTG-04-layer-14">
                      <label for="_r_3c_">Catatan progres</label><textarea rows="5" placeholder="Tuliskan tindakan perbaikan yang telah dilakukan dan kondisi terkini..." id="_r_3c_" class="" aria-invalid="false" data-field="1"></textarea>
                    </div>
                    <div class="progress-toggle-row">
                      <div>
                        <strong>Perbaikan selesai?</strong>
                        <p class="muted">Aktifkan jika fasilitas sudah berfungsi dengan baik.</p>
                      </div>
                      <div class="yes-no-toggle">
                        <button class="button button--ghost button--sm" type="button" aria-pressed="false">
                          Tidak</button><button class="button button--primary button--sm" type="button" aria-pressed="true">
                          Ya
                        </button>
                      </div>
                    </div>
                    <div class="completion-fields">
                      <div class="field" data-layer="Form/Isian — Kondisi fasilitas setelah perbaikan" data-layer-id="PTG-04-layer-15">
                        <label for="_r_3d_">Kondisi fasilitas setelah perbaikan</label>
                        <div class="select-wrap">
                          <select id="_r_3d_" data-field="2">
                            <option value="Baik" selected="">Baik</option></select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                          </svg>
                        </div>
                      </div>
                      <div class="completion-hint">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                          <path d="M20 6 9 17l-5-5"></path></svg>Kondisi fasilitas akan diperbarui menjadi Baik.
                      </div>
                    </div>
                    <div class="form-bottom form-bottom--inside" data-layer="Form/Aksi" data-layer-id="PTG-04-layer-16">
                      <a class="button button--ghost button--md" href="PTG-01.html"> Batal </a><button class="button button--primary button--md" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-check" aria-hidden="true">
                          <path d="M18 6 7 17l-5-5"></path>
                          <path d="m22 10-7.5 7.5L13 16"></path>
                        </svg>
                        Tandai Selesai
                      </button>
                    </div>
                  </form>
                </section>
                <aside data-layer="Panel/Samping" data-layer-id="PTG-04-layer-17">
                  <div class="panel progress-summary" data-layer="Panel/Konten" data-layer-id="PTG-04-layer-18">
                    <img alt="AC Ruang A.101" src="../assets/images/classroom.jpg">
                    <div class="panel-body">
                      <div class="eyebrow">RINGKASAN TUGAS</div>
                      <h4 class="title title--4" data-layer="Teks/Judul Kartu — AC Ruang A.101" data-layer-id="PTG-04-layer-19">
                        AC Ruang A.101
                      </h4>
                      <p class="muted">AC tidak dingin</p>
                      <div class="task-score">
                        <strong>3,10</strong><span class="badge priority priority--sedang"><span class="badge-dot"></span>Sedang</span>
                      </div>
                      <span class="location-inline"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                          <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                          <circle cx="12" cy="10" r="3"></circle></svg>Gedung A</span>
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
              <div class="modal-backdrop" data-layer="Overlay/Modal" data-layer-id="PTG-04-layer-20">
                <div tabindex="-1" class="modal" role="dialog" aria-modal="true" aria-label="Perbaikan berhasil diselesaikan" data-layer="Modal/Konten" data-layer-id="PTG-04-layer-21">
                  <div class="modal-header" data-layer="Modal/Judul — Perbaikan berhasil diselesaikan" data-layer-id="PTG-04-layer-22">
                    <h3 class="title title--3" data-layer="Teks/Subjudul — Perbaikan berhasil diselesaikan" data-layer-id="PTG-04-layer-23">
                      Perbaikan berhasil diselesaikan
                    </h3>
                    <button class="button button--ghost button--sm" aria-label="Tutup modal" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <div class="verification-result" data-layer="Modal/Hasil Verifikasi — Tugas selesai." data-layer-id="PTG-04-layer-24">
                    <span class="confirmation-icon"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path></svg></span>
                    <h3 class="title title--3" data-layer="Teks/Subjudul — Tugas selesai." data-layer-id="PTG-04-layer-25">
                      Tugas selesai.
                    </h3>
                    <p class="muted">Kondisi fasilitas diperbarui menjadi <strong>Baik</strong>.</p>
                    <div class="completion-facility">
                      <strong>AC Ruang A.101</strong><span class="report-id">LP-2026-0004</span><span class="badge badge--done"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
                          <path d="M20 6 9 17l-5-5"></path></svg>Selesai</span>
                    </div>
                    <a class="button button--primary button--md" href="PTG-01.html">
                      Kembali ke Daftar Tugas
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path></svg></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        
@include('layouts.partials.footer-petugas')

      </div>
    </div>
  


@endsection
