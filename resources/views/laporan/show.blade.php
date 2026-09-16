@extends('layouts.app')

@section('title', 'SiLapor | Detail Laporan')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Detail Laporan</h1>
            <p class="mb-0 text-gray-600">
                Informasi lengkap laporan masyarakat.
            </p>
        </div>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $report->judul }}
            </h6>
        </div>

        <div class="card-body">

            <div class="row mb-4">

                <div class="col-md-6">
                    <strong>Pelapor</strong>
                    <p class="mt-1">
                        {{ $report->user->name ?? '-' }}
                    </p>
                </div>

                <div class="col-md-6">
                    <strong>Kategori</strong>
                    <p class="mt-1">
                        {{ $report->category->name ?? '-' }}
                    </p>
                </div>

            </div>

            <div class="row mb-4">

                <div class="col-md-6">
                    <strong>Status</strong>
                    <p class="mt-1">
                        {{ ucfirst($report->status) }}
                    </p>
                </div>

                <div class="col-md-6">
                    <strong>Tanggal Laporan</strong>
                    <p class="mt-1">
                        {{ $report->created_at->format('d/m/Y H:i') }}
                    </p>
                </div>

            </div>

            <div class="mb-4">
                <strong>Alamat Kejadian</strong>

                <p class="mt-1">
                    {{ $report->alamat }}
                </p>
            </div>

            <div class="mb-4">
                <strong>Deskripsi Laporan</strong>

                <p class="mt-1">
                    {{ $report->deskripsi }}
                </p>
            </div>

            @if($report->foto)

                <div class="mb-4">

                    <strong>Foto Laporan</strong>

                    <div class="mt-2">
                        <img
                            src="{{ asset('storage/' . $report->foto) }}"
                            alt="Foto laporan"
                            class="img-fluid rounded"
                            style="max-width: 500px;">
                    </div>

                </div>

            @endif

            <hr>

            <a href="{{ route('laporan') }}"
               class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>

            <a href="{{ route('laporan.edit', $report->id) }}"
               class="btn btn-warning">
                <i class="fas fa-edit"></i>
                Edit
            </a>

        </div>

    </div>

</div>

@endsection