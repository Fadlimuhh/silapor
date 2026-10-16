@extends('layouts.app')

@section('title', 'SiLapor | Statistik')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800 font-weight-bold">
                Statistik Laporan
            </h1>

            <p class="mb-0 text-gray-600">
                Ringkasan data laporan masyarakat berdasarkan kondisi terbaru.
            </p>
        </div>
    </div>


    {{-- CARD STATISTIK --}}
    <div class="row">

        {{-- TOTAL --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Laporan
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $totalLaporan }}
                    </div>

                    <small class="text-muted">
                        Seluruh laporan
                    </small>

                </div>
            </div>
        </div>


        {{-- MENUNGGU --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">

                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Menunggu
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanMenunggu }}
                    </div>

                    <small class="text-muted">
                        Belum diproses
                    </small>

                </div>
            </div>
        </div>


        {{-- DIPROSES --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">

                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Diproses
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanDiproses }}
                    </div>

                    <small class="text-muted">
                        Sedang ditangani
                    </small>

                </div>
            </div>
        </div>


        {{-- SELESAI --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">

                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Selesai
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanSelesai }}
                    </div>

                    <small class="text-muted">
                        Laporan selesai
                    </small>

                </div>
            </div>
        </div>

    </div>


    {{-- STATUS DITOLAK --}}
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">

                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Ditolak
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $laporanDitolak }}
                    </div>

                    <small class="text-muted">
                        Laporan ditolak
                    </small>

                </div>
            </div>
        </div>

    </div>


    {{-- REKAP STATUS --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-chart-bar mr-2"></i>
                Rekap Status Laporan
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="thead-light">

                        <tr>
                            <th>Status</th>
                            <th width="150">Jumlah</th>
                            <th width="150">Persentase</th>
                        </tr>

                    </thead>

                    <tbody>

                        {{-- MENUNGGU --}}
                        <tr>

                            <td>
                                <span class="badge badge-warning">
                                    Menunggu
                                </span>
                            </td>

                            <td>
                                {{ $laporanMenunggu }}
                            </td>

                            <td>

                                @if ($totalLaporan > 0)
                                    {{ round(($laporanMenunggu / $totalLaporan) * 100, 1) }}%
                                @else
                                    0%
                                @endif

                            </td>

                        </tr>


                        {{-- DIPROSES --}}
                        <tr>

                            <td>
                                <span class="badge badge-info">
                                    Diproses
                                </span>
                            </td>

                            <td>
                                {{ $laporanDiproses }}
                            </td>

                            <td>

                                @if ($totalLaporan > 0)
                                    {{ round(($laporanDiproses / $totalLaporan) * 100, 1) }}%
                                @else
                                    0%
                                @endif

                            </td>

                        </tr>


                        {{-- SELESAI --}}
                        <tr>

                            <td>
                                <span class="badge badge-success">
                                    Selesai
                                </span>
                            </td>

                            <td>
                                {{ $laporanSelesai }}
                            </td>

                            <td>

                                @if ($totalLaporan > 0)
                                    {{ round(($laporanSelesai / $totalLaporan) * 100, 1) }}%
                                @else
                                    0%
                                @endif

                            </td>

                        </tr>


                        {{-- DITOLAK --}}
                        <tr>

                            <td>
                                <span class="badge badge-danger">
                                    Ditolak
                                </span>
                            </td>

                            <td>
                                {{ $laporanDitolak }}
                            </td>

                            <td>

                                @if ($totalLaporan > 0)
                                    {{ round(($laporanDitolak / $totalLaporan) * 100, 1) }}%
                                @else
                                    0%
                                @endif

                            </td>

                        </tr>


                        {{-- TOTAL --}}
                        <tr class="font-weight-bold">

                            <td>
                                Total
                            </td>

                            <td>
                                {{ $totalLaporan }}
                            </td>

                            <td>
                                100%
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    {{-- PROGRESS STATUS --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-tasks mr-2"></i>
                Persentase Status Laporan
            </h6>
        </div>

        <div class="card-body">

            {{-- SELESAI --}}
            <div class="mb-4">

                <div class="d-flex justify-content-between mb-1">

                    <span class="small font-weight-bold">
                        Selesai
                    </span>

                    <span class="small font-weight-bold">
                        @if ($totalLaporan > 0)
                            {{ round(($laporanSelesai / $totalLaporan) * 100, 1) }}%
                        @else
                            0%
                        @endif
                    </span>

                </div>

                <div class="progress" style="height: 10px;">

                    <div class="progress-bar bg-success"
                         style="width:
                         {{ $totalLaporan > 0 ? ($laporanSelesai / $totalLaporan) * 100 : 0 }}%;">
                    </div>

                </div>

            </div>


            {{-- DIPROSES --}}
            <div class="mb-4">

                <div class="d-flex justify-content-between mb-1">

                    <span class="small font-weight-bold">
                        Diproses
                    </span>

                    <span class="small font-weight-bold">

                        @if ($totalLaporan > 0)
                            {{ round(($laporanDiproses / $totalLaporan) * 100, 1) }}%
                        @else
                            0%
                        @endif

                    </span>

                </div>

                <div class="progress" style="height: 10px;">

                    <div class="progress-bar bg-info"
                         style="width:
                         {{ $totalLaporan > 0 ? ($laporanDiproses / $totalLaporan) * 100 : 0 }}%;">
                    </div>

                </div>

            </div>


            {{-- MENUNGGU --}}
            <div class="mb-4">

                <div class="d-flex justify-content-between mb-1">

                    <span class="small font-weight-bold">
                        Menunggu
                    </span>

                    <span class="small font-weight-bold">

                        @if ($totalLaporan > 0)
                            {{ round(($laporanMenunggu / $totalLaporan) * 100, 1) }}%
                        @else
                            0%
                        @endif

                    </span>

                </div>

                <div class="progress" style="height: 10px;">

                    <div class="progress-bar bg-warning"
                         style="width:
                         {{ $totalLaporan > 0 ? ($laporanMenunggu / $totalLaporan) * 100 : 0 }}%;">
                    </div>

                </div>

            </div>


            {{-- DITOLAK --}}
            <div>

                <div class="d-flex justify-content-between mb-1">

                    <span class="small font-weight-bold">
                        Ditolak
                    </span>

                    <span class="small font-weight-bold">

                        @if ($totalLaporan > 0)
                            {{ round(($laporanDitolak / $totalLaporan) * 100, 1) }}%
                        @else
                            0%
                        @endif

                    </span>

                </div>

                <div class="progress" style="height: 10px;">

                    <div class="progress-bar bg-danger"
                         style="width:
                         {{ $totalLaporan > 0 ? ($laporanDitolak / $totalLaporan) * 100 : 0 }}%;">
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- LAPORAN BERDASARKAN KATEGORI --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-folder-open mr-2"></i>
                Laporan Berdasarkan Kategori
            </h6>

        </div>

        <div class="card-body">

            @if ($laporanPerKategori->count() > 0)

                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead class="thead-light">

                            <tr>
                                <th>Kategori</th>
                                <th width="150">Jumlah Laporan</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($laporanPerKategori as $kategori => $jumlah)

                                <tr>

                                    <td>
                                        <i class="fas fa-folder text-primary mr-2"></i>
                                        {{ $kategori }}
                                    </td>

                                    <td>
                                        <strong>
                                            {{ $jumlah }}
                                        </strong>
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="text-center py-4">

                    <i class="fas fa-chart-pie fa-3x text-gray-300 mb-3"></i>

                    <p class="text-muted mb-0">
                        Belum ada data laporan untuk dianalisis.
                    </p>

                </div>

            @endif

        </div>

    </div>

</div>

@endsection