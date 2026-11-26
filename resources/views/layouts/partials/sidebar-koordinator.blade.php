{{-- Komponen bersama: sidebar-koordinator. HTML dan CSS, tanpa React. --}}
<aside class="dashboard-sidebar" data-layer="Sidebar/Navigasi Peran" data-layer-id="KRD-01-layer-1">
        <a class="text-link logo logo--light" href="{{ asset('fasilitasqu/pages/PUB-01.html') }}"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a>
        <div class="sidebar-caption">RUANG KERJA KOORDINATOR</div>
        <nav aria-label="Navigasi Koordinator" data-layer="Navigasi" data-layer-id="KRD-01-layer-2">
          <a class="text-link is-active" href="{{ route('dashboard.koordinator') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined" aria-hidden="true">
              <path d="M12 16v5"></path>
              <path d="M16 14.639V21"></path>
              <path d="M20 10.656V21"></path>
              <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"></path>
              <path d="M4 18.463V21"></path>
              <path d="M8 14.656V21"></path></svg><span>Rekap Kondisi</span></a><a class="text-link" href="{{ asset('fasilitasqu/pages/KRD-02.html') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered" aria-hidden="true">
              <path d="M11 5h10"></path>
              <path d="M11 12h10"></path>
              <path d="M11 19h10"></path>
              <path d="M4 4h1v5"></path>
              <path d="M4 9h2"></path>
              <path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path></svg><span>Prioritas Perbaikan</span></a>
        </nav>
        <div class="sidebar-bottom">
          <div class="sidebar-university">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-complex lucide-building-2" aria-hidden="true">
              <path d="M10 12h4"></path>
              <path d="M10 8h4"></path>
              <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
              <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
              <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
            </svg>
            <div><strong>Universitas Jambi</strong><span>Fakultas Sains dan Teknologi</span></div>
          </div>
          <a class="text-link sidebar-logout" href="{{ asset('fasilitasqu/pages/PUB-01.html') }}"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out" aria-hidden="true">
              <path d="m16 17 5-5-5-5"></path>
              <path d="M21 12H9"></path>
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path></svg>Keluar
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true">
              <path d="M7 7h10v10"></path>
              <path d="M7 17 17 7"></path></svg></a>
        </div>
      </aside>
