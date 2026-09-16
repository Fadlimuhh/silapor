@extends('layouts.app')

@section('title', 'SiLapor | Profil Saya')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
            <p class="mb-0 text-gray-600">
                Informasi akun petugas yang sedang login.
            </p>
        </div>
    </div>

    <div class="row">

        <!-- Foto Profil -->
        <div class="col-lg-4">

            <div class="card shadow mb-4">

                <div class="card-body text-center">

                    <img src="{{ asset('assets/img/undraw_profile.svg') }}"
                         class="img-fluid rounded-circle mb-3"
                         width="180">

                    <h4 class="font-weight-bold">
                        Admin SiLapor
                    </h4>

                    <p class="text-muted">
                        Administrator
                    </p>

                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-camera"></i>
                        Ganti Foto
                    </button>

                </div>

            </div>

        </div>

        <!-- Data Profil -->
        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Informasi Profil
                    </h6>
                </div>

                <div class="card-body">

                    <form>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><strong>Nama Lengkap</strong></label>
                                    <input type="text"
                                           class="form-control"
                                           value="Admin SiLapor">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><strong>Username</strong></label>
                                    <input type="text"
                                           class="form-control"
                                           value="admin">
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><strong>Email</strong></label>
                                    <input type="email"
                                           class="form-control"
                                           value="admin@silapor.id">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><strong>Nomor HP</strong></label>
                                    <input type="text"
                                           class="form-control"
                                           value="081234567890">
                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label><strong>Alamat</strong></label>

                            <textarea class="form-control"
                                      rows="3">Jakarta Barat</textarea>

                        </div>

                        <hr>

                        <div class="text-right">

                            <button class="btn btn-primary">

                                <i class="fas fa-save"></i>

                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

            <!-- Keamanan Akun -->
            <div class="card shadow">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">
                        Keamanan Akun
                    </h6>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label><strong>Password Baru</strong></label>
                        <input type="password"
                               class="form-control"
                               placeholder="Masukkan password baru">
                    </div>

                    <div class="form-group">
                        <label><strong>Konfirmasi Password</strong></label>
                        <input type="password"
                               class="form-control"
                               placeholder="Konfirmasi password">
                    </div>

                    <div class="text-right">

                        <button class="btn btn-danger">

                            <i class="fas fa-key"></i>

                            Ganti Password

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection