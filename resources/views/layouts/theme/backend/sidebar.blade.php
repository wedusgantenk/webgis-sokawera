 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard') }}" class="app-brand-link">
             <span class="app-brand-logo demo">
                 <img src="{{ asset('assets/logo.png') }}" width="100" alt="">
             </span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
             <a href="{{ route('dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile Desa</span></li>
         <li class="menu-item {{ request()->is('admin/profile') ? 'active' : '' }}">
             <a href="{{ route('admin.sejarah.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Sejarah Desa</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/profile/struktur*') ? 'active' : '' }}">
             <a href="{{ route('admin.struktur.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Struktur Desa</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Demografi Desa</span></li>
         <li class="menu-item {{ request()->is('admin/demografi') ? 'active' : '' }}">
             <a href="{{ route('admin.demografi.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Demografi Desa</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/demografi/pendidikan*') ? 'active' : '' }}">
             <a href="{{ route('demografi.pendidikan.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Pendidikan Desa</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/demografi/pekerjaan*') ? 'active' : '' }}">
             <a href="{{ route('demografi.pekerjaan.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Pekerjaan Desa</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/demografi/penduduk*') ? 'active' : '' }}">
             <a href="{{ route('demografi.penduduk.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Penduduk Desa</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/demografi/agama*') ? 'active' : '' }}">
             <a href="{{ route('demografi.agama.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-info-circle"></i>
                 <div>Data Agama</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Desa</span></li>
         <li class="menu-item {{ request()->is('admin/tanah') ? 'active' : '' }}">
             <a href="{{ route('admin.tanah.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-folder"></i>
                 <div>Data Tanah</div>
             </a>
         </li>
         <li class="menu-item {{ request()->is('admin/tanah/create') ? 'active' : '' }}">
             <a href="{{ route('admin.tanah.create') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-plus"></i>
                 <div>Tambah Data Tanah</div>
             </a>
         </li>
     </ul>
 </aside>
