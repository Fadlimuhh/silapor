<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SiLapor | Register</title>

    <link href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
            min-height: 100vh;
        }

        .register-container {
            min-height: 100vh;
        }

        .register-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .register-logo {
            color: #37517e;
            font-weight: 700;
        }

        .register-subtitle {
            color: #6c757d;
        }

        .btn-register {
            background-color: #47b2e4;
            border: none;
            color: white;
            padding: 12px;
            font-weight: 600;
        }

        .btn-register:hover {
            background-color: #209dd3;
            color: white;
        }

        .form-control {
            padding: 12px;
        }
    </style>
</head>

<body>

    <div class="container register-container d-flex align-items-center justify-content-center">

        <div class="row justify-content-center w-100">

            <div class="col-md-7 col-lg-5">

                <div class="card register-card">

                    <div class="card-body p-4 p-md-5">

                        <!-- Logo -->
                        <div class="text-center mb-4">

                            <h2 class="register-logo">
                                SiLapor
                            </h2>

                            <p class="register-subtitle mb-0">
                                Buat akun baru
                            </p>

                        </div>

                        <!-- Register Form -->
                        <form action="#" method="POST">

                            @csrf

                            <!-- Nama -->
                            <div class="mb-3">

                                <label for="name" class="form-label">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Masukkan nama lengkap"
                                    required>

                            </div>

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

                            <!-- Konfirmasi Password -->
                            <div class="mb-4">

                                <label for="password_confirmation" class="form-label">
                                    Konfirmasi Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Ulangi password"
                                    required>

                            </div>

                            <!-- Button -->
                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn btn-register">
                                    Daftar
                                </button>

                            </div>

                        </form>

                        <!-- Login -->
                        <div class="text-center mt-4">

                            <p class="mb-0">
                                Sudah punya akun?
                                <a href="{{ route('login') }}"
                                   class="text-decoration-none fw-semibold">
                                    Masuk
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

    <script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>