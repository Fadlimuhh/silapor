@extends('layouts.app')

@section('title', 'SiLapor | Tambah Laporan')

@section('content')

<form>

    <div class="row">

            <div class="col-md-6">

                <div class="form-group">
                    <label>Judul Laporan</label>
                    <input type="text" class="form-control"
                        placeholder="Masukkan judul laporan">
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control">
                        <option>Pilih Kategori</option>
                        <option>Infrastruktur</option>
                        <option>Kebersihan</option>
                        <option>Keamanan</option>
                        <option>Fasilitas Umum</option>
                    </select>
                </div>

            </div>

    </div>

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">
                <label>Alamat Kejadian</label>
                <input type="text" class="form-control"
                    placeholder="Masukkan alamat kejadian">
            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input type="date" class="form-control">
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" class="form-control">
            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label>Status</label>
                <select class="form-control">
                    <option>Menunggu</option>
                </select>
            </div>

        </div>

    </div>

    <div class="form-group">

        <label>Deskripsi Laporan</label>

        <textarea
            class="form-control"
            rows="5"
            placeholder="Tuliskan deskripsi laporan..."></textarea>

    </div>

    <hr>

    <a href="{{ route('laporan') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>

    <button class="btn btn-primary">
        <i class="fas fa-save"></i> Simpan Laporan
    </button>

</form>

@endsection