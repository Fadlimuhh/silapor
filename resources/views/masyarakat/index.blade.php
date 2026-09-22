@extends('layouts.app')

@section('title', 'SiLapor | Masyarakat')

@section('content')

<div class="container-fluid">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                Data Masyarakat
            </h1>
            <p class="mb-0 text-gray-600">
                Kelola seluruh data masyarakat yang terdaftar di SiLapor.
            </p>
        </div>
    </div>
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-primary font-weight-bold">Total Masyarakat</h6>
                <h3>125</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-success font-weight-bold">Aktif</h6>
                <h3>120</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-warning font-weight-bold">Belum Verifikasi</h6>
                <h3>3</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <h6 class="text-danger font-weight-bold">Nonaktif</h6>
                <h3>2</h3>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">

    <div class="card-body">

        <div class="row">

            <div class="col-md-4">

                <a href="{{ route('masyarakat.create') }}" class="btn btn-primary">

                    <i class="fas fa-user-plus"></i>
                    Tambah Masyarakat
                
                </a>

            </div>

            <div class="col-md-8">

                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nama masyarakat...">

            </div>

        </div>

    </div>

</div>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Daftar Masyarakat
        </h6>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="thead-light">

                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th width="150">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($masyarakat as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                @if ($item->status === 'aktif')
                                    <span class="badge badge-success">Aktif</span>
                                @elseif ($item->status === 'nonaktif')
                                    <span class="badge badge-danger">Nonaktif</span>
                                @else
                                    <span class="badge badge-warning">Belum Verifikasi</span>
                                @endif
                            </td>
                            <td>

                                <a href="{{ route('masyarakat.show', $item->id) }}"
                                    class="btn btn-info btn-sm"
                                    title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('masyarakat.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm"
                                    title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('masyarakat.destroy', $item->id) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

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
                                Belum ada data masyarakat.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</div>

<form action="{{ route('masyarakat.destroy', $item->id) }}"
    method="POST"
    class="d-inline"
    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
        <i class="fas fa-trash"></i>
    </button>

</form>

@endsection