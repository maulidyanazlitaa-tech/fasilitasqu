
@extends('layouts.fasilitasqu')

@section('title', 'ADM-01 Dashboard Admin — FasilitasQu')
@section('page-code', 'ADM-01')

@section('content')
<div class="dashboard-app">

    @include('layouts.partials.sidebar-admin')

    <div class="dashboard-body">

        @include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-01-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-01 Dashboard Admin — Desktop">

                    {{-- HEADER --}}
                    <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-01-layer-7">
                        <div>
                            <div class="eyebrow">PUSAT PENGELOLAAN FASILITAS</div>

                            <h1 class="title title--1" data-layer="Teks/Judul Utama — Dashboard Admin" data-layer-id="ADM-01-layer-8">
                                Dashboard Admin
                            </h1>

                            <p class="muted">
                                Ringkasan laporan dan kondisi fasilitas kampus hari ini.
                            </p>
                        </div>

                        <div class="page-heading-actions">
                            <a class="button button--primary button--md" href="{{ route('admin.reports.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>

                                Periksa Antrian

                                <span class="button-count">{{ $pendingReports }}</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                                    <path d="M7 7h10v10"></path>
                                    <path d="M7 17 17 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- KPI --}}
                    <div class="kpi-grid kpi-grid--5" data-layer="Grid/KPI" data-layer-id="ADM-01-layer-9">

                        <div class="kpi-card kpi-card--accent" data-layer="Card/KPI" data-layer-id="ADM-01-layer-10">
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
                            <p>laporan</p>
                        </div>

                        <div class="kpi-card" data-layer="Card/KPI" data-layer-id="ADM-01-layer-11">
                            <div class="kpi-top">
                                <span>Terverifikasi</span>
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                        <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="kpi-value">{{ $verifiedReports }}</div>
                            <p>laporan</p>
                        </div>

                        <div class="kpi-card" data-layer="Card/KPI" data-layer-id="ADM-01-layer-12">
                            <div class="kpi-top">
                                <span>Dalam Penanganan</span>
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="kpi-value">{{ $inProgressReports }}</div>
                            <p>laporan</p>
                        </div>

                        <div class="kpi-card" data-layer="Card/KPI" data-layer-id="ADM-01-layer-13">
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
                            <p>laporan</p>
                        </div>

                        <div class="kpi-card" data-layer="Card/KPI" data-layer-id="ADM-01-layer-14">
                            <div class="kpi-top">
                                <span>Ditolak</span>
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="kpi-value">{{ $rejectedReports }}</div>
                            <p>laporan</p>
                        </div>

                    </div>

                    {{-- GRID UTAMA --}}
                    <div class="admin-dashboard-grid">

                        {{-- ANTRIAN VERIFIKASI --}}
                        <section class="panel" data-layer="Panel/Konten" data-layer-id="ADM-01-layer-15">

                            <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="ADM-01-layer-16">
                                <div>
                                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Antrian Verifikasi Terbaru" data-layer-id="ADM-01-layer-17">
                                        Antrian Verifikasi Terbaru
                                    </h4>
                                    <p class="muted">
                                        Laporan yang menunggu pemeriksaan Anda.
                                    </p>
                                </div>

                                <a class="text-link" href="{{ route('admin.reports.index') }}">
                                    Lihat Semua
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-01-layer-18">
                                <table class="data-table">

                                    <thead>
                                        <tr>
                                            <th>No. Laporan</th>
                                            <th>Pelapor</th>
                                            <th>Fasilitas</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($verificationQueue as $report)
                                            @php
                                                $reportNumber = 'LP-' . str_pad(
                                                    (string) $report->id,
                                                    4,
                                                    '0',
                                                    STR_PAD_LEFT
                                                );
                                            @endphp

                                            <tr class="clickable-row">

                                                <td>
                                                    <span class="report-id">
                                                        {{ $reportNumber }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="table-person">
                                                        <span class="avatar avatar--small">
                                                            {{ strtoupper(substr($report->user?->name ?? 'U', 0, 1)) }}
                                                        </span>
                                                        {{ $report->user?->name ?? 'Pengguna tidak tersedia' }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <strong>
                                                        {{ $report->fasilitas?->name ?? 'Fasilitas tidak tersedia' }}
                                                    </strong>
                                                    <span class="table-sub">
                                                        {{ $report->fasilitas?->building ?? '-' }}
                                                    </span>
                                                </td>

                                                <td>
                                                    {{ $report->fasilitas?->kategori?->name ?? '-' }}
                                                </td>

                                                <td class="no-wrap">
                                                    {{ $report->created_at?->format('d M Y') ?? '-' }}
                                                </td>

                                                <td>
                                                    <span class="badge badge--waiting">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6h4"></path>
                                                        </svg>
                                                        Menunggu Verifikasi
                                                    </span>
                                                </td>

                                                <td class="text-right">
                                                    <span class="muted">
                                                        Menunggu pemeriksaan
                                                    </span>
                                                </td>

                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <span class="muted">
                                                        Belum ada laporan yang menunggu verifikasi.
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                            </div>
                        </section>

                        {{-- TOP PRIORITAS --}}
                        <section class="panel top-priority-panel" data-layer="Panel/Konten" data-layer-id="ADM-01-layer-19">

                            <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="ADM-01-layer-20">
                                <div>
                                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Top Prioritas" data-layer-id="ADM-01-layer-21">
                                        Top Prioritas
                                    </h4>
                                    <p class="muted">
                                        Perbaikan yang perlu didahulukan.
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered" aria-hidden="true">
                                    <path d="M11 5h10"></path>
                                    <path d="M11 12h10"></path>
                                    <path d="M11 19h10"></path>
                                    <path d="M4 4h1v5"></path>
                                    <path d="M4 9h2"></path>
                                    <path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path>
                                </svg>
                            </div>

                            <div class="top-priority-list">

                                @forelse ($topPriorities as $index => $report)
                                    @php
                                        $priorityLevel = strtolower(
                                            str_replace(' ', '-', $report->priority->level)
                                        );

                                        $reportNumber = 'LP-' . str_pad(
                                            (string) $report->id,
                                            4,
                                            '0',
                                            STR_PAD_LEFT
                                        );
                                    @endphp

                                    <div class="text-link top-priority-item">

                                        <span class="priority-rank">
                                            {{ $index + 1 }}
                                        </span>

                                        <div>
                                            <strong>
                                                {{ $report->fasilitas?->name ?? 'Fasilitas tidak tersedia' }}
                                            </strong>

                                            <span class="muted">
                                                {{ $reportNumber }}
                                            </span>

                                            <span class="badge priority priority--{{ $priorityLevel }}">
                                                <span class="badge-dot"></span>
                                                {{ ucfirst($report->priority->level) }}
                                            </span>
                                        </div>

                                        <span class="top-priority-score">
                                            {{ number_format((float) $report->priority->score, 2, ',', '.') }}
                                        </span>

                                    </div>

                                @empty
                                    <div class="text-center">
                                        <span class="muted">
                                            Belum ada data prioritas yang tersedia.
                                        </span>
                                    </div>
                                @endforelse

                            </div>

                            <a class="text-link panel-footer-link" href="{{ asset('fasilitasqu/pages/ADM-06.html') }}">
                                Lihat Daftar Prioritas
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>

                        </section>

                    </div>

                    {{-- CATATAN ADMIN --}}
                    <div class="admin-summary-note">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>

                        <div>
                            <strong>
                                Prioritas yang terukur, penanganan yang transparan.
                            </strong>

                            <p>
                                Verifikasi laporan dengan teliti. Skor dihitung dari kerusakan, dampak,
                                frekuensi, dan umur laporan.
                            </p>
                        </div>

                        <a class="text-link" href="{{ asset('fasilitasqu/pages/ADM-06.html') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>

                    </div>

                </div>
            </div>
        </main>

        @include('layouts.partials.footer-admin')

    </div>
</div>
@endsection
