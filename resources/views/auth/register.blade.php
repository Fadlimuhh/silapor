
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SiLapor | Daftar</title>

    <link rel="icon" type="image/png"
        href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">
    <link rel="apple-touch-icon"
        href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">

    <link href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8ff;
            color: #172033;
        }

        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 1050px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #fff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(30, 64, 175, .12);
        }

        /* PANEL BRANDING */

        .auth-brand {
            position: relative;
            overflow: hidden;
            padding: 48px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #fff;
            background:
                radial-gradient(circle at 15% 15%, rgba(255,255,255,.18), transparent 25%),
                radial-gradient(circle at 85% 80%, rgba(255,255,255,.12), transparent 30%),
                linear-gradient(145deg, #1d4ed8, #2563eb 52%, #1e40af);
        }

        .brand-logo {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-logo-box {
            width: 48px;
            height: 48px;
            padding: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 13px;
        }

        .brand-logo-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand-content {
            position: relative;
            z-index: 1;
            margin: 65px 0;
        }

        .brand-content h1 {
            font-size: 40px;
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: -1.3px;
            margin-bottom: 18px;
        }

        .brand-content p {
            max-width: 390px;
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255,255,255,.82);
        }

        .brand-features {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 28px;
        }

        .brand-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            width: fit-content;
            max-width: 100%;
            border: 1px solid rgba(255,255,255,.13);
            border-radius: 12px;
            background: rgba(255,255,255,.10);
            font-size: 12px;
        }

        .brand-feature i {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: rgba(255,255,255,.15);
            flex-shrink: 0;
        }

        .brand-footer {
            position: relative;
            z-index: 1;
            font-size: 11px;
            color: rgba(255,255,255,.6);
        }

        .circle {
            position: absolute;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
        }

        .circle-one {
            width: 300px;
            height: 300px;
            top: -90px;
            right: -130px;
        }

        .circle-two {
            width: 430px;
            height: 430px;
            left: -230px;
            bottom: -220px;
        }

        /* FORM */

        .auth-form-panel {
            padding: 45px 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .auth-form {
            width: 100%;
            max-width: 390px;
        }

        .form-heading { margin-bottom: 27px; }

        .form-heading h2 {
            margin: 0 0 9px;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: -.8px;
            color: #172033;
        }

        .form-heading p {
            margin: 0;
            color: #7b8798;
            font-size: 13px;
            line-height: 1.6;
        }

        .alert {
            border: 0;
            border-radius: 12px;
            font-size: 12px;
            padding: 12px 14px;
        }

        .alert ul { padding-left: 18px; }

        .form-group { margin-bottom: 17px; }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #344054;
            font-size: 12px;
            font-weight: 700;
        }

        .input-wrapper { position: relative; }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 16px;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            height: 48px;
            padding: 0 44px;
            border: 1px solid #dce3ee !important;
            border-radius: 12px !important;
            background: #fbfcff;
            color: #1e293b;
            font-size: 13px;
            box-shadow: none !important;
            transition: .2s ease;
        }

        .form-control::placeholder { color: #a4afbf; }

        .form-control:focus {
            border-color: #3b82f6 !important;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(37,99,235,.08) !important;
        }

        .password-toggle {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            padding: 4px;
            border: 0;
            background: transparent;
            color: #94a3b8;
            font-size: 17px;
            cursor: pointer;
        }

        .password-toggle:hover { color: #2563eb; }

        .btn-auth {
            width: 100%;
            height: 50px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 10px 25px rgba(37,99,235,.22);
            transition: .2s ease;
        }

        .btn-auth:hover {
            transform: translateY(-1px);
            box-shadow: 0 13px 30px rgba(37,99,235,.28);
        }

        .btn-auth:disabled {
            opacity: .7;
            cursor: not-allowed;
            transform: none;
        }

        .auth-switch {
            margin-top: 23px;
            text-align: center;
            color: #7b8798;
            font-size: 12px;
        }

        .auth-switch a {
            color: #2563eb;
            font-weight: 700;
            text-decoration: none;
        }

        .auth-switch a:hover { text-decoration: underline; }

        .auth-back {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            margin-top: 18px;
            color: #94a3b8;
            font-size: 11px;
            text-decoration: none;
        }

        .auth-back:hover { color: #2563eb; }

        @media (max-width: 900px) {
            .auth-wrapper {
                max-width: 500px;
                grid-template-columns: 1fr;
            }

            .auth-brand { padding: 32px; }

            .brand-content { margin: 35px 0; }

            .brand-content h1 { font-size: 31px; }

            .brand-features { display: none; }

            .brand-footer { margin-top: 25px; }

            .auth-form-panel { padding: 38px 35px; }
        }

        @media (max-width: 576px) {
            .auth-page { padding: 15px; }

            .auth-wrapper { border-radius: 20px; }

            .auth-brand { padding: 25px; }

            .brand-content { margin: 28px 0; }

            .brand-content h1 { font-size: 27px; }

            .brand-content p { font-size: 13px; }

            .auth-form-panel { padding: 30px 24px; }

            .form-heading h2 { font-size: 25px; }
        }
    </style>
</head>

<body>

<div class="auth-page">
    <div class="auth-wrapper">

        {{-- PANEL BRANDING --}}
        <section class="auth-brand">
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>

            <div class="brand-logo">
                <div class="brand-logo-box">
                    <img src="{{ asset('assets/img/silapor-icon.png') }}" alt="Logo SiLapor">
                </div>
                <div class="brand-name">SiLapor</div>
            </div>

            <div class="brand-content">
                <h1>
                    Suaramu,<br>
                    perubahan untuk<br>
                    lingkungan.
                </h1>

                <p>
                    Bergabung dengan SiLapor untuk menyampaikan laporan
                    dan ikut membangun lingkungan yang lebih baik.
                </p>

                <div class="brand-features">
                    <div class="brand-feature">
                        <i class="bi bi-person-check"></i>
                        <span>Buat akun dengan mudah</span>
                    </div>

                    <div class="brand-feature">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Sampaikan laporan lingkungan</span>
                    </div>

                    <div class="brand-feature">
                        <i class="bi bi-clock-history"></i>
                        <span>Pantau tindak lanjut laporan</span>
                    </div>
                </div>
            </div>

            <div class="brand-footer">
                Sistem Pelaporan Masyarakat &bull; SiLapor
            </div>
        </section>

        {{-- FORM REGISTER --}}
        <section class="auth-form-panel">
            <div class="auth-form">

                <div class="form-heading">
                    <h2>Buat akun baru</h2>
                    <p>Isi data berikut untuk mulai menggunakan SiLapor.</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger mb-4" role="alert">
                        <strong>
                            <i class="bi bi-exclamation-circle me-1"></i>
                            Periksa kembali data lu.
                        </strong>

                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.process') }}"
                    method="POST" id="registerForm">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Nama lengkap</label>
                        <div class="input-wrapper">
                            <i class="bi bi-person input-icon"></i>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                autocomplete="name"
                                maxlength="255"
                                required
                                autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-wrapper">
                            <i class="bi bi-envelope input-icon"></i>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                maxlength="255"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-wrapper">
                            <i class="bi bi-lock input-icon"></i>
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Buat password"
                                autocomplete="new-password"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                data-toggle-password="password"
                                aria-label="Tampilkan password">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="password_confirmation" class="form-label">
                            Konfirmasi password
                        </label>
                        <div class="input-wrapper">
                            <i class="bi bi-shield-lock input-icon"></i>
                            <input
                                type="password"
                                class="form-control"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Ulangi password"
                                autocomplete="new-password"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                data-toggle-password="password_confirmation"
                                aria-label="Tampilkan konfirmasi password">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn-auth" id="registerButton">
                        <span id="registerButtonText">Buat akun SiLapor</span>
                    </button>
                </form>

                <div class="auth-switch">
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Masuk sekarang</a>
                </div>

                <a href="{{ route('landing') }}" class="auth-back">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke halaman utama
                </a>

            </div>
        </section>

    </div>
</div>

<script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>
    // Tampilkan atau sembunyikan masing-masing password.
    document.querySelectorAll('[data-toggle-password]').forEach(function (button) {
        button.addEventListener('click', function () {
            const input = document.getElementById(this.dataset.togglePassword);
            const showing = input.type === 'password';

            input.type = showing ? 'text' : 'password';

            this.innerHTML = showing
                ? '<i class="bi bi-eye-slash"></i>'
                : '<i class="bi bi-eye"></i>';

            this.setAttribute(
                'aria-label',
                showing ? 'Sembunyikan password' : 'Tampilkan password'
            );
        });
    });

    // Cegah submit berulang ketika form valid dan dikirim.
    document.getElementById('registerForm').addEventListener('submit', function () {
        const button = document.getElementById('registerButton');
        const text = document.getElementById('registerButtonText');

        button.disabled = true;
        text.innerHTML = '<i class="bi bi-arrow-repeat"></i> Memproses...';
    });
</script>

</body>
</html>
