<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
    href="{{ route('warga.dashboard') }}">

        <div class="sidebar-brand-icon"
            style="width: 42px; height: 42px; background: #ffffff; border-radius: 10px; display: flex; align-items: center; justify-content: center;">

            <img src="{{ asset('assets/img/silapor-icon.png') }}"
                alt="SiLapor"
                style="height: 32px; width: 32px; object-fit: contain;">

        </div>

        <div class="sidebar-brand-text mx-3">
            SI LAPOR
        </div>

    </a>


    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Menu Utama
    </div>


    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('warga.dashboard') ? 'active' : '' }}">

        <a class="nav-link"
           href="{{ route('warga.dashboard') }}">

            <i class="fas fa-home"></i>
            <span>Dashboard</span>

        </a>

    </li>


    <!-- Buat Laporan -->
    <li class="nav-item {{ request()->routeIs('laporan.create') ? 'active' : '' }}">

        <a class="nav-link"
           href="{{ route('laporan.create') }}">

            <i class="fas fa-plus-circle"></i>
            <span>Buat Laporan</span>

        </a>

    </li>


    <!-- Laporan Saya -->
    <li class="nav-item {{ request()->routeIs('laporan') ? 'active' : '' }}">

        <a class="nav-link"
           href="{{ route('laporan') }}">

            <i class="fas fa-file-alt"></i>
            <span>Laporan Saya</span>

        </a>

    </li>


    <!-- Profil -->
    <li class="nav-item {{ request()->routeIs('profile') ? 'active' : '' }}">

        <a class="nav-link {{ request()->routeIs('profile') ? '' : '' }}"
           href="{{ route('profile') }}">

            <i class="fas fa-user"></i>
            <span>Profil Saya</span>

        </a>

    </li>

</ul>