        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SI LAPOR</div>
            </a>

            <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Halaman Utama
                </div>

                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

            <li class="nav-item">

            <a class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseManajemen"
            aria-expanded="true"
            aria-controls="collapseManajemen">

                <i class="fas fa-folder"></i>

                <span>Manajemen</span>

            </a>

                <div id="collapseManajemen"
                    class="collapse {{ request()->routeIs('laporan') || request()->routeIs('masyarakat') || request()->routeIs('petugas.*') ? 'show' : '' }}"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">
                            Menu Manajemen
                        </h6>

                        <a class="collapse-item {{ request()->routeIs('laporan') ? 'active' : '' }}"
                            href="{{ route('laporan') }}">
                            Laporan
                        </a>

                        <a class="collapse-item {{ request()->routeIs('kategori') ? 'active' : '' }}"
                            href="{{ route('kategori') }}">
                            Kategori
                        </a>

                        <a class="collapse-item {{ request()->routeIs('masyarakat.*') ? 'active' : '' }}"
                            href="{{ route('masyarakat.index') }}">
                            Masyarakat
                        </a>
            
                        <a class="collapse-item {{ request()->routeIs('petugas.*') ? 'active' : '' }}"
                            href="{{ route('petugas.index') }}">
                            Petugas
                        </a>

                    </div>

                </div>

            </li>

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

                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">

                            Menu Analisis

                        </h6>

                        <a class="collapse-item {{ request()->routeIs('statistik') ? 'active' : '' }}"
                            href="{{ route('statistik') }}">
                            Statistik
                        </a>

                    </div>

                </div>

            </li>



            <li class="nav-item">

                <a class="nav-link collapsed"
                href="#"
                data-toggle="collapse"
                data-target="#collapseSystem">

                    <i class="fas fa-cogs"></i>

                    <span>Sistem</span>

                </a>

                <div id="collapseSystem"
                    class="collapse {{ request()->routeIs('pengaturan') || request()->routeIs('profile') ? 'show' : '' }}"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">

                            Menu Sistem

                        </h6>

                        <a class="collapse-item {{ request()->routeIs('pengaturan') ? 'active' : '' }}"
                            href="{{ route('pengaturan') }}">
                            Pengaturan
                        </a>

                        <a class="collapse-item {{ request()->routeIs('profile') ? 'active' : '' }}"
                            href="{{ route('profile') }}">
                            Profil Saya
                        </a>

                    </div>

                </div>

            </li>
                
        </ul>
        <!-- End of Sidebar -->