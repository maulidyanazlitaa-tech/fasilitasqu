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
    $currentUser = auth()->user();
    $currentStatus = $report->status;
    $homeRoute = match ($currentUser->role) {
        'masyarakat' => route('dashboard.masyarakat'),
        'admin' => route('dashboard.admin'),
        'petugas' => route('dashboard.petugas'),
        'koordinator' => route('dashboard.koordinator'),
        default => route('dashboard'),
    };
    $backRoute = $currentUser->role === 'masyarakat'
        ? route('reports.index')
        : ($currentUser->role === 'admin'
            ? route('admin.reports.index')
            : $homeRoute);
    $backLabel = $currentUser->role === 'masyarakat'
        ? 'Kembali ke Laporan'
        : ($currentUser->role === 'admin'
            ? 'Kembali ke Kelola Laporan'
            : 'Kembali ke Dashboard');
@endphp

@if ($currentUser->role === 'masyarakat')
    <div class="reporter-app">
        @include('layouts.partials.navbar-pelapor')
        <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-08-layer-3">
@else
    <div class="dashboard-app">
        @if ($currentUser->role === 'admin')
            @include('layouts.partials.sidebar-admin')
        @elseif ($currentUser->role === 'petugas')
            @include('layouts.partials.sidebar-petugas')
        @else
            @include('layouts.partials.sidebar-koordinator')
        @endif
        <div class="dashboard-body">
            @if ($currentUser->role === 'admin')
                @include('layouts.partials.topbar-admin')
            @elseif ($currentUser->role === 'petugas')
                @include('layouts.partials.topbar-petugas')
            @else
                @include('layouts.partials.topbar-koordinator')
            @endif
            <main class="dashboard-main" data-layer="Konten/Detail Laporan">
