@extends('layouts.fasilitasqu')

@section('title', 'ADM-05 Semua Laporan — FasilitasQu')
@section('page-code', 'ADM-05')

@section('content')
<div class="dashboard-app">
    @include('layouts.partials.sidebar-admin')
    <div class="dashboard-body">
        @include('layouts.partials.topbar-admin')
        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-05-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-05 Semua Laporan — Desktop">
                    <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-05-layer-7">
                        <div><h1 class="title title--1" data-layer="Teks/Judul Utama — Semua Laporan" data-layer-id="ADM-05-layer-8">Semua Laporan</h1><p class="muted">Kelola dan pantau seluruh laporan kerusakan fasilitas kampus.</p></div>
                    </div>

                    @if (session('success'))<div class="alert" role="status">{{ session('success') }}</div>@endif
                    @if ($errors->any())<div class="alert" role="alert"><div><strong>Periksa kembali tindakan laporan.</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>@endif

                    <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-05-layer-9">
                        <form class="filter-bar" method="GET" action="{{ route('admin.reports.index') }}" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-05-layer-10">
                            <div class="field search-field"><label class="visually-hidden" for="report-status">Filter status laporan</label><div class="select-wrap"><select id="report-status" name="status" aria-label="Filter status"><option value="">Semua Status</option>@foreach (['menunggu_verifikasi', 'terverifikasi', 'dalam_penanganan', 'selesai', 'ditolak'] as $status)<option value="{{ $status }}" @selected(request('status') === $status)>{{ ucwords(str_replace('_', ' ', $status)) }}</option>@endforeach</select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></div></div>
                            <button class="button button--outline button--sm" type="submit">Filter</button>
                            @if (request()->filled('status'))<a class="button button--ghost button--sm" href="{{ route('admin.reports.index') }}">Reset</a>@endif
                            <span class="filter-total">{{ $reports->total() }} laporan</span>
                        </form>

                        <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-05-layer-13">
                            <table class="data-table">
                                <thead><tr><th>No. Laporan</th><th>Pelapor</th><th>Fasilitas</th><th>Tanggal</th><th>Status</th><th>Petugas</th><th>Penugasan</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($reports as $report)
                                        @php
                                            $statusLabels = ['menunggu_verifikasi' => 'Menunggu Verifikasi', 'terverifikasi' => 'Terverifikasi', 'dalam_penanganan' => 'Dalam Penanganan', 'selesai' => 'Selesai', 'ditolak' => 'Ditolak'];
                                            $statusClasses = ['menunggu_verifikasi' => 'badge--waiting', 'terverifikasi' => 'badge--verified', 'dalam_penanganan' => 'badge--progress', 'selesai' => 'badge--done', 'ditolak' => 'badge--rejected'];
                                        @endphp
                                        <tr>
                                            <td><span class="report-id">#{{ $report->id }}</span></td>
                                            <td><div class="table-person"><span class="avatar avatar--small">{{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($report->user->name ?? '?', 0, 1)) }}</span>{{ $report->user->name ?? 'Pelapor tidak tersedia' }}</div></td>
                                            <td><strong>{{ $report->fasilitas->name ?? 'Fasilitas tidak tersedia' }}</strong><span class="table-sub">{{ \Illuminate\Support\Str::limit($report->description, 70) }}</span></td>
                                            <td class="no-wrap">{{ $report->created_at?->format('d M Y') ?? '—' }}</td>
                                            <td><span class="badge {{ $statusClasses[$report->status] ?? 'badge--waiting' }}">{{ $statusLabels[$report->status] ?? ucwords(str_replace('_', ' ', $report->status)) }}</span></td>
                                            <td>{{ $report->assignedTo->name ?? 'Belum ditugaskan' }}</td>
                                            <td>
                                                @if ($report->status === 'terverifikasi')
                                                    <form method="POST" action="{{ route('admin.reports.assign', $report) }}" class="stack-form">
                                                        @csrf
                                                        <div class="field"><label class="visually-hidden" for="petugas-{{ $report->id }}">Pilih petugas</label><div class="select-wrap"><select id="petugas-{{ $report->id }}" name="assigned_to" required><option value="">Pilih petugas</option>@foreach ($petugas as $person)<option value="{{ $person->id }}">{{ $person->name }}</option>@endforeach</select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></div></div>
                                                        <button class="button button--primary button--sm" type="submit" @disabled($petugas->isEmpty())>Tugaskan</button>
                                                    </form>
                                                @elseif ($report->status === 'menunggu_verifikasi')
                                                    <span class="muted">Menunggu verifikasi</span>
                                                @else
                                                    <span class="muted">—</span>
                                                @endif
                                            </td>
                                            <td><a class="button button--outline button--sm" href="{{ route('reports.show', $report) }}">Detail</a></td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="8" class="muted">Belum ada laporan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <span>Menampilkan {{ $reports->firstItem() ?? 0 }}–{{ $reports->lastItem() ?? 0 }} dari {{ $reports->total() }} laporan</span>
                            <div>
                                <span>Halaman {{ $reports->currentPage() }} / {{ max(1, $reports->lastPage()) }}</span>
                                @if ($reports->previousPageUrl())<a class="button button--outline button--sm" href="{{ $reports->previousPageUrl() }}" rel="prev">Sebelumnya</a>@endif
                                @if ($reports->nextPageUrl())<a class="button button--outline button--sm" href="{{ $reports->nextPageUrl() }}" rel="next">Berikutnya</a>@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.partials.footer-admin')
    </div>
</div>
@endsection
