<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SiLapor | Masuk</title>

    <link rel="icon" type="image/png"
        href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">
    <link rel="apple-touch-icon"
        href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">

    <link href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8ff;
            color: #172033;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 650px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(30, 64, 175, 0.12);
        }

        /* =========================
           LEFT PANEL
        ========================= */

        .login-brand {
            position: relative;
            overflow: hidden;
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background:
                radial-gradient(circle at 15% 15%, rgba(255,255,255,.18), transparent 25%),
                radial-gradient(circle at 85% 80%, rgba(255,255,255,.12), transparent 30%),
                linear-gradient(145deg, #1d4ed8 0%, #2563eb 52%, #1e40af 100%);
            color: #ffffff;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-logo-box {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border-radius: 13px;
            padding: 6px;
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
            z-index: 2;
            max-width: 420px;
        }

        .brand-content h1 {
            font-size: 43px;
            line-height: 1.12;
            font-weight: 800;
            letter-spacing: -1.5px;
            margin-bottom: 20px;
        }

        .brand-content p {
            font-size: 15px;
            line-height: 1.8;
            color: rgba(255,255,255,.82);
            margin-bottom: 30px;
        }

        .brand-features {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .brand-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            width: fit-content;
            border-radius: 12px;
            background: rgba(255,255,255,.11);
            border: 1px solid rgba(255,255,255,.12);
            backdrop-filter: blur(10px);
            font-size: 13px;
            color: rgba(255,255,255,.92);
        }

        .brand-feature i {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: rgba(255,255,255,.15);
        }

        .brand-footer {
            font-size: 11px;
            color: rgba(255,255,255,.55);
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.12);
        }

        .circle-one {
            width: 300px;
            height: 300px;
            right: -130px;
            top: -90px;
        }

        .circle-two {
            width: 430px;
            height: 430px;
            left: -230px;
            bottom: -220px;
        }

        /* =========================
           RIGHT PANEL
        ========================= */

        .login-form-panel {
            padding: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
        }

        .login-form {
            width: 100%;
            max-width: 390px;
        }

        .form-heading {
            margin-bottom: 35px;
        }

        .form-heading h2 {
            margin: 0 0 9px;
            font-size: 30px;
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: 700;
            color: #344054;
        }

        .input-wrapper {
            position: relative;
        }

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
            height: 52px;
            padding: 0 45px;
            border: 1px solid #dce3ee;
            border-radius: 12px;
            background: #fbfcff;
            color: #1e293b;
            font-size: 13px;
            transition: .2s ease;
            box-shadow: none !important;
        }

        .form-control::placeholder {
            color: #a4afbf;
        }

        .form-control:focus {
            border-color: #3b82f6;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(37,99,235,.08) !important;
        }

        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #94a3b8;
            font-size: 17px;
            padding: 4px;
            cursor: pointer;
        }

        .password-toggle:hover {
            color: #2563eb;
        }

        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 4px 0 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #64748b;
        }

        .remember input {
            width: 15px;
            height: 15px;
            accent-color: #2563eb;
            cursor: pointer;
        }

        .forgot {
            font-size: 12px;
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot:hover {
            color: #1d4ed8;
        }

        .btn-login {
            width: 100%;
            height: 52px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .2px;
            box-shadow: 0 10px 25px rgba(37,99,235,.22);
            transition: .2s ease;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 13px 30px rgba(37,99,235,.28);
        }

        .btn-login:disabled {
            opacity: .7;
            cursor: not-allowed;
            transform: none;
        }

        .register-text {
            text-align: center;
            margin-top: 28px;
            font-size: 12px;
            color: #7b8798;
        }

        .register-text a {
            color: #2563eb;
            font-weight: 700;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        .back-home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            margin-top: 22px;
            font-size: 11px;
            color: #94a3b8;
            text-decoration: none;
        }

        .back-home:hover {
            color: #2563eb;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {
            .login-wrapper {
                max-width: 500px;
                grid-template-columns: 1fr;
            }

            .login-brand {
                min-height: 300px;
                padding: 35px;
            }

            .brand-content h1 {
                font-size: 32px;
            }

            .brand-features {
                display: none;
            }

            .brand-footer {
                margin-top: 30px;
            }

            .login-form-panel {
                padding: 40px 35px;
            }
        }

        @media (max-width: 576px) {
            .login-page {
                padding: 15px;
            }

            .login-wrapper {
                border-radius: 20px;
            }

            .login-brand {
                padding: 28px;
                min-height: 250px;
            }

            .brand-content h1 {
                font-size: 28px;
            }

            .brand-content p {
                font-size: 13px;
            }

            .login-form-panel {
                padding: 32px 24px;
            }

            .form-heading h2 {
                font-size: 26px;
            }

            .login-options {
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<div class="login-page">

    <div class="login-wrapper">

        {{-- =========================
             PANEL BRANDING
        ========================== --}}
        <div class="login-brand">

            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>

            <div class="brand-logo">
                <div class="brand-logo-box">
                    <img src="{{ asset('assets/img/silapor-icon.png') }}" alt="SiLapor">
                </div>

                <div class="brand-name">
                    SiLapor
                </div>
            </div>

            <div class="brand-content">

                <h1>
                    Suaramu,<br>
                    perubahan untuk<br>
                    lingkungan.
                </h1>

                <p>
                    Laporkan masalah di lingkunganmu dengan mudah.
                    Sampaikan laporan, pantau prosesnya, dan ikut
                    menciptakan lingkungan yang lebih baik.
                </p>

                <div class="brand-features">

                    <div class="brand-feature">
                        <i class="bi bi-megaphone"></i>
                        <span>Laporkan masalah dengan mudah</span>
                    </div>

                    <div class="brand-feature">
                        <i class="bi bi-clock-history"></i>
                        <span>Pantau perkembangan laporan</span>
                    </div>

                    <div class="brand-feature">
                        <i class="bi bi-check2-circle"></i>
                        <span>Dapatkan tindak lanjut dari petugas</span>
                    </div>

                </div>

            </div>

            <div class="brand-footer">
                Sistem Pelaporan Masyarakat • SiLapor
            </div>

        </div>


        {{-- =========================
             FORM LOGIN
        ========================== --}}
        <div class="login-form-panel">

            <div class="login-form">

                <div class="form-heading">
                    <h2>Selamat datang 👋</h2>
                    <p>
                        Masuk ke akun SiLapor untuk melanjutkan.
                    </p>
                </div>


                {{-- ERROR --}}
                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        {{ $errors->first() }}
                    </div>
                @endif


                {{-- SUCCESS --}}
                @if (session('success'))
                    <div class="alert alert-success mb-4">
                        <i class="bi bi-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif


                <form action="{{ route('login.process') }}" method="POST" id="loginForm">
                    @csrf

                    {{-- EMAIL --}}
                    <div class="form-group">

                        <label for="email" class="form-label">
                            Email
                        </label>

                        <div class="input-wrapper">

                            <i class="bi bi-envelope input-icon"></i>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                autocomplete="email"
                                required
                                autofocus
                            >

                        </div>

                    </div>


                    {{-- PASSWORD --}}
                    <div class="form-group">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <div class="input-wrapper">

                            <i class="bi bi-lock input-icon"></i>

                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Masukkan password Anda"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                id="togglePassword"
                                aria-label="Tampilkan password"
                            >
                                <i class="bi bi-eye"></i>
                            </button>

                        </div>

                    </div>


                    {{-- OPTIONS --}}
                    <div class="login-options">

                        <label class="remember">
                            <input
                                type="checkbox"
                                name="remember"
                                value="1"
                                {{ old('remember') ? 'checked' : '' }}
                            >

                            <span>Ingat saya</span>
                        </label>

                        {{-- Belum dibuat karena fitur reset password belum ada --}}
                        <span class="forgot" style="opacity:.45; cursor:not-allowed;">
                            Lupa password?
                        </span>

                    </div>


                    {{-- BUTTON --}}
                    <button
                        type="submit"
                        class="btn-login"
                        id="loginButton"
                    >
                        <span id="loginButtonText">
                            Masuk ke SiLapor
                        </span>
                    </button>

                </form>


                {{-- REGISTER --}}
                <div class="register-text">

                    Belum punya akun?

                    <a href="{{ route('register') }}">
                        Daftar sekarang
                    </a>

                </div>


                {{-- BACK --}}
                <a href="{{ route('landing') }}" class="back-home">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke halaman utama
                </a>

            </div>

        </div>

    </div>

</div>


<script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>

    // ==========================
    // SHOW / HIDE PASSWORD
    // ==========================

    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function () {

        const isPassword = password.type === 'password';

        password.type = isPassword ? 'text' : 'password';

        this.innerHTML = isPassword
            ? '<i class="bi bi-eye-slash"></i>'
            : '<i class="bi bi-eye"></i>';

        this.setAttribute(
            'aria-label',
            isPassword
                ? 'Sembunyikan password'
                : 'Tampilkan password'
        );

    });


    // ==========================
    // LOGIN LOADING
    // ==========================

    const loginForm = document.getElementById('loginForm');
    const loginButton = document.getElementById('loginButton');
    const loginButtonText = document.getElementById('loginButtonText');

    loginForm.addEventListener('submit', function () {

        loginButton.disabled = true;

        loginButtonText.innerHTML =
            '<i class="bi bi-arrow-repeat"></i> Memproses...';

    });

</script>

</body>
</html>