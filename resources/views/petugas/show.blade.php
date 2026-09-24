@extends('layouts.app')

@section('title', 'SiLapor | Detail Petugas')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Detail Petugas</h1>
            <p class="mb-0 text-gray-600">
                Informasi lengkap data petugas.
            </p>
        </div>

        <a href="{{ route('petugas.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Petugas
            </h6>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Nama Lengkap</div>
                <div class="col-md-8">{{ $petugas->name }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Email</div>
                <div class="col-md-8">{{ $petugas->email }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">No. HP</div>
                <div class="col-md-8">{{ $petugas->no_hp }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Alamat</div>
                <div class="col-md-8">{{ $petugas->alamat }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Role</div>
                <div class="col-md-8">
                    <span class="badge badge-info">Petugas</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Status</div>
                <div class="col-md-8">

                    @if ($petugas->status === 'aktif')
                        <span class="badge badge-success">Aktif</span>
                    @elseif ($petugas->status === 'nonaktif')
                        <span class="badge badge-danger">Nonaktif</span>
                    @else
                        <span class="badge badge-warning">Belum Verifikasi</span>
                    @endif

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Terdaftar</div>
                <div class="col-md-8">
                    {{ $petugas->created_at->format('d F Y H:i') }}
                </div>
            </div>

        </div>

    </div>

</div>

@endsection