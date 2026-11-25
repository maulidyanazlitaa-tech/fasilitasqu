@extends('layouts.fasilitasqu')

@section('title', 'ADM-09 Edit Kategori — FasilitasQu')
@section('page-code', 'ADM-09')

@section('content')
<div class="dashboard-app">
    @include('layouts.partials.sidebar-admin')
    <div class="dashboard-body">
        @include('layouts.partials.topbar-admin')
        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-09-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-09 Edit Kategori — Desktop">
                    <div class="breadcrumb"><span><a class="text-link" href="{{ route('dashboard.admin') }}">Dashboard</a></span><span aria-hidden="true">›</span><span><a class="text-link" href="{{ route('admin.categories.index') }}">Kelola Kategori</a></span><span aria-hidden="true">›</span><span>Edit Kategori</span></div>
                    <div class="page-heading">
                        <div><h1 class="title title--1">Edit Kategori</h1><p class="muted">Perbarui nama dan bobot dampak kategori {{ $category->name }}.</p></div>
                        <div class="page-heading-actions"><a class="button button--outline button--md" href="{{ route('admin.categories.index') }}">Kembali ke Kategori</a></div>
                    </div>

                    @if ($errors->any())
                        <div class="alert" role="alert"><div><strong>Periksa kembali data kategori.</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>
                    @endif

                    <div class="form-layout">
                        <section class="panel form-main">
                            <form class="stack-form" action="{{ route('admin.categories.update', $category) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <section class="form-section">
                                    <div class="form-section-heading"><span class="form-step">01</span><div><h2 class="title title--4">Informasi Kategori</h2><p class="muted">Sesuaikan nama kategori dan bobot dampaknya.</p></div></div>
                                    <div class="form-section-content">
                                        <div class="field">
                                            <label for="name">Nama Kategori</label>
                                            <div class="input-wrap @error('name') input-wrap--error @enderror"><input id="name" name="name" type="text" value="{{ old('name', $category->name) }}" maxlength="100" required aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}"></div>
                                            @error('name')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="field">
                                            <label for="severity_weight">Bobot Dampak</label>
                                            <div class="input-wrap @error('severity_weight') input-wrap--error @enderror"><input id="severity_weight" name="severity_weight" type="number" value="{{ old('severity_weight', $category->severity_weight) }}" min="1" max="5" step="0.01" required aria-invalid="{{ $errors->has('severity_weight') ? 'true' : 'false' }}"></div>
                                            <span class="field-hint">Nilai bobot antara 1,00 sampai 5,00.</span>
                                            @error('severity_weight')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </section>
                                <div class="form-section-content modal-actions">
                                    <a class="button button--outline button--md" href="{{ route('admin.categories.index') }}">Batal</a>
                                    <button class="button button--primary button--md" type="submit">Simpan Perubahan</button>
                                </div>
                            </form>
                        </section>
                        <aside class="panel"><div class="panel-heading"><h2 class="title title--4">Tentang Bobot Dampak</h2></div><div class="panel-body"><p class="muted">Bobot dampak (D) berkisar 1–5. Semakin tinggi bobot, semakin besar dampak kerusakan terhadap aktivitas kampus.</p></div></aside>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.partials.footer-admin')
    </div>
</div>
@endsection
