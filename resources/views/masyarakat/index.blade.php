@extends('layouts.app')

@section('title', 'SiLapor | Masyarakat')

@section('content')

<div class="container-fluid">

    {{-- Alert sukses --}}
    @if (session('success'))
        <div class="alert alert-success shadow-sm">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif

    {{-- Judul --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800 font-weight-bold">
                Data Masyarakat
            </h1>

            <p class="mb-0 text-gray-600">
                Kelola seluruh data masyarakat yang terdaftar di SiLapor.
            </p>
        </div>

        <a href="{{ route('masyarakat.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-user-plus mr-1"></i>
            Tambah Masyarakat
        </a>
    </div>

    {{-- Statistik --}}
    <div class="row">

        {{-- Total --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Masyarakat
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $totalMasyarakat }}
                    </div>

                    <small class="text-muted">
                        Warga terdaftar
                    </small>
                </div>
            </div>
        </div>

        {{-- Aktif --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Aktif
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $masyarakatAktif }}
                    </div>

                    <small class="text-muted">
                        Akun aktif
                    </small>
                </div>
            </div>
        </div>

        {{-- Belum Verifikasi --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Belum Verifikasi
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $masyarakatBelumVerifikasi }}
                    </div>

                    <small class="text-muted">
                        Perlu diperiksa
                    </small>
                </div>
            </div>
        </div>

        {{-- Nonaktif --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Nonaktif
                    </div>

                    <div class="h4 mb-0 font-weight-bold text-gray-800">
                        {{ $masyarakatNonaktif }}
                    </div>

                    <small class="text-muted">
                        Akun nonaktif
                    </small>
                </div>
            </div>
        </div>

    </div>

    {{-- Search --}}
    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="row align-items-center">

                <div class="col-md-8 mb-2 mb-md-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>

                        <input
                            type="text"
                            id="searchMasyarakat"
                            class="form-control"
                            placeholder="Cari nama, NIK, email, atau nomor HP..."
                        >
                    </div>
                </div>

                <div class="col-md-4 text-md-right">
                    <span class="text-muted">
                        Menampilkan
                        <strong>{{ $masyarakat->count() }}</strong>
                        data
                    </span>
                </div>

            </div>

        </div>
    </div>

    {{-- Tabel --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-users mr-2"></i>
                Daftar Masyarakat
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="tableMasyarakat">

                    <thead class="thead-light">
                        <tr>
                            <th width="50">No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($masyarakat as $item)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->nik ?? '-' }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $item->name }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->email }}
                                </td>

                                <td>
                                    {{ $item->no_hp ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->alamat ?? '-' }}
                                </td>

                                <td>

                                    @if ($item->status === 'aktif')

                                        <span class="badge badge-success">
                                            Aktif
                                        </span>

                                    @elseif ($item->status === 'nonaktif')

                                        <span class="badge badge-danger">
                                            Nonaktif
                                        </span>

                                    @else

                                        <span class="badge badge-warning">
                                            Belum Verifikasi
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a
                                        href="{{ route('masyarakat.show', $item->id) }}"
                                        class="btn btn-info btn-sm"
                                        title="Detail"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a
                                        href="{{ route('masyarakat.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm"
                                        title="Edit"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form
                                        action="{{ route('masyarakat.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            title="Hapus"
                                        >
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center py-4">

                                    <i class="fas fa-users fa-2x text-gray-300 mb-2"></i>

                                    <div class="text-muted">
                                        Belum ada data masyarakat.
                                    </div>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

{{-- Search sederhana --}}
<script>
document.getElementById('searchMasyarakat').addEventListener('keyup', function () {

    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('#tableMasyarakat tbody tr');

    rows.forEach(function (row) {

        const text = row.innerText.toLowerCase();

        row.style.display = text.includes(keyword) ? '' : 'none';

    });

});
</script>

@endsection