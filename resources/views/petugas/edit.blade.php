@extends('layouts.app')

@section('title', 'SiLapor | Edit Petugas')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Edit Petugas</h1>
            <p class="mb-0 text-gray-600">
                Perbarui data petugas.
            </p>
        </div>

        <a href="{{ route('petugas.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Data Petugas
            </h6>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan!</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value="{{ old('name', $petugas->name) }}"
                        required>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{ old('email', $petugas->email) }}"
                            required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="no_hp">No. HP</label>
                        <input
                            type="text"
                            name="no_hp"
                            id="no_hp"
                            class="form-control"
                            value="{{ old('no_hp', $petugas->no_hp) }}"
                            required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea
                        name="alamat"
                        id="alamat"
                        rows="4"
                        class="form-control"
                        required>{{ old('alamat', $petugas->alamat) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>

                        <option value="aktif"
                            {{ old('status', $petugas->status) == 'aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>

                        <option value="nonaktif"
                            {{ old('status', $petugas->status) == 'nonaktif' ? 'selected' : '' }}>
                            Nonaktif
                        </option>

                        <option value="belum_verifikasi"
                            {{ old('status', $petugas->status) == 'belum_verifikasi' ? 'selected' : '' }}>
                            Belum Verifikasi
                        </option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Kosongkan jika tidak ingin mengganti password">

                    <small class="form-text text-muted">
                        Isi hanya jika ingin mengganti password.
                    </small>
                </div>

                <hr>

                <div class="text-right">

                    <a href="{{ route('petugas.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>

                    <button type="submit"
                            class="btn btn-warning">
                        <i class="fas fa-save"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection