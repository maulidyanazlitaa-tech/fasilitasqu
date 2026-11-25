@extends('layouts.fasilitasqu')

@section('title', 'PEL-05 Form Laporan Kerusakan — FasilitasQu')
@section('page-code', 'PEL-05')

@section('content')
<div class="reporter-app">
    @include('layouts.partials.navbar-pelapor')

    <main class="reporter-main" data-layer="Konten/Halaman Pelapor" data-layer-id="PEL-05-layer-3">
        <div class="page-enter">
            <div data-screen="PEL-05 Form Laporan Kerusakan — Desktop / Mobile">
                <div class="breadcrumb" data-layer="Navigasi/Breadcrumb" data-layer-id="PEL-05-layer-4">
                    <span><a class="text-link" href="{{ route('dashboard.masyarakat') }}">Beranda</a></span>
                    <span>Laporkan Kerusakan</span>
                </div>

                <div class="page-heading" data-layer="Header/Judul Halaman" data-layer-id="PEL-05-layer-5">
                    <div>
                        <h1 class="title title--1" data-layer="Teks/Judul Utama — Laporkan Kerusakan" data-layer-id="PEL-05-layer-6">Laporkan Kerusakan</h1>
                        <p class="muted">Ceritakan kerusakan yang kamu temukan. Laporanmu membantu kampus menjadi lebih baik.</p>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert--error" role="alert" aria-live="assertive">
                        <strong>Periksa kembali laporanmu:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($facilities->isEmpty())
                    <div class="alert" role="status" aria-live="polite">
                        Fasilitas belum tersedia. Silakan hubungi admin atau tunggu sampai fasilitas ditambahkan sebelum membuat laporan.
                    </div>
                @endif

                <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data" data-layer="Form" data-layer-id="PEL-05-layer-7">
                    @csrf
                    <div class="form-layout">
                        <div class="form-main panel" data-layer="Panel/Konten" data-layer-id="PEL-05-layer-8">
                            <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05-layer-9">
                                <div class="form-section-heading">
                                    <span class="form-step">01</span>
                                    <div>
                                        <h4 class="title title--4">Fasilitas</h4>
                                        <p class="muted">Pilih fasilitas yang ingin dilaporkan.</p>
                                    </div>
                                </div>
                                <div class="form-section-content">
                                    <div class="field">
                                        <label for="facility_id">Fasilitas yang dilaporkan</label>
                                        @if ($facilities->isEmpty())
                                            <p class="field-hint--error" role="status">Belum ada fasilitas yang tersedia untuk dilaporkan. Silakan hubungi admin atau tunggu fasilitas ditambahkan.</p>
                                        @endif
                                        <div class="select-wrap">
                                            <select id="facility_id" name="facility_id" aria-invalid="{{ $errors->has('facility_id') ? 'true' : 'false' }}" required>
                                                <option value="">Pilih fasilitas kampus</option>
                                                @foreach ($facilities as $facility)
                                                    <option value="{{ $facility->id }}" @selected(old('facility_id', $selectedFacilityId) == $facility->id)>
                                                        {{ $facility->name }} — {{ $facility->building }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('facility_id')<small class="field-error">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                            </section>

                            <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05-layer-12">
                                <div class="form-section-heading">
                                    <span class="form-step">02</span>
                                    <div>
                                        <h4 class="title title--4">Deskripsi kerusakan</h4>
                                        <p class="muted">Jelaskan kondisi dan bagian yang mengalami kerusakan.</p>
                                    </div>
                                </div>
                                <div class="form-section-content">
                                    <div class="field">
                                        <label for="description">Deskripsi</label>
                                        <textarea id="description" name="description" aria-invalid="{{ $errors->has('description') ? 'true' : 'false' }}" placeholder="Contoh: Pintu toilet tidak bisa ditutup karena engselnya rusak..." rows="4" maxlength="1000" required>{{ old('description') }}</textarea>
                                    </div>
                                    <div class="character-counter">Minimal 10 karakter.</div>
                                    @error('description')<small class="field-error">{{ $message }}</small>@enderror
                                </div>
                            </section>

                            <section class="form-section" data-layer="Form/Bagian" data-layer-id="PEL-05-layer-18">
                                <div class="form-section-heading">
                                    <span class="form-step">03</span>
                                    <div>
                                        <h4 class="title title--4">Foto bukti</h4>
                                        <p class="muted">Tambahkan hingga 5 foto JPG, PNG, atau WEBP. Maksimal 5 MB per foto.</p>
                                    </div>
                                </div>
                                <div class="form-section-content">
                                    <label class="upload-dropzone" for="photos">
                                        <span class="upload-icon" aria-hidden="true">＋</span>
                                        <span class="button button--ghost button--md">Klik untuk unggah</span>
                                        <span class="muted">Pilih satu atau beberapa foto</span>
                                    </label>
                                    <input class="visually-hidden" id="photos" name="photos[]" type="file" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp" multiple>
                                    @error('photos')<small class="field-error">{{ $message }}</small>@enderror
                                    @error('photos.*')<small class="field-error">{{ $message }}</small>@enderror
                                </div>
                            </section>
                        </div>

                        <aside class="form-aside" data-layer="Panel/Samping" data-layer-id="PEL-05-layer-26">
                            <div class="tips-card" data-layer="Card/Tips — Laporan yang baik, lebih cepat ditindaklanjuti." data-layer-id="PEL-05-layer-30">
                                <h4 class="title title--4">Laporan yang baik, lebih cepat ditindaklanjuti.</h4>
                                <ul>
                                    <li>Pastikan fasilitas sesuai.</li>
                                    <li>Jelaskan kerusakan secara singkat dan jelas.</li>
                                    <li>Gunakan foto yang terang dan fokus.</li>
                                    <li>Hindari menyertakan data pribadi.</li>
                                </ul>
                            </div>
                            <p class="privacy-note">Laporan akan diperiksa oleh admin sebelum ditindaklanjuti.</p>
                        </aside>
                    </div>

                    <div class="form-bottom" data-layer="Form/Aksi" data-layer-id="PEL-05-layer-32">
                        <span>Pastikan semua informasi sudah benar.</span>
                        <div class="button-row">
                            <a class="button button--ghost button--md" href="{{ route('reports.index') }}">Batal</a>
                            <button class="button button--primary button--lg" type="submit" @disabled($facilities->isEmpty())>Kirim Laporan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('layouts.partials.footer-pelapor')
    @include('layouts.partials.navigasi-mobile')
</div>
@endsection
