@extends('layouts.app')

@section('title', 'SiLapor | Detail Masyarakat')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Detail Masyarakat</h1>
            <p class="mb-0 text-gray-600">
                Informasi lengkap data masyarakat.
            </p>
        </div>

        <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Masyarakat
            </h6>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">NIK</div>
                <div class="col-md-8">{{ $masyarakat->nik }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Nama Lengkap</div>
                <div class="col-md-8">{{ $masyarakat->name }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Email</div>
                <div class="col-md-8">{{ $masyarakat->email }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">No. HP</div>
                <div class="col-md-8">{{ $masyarakat->no_hp }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Alamat</div>
                <div class="col-md-8">{{ $masyarakat->alamat }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Status</div>
                <div class="col-md-8">
                    @if ($masyarakat->status === 'aktif')
                        <span class="badge badge-success">Aktif</span>
                    @elseif ($masyarakat->status === 'nonaktif')
                        <span class="badge badge-danger">Nonaktif</span>
                    @else
                        <span class="badge badge-warning">Belum Verifikasi</span>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 font-weight-bold">Terdaftar</div>
                <div class="col-md-8">
                    {{ $masyarakat->created_at->format('d F Y H:i') }}
                </div>
            </div>

        </div>

    </div>

</div>

@endsection