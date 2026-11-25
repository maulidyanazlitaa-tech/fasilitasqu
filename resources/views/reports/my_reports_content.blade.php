@php
    $statusLabels = [
        'menunggu_verifikasi' => 'Menunggu Verifikasi',
        'terverifikasi' => 'Terverifikasi',
        'ditolak' => 'Ditolak',
        'dalam_penanganan' => 'Dalam Penanganan',
        'selesai' => 'Selesai',
    ];
    $statusClasses = [
        'menunggu_verifikasi' => 'badge--waiting',
        'terverifikasi' => 'badge--verified',
        'ditolak' => 'badge--rejected',
        'dalam_penanganan' => 'badge--progress',
        'selesai' => 'badge--done',
    ];
@endphp

<div class="reporter-app">
    @include('layouts.partials.navbar-pelapor')

    <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-07-layer-3">
        <div class="page-enter">
            <div data-screen="PEL-07 Laporan Saya — Desktop / Mobile">
                <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-07-layer-4">
                    <div>
                        <h1 class="title title--1" data-layer="Teks/Judul Utama — Laporan Saya" data-layer-id="PEL-07-layer-5">Laporan Saya</h1>
                        <p class="muted">Setiap laporanmu adalah langkah kecil untuk kampus yang lebih nyaman.</p>
                    </div>
                    <div class="page-heading-actions">
                        <a class="button button--primary button--md" href="{{ route('reports.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                            Laporkan Kerusakan
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert--success" role="status">{{ session('success') }}</div>
                @endif

                @if ($reports->isEmpty())
                    <div class="panel empty-state" data-layer="Panel/Konten" data-layer-id="PEL-07b-layer-6">
                        <div class="empty-icon"><span aria-hidden="true">＋</span></div>
                        <h3 class="title title--3">Belum ada laporan</h3>
                        <p class="muted">Temukan kerusakan? Buat laporan pertamamu dan pantau perkembangannya.</p>
                        <a class="button button--primary button--md" href="{{ route('reports.create') }}">Laporkan Kerusakan</a>
                    </div>
                @else
                    <div class="panel" data-layer="Panel/Konten" data-layer-id="PEL-07-layer-6">
                        <div class="panel-search muted">{{ $reports->total() }} laporan</div>
                        <div class="desktop-table">
                            <div class="table-scroll" data-layer="Tabel" data-layer-id="PEL-07-layer-9">
                                <table class="data-table">
                                    <thead>
                                        <tr><th>No. Laporan</th><th>Fasilitas</th><th>Tanggal</th><th>Status</th><th class="text-right">Aksi</th></tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $report)
                                            <tr>
                                                <td><span class="report-id">#{{ $report->id }}</span></td>
                                                <td>
                                                    <strong>{{ $report->fasilitas->name ?? 'Fasilitas tidak tersedia' }}</strong>
                                                    <span class="table-sub">{{ \Illuminate\Support\Str::limit($report->description, 90) }}</span>
                                                </td>
                                                <td class="no-wrap">{{ $report->created_at?->format('d M Y') ?? '—' }}</td>
                                                <td><span class="badge {{ $statusClasses[$report->status] ?? 'badge--waiting' }}">{{ $statusLabels[$report->status] ?? ucwords(str_replace('_', ' ', $report->status)) }}</span></td>
                                                <td class="text-right"><a class="button button--outline button--sm" href="{{ route('reports.show', $report) }}">Detail</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mobile-report-list">
                            @foreach ($reports as $report)
                                <article class="report-card">
                                    <div class="report-card-top">
                                        <span class="report-id">#{{ $report->id }}</span>
                                        <span class="badge {{ $statusClasses[$report->status] ?? 'badge--waiting' }}">{{ $statusLabels[$report->status] ?? ucwords(str_replace('_', ' ', $report->status)) }}</span>
                                    </div>
                                    <h3 class="title title--4">{{ $report->fasilitas->name ?? 'Fasilitas tidak tersedia' }}</h3>
                                    <p class="muted">{{ \Illuminate\Support\Str::limit($report->description, 120) }}</p>
                                    <div class="report-card-footer">
                                        <span class="muted">{{ $report->created_at?->format('d M Y') ?? '—' }}</span>
                                        <a class="text-link" href="{{ route('reports.show', $report) }}">Lihat Detail</a>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <div class="pagination">{{ $reports->links() }}</div>
                    </div>
                @endif
            </div>
        </div>
    </main>

    @include('layouts.partials.footer-pelapor')
    @include('layouts.partials.navigasi-mobile')
</div>