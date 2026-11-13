
@extends('layouts.fasilitasqu')

@section('title', 'PTG-01 Dashboard Petugas — FasilitasQu')
@section('page-code', 'PTG-01')

@section('content')

    <div class="dashboard-app">

        @include('layouts.partials.sidebar-petugas')

        <div class="dashboard-body">

            @include('layouts.partials.topbar-petugas')

            <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="PTG-01-layer-6">
                <div class="page-enter">
                    <div data-screen="PTG-01 Dashboard Petugas — Desktop">

                        {{-- HEADER DASHBOARD --}}
                        <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PTG-01-layer-7">
                            <div>
                                <div class="eyebrow">RUANG KERJA PETUGAS</div>

                                <h1 class="title title--1" data-layer="Teks/Judul Utama — Dashboard Petugas" data-layer-id="PTG-01-layer-8">
                                    Halo, {{ auth()->user()->name }}.
                                </h1>

                                <p class="muted">
                                    Setiap perbaikan berarti. Mulai dari fasilitas yang paling membutuhkan.
                                </p>
                            </div>
                        </div>

                        {{-- KPI DASHBOARD --}}
                        <div class="kpi-grid kpi-grid--3" data-layer="Grid/KPI" data-layer-id="PTG-01-layer-9">

                            {{-- TUGAS BARU --}}
                            <div class="kpi-card kpi-card--accent" data-layer="Card/KPI" data-layer-id="PTG-01-layer-10">
                                <div class="kpi-top">
                                    <span>Tugas Baru</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-checks" aria-hidden="true">
                                            <path d="M13 5h8"></path>
                                            <path d="M13 12h8"></path>
                                            <path d="M13 19h8"></path>
                                            <path d="m3 17 2 2 4-4"></path>
                                            <path d="m3 7 2 2 4-4"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $verifiedReports }}</div>
                                <p>Siap diambil dan ditangani</p>
                            </div>

                            {{-- DALAM PENANGANAN --}}
                            <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PTG-01-layer-11">
                                <div class="kpi-top">
                                    <span>Dalam Penanganan</span>

                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="kpi-value">{{ $inProgressReports }}</div>
                                <p>Perbaikan yang sedang dikerjakan</p>
                            </div>

                            {{-- SELESAI --}}
                            <div class="kpi-card" data-layer="Card/KPI" data-layer-id="PTG-01-layer-12">
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
                                <p>Fasilitas sudah kembali berfungsi</p>
                            </div>

                        </div>

                        {{-- DAFTAR TUGAS --}}
                        <section class="panel app-section" data-layer="Panel/Konten" data-layer-id="PTG-01-layer-13">

                            <div class="panel-heading" data-layer="Panel/Judul" data-layer-id="PTG-01-layer-14">
                                <div>
                                    <h4 class="title title--4" data-layer="Teks/Judul Kartu — Daftar Tugas Terurut Skor Prioritas" data-layer-id="PTG-01-layer-15">
                                        Daftar Tugas Terurut Skor Prioritas
                                    </h4>

                                    <p class="muted">
                                        Skor tertinggi ditampilkan paling atas.
                                    </p>
                                </div>

                                <span class="subtle-count">
                                    {{ $reports->count() }} tugas
                                </span>
                            </div>

                            {{-- FILTER --}}
                            <div class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="PTG-01-layer-16">

                                <div class="field search-field" data-layer="Form/Isian" data-layer-id="PTG-01-layer-17">
                                    <div class="input-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                                            <path d="m21 21-4.34-4.34"></path>
                                            <circle cx="11" cy="11" r="8"></circle>
                                        </svg>

                                        <input
                                            aria-label="Cari nomor laporan atau fasilitas..."
                                            placeholder="Cari nomor laporan atau fasilitas..."
                                            class="has-icon"
                                            aria-invalid="false"
                                            type="search"
                                            data-field="1"
                                        >
                                    </div>
                                </div>

                                <div class="field" data-layer="Form/Isian" data-layer-id="PTG-01-layer-18">
                                    <div class="select-wrap">
                                        <select aria-label="Status tugas" data-field="2">
                                            <option value="" selected>Semua Status</option>
                                            <option value="terverifikasi">Terverifikasi</option>
                                            <option value="dalam_penanganan">Dalam Penanganan</option>
                                        </select>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </div>
                                </div>

                            </div>

                            {{-- TABEL TUGAS --}}
                            <div class="table-scroll" data-layer="Tabel" data-layer-id="PTG-01-layer-19">
                                <table class="data-table task-table">
                                    <thead>
                                        <tr>
                                            <th>Peringkat</th>
                                            <th>Prioritas</th>
                                            <th>Fasilitas</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($reports as $index => $report)

                                            @php
                                                $priority = $report->priority;
                                                $level = strtolower($priority->level ?? '');

                                                $levelClass = in_array($level, ['tinggi', 'sedang', 'rendah'], true)
                                                    ? $level
                                                    : '';
                                            @endphp

                                            <tr>
                                                <td>
                                                    <span class="rank-badge {{ $index === 0 ? 'rank-badge--first' : '' }}">
                                                        #{{ $index + 1 }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="task-score">
                                                        <strong>
                                                            {{ $priority && $priority->score !== null
                                                                ? number_format((float) $priority->score, 2, ',', '.')
                                                                : '-' }}
                                                        </strong>

                                                        @if ($levelClass)
                                                            <span class="badge priority priority--{{ $levelClass }}">
                                                                <span class="badge-dot"></span>
                                                                {{ ucfirst($levelClass) }}
                                                            </span>
                                                        @else
                                                            <span class="badge">Belum dihitung</span>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <strong>
                                                        {{ $report->fasilitas?->name ?? 'Fasilitas tidak tersedia' }}
                                                    </strong>

                                                    <span class="table-sub">
                                                        LP-{{ str_pad((string) $report->id, 4, '0', STR_PAD_LEFT) }}
                                                        · {{ $report->description }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <span class="location-inline">
                                                        {{ $report->fasilitas?->building ?? '-' }}
                                                    </span>
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
                                                    @endif
                                                </td>

                                                <td>
                                                    <span class="muted">
                                                        {{ $report->status === 'terverifikasi'
                                                            ? 'Siap ditangani'
                                                            : 'Sedang dikerjakan' }}
                                                    </span>
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    Belum ada tugas yang ditugaskan kepada Anda.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                            </div>

                            {{-- RINGKASAN TABEL --}}
                            <div class="table-summary">
                                {{ $reports->count() }} tugas ditampilkan
                            </div>

                        </section>

                        {{-- CATATAN PRIORITAS --}}
                        <div class="admin-summary-note">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>

                            <div>
                                <strong>
                                    Kerjakan yang paling berdampak terlebih dahulu.
                                </strong>

                                <p>
                                    Skor prioritas membantu Anda menentukan urutan perbaikan dengan lebih terukur.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </main>

            @include('layouts.partials.footer-petugas')

        </div>
    </div>

@endsection
