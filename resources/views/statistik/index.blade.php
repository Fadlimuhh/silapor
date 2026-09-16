@extends('layouts.app')

@section('title', 'SiLapor | Statistik')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Statistik Laporan</h1>
            <p class="mb-0 text-gray-600">
                Ringkasan data statistik laporan masyarakat.
            </p>
        </div>
    </div>

    <!-- Card Statistik -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Laporan
                    </div>
                    <div class="h4 font-weight-bold text-gray-800">
                        125
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Menunggu
                    </div>
                    <div class="h4 font-weight-bold text-gray-800">
                        15
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Diproses
                    </div>
                    <div class="h4 font-weight-bold text-gray-800">
                        20
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Selesai
                    </div>
                    <div class="h4 font-weight-bold text-gray-800">
                        90
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Grafik -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Grafik Laporan Per Bulan
            </h6>
        </div>

        <div class="card-body text-center">

            <img src="{{ asset('assets/img/chart-placeholder.png') }}"
                 class="img-fluid"
                 style="max-height:350px;">

            <p class="text-muted mt-3">
                Grafik akan ditampilkan setelah data laporan tersedia.
            </p>

        </div>

    </div>

    <!-- Persentase -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Persentase Status Laporan
            </h6>
        </div>

        <div class="card-body">

            <h4 class="small font-weight-bold">
                Selesai
                <span class="float-right">72%</span>
            </h4>

            <div class="progress mb-4">
                <div class="progress-bar bg-success"
                     style="width:72%"></div>
            </div>

            <h4 class="small font-weight-bold">
                Diproses
                <span class="float-right">16%</span>
            </h4>

            <div class="progress mb-4">
                <div class="progress-bar bg-info"
                     style="width:16%"></div>
            </div>

            <h4 class="small font-weight-bold">
                Menunggu
                <span class="float-right">12%</span>
            </h4>

            <div class="progress">
                <div class="progress-bar bg-warning"
                     style="width:12%"></div>
            </div>

        </div>

    </div>

    <!-- Rekap -->
    <div class="card shadow">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Rekap Statistik
            </h6>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Menunggu</td>
                        <td>15</td>
                    </tr>

                    <tr>
                        <td>Diproses</td>
                        <td>20</td>
                    </tr>

                    <tr>
                        <td>Selesai</td>
                        <td>90</td>
                    </tr>

                    <tr class="font-weight-bold">
                        <td>Total</td>
                        <td>125</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection