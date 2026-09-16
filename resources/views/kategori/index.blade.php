@extends('layouts.app')

@section('title', 'SiLapor | Kategori')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>

        <a href="{{ route('kategori.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Kategori
        </a>
    </div>

    <!-- Alert -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Kategori
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($categories as $category)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $category->id) }}"
                                    class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('kategori.destroy', $category->id) }}"
                                        method="POST"
                                        class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>

                                    </form>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    Belum ada kategori.
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