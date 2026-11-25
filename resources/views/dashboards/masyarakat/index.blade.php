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
                @forelse ($reports as $report)
                  @php
                    $statusLabels = ['menunggu_verifikasi' => 'Menunggu Verifikasi', 'terverifikasi' => 'Terverifikasi', 'dalam_penanganan' => 'Dalam Penanganan', 'selesai' => 'Selesai', 'ditolak' => 'Ditolak'];
                    $statusClasses = ['menunggu_verifikasi' => 'badge--waiting', 'terverifikasi' => 'badge--verified', 'dalam_penanganan' => 'badge--verified', 'selesai' => 'badge--verified', 'ditolak' => 'badge--rejected'];
                  @endphp
                  <article class="report-card">
                    <div class="report-card-top"><span class="report-id">#{{ $report->id }}</span><span class="badge {{ $statusClasses[$report->status] ?? 'badge--waiting' }}">{{ $statusLabels[$report->status] ?? $report->status }}</span></div>
                    <h4 class="title title--4"><a class="text-link" href="{{ route('reports.show', $report) }}">{{ $report->fasilitas?->name ?? 'Fasilitas tidak tersedia' }}</a></h4>
                    <p class="muted">{{ \Illuminate\Support\Str::limit($report->description, 100) }}</p>
                    <div class="report-card-footer"><span>{{ $report->created_at?->format('d M Y') }}</span><a class="text-link" href="{{ route('reports.show', $report) }}">Lihat Detail</a></div>
                  </article>
                @empty
                  <p class="muted">Kamu belum mengirim laporan. Laporan yang dibuat akan tampil di sini.</p>
                @endforelse
              </div></section>
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
                @forelse ($facilities as $facility)
                  @php
                    $conditionLabel = ['baik' => 'Baik', 'rusak' => 'Rusak', 'dalam_perbaikan' => 'Dalam Perbaikan'][$facility->condition_status] ?? $facility->condition_status;
                    $conditionClass = $facility->condition_status === 'rusak' ? 'condition--broken' : 'condition--repair';
                  @endphp
                  <article class="facility-card">
                    <div class="facility-card-photo"><img alt="{{ $facility->name }}" loading="lazy" src="{{ asset('fasilitasqu/assets/images/classroom.jpg') }}"><span class="badge condition {{ $conditionClass }}"><span class="badge-dot"></span>{{ $conditionLabel }}</span></div>
                    <div class="facility-card-body">
                      <div class="facility-card-category">{{ $facility->kategori?->name ?? 'Tanpa kategori' }}</div>
                      <h4 class="title title--4"><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-02.html') }}">{{ $facility->name }}</a></h4>
                      <p class="facility-card-location">{{ $facility->building }}</p>
                      <div class="facility-card-actions"><a class="button button--outline button--sm" href="{{ asset('fasilitasqu/pages/PEL-02.html') }}">Detail</a><a class="button button--primary button--sm" href="{{ route('reports.create', ['facility_id' => $facility->id]) }}">Laporkan</a></div>
                    </div>
                  </article>
                @empty
                  <p class="muted">Belum ada fasilitas yang memerlukan perhatian.</p>
                @endforelse
              </div></section>
          </div>
        </div>
      </main>
@include('layouts.partials.footer-pelapor')
@include('layouts.partials.navigasi-mobile')
    </div>
@endsection