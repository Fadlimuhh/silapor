@extends('layouts.app')

@section('title', 'Dashboard Warga - SiLapor')

@section('content')

<div class="container-fluid">

    {{-- =====================================================
        HERO SECTION
    ====================================================== --}}
    <div class="row mb-4">

        <div class="col-12">

            <div class="silapor-hero">

                <div class="hero-content">

                    <div class="hero-label">
                        <i class="fas fa-shield-alt mr-1"></i>
                        SI LAPOR
                    </div>

                    <h1>
                        Selamat datang,
                        <strong>{{ Auth::user()->name }}</strong> 👋
                    </h1>

                    <p>
                        Sampaikan laporan mengenai masalah di lingkungan
                        dan pantau perkembangannya dengan mudah.
                    </p>

                    <div class="hero-actions">

                        <a href="{{ route('laporan.create') }}"
                           class="btn btn-light btn-lg">

                            <i class="fas fa-plus mr-2"></i>
                            Buat Laporan

                        </a>

                        <a href="{{ route('laporan') }}"
                           class="btn btn-outline-light btn-lg ml-2">

                            <i class="fas fa-file-alt mr-2"></i>
                            Lihat Laporan

                        </a>

                    </div>

                </div>


                <div class="hero-decoration">

                    <div class="hero-circle circle-one"></div>
                    <div class="hero-circle circle-two"></div>

                    <i class="fas fa-bullhorn"></i>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
        STATISTICS
    ====================================================== --}}
    <div class="row mb-4">

        {{-- Total --}}
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="modern-stat-card">

                <div class="stat-icon stat-blue">
                    <i class="fas fa-file-alt"></i>
                </div>

                <div class="stat-content">

                    <div class="stat-label">
                        TOTAL LAPORAN
                    </div>

                    <div class="stat-number">
                        {{ $totalLaporan }}
                    </div>

                    <div class="stat-description">
                        Semua laporan yang kamu buat
                    </div>

                </div>

            </div>

        </div>


        {{-- Diproses --}}
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="modern-stat-card">

                <div class="stat-icon stat-orange">
                    <i class="fas fa-sync-alt"></i>
                </div>

                <div class="stat-content">

                    <div class="stat-label">
                        SEDANG DIPROSES
                    </div>

                    <div class="stat-number">
                        {{ $laporanDiproses }}
                    </div>

                    <div class="stat-description">
                        Laporan sedang ditangani
                    </div>

                </div>

            </div>

        </div>


        {{-- Selesai --}}
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="modern-stat-card">

                <div class="stat-icon stat-green">
                    <i class="fas fa-check"></i>
                </div>

                <div class="stat-content">

                    <div class="stat-label">
                        SELESAI
                    </div>

                    <div class="stat-number">
                        {{ $laporanSelesai }}
                    </div>

                    <div class="stat-description">
                        Laporan telah diselesaikan
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="row">


        {{-- =================================================
            LAPORAN TERBARU
        ================================================== --}}
        <div class="col-xl-8 mb-4">

            <div class="modern-card">

                <div class="modern-card-header">

                    <div>

                        <div class="section-label">
                            AKTIVITAS
                        </div>

                        <h5>
                            Laporan Terbaru
                        </h5>

                    </div>

                    <a href="{{ route('laporan') }}"
                       class="view-all">

                        Lihat semua
                        <i class="fas fa-arrow-right ml-1"></i>

                    </a>

                </div>


                <div class="modern-card-body">

                    @if($laporanTerbaru->count() > 0)

                        @foreach($laporanTerbaru as $report)

                            <div class="report-item">

                                <div class="report-icon">

                                    @if($report->status == 'menunggu')

                                        <i class="fas fa-clock"></i>

                                    @elseif($report->status == 'diproses')

                                        <i class="fas fa-sync-alt"></i>

                                    @elseif($report->status == 'selesai')

                                        <i class="fas fa-check"></i>

                                    @else

                                        <i class="fas fa-times"></i>

                                    @endif

                                </div>


                                <div class="report-info">

                                    <div class="report-title">
                                        {{ $report->judul }}
                                    </div>

                                    <div class="report-meta">

                                        <span>
                                            <i class="fas fa-tag mr-1"></i>
                                            {{ $report->category->nama_kategori ?? 'Tanpa kategori' }}
                                        </span>

                                        <span>
                                            <i class="far fa-calendar mr-1"></i>
                                            {{ $report->created_at->format('d M Y') }}
                                        </span>

                                    </div>

                                </div>


                                <div class="report-status">

                                    @if($report->status == 'menunggu')

                                        <span class="status-pill status-waiting">
                                            Menunggu
                                        </span>

                                    @elseif($report->status == 'diproses')

                                        <span class="status-pill status-process">
                                            Diproses
                                        </span>

                                    @elseif($report->status == 'selesai')

                                        <span class="status-pill status-success">
                                            Selesai
                                        </span>

                                    @elseif($report->status == 'ditolak')

                                        <span class="status-pill status-danger">
                                            Ditolak
                                        </span>

                                    @endif

                                </div>


                                <a href="{{ route('laporan.show', $report->id) }}"
                                   class="report-arrow">

                                    <i class="fas fa-chevron-right"></i>

                                </a>

                            </div>

                        @endforeach

                    @else

                        <div class="empty-state">

                            <div class="empty-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>

                            <h6>
                                Belum ada laporan
                            </h6>

                            <p>
                                Kamu belum membuat laporan apapun.
                            </p>

                            <a href="{{ route('laporan.create') }}"
                               class="btn btn-primary">

                                <i class="fas fa-plus mr-1"></i>
                                Buat Laporan Pertama

                            </a>

                        </div>

                    @endif

                </div>

            </div>

        </div>


        {{-- =================================================
            QUICK ACTION
        ================================================== --}}
        <div class="col-xl-4 mb-4">

            <div class="modern-card quick-card">

                <div class="modern-card-body">

                    <div class="section-label">
                        AKSES CEPAT
                    </div>

                    <h5 class="mb-4">
                        Apa yang ingin kamu lakukan?
                    </h5>


                    <a href="{{ route('laporan.create') }}"
                       class="quick-action">

                        <div class="quick-icon blue">
                            <i class="fas fa-plus"></i>
                        </div>

                        <div>

                            <strong>
                                Buat Laporan
                            </strong>

                            <small>
                                Sampaikan masalah baru
                            </small>

                        </div>

                        <i class="fas fa-chevron-right ml-auto"></i>

                    </a>


                    <a href="{{ route('laporan') }}"
                       class="quick-action">

                        <div class="quick-icon purple">
                            <i class="fas fa-file-alt"></i>
                        </div>

                        <div>

                            <strong>
                                Laporan Saya
                            </strong>

                            <small>
                                Lihat semua laporan
                            </small>

                        </div>

                        <i class="fas fa-chevron-right ml-auto"></i>

                    </a>


                    <a href="{{ route('profile') }}"
                       class="quick-action">

                        <div class="quick-icon green">
                            <i class="fas fa-user"></i>
                        </div>

                        <div>

                            <strong>
                                Profil Saya
                            </strong>

                            <small>
                                Kelola informasi akun
                            </small>

                        </div>

                        <i class="fas fa-chevron-right ml-auto"></i>

                    </a>

                </div>

            </div>


            {{-- STATUS RINGKAS --}}
            <div class="modern-card mt-4">

                <div class="modern-card-body">

                    <div class="section-label">
                        RINGKASAN
                    </div>

                    <h5 class="mb-4">
                        Status laporan
                    </h5>


                    <div class="status-summary">

                        <div class="summary-row">

                            <span>
                                <i class="fas fa-circle text-secondary mr-2"
                                   style="font-size:7px;"></i>
                                Menunggu
                            </span>

                            <strong>
                                {{ $laporanMenunggu }}
                            </strong>

                        </div>


                        <div class="summary-row">

                            <span>
                                <i class="fas fa-circle text-warning mr-2"
                                   style="font-size:7px;"></i>
                                Diproses
                            </span>

                            <strong>
                                {{ $laporanDiproses }}
                            </strong>

                        </div>


                        <div class="summary-row">

                            <span>
                                <i class="fas fa-circle text-success mr-2"
                                   style="font-size:7px;"></i>
                                Selesai
                            </span>

                            <strong>
                                {{ $laporanSelesai }}
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    DASHBOARD CUSTOM STYLE
========================================================= --}}

