@extends('layouts.app')

@section('title', 'SiLapor | Pengaturan')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800 font-weight-bold">
                Pengaturan
            </h1>

            <p class="mb-0 text-gray-600">
                Atur informasi dasar aplikasi SiLapor.
            </p>
        </div>
    </div>


    {{-- SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success shadow-sm">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif


    {{-- ERROR --}}
    @if ($errors->any())
        <div class="alert alert-danger shadow-sm">
            <strong>Terjadi kesalahan:</strong>

            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- PENGATURAN WEBSITE --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-cog mr-2"></i>
                Pengaturan Website
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('pengaturan.update') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                <strong>Nama Website</strong>
                            </label>

                            <input
                                type="text"
                                name="nama_website"
                                class="form-control"
                                value="{{ old('nama_website', $setting->nama_website) }}"
                                required
                            >

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                <strong>Email Admin</strong>
                            </label>

                            <input
                                type="email"
                                name="email_admin"
                                class="form-control"
                                value="{{ old('email_admin', $setting->email_admin) }}"
                                required
                            >

                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                <strong>Nomor Telepon</strong>
                            </label>

                            <input
                                type="text"
                                name="nomor_telepon"
                                class="form-control"
                                value="{{ old('nomor_telepon', $setting->nomor_telepon) }}"
                            >

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                <strong>Alamat</strong>
                            </label>

                            <input
                                type="text"
                                name="alamat"
                                class="form-control"
                                value="{{ old('alamat', $setting->alamat) }}"
                            >

                        </div>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        <strong>Deskripsi Website</strong>
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="4"
                    >{{ old('deskripsi', $setting->deskripsi) }}</textarea>

                </div>


                <div class="form-group">

                    <label>
                        <strong>Logo Website</strong>
                    </label>

                    <input
                        type="file"
                        name="logo"
                        class="form-control-file"
                        accept=".jpg,.jpeg,.png"
                    >

                    @if ($setting->logo)

                        <div class="mt-3">

                            <small class="text-muted d-block mb-2">
                                Logo saat ini:
                            </small>

                            <img
                                src="{{ asset('storage/' . $setting->logo) }}"
                                alt="Logo"
                                style="height:70px; object-fit:contain;"
                            >

                        </div>

                    @endif

                </div>


                <hr>


                <div class="text-right">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >

                        <i class="fas fa-save mr-1"></i>

                        Simpan Pengaturan

                    </button>

                </div>

            </form>

        </div>

    </div>


    {{-- INFORMASI SISTEM --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-info-circle mr-2"></i>
                Informasi Sistem
            </h6>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <tbody>

                        <tr>
                            <th width="35%">Nama Aplikasi</th>
                            <td>{{ $setting->nama_website }}</td>
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

    </div>


    {{-- STATISTIK SISTEM --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-chart-line mr-2"></i>
                Statistik Sistem
            </h6>

        </div>


        <div class="card-body">

            <div class="row text-center">

                <div class="col-md-3 mb-3">

                    <h3 class="text-primary font-weight-bold">
                        {{ $totalLaporan }}
                    </h3>

                    <p class="text-muted mb-0">
                        Total Laporan
                    </p>

                </div>


                <div class="col-md-3 mb-3">

                    <h3 class="text-success font-weight-bold">
                        {{ $totalMasyarakat }}
                    </h3>

                    <p class="text-muted mb-0">
                        Masyarakat
                    </p>

                </div>


                <div class="col-md-3 mb-3">

                    <h3 class="text-info font-weight-bold">
                        {{ $totalPetugas }}
                    </h3>

                    <p class="text-muted mb-0">
                        Petugas
                    </p>

                </div>


                <div class="col-md-3 mb-3">

                    <h3 class="text-warning font-weight-bold">
                        {{ $totalKategori }}
                    </h3>

                    <p class="text-muted mb-0">
                        Kategori
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection