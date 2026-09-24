@extends('layouts.app')

@section('title', 'SiLapor | Petugas')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
            <p class="mb-0 text-gray-600">
                Kelola data petugas yang bertugas di SiLapor.
            </p>
        </div>

        <a href="{{ route('petugas.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-user-plus"></i>
            Tambah Petugas
        </a>
    </div>

    <!-- Pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Statistik -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-primary font-weight-bold">
                        Total Petugas
                    </h6>
                    <h3>{{ $petugas->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-success font-weight-bold">
                        Aktif
                    </h6>
                    <h3>{{ $petugas->where('status', 'aktif')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-warning font-weight-bold">
                        Belum Verifikasi
                    </h6>
                    <h3>{{ $petugas->where('status', 'belum_verifikasi')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-danger font-weight-bold">
                        Nonaktif
                    </h6>
                    <h3>{{ $petugas->where('status', 'nonaktif')->count() }}</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Search -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="row">

                <div class="col-md-4">
                    <a href="{{ route('petugas.create') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        Tambah Petugas
                    </a>
                </div>

                <div class="col-md-8">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Cari nama petugas...">
                </div>

            </div>

        </div>

    </div>

    <!-- Tabel -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Petugas
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="thead-light">

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th width="150">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($petugas as $item)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $item->name }}</td>

                                <td>{{ $item->email }}</td>

                                <td>{{ $item->no_hp }}</td>

                                <td>
                                    <span class="badge badge-info">
                                        Petugas
                                    </span>
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

                                    <!-- Detail -->
                                    <a href="{{ route('petugas.show', $item->id) }}"
                                       class="btn btn-info btn-sm"
                                       title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('petugas.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Hapus -->
                                   <form action="{{ route('petugas.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data petugas ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    Belum ada data petugas.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection