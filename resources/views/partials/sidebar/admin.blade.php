<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- BRAND -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
    href="{{ route('dashboard') }}">

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
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">

        <a class="nav-link"
           href="{{ route('dashboard') }}">

            <i class="fas fa-home"></i>
            <span>Dashboard</span>

        </a>

    </li>


    <!-- Manajemen -->
    <li class="nav-item">

        <a class="nav-link collapsed"
           href="#"
           data-toggle="collapse"
           data-target="#collapseManajemen">

            <i class="fas fa-layer-group"></i>
            <span>Manajemen</span>

        </a>


        <div id="collapseManajemen"
             class="collapse {{
                 request()->routeIs('laporan*') ||
                 request()->routeIs('kategori*') ||
                 request()->routeIs('masyarakat.*') ||
                 request()->routeIs('petugas.*')
                 ? 'show'
                 : ''
             }}"
             data-parent="#accordionSidebar">

            <div class="bg-white collapse-inner rounded">

                <h6 class="collapse-header">
                    Kelola Data
                </h6>

                <a class="collapse-item {{ request()->routeIs('laporan*') ? 'active' : '' }}"
                   href="{{ route('laporan') }}">
                    <i class="fas fa-file-alt mr-2"></i>
                    Laporan
                </a>

                <a class="collapse-item {{ request()->routeIs('kategori*') ? 'active' : '' }}"
                   href="{{ route('kategori') }}">
                    <i class="fas fa-tags mr-2"></i>
                    Kategori
                </a>

                <a class="collapse-item {{ request()->routeIs('masyarakat.*') ? 'active' : '' }}"
                   href="{{ route('masyarakat.index') }}">
                    <i class="fas fa-users mr-2"></i>
                    Masyarakat
                </a>

                <a class="collapse-item {{ request()->routeIs('petugas.*') ? 'active' : '' }}"
                   href="{{ route('petugas.index') }}">
                    <i class="fas fa-user-shield mr-2"></i>
                    Petugas
                </a>

            </div>

        </div>

    </li>


    <!-- Analisis -->
    <li class="nav-item">

        <a class="nav-link collapsed"
           href="#"
           data-toggle="collapse"
           data-target="#collapseAnalisis">

            <i class="fas fa-chart-pie"></i>
            <span>Analisis</span>

        </a>


        <div id="collapseAnalisis"
             class="collapse {{ request()->routeIs('statistik') ? 'show' : '' }}"
             data-parent="#accordionSidebar">

            <div class="bg-white collapse-inner rounded">

                <h6 class="collapse-header">
                    Analisis Data
                </h6>

                <a class="collapse-item {{ request()->routeIs('statistik') ? 'active' : '' }}"
                   href="{{ route('statistik') }}">
                    <i class="fas fa-chart-bar mr-2"></i>
                    Statistik
                </a>

            </div>

        </div>

    </li>


    <!-- Sistem -->
    <li class="nav-item">

        <a class="nav-link collapsed"
           href="#"
           data-toggle="collapse"
           data-target="#collapseSystem">

            <i class="fas fa-cog"></i>
            <span>Sistem</span>

        </a>


        <div id="collapseSystem"
             class="collapse {{
                 request()->routeIs('pengaturan') ||
                 request()->routeIs('profile')
                 ? 'show'
                 : ''
             }}"
             data-parent="#accordionSidebar">

            <div class="bg-white collapse-inner rounded">

                <h6 class="collapse-header">
                    Pengaturan
                </h6>

                <a class="collapse-item {{ request()->routeIs('pengaturan') ? 'active' : '' }}"
                   href="{{ route('pengaturan') }}">
                    <i class="fas fa-sliders-h mr-2"></i>
                    Pengaturan
                </a>

                <a class="collapse-item {{ request()->routeIs('profile') ? 'active' : '' }}"
                   href="{{ route('profile') }}">
                    <i class="fas fa-user mr-2"></i>
                    Profil Saya
                </a>

            </div>

        </div>

    </li>

</ul>