<style>

.silapor-hero {
    position: relative;
    overflow: hidden;
    min-height: 260px;
    border-radius: 22px;
    padding: 42px 45px;
    background:
        linear-gradient(120deg, #1d4ed8, #2563eb 55%, #3b82f6);
    color: white;
    box-shadow: 0 15px 35px rgba(37,99,235,.18);
}

.hero-content {
    position: relative;
    z-index: 3;
    max-width: 650px;
}

.hero-label {
    display: inline-flex;
    align-items: center;
    padding: 7px 12px;
    border-radius: 20px;
    background: rgba(255,255,255,.14);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.silapor-hero h1 {
    color: white !important;
    font-size: 28px;
    font-weight: 500 !important;
    margin-bottom: 12px;
}

.silapor-hero h1 strong {
    font-weight: 800;
}

.silapor-hero p {
    color: rgba(255,255,255,.82);
    font-size: 13px;
    line-height: 1.7;
    max-width: 560px;
    margin-bottom: 24px;
}

.hero-actions .btn {
    border-radius: 10px !important;
    padding: 11px 18px !important;
}

.hero-actions .btn-light {
    color: #2563eb !important;
}

.hero-decoration {
    position: absolute;
    right: 70px;
    top: 50%;
    transform: translateY(-50%);
    width: 170px;
    height: 170px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}

.hero-decoration > i {
    font-size: 80px;
    color: rgba(255,255,255,.85);
    transform: rotate(-8deg);
}

.hero-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,.08);
}

.circle-one {
    width: 170px;
    height: 170px;
}

.circle-two {
    width: 120px;
    height: 120px;
}


/* STAT CARD */

