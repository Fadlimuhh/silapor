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

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif


    {{-- DETAIL LAPORAN --}}
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

                        @if($report->status === 'menunggu')
                            <span class="badge badge-secondary">
                                Menunggu
                            </span>

                        @elseif($report->status === 'diproses')
                            <span class="badge badge-warning">
                                Diproses
                            </span>

                        @elseif($report->status === 'selesai')
                            <span class="badge badge-success">
                                Selesai
                            </span>

                        @elseif($report->status === 'ditolak')
                            <span class="badge badge-danger">
                                Ditolak
                            </span>
                        @endif

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

        </div>

    </div>


    {{-- TANGGAPAN --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-comment-dots"></i>
                Tanggapan Petugas
            </h6>

        </div>


        <div class="card-body">

            {{-- Jika sudah ada tanggapan --}}
            @if($report->tanggapan)

                <div class="alert alert-info">

                    <strong>
                        Tanggapan Petugas:
                    </strong>

                    <p class="mb-0 mt-2">
                        {{ $report->tanggapan }}
                    </p>

                </div>

            @else

                <div class="alert alert-secondary">
                    Belum ada tanggapan dari petugas.
                </div>

            @endif


            {{-- FORM KHUSUS PETUGAS --}}
            @if(Auth::check() && Auth::user()->role === 'petugas')

                <hr>

                <h6 class="font-weight-bold text-gray-800">
                    Berikan Tanggapan
                </h6>

                <form
                    action="{{ route('laporan.updateTanggapan', $report->id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="form-group">

                        <textarea
                            name="tanggapan"
                            class="form-control"
                            rows="5"
                            placeholder="Tulis tanggapan untuk masyarakat..."
                            required>{{ old('tanggapan', $report->tanggapan) }}</textarea>

                    </div>

                    <button type="submit" class="btn btn-primary">

                        <i class="fas fa-paper-plane"></i>

                        Kirim Tanggapan

                    </button>

                </form>

            @endif

        </div>

    </div>


    {{-- TOMBOL --}}
    <div class="mb-4">

        <a href="{{ route('laporan') }}"
           class="btn btn-secondary">

            <i class="fas fa-arrow-left"></i>

            Kembali

        </a>


        {{-- Edit hanya untuk Admin --}}
        @if(Auth::check() && Auth::user()->role === 'admin')

            <a href="{{ route('laporan.edit', $report->id) }}"
               class="btn btn-warning">

                <i class="fas fa-edit"></i>

                Edit

            </a>

        @endif

    </div>


</div>

@endsection