@extends('layouts.app')

@section('title', 'SiLapor | Pengaturan')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Pengaturan</h1>
            <p class="mb-0 text-gray-600">
                Atur informasi dasar aplikasi SiLapor.
            </p>
        </div>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Pengaturan Website
            </h6>
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label><strong>Nama Website</strong></label>
                            <input type="text"
                                   class="form-control"
                                   value="SiLapor">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label><strong>Email Admin</strong></label>
                            <input type="email"
                                   class="form-control"
                                   value="admin@silapor.id">
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label><strong>Nomor Telepon</strong></label>
                            <input type="text"
                                   class="form-control"
                                   value="081234567890">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label><strong>Alamat</strong></label>
                            <input type="text"
                                   class="form-control"
                                   value="Jakarta Barat">
                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label><strong>Deskripsi Website</strong></label>

                    <textarea class="form-control"
                              rows="4">Sistem Pelaporan Masyarakat berbasis web.</textarea>

                </div>

                <div class="form-group">

                    <label><strong>Logo Website</strong></label>

                    <input type="file"
                           class="form-control-file">

                </div>

                <hr>

                <div class="text-right">

                    <button class="btn btn-primary">

                        <i class="fas fa-save"></i>

                        Simpan Pengaturan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- Informasi Sistem -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Informasi Sistem
        </h6>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tbody>

                <tr>
                    <th width="35%">Nama Aplikasi</th>
                    <td>SiLapor</td>
                </tr>

                <tr>
                    <th>Versi</th>
                    <td>1.0.0</td>
                </tr>

                <tr>
                    <th>Framework</th>
                    <td>Laravel 13</td>
                </tr>

                <tr>
                    <th>Bahasa Pemrograman</th>
                    <td>PHP 8</td>
                </tr>

                <tr>
                    <th>Database</th>
                    <td>MySQL</td>
                </tr>

                <tr>
                    <th>Developer</th>
                    <td>Fadlimuhh</td>
                </tr>

                <tr>
                    <th>Tahun</th>
                    <td>2026</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<!-- Statistik Sistem -->
<div class="card shadow">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Statistik Sistem
        </h6>
    </div>

    <div class="card-body">

        <div class="row text-center">

            <div class="col-md-3">

                <h3 class="text-primary">
                    125
                </h3>

                <p>Total Laporan</p>

            </div>

            <div class="col-md-3">

                <h3 class="text-success">
                    82
                </h3>

                <p>Masyarakat</p>

            </div>

            <div class="col-md-3">

                <h3 class="text-info">
                    8
                </h3>

                <p>Petugas</p>

            </div>

            <div class="col-md-3">

                <h3 class="text-warning">
                    4
                </h3>

                <p>Kategori</p>

            </div>

        </div>

    </div>

</div>

@endsection 

