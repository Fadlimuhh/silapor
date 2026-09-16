<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SiLapor | Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
            min-height: 100vh;
        }

        .login-container {
            min-height: 100vh;
        }

        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .login-logo {
            color: #37517e;
            font-weight: 700;
        }

        .login-subtitle {
            color: #6c757d;
        }

        .btn-login {
            background-color: #47b2e4;
            border: none;
            color: white;
            padding: 12px;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #209dd3;
            color: white;
        }

        .form-control {
            padding: 12px;
        }
    </style>
</head>

<body>

    <div class="container login-container d-flex align-items-center justify-content-center">

        <div class="row justify-content-center w-100">

            <div class="col-md-6 col-lg-4">

                <div class="card login-card">

                    <div class="card-body p-4 p-md-5">

                        <!-- Logo -->
                        <div class="text-center mb-4">

                            <h2 class="login-logo">
                                SiLapor
                            </h2>

                            <p class="login-subtitle mb-0">
                                Masuk ke akun Anda
                            </p>

                        </div>

                        <!-- Login Form -->
                        <form action="#" method="POST">

                            @csrf

                            <!-- Email -->
                            <div class="mb-3">

                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Masukkan email"
                                    required>

                            </div>

                            <!-- Password -->
                            <div class="mb-3">

                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan password"
                                    required>

                            </div>

                            <!-- Remember -->
                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="remember">

                                    <label class="form-check-label" for="remember">
                                        Ingat saya
                                    </label>

                                </div>

                                <a href="#" class="text-decoration-none">
                                    Lupa password?
                                </a>

                            </div>

                            <!-- Button -->
                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn btn-login">
                                    Masuk
                                </button>

                            </div>

                        </form>

                        <!-- Register -->
                        <div class="text-center mt-4">

                            <p class="mb-0">
                                Belum punya akun?
                                <a href="{{ route('register') }}"
                                   class="text-decoration-none fw-semibold">
                                    Daftar
                                </a>
                            </p>

                        </div>

                        <!-- Back -->
                        <div class="text-center mt-3">

                            <a href="{{ route('landing') }}"
                               class="text-decoration-none text-muted">
                                <i class="bi bi-arrow-left"></i>
                                Kembali ke halaman utama
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>