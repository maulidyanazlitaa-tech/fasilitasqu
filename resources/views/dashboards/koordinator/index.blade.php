
@extends('layouts.fasilitasqu')

@section('title', 'KRD-01 Dashboard Rekap Kondisi — FasilitasQu')
@section('page-code', 'KRD-01')

@section('content')

    @php
        $totalConditionFacilities = (int) $facilityConditionCounts->sum();

        $goodFacilities = (int) ($facilityConditionCounts['baik'] ?? 0);

        $repairFacilities = max(0, $totalFacilities - $goodFacilities);

        $maxCategoryReports = max(1, (int) $categoryReportCounts->max('total'));

        $conditionLabels = [
            'baik' => 'Baik',
            'dalam_perbaikan' => 'Dalam Perbaikan',
            'rusak' => 'Rusak',
        ];
    @endphp

    <div class="dashboard-app">

        @include('layouts.partials.sidebar-koordinator')

        <div class="dashboard-body">

            @include('layouts.partials.topbar-koordinator')

            <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="KRD-01-layer-6">

                <div class="page-enter">

                    <div data-screen="KRD-01 Dashboard Rekap Kondisi — Desktop">

                        {{-- HEADER DASHBOARD --}}
                        <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="KRD-01-layer-7">

                            <div>
                                <div class="eyebrow">PEMANTAUAN · HANYA LIHAT</div>

                                <h1 class="title title--1" data-layer="Teks/Judul Utama — Rekap Kondisi Fasilitas" data-layer-id="KRD-01-layer-8">
                                    Rekap Kondisi Fasilitas
                                </h1>

                                <p class="muted">
                                    Gambaran menyeluruh kondisi fasilitas dan prioritas perbaikan kampus.
                                </p>
                            </div>

                            <div class="page-heading-actions">
                                <span class="readonly-badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                        <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                    Akses hanya lihat
                                </span>
                            </div>

                        </div>

                        {{-- INFORMASI DATA --}}
                        <div class="coordinator-filters">
                            <span>Ringkasan data fasilitas dan laporan</span>

                            <span>
                                Data diperbarui: {{ now()->format('d M Y') }}
                            </span>
                        </div>

                        {{-- KPI DASHBOARD --}}
                        <div class="kpi-grid kpi-grid--4" data-layer="Grid/KPI" data-layer-id="KRD-01-layer-12">

                            {{-- TOTAL FASILITAS --}}
                            <div class="kpi-card" data-layer="Card/KPI" data-layer-id="KRD-01-layer-13">

                                <div class="kpi-top">
                                    <span>Total Fasilitas</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M10 12h4"></path>
                                            <path d="M10 8h4"></path>
                                            <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                                            <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                                            <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $totalFacilities }}</div>
                                <p>Fasilitas terdaftar</p>

                            </div>

                            {{-- KONDISI BAIK --}}
                            <div class="kpi-card" data-layer="Card/KPI" data-layer-id="KRD-01-layer-14">

                                <div class="kpi-top">
                                    <span>Kondisi Baik</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $goodFacilities }}</div>
                                <p>Siap digunakan</p>

                            </div>

                            {{-- PERLU PERBAIKAN --}}
                            <div class="kpi-card kpi-card--accent" data-layer="Card/KPI" data-layer-id="KRD-01-layer-15">

                                <div class="kpi-top">
                                    <span>Perlu Perbaikan</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $repairFacilities }}</div>
                                <p>Selain kondisi baik</p>

                            </div>

                            {{-- LAPORAN SELESAI --}}
                            <div class="kpi-card" data-layer="Card/KPI" data-layer-id="KRD-01-layer-16">

                                <div class="kpi-top">
                                    <span>Laporan Selesai</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M18 6 7 17l-5-5"></path>
                                            <path d="m22 10-7.5 7.5L13 16"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $completedReports }}</div>
                                <p>Total laporan selesai</p>

                            </div>

                        </div>

                        {{-- GRAFIK DASHBOARD --}}
                        <div class="charts-grid app-section" data-layer="Grid/Grafik" data-layer-id="KRD-01-layer-17">

                            {{-- KONDISI FASILITAS --}}
                            <section class="panel" data-layer="Panel/Konten" data-layer-id="KRD-01-layer-18">

                                <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="KRD-01-layer-19">

                                    <div>
                                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Kondisi Fasilitas" data-layer-id="KRD-01-layer-20">
                                            Kondisi Fasilitas
                                        </h4>

                                        <p class="muted">
                                            Distribusi kondisi fasilitas saat ini.
                                        </p>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M10 12h4"></path>
                                        <path d="M10 8h4"></path>
                                        <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                                        <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                                        <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                                    </svg>

                                </div>

                                <div class="chart-legend">

                                    @forelse ($facilityConditionCounts as $condition => $total)

                                        @php
                                            $conditionName = $conditionLabels[$condition]
                                                ?? ucwords(str_replace('_', ' ', $condition));

                                            $percentage = $totalConditionFacilities > 0
                                                ? round(($total / $totalConditionFacilities) * 100)
                                                : 0;
                                        @endphp

                                        <div>
                                            <span class="chart-dot"></span>
                                            <span>{{ $conditionName }}</span>
                                            <strong>{{ $total }}</strong>
                                            <small>{{ $percentage }}%</small>
                                        </div>

                                    @empty

                                        <p class="muted">
                                            Belum ada data kondisi fasilitas.
                                        </p>

                                    @endforelse

                                    <div class="table-summary">
                                        {{ $totalConditionFacilities }} fasilitas terdata
                                    </div>

                                </div>

                            </section>

                            {{-- LAPORAN PER KATEGORI --}}
                            <section class="panel" data-layer="Panel/Konten" data-layer-id="KRD-01-layer-22">

                                <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="KRD-01-layer-23">

                                    <div>
                                        <h4 class="title title--4" data-layer="Teks/Judul Kartu — Laporan per Kategori" data-layer-id="KRD-01-layer-24">
                                            Laporan per Kategori
                                        </h4>

                                        <p class="muted">
                                            Jumlah laporan berdasarkan kategori fasilitas.
                                        </p>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                        <path d="M12 11h4"></path>
                                        <path d="M12 16h4"></path>
                                        <path d="M8 11h.01"></path>
                                        <path d="M8 16h.01"></path>
                                    </svg>

                                </div>

                                <div class="bar-chart" data-layer="Grafik/Laporan per Kategori" data-layer-id="KRD-01-layer-25">

                                    @forelse ($categoryReportCounts as $category)

                                        @php
                                            $percentage = round(
                                                ($category->total / $maxCategoryReports) * 100
                                            );
                                        @endphp

                                        <div class="bar-chart-row">

                                            <span>{{ $category->name }}</span>

                                            <div class="bar-track">
                                                <span>
                                                    {{ $percentage }}%
                                                </span>
                                            </div>

                                            <strong>{{ $category->total }}</strong>

                                        </div>

                                    @empty

                                        <p class="muted">
                                            Belum ada laporan berdasarkan kategori.
                                        </p>

                                    @endforelse

                                </div>

                            </section>

                        </div>

                        {{-- TOP 5 PRIORITAS PERBAIKAN --}}
                        <section id="top-priorities" class="panel app-section" data-layer="Panel/Konten" data-layer-id="KRD-01-layer-26">

                            <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="KRD-01-layer-27">

                                <div>
                                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Top 5 Prioritas Perbaikan" data-layer-id="KRD-01-layer-28">
                                        Top 5 Prioritas Perbaikan
                                    </h4>

                                    <p class="muted">
                                        Laporan dengan skor prioritas tertinggi.
                                    </p>
                                </div>

                            </div>

                            <div class="table-scroll" data-layer="Tabel" data-layer-id="KRD-01-layer-29">

                                <table class="data-table coordinator-priority-table">

                                    <thead>
                                        <tr>
                                            <th>Peringkat</th>
                                            <th>Fasilitas</th>
                                            <th>No. Laporan</th>
                                            <th>Skor</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @forelse ($topPriorities as $index => $report)

                                            @php
                                                $priority = $report->priority;

                                                $level = strtolower($priority->level ?? '');

                                                $levelClass = in_array(
                                                    $level,
                                                    ['tinggi', 'sedang', 'rendah'],
                                                    true
                                                ) ? $level : '';
                                            @endphp

                                            <tr>

                                                <td>
                                                    <span class="rank-badge {{ $index === 0 ? 'rank-badge--first' : '' }}">
                                                        #{{ $index + 1 }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <strong>
                                                        {{ $report->fasilitas?->name ?? 'Fasilitas tidak tersedia' }}
                                                    </strong>

                                                    <span class="table-sub">
                                                        {{ $report->fasilitas?->building ?? '-' }}
                                                    </span>
                                                </td>

                                                <td class="report-id">
                                                    LP-{{ str_pad((string) $report->id, 4, '0', STR_PAD_LEFT) }}
                                                </td>

                                                <td>
                                                    <span class="table-score">
                                                        {{ $priority && $priority->score !== null
                                                            ? number_format((float) $priority->score, 2, ',', '.')
                                                            : '-' }}
                                                    </span>
                                                </td>

                                                <td>

                                                    @if ($levelClass)

                                                        <span class="badge priority priority--{{ $levelClass }}">
                                                            <span class="badge-dot"></span>
                                                            {{ ucfirst($levelClass) }}
                                                        </span>

                                                    @else

                                                        <span class="badge">
                                                            Belum ditentukan
                                                        </span>

                                                    @endif

                                                </td>

                                                <td>

                                                    @if ($report->status === 'terverifikasi')

                                                        <span class="badge badge--verified">
                                                            Terverifikasi
                                                        </span>

                                                    @elseif ($report->status === 'dalam_penanganan')

                                                        <span class="badge badge--progress">
                                                            Dalam Penanganan
                                                        </span>

                                                    @elseif ($report->status === 'selesai')

                                                        <span class="badge badge--done">
                                                            Selesai
                                                        </span>

                                                    @elseif ($report->status === 'ditolak')

                                                        <span class="badge">
                                                            Ditolak
                                                        </span>

                                                    @elseif ($report->status === 'menunggu_verifikasi')

                                                        <span class="badge">
                                                            Menunggu Verifikasi
                                                        </span>

                                                    @else

                                                        <span class="badge">
                                                            {{ ucfirst(str_replace('_', ' ', $report->status)) }}
                                                        </span>

                                                    @endif

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    Belum ada data prioritas yang tersedia.
                                                </td>
                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                            <div class="table-summary">
                                {{ $topPriorities->count() }} laporan prioritas ditampilkan
                            </div>

                        </section>

                        {{-- RINGKASAN LAPORAN --}}
                        <div class="admin-summary-note">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>

                            <div>
                                <strong>
                                    Ringkasan pemantauan fasilitas kampus.
                                </strong>

                                <p>
                                    Saat ini terdapat {{ $totalReports }} laporan,
                                    dengan {{ $completedReports }} laporan selesai,
                                    {{ $pendingReports }} menunggu verifikasi,
                                    dan {{ $inProgressReports }} dalam penanganan.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </main>

            @include('layouts.partials.footer-koordinator')

        </div>

    </div>

@endsection