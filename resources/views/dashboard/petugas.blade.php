@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Petugas</h1>
    </div>

    {{-- STATISTIK LAPORAN --}}
    <div class="row">

        {{-- Total Laporan --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Laporan Masuk
                    </div>

                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $totalLaporan }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Sedang Diproses --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Sedang Diproses
                    </div>

                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanDiproses }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Laporan Selesai --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Laporan Selesai
                    </div>

                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanSelesai }}
                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- LAPORAN TERBARU --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Laporan Terbaru
            </h6>
        </div>

        <div class="card-body">

            @if($laporanTerbaru->count() > 0)

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pelapor</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($laporanTerbaru as $report)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        {{ $report->judul }}
                                    </td>

                                    <td>
                                        {{ $report->user->name ?? '-' }}
                                    </td>

                                    <td>
                                        {{ $report->category->nama_kategori ?? '-' }}
                                    </td>

                                    <td>

                                        @if($report->status == 'menunggu')
                                            <span class="badge badge-secondary">
                                                Menunggu
                                            </span>

                                        @elseif($report->status == 'diproses')
                                            <span class="badge badge-warning">
                                                Diproses
                                            </span>

                                        @elseif($report->status == 'selesai')
                                            <span class="badge badge-success">
                                                Selesai
                                            </span>

                                        @elseif($report->status == 'ditolak')
                                            <span class="badge badge-danger">
                                                Ditolak
                                            </span>
                                        @endif

                                    </td>

                                    <td>
                                        {{ $report->created_at->format('d/m/Y') }}
                                    </td>

                                    <td>
                                        <a href="{{ route('laporan.show', $report->id) }}"
                                           class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                            Detail
                                        </a>
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="text-center py-4">
                    <i class="fas fa-file-alt fa-3x text-gray-300 mb-3"></i>

                    <p class="text-muted mb-0">
                        Belum ada laporan.
                    </p>
                </div>

            @endif

        </div>

    </div>


    {{-- WELCOME --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Selamat Datang, {{ Auth::user()->name }}
            </h6>
        </div>

        <div class="card-body">

            <p class="mb-0">
                Anda login sebagai <strong>Petugas</strong>.
                Silakan periksa dan proses laporan masyarakat.
            </p>

        </div>

    </div>

</div>

@endsection