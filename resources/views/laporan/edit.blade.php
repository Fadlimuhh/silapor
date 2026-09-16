@extends('layouts.app')

@section('title', 'SiLapor | Edit Laporan')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Edit Laporan
    </h1>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Laporan
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('laporan.update', $report->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Judul & Kategori -->
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="judul">Judul Laporan</label>

                            <input
                                type="text"
                                class="form-control"
                                id="judul"
                                name="judul"
                                value="{{ old('judul', $report->judul) }}"
                                required>

                            @error('judul')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="category_id">Kategori</label>

                            <select
                                class="form-control"
                                id="category_id"
                                name="category_id"
                                required>

                                <option value="">
                                    Pilih Kategori
                                </option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id', $report->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>

                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                </div>

                <!-- Alamat -->
                <div class="form-group">

                    <label for="alamat">
                        Alamat Kejadian
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="alamat"
                        name="alamat"
                        value="{{ old('alamat', $report->alamat) }}"
                        required>

                    @error('alamat')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <!-- Foto -->
                <div class="form-group">

                    <label for="foto">
                        Foto
                    </label>

                    <input
                        type="file"
                        class="form-control"
                        id="foto"
                        name="foto"
                        accept=".jpg,.jpeg,.png">

                    @if($report->foto)
                        <small class="form-text text-muted">
                            Foto saat ini:
                            {{ $report->foto }}
                        </small>
                    @endif

                    <small class="form-text text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                    </small>

                    @error('foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <!-- Status -->
                <div class="form-group">

                    <label for="status">
                        Status
                    </label>

                    <select
                        class="form-control"
                        id="status"
                        name="status">

                        <option
                            value="menunggu"
                            {{ old('status', $report->status) == 'menunggu' ? 'selected' : '' }}>
                            Menunggu
                        </option>

                        <option
                            value="diproses"
                            {{ old('status', $report->status) == 'diproses' ? 'selected' : '' }}>
                            Diproses
                        </option>

                        <option
                            value="selesai"
                            {{ old('status', $report->status) == 'selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>

                        <option
                            value="ditolak"
                            {{ old('status', $report->status) == 'ditolak' ? 'selected' : '' }}>
                            Ditolak
                        </option>

                    </select>

                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <!-- Deskripsi -->
                <div class="form-group">

                    <label for="deskripsi">
                        Deskripsi Laporan
                    </label>

                    <textarea
                        class="form-control"
                        id="deskripsi"
                        name="deskripsi"
                        rows="5"
                        required>{{ old('deskripsi', $report->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <hr>

                <a
                    href="{{ route('laporan') }}"
                    class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Simpan Perubahan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection