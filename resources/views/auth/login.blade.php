
@extends('layouts.fasilitasqu')

@section('title', 'Masuk — FasilitasQu')
@section('page-code', 'PUB-02')

@section('content')
<div class="login-page" data-screen="PUB-02 Login">

    {{-- PANEL IDENTITAS --}}
    <aside class="login-brand-panel">
        <a class="text-link logo logo--light" href="{{ route('login') }}">
            <span class="logo-mark">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                </svg>
            </span>
            <span>
                Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span>
            </span>
        </a>

        <div class="login-brand-content">
            <div class="eyebrow">
                <span class="accent-dot"></span>
                KAMPUS NYAMAN, DIMULAI DARI KITA
            </div>

            <h2 class="title title--2">
                Satu pintu untuk<br>
                laporan fasilitas<br>
                kampus<span class="hero-heading-period">.</span>
            </h2>

            <p>
                Sampaikan kepedulianmu.<br>
                Kami bantu wujudkan perubahannya.
            </p>

            <div class="login-illustration">
                <svg viewBox="0 0 520 260" fill="none"
                    aria-label="Ilustrasi gedung kampus">
                    <path d="M20 230H500M75 230V100L175 55L275 100V230M275 140L400 95L460 125V230M100 230V125H250V230M128 230V180H164V230M185 230V180H221V230M300 230V157H435V230M150 66V31H200V66M164 31V10H195V31"></path>
                    <path d="M115 135H142V155H115ZM158 135H185V155H158ZM201 135H228V155H201ZM315 172H344V195H315ZM360 172H389V195H360ZM405 172H427V195H405Z"></path>
                    <path d="M45 230V174M28 190C7 157 35 130 47 150C66 120 88 166 67 190ZM480 230V180M465 190C446 165 463 144 480 156C494 142 516 175 493 190Z"></path>
                </svg>

                <div class="login-float-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <div>
                        <strong>Setiap laporan berarti.</strong>
                        <span>Setiap perubahan dapat dipantau.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-brand-footer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10 12h4"></path>
                <path d="M10 8h4"></path>
                <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
            </svg>
            <span>Program Studi Informatika · Universitas Jambi</span>
        </div>
    </aside>

    {{-- PANEL FORM LOGIN --}}
    <main class="login-form-panel">

        <div class="mobile-login-logo">
            <a class="text-link logo" href="{{ route('login') }}">
                <span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span>
            </a>
        </div>

        <div class="login-form-content">

            <div class="eyebrow">SELAMAT DATANG KEMBALI</div>

            <h1 class="title title--1">Masuk ke FasilitasQu</h1>

            <p class="muted">
                Satu langkah lebih dekat ke kampus yang lebih baik.
            </p>

            {{-- PESAN BERHASIL --}}
            @if (session('success'))
                <div class="alert alert--success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            {{-- PESAN ERROR --}}
            @if ($errors->any())
                <div class="alert alert--error" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                {{-- EMAIL --}}
                <div class="field">
                    <label for="email">Email</label>
                    <div class="input-wrap">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="username"
                            placeholder="nama@unja.ac.id"
                            required
                            autofocus
                        >
                    </div>
                </div>

                {{-- PASSWORD --}}
                <div class="password-field">
                    <div class="field">
                        <label for="password">Password</label>
                        <div class="input-wrap">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                autocomplete="current-password"
                                placeholder="Masukkan password Anda"
                                required
                            >
                        </div>
                    </div>
                </div>

                {{-- INGAT SAYA --}}
                <div class="field">
                    <label>
                        <input type="checkbox" name="remember" value="1">
                        Ingat saya
                    </label>
                </div>

                {{-- LOGIN UMUM BERDASARKAN ROLE AKUN --}}
                <button
                    class="button button--primary button--lg login-submit"
                    type="submit">
                    Masuk
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>

                {{-- PEMILIHAN ROLE --}}
                <div class="demo-divider">
                    <span></span>
                    MASUK SESUAI PERAN
                    <span></span>
                </div>

                <div class="demo-role-grid">

                    {{-- MASYARAKAT --}}
                    <button
                        class="button button--outline button--md"
                        type="submit"
                        name="login_as"
                        value="masyarakat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="5"></circle>
                            <path d="M20 21a8 8 0 0 0-16 0"></path>
                        </svg>
                        Masuk sebagai Pelapor
                        <span aria-hidden="true">↗</span>
                    </button>

                    {{-- ADMIN --}}
                    <button
                        class="button button--outline button--md"
                        type="submit"
                        name="login_as"
                        value="admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Masuk sebagai Admin
                        <span aria-hidden="true">↗</span>
                    </button>

                    {{-- PETUGAS --}}
                    <button
                        class="button button--outline button--md"
                        type="submit"
                        name="login_as"
                        value="petugas">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.1-3.1a6 6 0 0 1-8.3 7.1l-7.9 7.9a2 2 0 0 1-2.8-2.8l7.9-7.9a6 6 0 0 1 7.1-8.3z"></path>
                        </svg>
                        Masuk sebagai Petugas
                        <span aria-hidden="true">↗</span>
                    </button>

                    {{-- KOORDINATOR --}}
                    <button
                        class="button button--outline button--md"
                        type="submit"
                        name="login_as"
                        value="koordinator">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3v18h18"></path>
                            <path d="m19 9-5 5-4-4-5 5"></path>
                        </svg>
                        Masuk sebagai Koordinator
                        <span aria-hidden="true">↗</span>
                    </button>

                </div>

                <p class="login-demo-note">
                    Pilih peran sesuai akun yang terdaftar.
                    Masukkan email dan password untuk melanjutkan.
                </p>

            </form>
        </div>

        <div class="login-footer">
            <span>© {{ date('Y') }} FasilitasQu</span>
        </div>

    </main>
</div>
@endsection
