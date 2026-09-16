@extends('layouts.app')

@section('title', 'SiLapor | Edit Kategori')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Kategori
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('kategori.update', $category->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama Kategori</label>

                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ $category->name }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>

                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="4">{{ $category->description }}</textarea>
                </div>

                <a href="{{ route('kategori') }}" class="btn btn-secondary">
                    Batal
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection