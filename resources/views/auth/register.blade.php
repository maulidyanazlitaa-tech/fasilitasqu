@extends('layouts.fasilitasqu')

@section('title', 'Daftar — FasilitasQu')

@section('content')
<div class="login-page" data-screen="Registrasi Masyarakat">
    <aside class="login-brand-panel">
        <a class="text-link logo logo--light" href="{{ route('login') }}">
            <span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span>
        </a>
        <div class="login-brand-content">
            <div class="eyebrow">
                <span class="accent-dot"></span>KAMPUS NYAMAN, DIMULAI DARI KITA
            </div>
            <h2 class="title title--2">Bergabung untuk<br>mengubah kampus.</h2>
        </div>
    </aside>

    <main class="login-form-panel">
        <div class="login-form-content">
            <div class="eyebrow">DAFTAR AKUN BARU</div>
            <h1 class="title title--1">Daftar sebagai Masyarakat</h1>
            <p class="muted">Buat akun untuk mulai melaporkan fasilitas kampus.</p>

            @if ($errors->any())
                <div class="alert alert--error" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('register.process') }}" method="POST">
                @csrf

                <div class="field">
                    <label for="name">Nama Lengkap</label>
                    <div class="input-wrap">
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            autocomplete="name" placeholder="Nama lengkap Anda"
                            minlength="3" maxlength="255" required autofocus>
                    </div>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <div class="input-wrap">
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            autocomplete="email" placeholder="nama@unja.ac.id"
                            maxlength="255" required>
                    </div>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="input-wrap">
                        <input type="password" id="password" name="password"
                            autocomplete="new-password" placeholder="Minimal 8 karakter"
                            minlength="8" required>
                    </div>
                </div>

                <div class="field">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <div class="input-wrap">
                        <input type="password" id="password_confirmation"
                            name="password_confirmation" autocomplete="new-password"
                            placeholder="Ulangi password" minlength="8" required>
                    </div>
                </div>

                <button class="button button--primary button--lg login-submit" type="submit">
                    Daftar
                </button>
            </form>

            <p class="login-demo-note">
                Sudah punya akun?
                <a class="text-link" href="{{ route('login') }}">Masuk sekarang</a>
            </p>
        </div>
        <div class="login-footer">
            <span>© {{ date('Y') }} FasilitasQu</span>
        </div>
    </main>
</div>
@endsection
