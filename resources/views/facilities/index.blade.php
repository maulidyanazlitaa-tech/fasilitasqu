@extends('layouts.fasilitasqu')

@section('title', 'ADM-07 Kelola Fasilitas — FasilitasQu')
@section('page-code', 'ADM-07')

@section('content')
@php
    $conditionPresentation = static function ($condition): array {
        $normalized = strtolower((string) $condition);

        if (in_array($normalized, ['baik', 'bagus', 'normal'], true)) {
            return ['condition--good', 'Baik'];
        }

        if (str_contains($normalized, 'perbaikan') || str_contains($normalized, 'maintenance')) {
            return ['condition--repair', ucwords(str_replace('_', ' ', $normalized))];
        }

        if (in_array($normalized, ['rusak', 'broken'], true)) {
            return ['condition--broken', 'Rusak'];
        }

        return ['condition--repair', ucwords(str_replace('_', ' ', $normalized))];
    };
@endphp

<div class="dashboard-app">
    @include('layouts.partials.sidebar-admin')

    <div class="dashboard-body">
        @include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-07-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-07 Kelola Fasilitas — Desktop">
                    <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-07-layer-7">
                        <div>
                            <h1 class="title title--1" data-layer="Teks/Judul Utama — Kelola Fasilitas" data-layer-id="ADM-07-layer-8">Kelola Fasilitas</h1>
                            <p class="muted">Jaga informasi dan kondisi fasilitas kampus tetap akurat.</p>
                        </div>
                        <div class="page-heading-actions">
                            <a class="button button--primary button--md" href="{{ route('admin.facilities.create') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                Tambah Fasilitas
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert" role="status">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 4 4L19 6"></path></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert" role="alert">
                            <div>
                                <strong>Periksa kembali data fasilitas.</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="panel" data-layer="Panel/Konten" data-layer-id="ADM-07-layer-9">
                        <form method="GET" action="{{ route('admin.facilities.index') }}" class="filter-bar" data-layer="Kontrol/Pencarian &amp; Filter" data-layer-id="ADM-07-layer-10">
                            <div class="field search-field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-11">
                                <label class="visually-hidden" for="facility-search">Cari fasilitas</label>
                                <div class="input-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="field-icon" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
                                    <input id="facility-search" name="search" type="search" class="has-icon" placeholder="Cari fasilitas..." value="{{ request('search') }}">
                                </div>
                            </div>

                            <div class="field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-12">
                                <label class="visually-hidden" for="facility-category">Kategori</label>
                                <div class="select-wrap">
                                    <select id="facility-category" name="category_id" aria-label="Kategori">
                                        <option value="">Semua Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>

                            <div class="field" data-layer="Form/Isian" data-layer-id="ADM-07-layer-13">
                                <label class="visually-hidden" for="facility-condition">Kondisi</label>
                                <div class="input-wrap">
                                    <input id="facility-condition" name="condition_status" type="search" placeholder="Kondisi fasilitas" value="{{ request('condition_status') }}" aria-label="Kondisi fasilitas">
                                </div>
                            </div>

                            <div class="button-row">
                                <button class="button button--primary button--sm" type="submit">Cari</button>
                                <a class="button button--ghost button--sm" href="{{ route('admin.facilities.index') }}">Reset</a>
                            </div>
                        </form>

                        <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-07-layer-14">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Nama Fasilitas</th>
                                        <th>Kategori</th>
                                        <th>Gedung</th>
                                        <th>Koordinat</th>
                                        <th>Kondisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($facilities as $facility)
                                        @php([$conditionClass, $conditionLabel] = $conditionPresentation($facility->condition_status))
                                        <tr>
                                            <td>
                                                <div class="table-facility">
                                                    <strong>{{ $facility->name }}</strong>
                                                </div>
                                            </td>
                                            <td>{{ $facility->kategori?->name ?? '—' }}</td>
                                            <td class="no-wrap">{{ $facility->building }}</td>
                                            <td><span class="coordinate-value">{{ $facility->latitude ?? '—' }}<br>{{ $facility->longitude ?? '—' }}</span></td>
                                            <td><span class="badge condition {{ $conditionClass }}"><span class="badge-dot"></span>{{ $conditionLabel }}</span></td>
                                            <td>
                                                <div class="button-row">
                                                    <a class="button button--outline button--sm" href="{{ route('admin.facilities.edit', $facility) }}" aria-label="Edit {{ $facility->name }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path><path d="m15 5 4 4"></path></svg>
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.facilities.destroy', $facility) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button button--outline button--sm" type="submit">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="muted">
                                                Belum ada data fasilitas. Tambahkan fasilitas agar dapat dikelola di halaman ini.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="pagination" data-layer="Navigasi/Pagination" data-layer-id="ADM-07-layer-15">
                            <span class="muted">Menampilkan {{ $facilities->firstItem() ?? 0 }}–{{ $facilities->lastItem() ?? 0 }} dari {{ $facilities->total() }} data</span>
                            <div>
                                @if ($facilities->onFirstPage())
                                    <button class="button button--outline button--sm" type="button" aria-label="Halaman sebelumnya" disabled>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg>
                                    </button>
                                @else
                                    <a class="button button--outline button--sm" href="{{ $facilities->previousPageUrl() }}" aria-label="Halaman sebelumnya">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg>
                                    </a>
                                @endif
                                @for ($page = 1; $page <= $facilities->lastPage(); $page++)
                                    <a class="button button--{{ $page === $facilities->currentPage() ? 'primary' : 'ghost' }} button--sm" href="{{ $facilities->url($page) }}" aria-label="Halaman {{ $page }}" @if ($page === $facilities->currentPage()) aria-current="page" @endif>{{ $page }}</a>
                                @endfor
                                @if ($facilities->hasMorePages())
                                    <a class="button button--outline button--sm" href="{{ $facilities->nextPageUrl() }}" aria-label="Halaman berikutnya">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg>
                                    </a>
                                @else
                                    <button class="button button--outline button--sm" type="button" aria-label="Halaman berikutnya" disabled>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg>
                                    </button>
                                @endif
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
