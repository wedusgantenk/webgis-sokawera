 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard') }}" class="app-brand-link">
             <span class="app-brand-logo demo">
                 <img src="{{ asset('assets/logo.png') }}" width="150" alt="">
             </span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item active">
             <a href="{{ route('dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile Desa</span></li>
         <li class="menu-item">
             <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                 class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Sejarah Desa</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                 class="menu-link">
                 <i class="menu-icon tf-icons bx bx-map-alt"></i>
                 <div>Wilayah Desa</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                 class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Struktur Desa</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                 class="menu-link">
                 <i class="menu-icon tf-icons bx bx-video"></i>
                 <div>Vidio Profile</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Desa</span></li>
         <li class="menu-item">
             <a href="{{ route('admin.tanah.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-folder"></i>
                 <div>Data Tanah</div>
             </a>
         </li>
         <li class="menu-item">
             <a href="{{ route('admin.tanah.create') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-plus"></i>
                 <div>Tambah Data Tanah</div>
             </a>
         </li>
     </ul>
 </aside>
