<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <!-- Logo -->
        <a href="{{ route('landing') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/silapor-logo.png') }}"
                alt="SiLapor"
                style="height: 42px; width: auto;">
        </a>

        <!-- Navbar -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="#hero" class="active">Beranda</a>
                </li>

                <li>
                    <a href="#about">Tentang</a>
                </li>

                <li>
                    <a href="#services">Layanan</a>
                </li>

                <li>
                    <a href="#how-to-report">Cara Melapor</a>
                </li>

                <li>
                    <a href="#faq">FAQ</a>
                </li>

                <li>
                    <a href="#contact">Kontak</a>
                </li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Login / Dashboard / Logout -->
        <div class="d-flex align-items-center" style="gap: 8px;">

            @auth

                @if (Auth::user()->role === 'admin')

                    <a href="{{ route('dashboard') }}" class="btn-getstarted">
                        Dashboard
                    </a>

                @elseif (Auth::user()->role === 'petugas')

                    <a href="{{ route('petugas.dashboard') }}" class="btn-getstarted">
                        Dashboard
                    </a>

                @elseif (Auth::user()->role === 'warga')

                    <a href="{{ route('warga.dashboard') }}" class="btn-getstarted">
                        Dashboard
                    </a>

                @endif

                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf

                    <button type="submit" class="btn-getstarted btn-login border-0">
                        Logout
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}" class="btn-getstarted btn-login">
                    Masuk
                </a>

                <a href="{{ route('register') }}" class="btn-getstarted">
                    Daftar
                </a>

            @endauth

        </div>

    </div>
</header>