{{-- Komponen bersama: topbar-petugas. HTML dan CSS, tanpa React. --}}
<header class="dashboard-topbar" data-layer="Header/Topbar Dashboard" data-layer-id="PTG-01-layer-3">
          <button class="button button--ghost button--md hamburger" aria-label="Buka sidebar" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu" aria-hidden="true">
              <path d="M4 5h16"></path>
              <path d="M4 12h16"></path>
              <path d="M4 19h16"></path>
            </svg>
          </button>
          <div class="topbar-search">
            <form data-layer="Form" data-layer-id="PTG-01-layer-4">
              <div class="field" data-layer="Form/Isian" data-layer-id="PTG-01-layer-5">
                <div class="input-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search field-icon" aria-hidden="true">
                    <path d="m21 21-4.34-4.34"></path>
                    <circle cx="11" cy="11" r="8"></circle></svg><input placeholder="Cari fasilitas..." aria-label="Pencarian" id="_r_1f_" class="has-icon" aria-invalid="false" value="" data-field="0" style="">
                </div>
              </div>
            </form>
          </div>
          <div class="topbar-right">
            <span class="topbar-date">Senin, 09 Nov 2026</span><span class="topbar-divider"></span><span class="avatar">BS</span>
            <div class="avatar-text"><strong>Budi Santoso</strong><small>Petugas</small></div>
          </div>
        </header>
