@extends('layouts.app')

@section('title', 'SiLapor | Masyarakat')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                Data Masyarakat
            </h1>
            <p class="mb-0 text-gray-600">
                Kelola seluruh data masyarakat yang terdaftar di SiLapor.
            </p>
        </div>
    </div>
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-primary font-weight-bold">Total Masyarakat</h6>
                <h3>125</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-success font-weight-bold">Aktif</h6>
                <h3>120</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-warning font-weight-bold">Belum Verifikasi</h6>
                <h3>3</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-danger font-weight-bold">Nonaktif</h6>
                <h3>2</h3>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">

    <div class="card-body">

        <div class="row">

            <div class="col-md-4">

                <a href="#" class="btn btn-primary">

                    <i class="fas fa-user-plus"></i>

                    Tambah Masyarakat

                </a>

            </div>

            <div class="col-md-8">

                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nama masyarakat...">

            </div>

        </div>

    </div>

</div>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Daftar Masyarakat
        </h6>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="thead-light">

                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th width="150">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>3175012345678901</td>
                        <td>Budi Santoso</td>
                        <td>081234567890</td>
                        <td>Jakarta Barat</td>
                        <td>
                            <span class="badge badge-success">Aktif</span>
                        </td>
                        <td>

                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>3175012345678902</td>
                        <td>Andi Saputra</td>
                        <td>082233445566</td>
                        <td>Jakarta Selatan</td>
                        <td>
                            <span class="badge badge-success">Aktif</span>
                        </td>
                        <td>

                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</div>

@endsection