@extends('layouts.app')

@section('title', 'SiLapor | Laporan')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
            <p class="mb-0 text-gray-600">
                Kelola seluruh laporan masyarakat.
            </p>
        </div>
    </div>

    <div class="mb-3">
        <a href="{{ route('laporan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Laporan
        </a>
    </div>

    <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data Laporan
                </h6>
            </div>

        <div class="card-body">

        </div>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Pelapor</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td colspan="7" class="text-center text-muted">
                    Belum ada data laporan.
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>


@endsection