@endif
                <div class="page-enter">
                    <div data-screen="PEL-08 Detail &amp; Status Laporan — Desktop / Mobile">
                        <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PEL-08-layer-4">
                            <span><a class="text-link" href="{{ $homeRoute }}">Beranda</a></span>
                            <span aria-hidden="true">›</span>
                            <span><a class="text-link" href="{{ $backRoute }}">{{ $backLabel }}</a></span>
                            <span aria-hidden="true">›</span>
                            <span>#{{ $report->id }}</span>
                        </div>

                        <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-08-layer-5">
                            <div>
                                <h1 class="title title--1" data-layer="Teks/Judul Utama — Detail &amp; Status Laporan" data-layer-id="PEL-08-layer-6">Detail &amp; Status Laporan</h1>
                                <p class="muted">Lihat informasi dan perkembangan penanganan laporan fasilitas.</p>
                            </div>
                            <div class="page-heading-actions"><a class="button button--outline button--md" href="{{ $backRoute }}">{{ $backLabel }}</a></div>
                        </div>

                        @if (session('success'))<div class="alert" role="status">{{ session('success') }}</div>@endif
                        @if ($errors->any())<div class="alert" role="alert"><div><strong>Periksa kembali data yang dimasukkan.</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>@endif

                        <div class="report-detail-layout">
                            <div>
                                <section class="panel report-info-panel" data-layer="Panel/Konten" data-layer-id="PEL-08-layer-7">
                                    <div class="panel-heading" data-layer="Panel/Judul — Informasi Laporan" data-layer-id="PEL-08-layer-8">
                                        <h2 class="title title--4" data-layer="Teks/Judul Kartu — Informasi Laporan" data-layer-id="PEL-08-layer-9">Informasi Laporan</h2>
                                        <span class="badge {{ $statusClasses[$currentStatus] ?? 'badge--waiting' }}">{{ $statusLabels[$currentStatus] ?? ucwords(str_replace('_', ' ', $currentStatus)) }}</span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="report-facility-heading">
                                            <span class="eyebrow">{{ $report->fasilitas->kategori->name ?? 'Kategori fasilitas' }}</span>
                                            <h3 class="title title--3">{{ $report->fasilitas->name ?? 'Fasilitas tidak tersedia' }}</h3>
                                            <span class="muted location-inline">{{ $report->fasilitas->building ?? 'Lokasi belum tersedia' }}</span>
                                        </div>
                                        <div class="info-list">
                                            <div><span>No. Laporan</span><strong class="report-id">#{{ $report->id }}</strong></div>
                                            <div><span>Tanggal laporan</span><strong>{{ $report->created_at?->format('d M Y, H:i') ?? '—' }}</strong></div>
                                            <div><span>Tingkat kerusakan</span><strong>{{ $report->damage_level ? $report->damage_level . ' dari 5' : 'Belum ditentukan' }}</strong></div>
                                            <div><span>Pelapor</span><strong>{{ $report->user->name ?? '—' }}</strong></div>
                                            @if ($currentUser->role !== 'masyarakat')<div><span>Email pelapor</span><strong>{{ $report->user->email ?? '—' }}</strong></div>@endif
                                            <div><span>Petugas</span><strong>{{ $report->assignedTo->name ?? 'Belum ditugaskan' }}</strong></div>
                                            <div><span>Diverifikasi oleh</span><strong>{{ $report->verifiedBy->name ?? 'Belum diverifikasi' }}</strong></div>
                                        </div>
                                        <div class="description-block"><strong>Deskripsi kerusakan</strong><p style="white-space: pre-line">{{ $report->description }}</p></div>
                                        @if ($currentStatus === 'ditolak' && $report->rejection_reason)
                                            <div class="rejection-card"><strong>Alasan penolakan</strong><p>{{ $report->rejection_reason }}</p></div>
                                        @endif
                                        <div class="description-block">
                                            <strong>Foto bukti</strong>
                                            <div class="report-photo-gallery">
                                                @forelse ($report->photos as $photo)
                                                    <button type="button" aria-label="Buka foto laporan {{ $report->id }}" onclick="window.open('{{ route('reports.photos.show', [$report->id, $photo->id]) }}', '_blank', 'noopener')">
                                                        <img src="{{ route('reports.photos.show', [$report->id, $photo->id]) }}" alt="Foto kerusakan laporan {{ $report->id }}" loading="lazy">
                                                        <span aria-hidden="true">↗</span>
                                                    </button>
                                                @empty
                                                    <p class="muted">Belum ada foto yang dilampirkan.</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="panel report-location-panel" data-layer="Panel/Konten" data-layer-id="PEL-08-layer-11">
                                    <div class="panel-heading"><h2 class="title title--4">Lokasi Kerusakan</h2></div>
                                    <div class="panel-body">
                                        <div class="info-list">
                                            <div><span>Fasilitas</span><strong>{{ $report->fasilitas->name ?? '—' }}</strong></div>
                                            <div><span>Gedung</span><strong>{{ $report->fasilitas->building ?? '—' }}</strong></div>
                                        </div>
                                        @if ($report->fasilitas && $report->fasilitas->latitude !== null && $report->fasilitas->longitude !== null)
                                            <a class="button button--outline button--sm" href="https://www.google.com/maps?q={{ $report->fasilitas->latitude }},{{ $report->fasilitas->longitude }}" target="_blank" rel="noopener">Lihat lokasi di Google Maps</a>
                                        @else
                                            <p class="muted">Koordinat lokasi belum tersedia.</p>
                                        @endif
                                    </div>
                                </section>
                            </div>

                            <aside class="stack-form">
                                @if ($currentUser->role === 'admin' && $currentStatus === 'menunggu_verifikasi')
                                    <section class="panel">
                                        <div class="panel-heading"><div><h2 class="title title--4">Verifikasi Laporan</h2><p class="muted">Periksa laporan sebelum menyetujui atau menolaknya.</p></div></div>
                                        <div class="panel-body">
                                            <form method="POST" action="{{ route('admin.reports.verify', $report) }}" class="stack-form">
                                                @csrf<input type="hidden" name="decision" value="terverifikasi">
                                                <div class="field"><label for="damage_level">Tingkat Kerusakan</label><div class="select-wrap"><select name="damage_level" id="damage_level" required><option value="">Pilih tingkat kerusakan</option>@for ($level = 1; $level <= 5; $level++)<option value="{{ $level }}" @selected(old('damage_level') == $level)>{{ $level }} — Tingkat {{ $level }}</option>@endfor</select><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></div>@error('damage_level')<span class="field-hint--error">{{ $message }}</span>@enderror</div>
                                                <button class="button button--primary button--md" type="submit">Verifikasi Laporan</button>
                                            </form>
                                            <div class="description-block"><form method="POST" action="{{ route('admin.reports.verify', $report) }}" class="stack-form">
                                                @csrf<input type="hidden" name="decision" value="ditolak">
                                                <div class="field"><label for="rejection_reason">Alasan Penolakan</label><textarea id="rejection_reason" name="rejection_reason" rows="4" minlength="5" maxlength="1000" placeholder="Tuliskan alasan penolakan laporan...">{{ old('rejection_reason') }}</textarea>@error('rejection_reason')<span class="field-hint--error">{{ $message }}</span>@enderror</div>
                                                <button class="button button--outline button--md" type="submit" onclick="return confirm('Apakah Anda yakin ingin menolak laporan ini?')">Tolak Laporan</button>
                                            </form></div>
                                        </div>
                                    </section>
                                @elseif ($currentUser->role === 'admin')
                                    <section class="panel"><div class="panel-heading"><h2 class="title title--4">Informasi Tindakan</h2></div><div class="panel-body"><p class="muted">Laporan sudah diproses. Pengelolaan penugasan tersedia pada halaman Kelola Laporan.</p><a href="{{ route('admin.reports.index') }}" class="button button--primary button--md">Buka Kelola Laporan</a></div></section>
                                @endif

                                @if ($currentUser->role === 'petugas' && (int) $report->assigned_to === (int) $currentUser->id && in_array($currentStatus, ['terverifikasi', 'dalam_penanganan'], true))
                                    <section class="panel"><div class="panel-heading"><div><h2 class="title title--4">Penyelesaian Penanganan</h2><p class="muted">Isi catatan tindakan perbaikan yang telah dilakukan.</p></div></div><div class="panel-body"><form method="POST" action="{{ route('reports.progress', $report) }}" class="stack-form">
                                        @csrf
                                        <div class="field"><label for="note">Catatan Hasil Penanganan</label><textarea id="note" name="note" rows="5" minlength="5" maxlength="1000" placeholder="Jelaskan tindakan perbaikan yang telah dilakukan..." required>{{ old('note') }}</textarea>@error('note')<span class="field-hint--error">{{ $message }}</span>@enderror</div>
                                        <button class="button button--primary button--md" type="submit" onclick="return confirm('Tandai laporan ini sebagai selesai?')">Tandai Laporan Selesai</button>
                                    </form></div></section>
                                @elseif ($currentUser->role === 'petugas' && $currentStatus === 'selesai')
                                    <section class="panel"><div class="panel-heading"><h2 class="title title--4">Penanganan Selesai</h2></div><div class="panel-body"><p class="muted">Laporan ini telah ditandai selesai.</p></div></section>
                                @endif

                                <section class="panel">
                                    <div class="panel-heading"><h2 class="title title--4">Riwayat Status</h2></div>
                                    <div class="panel-body">
                                        <div class="timeline">
                                            @forelse ($report->statusLogs->sortBy('changed_at') as $log)
                                                <div class="timeline-item {{ $loop->last ? 'is-current' : '' }}">
                                                    <span class="timeline-dot" aria-hidden="true">•</span>
                                                    <div class="timeline-content">
                                                        <div class="timeline-date">{{ $log->changed_at?->format('d M Y, H:i') ?? '—' }}</div>
                                                        <span class="badge {{ $statusClasses[$log->new_status] ?? 'badge--waiting' }}">{{ $statusLabels[$log->new_status] ?? ucwords(str_replace('_', ' ', $log->new_status)) }}</span>
                                                        @if ($log->note)<p>{{ $log->note }}</p>@endif
                                                        <span class="muted">{{ $log->changedBy->name ?? 'Sistem' }}</span>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="muted">Belum ada riwayat perubahan status.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </section>
                            </aside>
                        </div>
                    </div>
                </div>
            </main>
@if ($currentUser->role === 'masyarakat')
        @include('layouts.partials.footer-pelapor')
        @include('layouts.partials.navigasi-mobile')
    </div>
@else
            @if ($currentUser->role === 'admin')
                @include('layouts.partials.footer-admin')
            @elseif ($currentUser->role === 'petugas')
                @include('layouts.partials.footer-petugas')
            @else
                @include('layouts.partials.footer-koordinator')
            @endif
        </div>
    </div>
@endif
