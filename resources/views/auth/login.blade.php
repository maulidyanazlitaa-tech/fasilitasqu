@extends('layouts.fasilitasqu')

@section('title', 'PUB-02 Login — FasilitasQu')
@section('page-code', 'PUB-02')

@section('content')

    <!-- PUB-02 Login — setiap data-layer adalah layer HTML yang dapat diperiksa. -->
    <div class="login-page" data-screen="PUB-02 Login — Desktop / Mobile">
      <aside class="login-brand-panel" data-layer="Panel/Identitas" data-layer-id="PUB-02-layer-1">
        <a class="text-link logo logo--light" href="PUB-01.html"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a>
        <div class="login-brand-content">
          <div class="eyebrow">
            <span class="accent-dot"></span>KAMPUS NYAMAN, DIMULAI DARI KITA
          </div>
          <h2 class="title title--2" data-layer="Teks/Judul Section — Satu pintu untuklaporan fasilitaskampus." data-layer-id="PUB-02-layer-2">
            Satu pintu untuk<br>laporan fasilitas<br>kampus<span class="hero-heading-period">.</span>
          </h2>
          <p>Sampaikan kepedulianmu.<br>Kami bantu wujudkan perubahannya.</p>
          <div class="login-illustration">
            <svg viewBox="0 0 520 260" fill="none" aria-label="Ilustrasi gedung kampus">
              <path d="M20 230H500M75 230V100L175 55L275 100V230M275 140L400 95L460 125V230M100 230V125H250V230M128 230V180H164V230M185 230V180H221V230M300 230V157H435V230M150 66V31H200V66M164 31V10H195V31"></path>
              <path d="M115 135H142V155H115ZM158 135H185V155H158ZM201 135H228V155H201ZM315 172H344V195H315ZM360 172H389V195H360ZM405 172H427V195H405Z"></path>
              <path d="M45 230V174M28 190C7 157 35 130 47 150C66 120 88 166 67 190ZM480 230V180M465 190C446 165 463 144 480 156C494 142 516 175 493 190Z"></path>
            </svg>
            <div class="login-float-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                <path d="m9 12 2 2 4-4"></path>
              </svg>
              <div>
                <strong>Setiap laporan berarti.</strong><span>Setiap perubahan dapat dipantau.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="login-brand-footer">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-complex lucide-building-2" aria-hidden="true">
            <path d="M10 12h4"></path>
            <path d="M10 8h4"></path>
            <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
            <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
            <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path></svg><span>Program Studi Informatika · Universitas Jambi</span>
        </div>
      </aside>
      <main class="login-form-panel" data-layer="Form/Login" data-layer-id="PUB-02-layer-3">
        <a class="text-link login-back" href="PUB-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left" aria-hidden="true">
            <path d="m12 19-7-7 7-7"></path>
            <path d="M19 12H5"></path></svg>Kembali ke Beranda</a>
        <div class="mobile-login-logo">
          <a class="text-link logo" href="PUB-01.html"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a>
        </div>
        <div class="login-form-content">
          <div class="eyebrow">SELAMAT DATANG KEMBALI</div>
          <h1 class="title title--1" data-layer="Teks/Judul Utama — Masuk ke FasilitasQu" data-layer-id="PUB-02-layer-4">
            Masuk ke FasilitasQu
          </h1>
          <p class="muted">Satu langkah lebih dekat ke kampus yang lebih baik.</p>
          <form novalidate="" data-layer="Form" data-layer-id="PUB-02-layer-5">
            <div class="field" data-layer="Form/Isian — Email" data-layer-id="PUB-02-layer-6">
              <label for="_r_7_">Email</label>
              <div class="input-wrap">
                <input autocomplete="email" placeholder="nama@unja.ac.id" id="_r_7_" class="" aria-invalid="false" type="email" value="" data-field="0">
              </div>
            </div>
            <div class="password-field">
              <div class="field" data-layer="Form/Isian — Password" data-layer-id="PUB-02-layer-7">
                <label for="_r_8_">Password</label>
                <div class="input-wrap">
                  <input autocomplete="current-password" placeholder="Masukkan password Anda" id="_r_8_" class="" aria-invalid="false" type="password" value="" data-field="1">
                </div>
              </div>
              <button class="button button--ghost button--md" type="button" aria-label="Tampilkan password">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true">
                  <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </button>
            </div>
            <button class="button button--primary button--lg login-submit" type="submit">
              Masuk
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </button>
          </form>
          <div class="demo-divider"><span></span>Khusus demo prototype<span></span></div>
          <div class="demo-role-grid" data-layer="Navigasi/Empat Peran" data-layer-id="PUB-02-layer-8">
            <a class="button button--outline button--md" href="PEL-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round lucide-user-2" aria-hidden="true">
                <circle cx="12" cy="8" r="5"></circle>
                <path d="M20 21a8 8 0 0 0-16 0"></path>
              </svg>
              Masuk sebagai Pelapor
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                <path d="M7 7h10v10"></path>
                <path d="M7 17 17 7"></path></svg></a><a class="button button--outline button--md" href="ADM-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                <path d="m9 12 2 2 4-4"></path>
              </svg>
              Masuk sebagai Admin
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                <path d="M7 7h10v10"></path>
                <path d="M7 17 17 7"></path></svg></a><a class="button button--outline button--md" href="PTG-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
              </svg>
              Masuk sebagai Petugas
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                <path d="M7 7h10v10"></path>
                <path d="M7 17 17 7"></path></svg></a><a class="button button--outline button--md" href="KRD-01.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined" aria-hidden="true">
                <path d="M12 16v5"></path>
                <path d="M16 14.639V21"></path>
                <path d="M20 10.656V21"></path>
                <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"></path>
                <path d="M4 18.463V21"></path>
                <path d="M8 14.656V21"></path>
              </svg>
              Masuk sebagai Koordinator
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
                <path d="M7 7h10v10"></path>
                <path d="M7 17 17 7"></path></svg></a>
          </div>
          <p class="login-demo-note">
            Prototype interaktif. Gunakan tombol peran untuk menjelajahi<br class="desktop-break">
            alur tanpa akun atau data pribadi.
          </p>
        </div>
        <div class="login-footer">
          <span>© 2026 FasilitasQu</span><a class="text-link" href="../index.html#alur">Peta alur prototype
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
              <path d="M7 7h10v10"></path>
              <path d="M7 17 17 7"></path></svg></a>
        </div>
      </main>
    </div>
  


@endsection
