{{-- Komponen bersama: sidebar-petugas. HTML dan CSS, tanpa React. --}}
<aside class="dashboard-sidebar" data-layer="Sidebar/Navigasi Peran" data-layer-id="PTG-01-layer-1">
        <a class="text-link logo logo--light" href="{{ asset('fasilitasqu/pages/PUB-01.html') }}"><span class="logo-mark"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
              <circle cx="12" cy="10" r="3"></circle></svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path></svg></span><span>Fasilitas<span class="logo-qu">Qu</span><span class="logo-period">.</span></span></a>
        <div class="sidebar-caption">RUANG KERJA PETUGAS</div>
        <nav aria-label="Navigasi Petugas" data-layer="Navigasi" data-layer-id="PTG-01-layer-2">
          <a class="text-link is-active" href="{{ route('dashboard.petugas') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-checks" aria-hidden="true">
              <path d="M13 5h8"></path>
              <path d="M13 12h8"></path>
              <path d="M13 19h8"></path>
              <path d="m3 17 2 2 4-4"></path>
              <path d="m3 7 2 2 4-4"></path></svg><span>Daftar Tugas</span></a><a class="text-link" href="{{ asset('fasilitasqu/pages/PTG-01b.html') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list" aria-hidden="true">
              <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
              <path d="M12 11h4"></path>
              <path d="M12 16h4"></path>
              <path d="M8 11h.01"></path>
              <path d="M8 16h.01"></path></svg><span>Riwayat Selesai</span></a>
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
