@extends('layouts.fasilitasqu')

@section('title', 'ADM-08 Tambah Fasilitas — FasilitasQu')
@section('page-code', 'ADM-08')

@section('content')
<div class="dashboard-app">
    @include('layouts.partials.sidebar-admin')

    <div class="dashboard-body">
        @include('layouts.partials.topbar-admin')

        <main class="dashboard-main" data-layer="Konten/Halaman Dashboard" data-layer-id="ADM-08-layer-6">
            <div class="page-enter">
                <div data-screen="ADM-08 Form Tambah Fasilitas — Desktop">
                    <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="ADM-08-layer-7">
                        <div>
                            <h1 class="title title--1" data-layer="Teks/Judul Utama — Tambah Fasilitas" data-layer-id="ADM-08-layer-8">Tambah Fasilitas</h1>
                            <p class="muted">Daftarkan fasilitas kampus beserta lokasi dan kondisinya.</p>
                        </div>
                        <div class="page-heading-actions">
                            <a class="button button--outline button--md" href="{{ route('admin.facilities.index') }}">Kembali ke Kelola Fasilitas</a>
                        </div>
                    </div>

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

                    <form action="{{ route('admin.facilities.store') }}" method="POST" data-layer="Form" data-layer-id="ADM-08-layer-16">
                        @csrf
                        <div class="form-layout">
                            <div class="form-main panel">
                                <section class="form-section" data-layer="Form/Bagian" data-layer-id="ADM-08-layer-20">
                                    <div class="form-section-heading">
                                        <span class="form-step">01</span>
                                        <div>
                                            <h2 class="title title--4">Informasi Fasilitas</h2>
                                            <p class="muted">Nama dan kategori fasilitas yang didaftarkan.</p>
                                        </div>
                                    </div>
                                    <div class="form-section-content stack-form">
                                        <div class="field">
                                            <label for="name">Nama Fasilitas</label>
                                            <div class="input-wrap">
                                                <input id="name" name="name" type="text" value="{{ old('name') }}" maxlength="150" placeholder="Contoh: Toilet Gedung A Lt.2" required aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}">
                                            </div>
                                            @error('name')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="field">
                                            <label for="category_id">Kategori</label>
                                            <div class="select-wrap">
                                                <select id="category_id" name="category_id" required aria-invalid="{{ $errors->has('category_id') ? 'true' : 'false' }}">
                                                    <option value="">Pilih kategori fasilitas</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                                            </div>
                                            @error('category_id')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </section>

                                <section class="form-section" data-layer="Form/Bagian" data-layer-id="ADM-08-layer-21">
                                    <div class="form-section-heading">
                                        <span class="form-step">02</span>
                                        <div>
                                            <h2 class="title title--4">Lokasi dan Kondisi</h2>
                                            <p class="muted">Tentukan gedung, koordinat, dan kondisi saat ini.</p>
                                        </div>
                                    </div>
                                    <div class="form-section-content stack-form">
                                        <div class="field">
                                            <label for="building">Gedung / Lokasi</label>
                                            <div class="input-wrap">
                                                <input id="building" name="building" type="text" value="{{ old('building') }}" maxlength="150" placeholder="Contoh: Gedung A" required aria-invalid="{{ $errors->has('building') ? 'true' : 'false' }}">
                                            </div>
                                            @error('building')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="two-inputs">
                                            <div class="field">
                                                <label for="latitude">Latitude</label>
                                                <div class="input-wrap"><input id="latitude" name="latitude" type="number" step="any" min="-90" max="90" value="{{ old('latitude') }}" placeholder="-1.610248" aria-invalid="{{ $errors->has('latitude') ? 'true' : 'false' }}"></div>
                                                @error('latitude')<span class="field-hint--error">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="field">
                                                <label for="longitude">Longitude</label>
                                                <div class="input-wrap"><input id="longitude" name="longitude" type="number" step="any" min="-180" max="180" value="{{ old('longitude') }}" placeholder="103.520641" aria-invalid="{{ $errors->has('longitude') ? 'true' : 'false' }}"></div>
                                                @error('longitude')<span class="field-hint--error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label for="condition_status">Kondisi Fasilitas</label>
                                            <div class="input-wrap"><input id="condition_status" name="condition_status" type="text" value="{{ old('condition_status', 'baik') }}" maxlength="30" placeholder="Contoh: baik" required aria-invalid="{{ $errors->has('condition_status') ? 'true' : 'false' }}"></div>
                                            @error('condition_status')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="field">
                                            <label for="description">Deskripsi <span class="muted">(opsional)</span></label>
                                            <textarea id="description" name="description" rows="3" placeholder="Informasi tambahan tentang fasilitas..." aria-invalid="{{ $errors->has('description') ? 'true' : 'false' }}">{{ old('description') }}</textarea>
                                            @error('description')<span class="field-hint--error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <aside class="form-aside">
                                <div class="tips-card" data-layer="Card/Tips" data-layer-id="ADM-08-layer-22">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                                    <h2 class="title title--4">Data fasilitas yang akurat</h2>
                                    <ul>
                                        <li>Gunakan nama fasilitas yang mudah dikenali.</li>
                                        <li>Isi lokasi gedung secara konsisten.</li>
                                        <li>Koordinat membantu pemetaan fasilitas.</li>
                                    </ul>
                                </div>
                            </aside>
                        </div>

                        <div class="form-bottom" data-layer="Form/Aksi" data-layer-id="ADM-08-layer-23">
                            <span>Pastikan informasi yang dimasukkan sudah benar.</span>
                            <div class="button-row">
                                <a class="button button--ghost button--md" href="{{ route('admin.facilities.index') }}">Batal</a>
                                <button class="button button--primary button--lg" type="submit">Simpan Fasilitas</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        @include('layouts.partials.footer-admin')
    </div>
</div>
@endsection
