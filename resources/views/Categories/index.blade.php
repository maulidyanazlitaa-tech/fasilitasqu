@extends('layouts.fasilitasqu')

@section('title', 'ADM-09 Kelola Kategori — FasilitasQu')
@section('page-code', 'ADM-09')

@section('content')
<div class="dashboard-app">
    @include('layouts.partials.sidebar-admin')
    <div class="dashboard-body">
        @include('layouts.partials.topbar-admin')
        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-09-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-09 Kelola Kategori — Desktop">
                    <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-09-layer-7">
                        <div>
                            <h1 class="title title--1" data-layer="Teks/Judul Utama — Kelola Kategori" data-layer-id="ADM-09-layer-8">Kelola Kategori</h1>
                            <p class="muted">Atur kategori fasilitas dan bobot dampaknya dalam perhitungan prioritas.</p>
                        </div>
                        <div class="page-heading-actions">
                            <a class="button button--primary button--md" href="{{ route('admin.categories.create') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                Tambah Kategori
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert" role="status">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert" role="alert"><div><strong>Periksa kembali kategori.</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>
                    @endif

                    <div class="category-weight-note">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                        <p>Bobot dampak (D) berkisar <strong>1–5</strong>. Semakin tinggi bobot, semakin besar dampak kerusakan terhadap aktivitas kampus.</p>
                    </div>

                    <div class="panel">
                        <form class="filter-bar" method="GET" action="{{ route('admin.categories.index') }}">
                            <div class="field search-field">
                                <label class="visually-hidden" for="category-search">Cari kategori</label>
                                <div class="input-wrap">
                                    <svg class="field-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
                                    <input id="category-search" class="has-icon" type="search" name="search" value="{{ request('search') }}" placeholder="Cari nama kategori..." aria-label="Cari nama kategori">
                                </div>
                            </div>
                            <button class="button button--outline button--sm" type="submit">Cari</button>
                            @if (request()->filled('search'))
                                <a class="button button--ghost button--sm" href="{{ route('admin.categories.index') }}">Reset</a>
                            @endif
                        </form>

                        <div class="table-scroll" data-layer="Tabel" data-layer-id="ADM-09-layer-10">
                            <table class="data-table">
                                <thead><tr><th>Nama Kategori</th><th>Bobot Dampak (D)</th><th>Jumlah Fasilitas</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        @php($weight = max(1, min(5, (int) ceil((float) $category->severity_weight))))
                                        <tr>
                                            <td><div class="table-person"><span class="icon-box" aria-hidden="true">#</span><strong>{{ $category->name }}</strong></div></td>
                                            <td><div class="weight-meter">@for ($point = 1; $point <= 5; $point++)<span @class(['filled' => $point <= $weight])></span>@endfor<strong>{{ number_format((float) $category->severity_weight, 2) }}</strong><span>/ 5</span></div></td>
                                            <td>{{ $category->facilities_count }} fasilitas</td>
                                            <td><div class="page-heading-actions">
                                                <a class="button button--outline button--sm" href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button button--ghost button--sm" type="submit">Hapus</button>
                                                </form>
                                            </div></td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="muted">Belum ada kategori fasilitas.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <span>Menampilkan {{ $categories->firstItem() ?? 0 }}–{{ $categories->lastItem() ?? 0 }} dari {{ $categories->total() }} kategori</span>
                            <div>
                                <span>Halaman {{ $categories->currentPage() }} / {{ max(1, $categories->lastPage()) }}</span>
                                @if ($categories->previousPageUrl())<a class="button button--outline button--sm" href="{{ $categories->previousPageUrl() }}" rel="prev">Sebelumnya</a>@endif
                                @if ($categories->nextPageUrl())<a class="button button--outline button--sm" href="{{ $categories->nextPageUrl() }}" rel="next">Berikutnya</a>@endif
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
