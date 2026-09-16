<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center me-auto">
      <!-- Nanti kalau sudah ada logo tinggal pakai img -->
      <!-- <img src="{{ asset('assets-landing/img/logo.png') }}" alt="SiLapor"> -->
      <h1 class="sitename">SiLapor</h1>
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#how-to-report">Cara Melapor</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="d-flex align-items-center">

      <a class="btn-getstarted btn-login" href="#">
          Masuk
      </a>

    </div>

  </div>
</header>
