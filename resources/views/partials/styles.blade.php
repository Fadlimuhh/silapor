<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="SiLapor - Sistem Pelaporan Masyarakat">
<meta name="author" content="SiLapor">

<title>@yield('title', 'SiLapor')</title>

<link rel="icon" type="image/png" href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">
<link rel="apple-touch-icon" href="{{ asset('assets/img/silapor-favicon.png') }}?v=4">

<!-- Font Awesome -->
<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- SB Admin -->
<link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">


<style>

/* =====================================================
   GLOBAL
===================================================== */

* {
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif !important;
    background: #f5f7fb !important;
    color: #263238;
}

a {
    text-decoration: none !important;
}

#wrapper {
    min-height: 100vh;
}


/* =====================================================
   SIDEBAR
===================================================== */

.sidebar {
    width: 245px !important;
    min-height: 100vh;
    background: linear-gradient(180deg, #1d4ed8 0%, #2563eb 55%, #1e40af 100%) !important;
    border-right: 1px solid rgba(255,255,255,0.08);
    box-shadow: 8px 0 25px rgba(15, 23, 42, 0.08);
}

.sidebar .sidebar-brand {
    height: 78px;
    padding: 0 20px;
}

.sidebar .sidebar-brand-icon {
    font-size: 22px;
}

.sidebar .sidebar-brand-text {
    font-size: 17px;
    font-weight: 800;
    letter-spacing: 0.8px;
}

.sidebar .sidebar-divider {
    margin: 0 20px 20px;
    border-top: 1px solid rgba(255,255,255,0.15);
}

.sidebar .sidebar-heading {
    padding: 0 22px;
    margin-bottom: 8px;
    color: rgba(255,255,255,0.55);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.sidebar .nav-item {
    margin: 4px 12px;
}

.sidebar .nav-link {
    border-radius: 12px;
    padding: 12px 15px !important;
    color: rgba(255,255,255,0.78) !important;
    font-size: 13px;
    font-weight: 500;
    transition: all .2s ease;
}

.sidebar .nav-link i {
    width: 25px;
    margin-right: 5px;
    font-size: 14px;
}

.sidebar .nav-link:hover {
    background: rgba(255,255,255,0.12);
    color: #fff !important;
    transform: translateX(2px);
}

.sidebar .nav-item.active .nav-link {
    background: rgba(255,255,255,0.16) !important;
    color: #fff !important;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.sidebar .nav-item.active .nav-link i {
    color: #fff;
}


/* =====================================================
   SIDEBAR COLLAPSE
===================================================== */

.sidebar .collapse-inner {
    border-radius: 12px !important;
    padding: 8px !important;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.sidebar .collapse-item {
    border-radius: 8px;
    padding: 9px 12px !important;
    font-size: 12px;
    color: #64748b !important;
}

.sidebar .collapse-item:hover {
    background: #eff6ff;
    color: #2563eb !important;
}

.sidebar .collapse-item.active {
    background: #eff6ff;
    color: #2563eb !important;
    font-weight: 700;
}

.sidebar .collapse-header {
    color: #94a3b8;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
}


/* =====================================================
   TOPBAR
===================================================== */

.topbar {
    height: 82px !important;
    margin: 0 !important;
    padding: 0 30px !important;
    background: rgba(255,255,255,0.95) !important;
    border-bottom: 1px solid #e8edf5;
    box-shadow: 0 4px 20px rgba(15,23,42,0.04) !important;
}

.silapor-greeting {
    display: flex;
    align-items: center;
    gap: 12px;
}

.greeting-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eff6ff;
    color: #2563eb;
    font-size: 17px;
}

.greeting-title {
    font-size: 14px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 3px;
}

.greeting-date {
    color: #94a3b8;
    font-size: 11px;
}

.topbar .nav-link {
    color: #64748b !important;
}

.topbar .img-profile {
    width: 38px !important;
    height: 38px !important;
    border: 3px solid #eff6ff;
}

.topbar .dropdown-menu {
    border: 0 !important;
    border-radius: 14px !important;
    box-shadow: 0 15px 40px rgba(15,23,42,0.14) !important;
    padding: 8px !important;
}

.topbar .dropdown-item {
    border-radius: 9px;
    padding: 10px 12px;
    font-size: 12px;
}

.topbar .dropdown-item:hover {
    background: #f1f5f9;
}


/* =====================================================
   MAIN CONTENT
===================================================== */

#content-wrapper {
    background: #f5f7fb !important;
}

.silapor-main {
    padding: 28px 30px 40px;
    min-height: calc(100vh - 82px);
}


/* =====================================================
   PAGE TITLE
===================================================== */

.silapor-main h1 {
    font-weight: 700 !important;
    color: #1e293b !important;
    letter-spacing: -0.5px;
}


/* =====================================================
   CARDS
===================================================== */

.card {
    border: 0 !important;
    border-radius: 16px !important;
    box-shadow: 0 5px 20px rgba(15,23,42,0.05) !important;
    overflow: hidden;
}

.card-header {
    background: #fff !important;
    border-bottom: 1px solid #eef2f7 !important;
    padding: 18px 22px !important;
}

.card-body {
    padding: 22px !important;
}


/* =====================================================
   STATISTIC CARDS
===================================================== */

.border-left-primary,
.border-left-warning,
.border-left-success,
.border-left-danger {
    border-left-width: 4px !important;
}

.h5 {
    font-weight: 700 !important;
}


/* =====================================================
   TABLE
===================================================== */

.table {
    color: #475569;
}

.table thead th {
    background: #f8fafc;
    border-top: 0 !important;
    border-bottom: 1px solid #e2e8f0 !important;
    color: #64748b;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .4px;
    padding: 13px 14px;
}

.table tbody td {
    padding: 14px;
    vertical-align: middle;
    border-color: #eef2f7 !important;
    font-size: 12px;
}

.table tbody tr {
    transition: background .15s ease;
}

.table tbody tr:hover {
    background: #f8fafc;
}


/* =====================================================
   BUTTON
===================================================== */

.btn {
    border-radius: 9px !important;
    font-weight: 600 !important;
    font-size: 12px !important;
    padding: 9px 14px !important;
}

.btn-primary {
    background: #2563eb !important;
    border-color: #2563eb !important;
}

.btn-primary:hover {
    background: #1d4ed8 !important;
    border-color: #1d4ed8 !important;
}


/* =====================================================
   BADGE
===================================================== */

.badge {
    border-radius: 7px !important;
    padding: 6px 9px !important;
    font-size: 10px !important;
    font-weight: 600;
}


/* =====================================================
   FORM
===================================================== */

.form-control,
.custom-select {
    border: 1px solid #e2e8f0 !important;
    border-radius: 9px !important;
    font-size: 12px !important;
    padding: 10px 12px !important;
    color: #334155;
}

.form-control:focus,
.custom-select:focus {
    border-color: #93c5fd !important;
    box-shadow: 0 0 0 3px rgba(37,99,235,0.10) !important;
}


/* =====================================================
   FOOTER
===================================================== */

footer {
    background: transparent !important;
    border-top: 1px solid #e8edf5;
    color: #94a3b8;
}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 768px) {

    .topbar {
        padding: 0 15px !important;
    }

    .silapor-main {
        padding: 20px 15px 30px;
    }

    .greeting-date {
        display: none;
    }

    .greeting-title {
        font-size: 12px;
    }

}

/* =====================================================
   SIDEBAR FIXED / STICKY
===================================================== */

.sidebar {
    position: fixed !important;
    top: 0;
    left: 0;
    height: 100vh !important;
    min-height: 100vh !important;
    overflow-y: auto;
    overflow-x: hidden;
    z-index: 1030;
}

/* Supaya scrollbar sidebar tetap rapi */
.sidebar::-webkit-scrollbar {
    width: 5px;
}

.sidebar::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.25);
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-track {
    background: transparent;
}

/* Konten digeser supaya tidak ketutup sidebar */
#content-wrapper {
    margin-left: 245px;
}

/* Saat sidebar sedang collapsed */
body.sidebar-toggled #content-wrapper {
    margin-left: 0;
}

/* Tampilan mobile */
@media (max-width: 768px) {

    .sidebar {
        position: fixed !important;
        height: 100vh !important;
    }

    #content-wrapper {
        margin-left: 0;
    }

}


</style>