.modern-stat-card {
    background: white;
    border-radius: 17px;
    padding: 22px;
    display: flex;
    align-items: center;
    min-height: 125px;
    box-shadow: 0 5px 20px rgba(15,23,42,.05);
    transition: all .2s ease;
}

.modern-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(15,23,42,.08);
}

.stat-icon {
    width: 54px;
    height: 54px;
    min-width: 54px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-right: 17px;
}

.stat-blue {
    background: #eff6ff;
    color: #2563eb;
}

.stat-orange {
    background: #fff7ed;
    color: #f97316;
}

.stat-green {
    background: #ecfdf5;
    color: #10b981;
}

.stat-label {
    font-size: 9px;
    font-weight: 800;
    letter-spacing: .7px;
    color: #94a3b8;
    margin-bottom: 3px;
}

.stat-number {
    font-size: 25px;
    line-height: 1.2;
    font-weight: 800;
    color: #1e293b;
}

.stat-description {
    font-size: 10px;
    color: #94a3b8;
    margin-top: 3px;
}


/* CARD */

.modern-card {
    background: white;
    border-radius: 17px;
    box-shadow: 0 5px 20px rgba(15,23,42,.05);
    overflow: hidden;
}

.modern-card-header {
    padding: 21px 23px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #f1f5f9;
}

.modern-card-header h5 {
    margin: 2px 0 0;
    color: #1e293b;
    font-size: 16px;
    font-weight: 800;
}

.modern-card-body {
    padding: 22px;
}

.section-label {
    font-size: 9px;
    color: #94a3b8;
    font-weight: 800;
    letter-spacing: 1px;
}

.view-all {
    color: #2563eb !important;
    font-size: 11px;
    font-weight: 700;
}


/* REPORT */

.report-item {
    display: flex;
    align-items: center;
    padding: 14px 5px;
    border-bottom: 1px solid #f1f5f9;
    transition: all .15s ease;
}

.report-item:last-child {
    border-bottom: 0;
}

.report-item:hover {
    transform: translateX(3px);
}

.report-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 12px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 13px;
}

.report-info {
    flex: 1;
    min-width: 0;
}

.report-title {
    font-size: 12px;
    font-weight: 700;
    color: #334155;
    margin-bottom: 5px;
}

.report-meta {
    display: flex;
    gap: 15px;
    color: #94a3b8;
    font-size: 9px;
}

.report-status {
    margin-left: 15px;
}

.status-pill {
    display: inline-block;
    padding: 6px 9px;
    border-radius: 7px;
    font-size: 9px;
    font-weight: 700;
}

.status-waiting {
    background: #f1f5f9;
    color: #64748b;
}

.status-process {
    background: #fff7ed;
    color: #ea580c;
}

.status-success {
    background: #ecfdf5;
    color: #059669;
}

.status-danger {
    background: #fef2f2;
    color: #dc2626;
}

.report-arrow {
    color: #cbd5e1 !important;
    margin-left: 15px;
    font-size: 11px;
}

.report-arrow:hover {
    color: #2563eb !important;
}


/* QUICK ACTION */

.quick-card {
    min-height: 300px;
}

.quick-action {
    display: flex;
    align-items: center;
    padding: 12px;
    margin-bottom: 8px;
    border-radius: 12px;
    transition: all .2s ease;
    color: #334155 !important;
}

.quick-action:hover {
    background: #f8fafc;
    transform: translateX(3px);
}

.quick-icon {
    width: 40px;
    height: 40px;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
}

.quick-icon.blue {
    background: #eff6ff;
    color: #2563eb;
}

.quick-icon.purple {
    background: #f5f3ff;
    color: #7c3aed;
}

.quick-icon.green {
    background: #ecfdf5;
    color: #059669;
}

.quick-action strong {
    display: block;
    font-size: 11px;
}

.quick-action small {
    display: block;
    color: #94a3b8;
    font-size: 9px;
    margin-top: 2px;
}

.quick-action > i {
    color: #cbd5e1;
    font-size: 10px;
}


/* SUMMARY */

.status-summary {
    border-top: 1px solid #f1f5f9;
}

.summary-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 11px;
    color: #64748b;
}

.summary-row strong {
    color: #334155;
}


/* EMPTY */

.empty-state {
    text-align: center;
    padding: 35px 10px;
}

.empty-icon {
    width: 65px;
    height: 65px;
    margin: 0 auto 15px;
    border-radius: 18px;
    background: #f1f5f9;
    color: #94a3b8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
}

.empty-state h6 {
    color: #334155;
    font-weight: 700;
}

.empty-state p {
    color: #94a3b8;
    font-size: 11px;
}


/* MOBILE */

@media (max-width: 768px) {

    .silapor-hero {
        padding: 30px 25px;
        min-height: auto;
    }

    .silapor-hero h1 {
        font-size: 22px;
    }

    .hero-decoration {
        display: none;
    }

    .hero-actions .btn {
        width: 100%;
        margin: 4px 0 !important;
    }

    .report-status {
        display: none;
    }

    .report-meta {
        flex-direction: column;
        gap: 3px;
    }

}

</style>

@endsection