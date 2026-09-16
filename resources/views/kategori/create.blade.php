@extends('layouts.app')

@section('title', 'SiLapor | Tambah Kategori')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Kategori
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('kategori.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Nama Kategori</label>

                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama kategori">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>

                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="4"
                        placeholder="Masukkan deskripsi kategori"></textarea>
                </div>

                <a href="{{ route('kategori') }}" class="btn btn-secondary">
                    Batal
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection