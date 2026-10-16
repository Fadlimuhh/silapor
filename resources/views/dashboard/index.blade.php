@extends('layouts.app')

@section('title', 'SiLapor | Dashboard')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <p class="mb-0 text-gray-600">
                Selamat datang di Sistem Pelaporan Masyarakat (SiLapor)
            </p>
        </div>
    </div>


    {{-- ============================= --}}
    {{-- STATISTIK LAPORAN --}}
    {{-- ============================= --}}

    <div class="row">

        {{-- Total Laporan --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Laporan
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $totalLaporan }}
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        {{-- Menunggu --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Menunggu
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $laporanMenunggu }}
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        {{-- Diproses --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Diproses
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $laporanDiproses }}
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        {{-- Selesai --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Selesai
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $laporanSelesai }}
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>


    {{-- ============================= --}}
    {{-- LAPORAN TERBARU --}}
    {{-- ============================= --}}

    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Laporan Terbaru
            </h6>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pelapor</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($laporanTerbaru as $report)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $report->judul }}
                                </td>

                                <td>
                                    {{ $report->user->name ?? '-' }}
                                </td>

                                <td>

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

                                </td>

                                <td>
                                    {{ $report->created_at->format('d/m/Y H:i') }}
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5"
                                    class="text-center text-muted">

                                    Belum ada laporan.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    {{-- ============================= --}}
    {{-- AKTIVITAS --}}
    {{-- ============================= --}}

    <div class="row">

        <div class="col-12">

            <div class="card shadow mb-4">

                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-primary">
                        Aktivitas Terbaru
                    </h6>

                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">

                            <i class="fas fa-info-circle text-primary mr-2"></i>

                            Dashboard berhasil memuat data laporan.

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection