{{-- Komponen bersama: navbar-pelapor. HTML dan CSS, tanpa React. --}}
<header class="reporter-navbar" data-layer="Header/Navbar Pelapor" data-layer-id="PEL-01-layer-1">
        <a class="text-link logo" href="{{ route('dashboard.masyarakat') }}"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a>
        <nav class="" aria-label="Navigasi Pelapor" data-layer="Navigasi" data-layer-id="PEL-01-layer-2">
          <a class="text-link is-active" href="{{ route('dashboard.masyarakat') }}">Beranda</a><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-02.html') }}">Fasilitas</a><a class="text-link" href="{{ asset('fasilitasqu/pages/PEL-03.html') }}">Peta</a><a class="text-link" href="{{ route('reports.index') }}">Laporan Saya</a>
        </nav>
        <div class="avatar-area">
          <button class="avatar-button" aria-expanded="false" aria-label="Menu akun Aulia Rahman" type="button">
            <span class="avatar">AR</span><span class="avatar-text"><strong>Aulia Rahman</strong><small>Pelapor</small></span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down" aria-hidden="true">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
          </button>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="avatar-area">@csrf<button type="submit" class="button button--ghost button--sm">Keluar</button></form><button class="button button--ghost button--md hamburger" aria-label="Menu navigasi" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu" aria-hidden="true">
            <path d="M4 5h16"></path>
            <path d="M4 12h16"></path>
            <path d="M4 19h16"></path>
          </svg>
        </button>
      </header>
