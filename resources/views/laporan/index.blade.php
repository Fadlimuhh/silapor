@extends('layouts.app')

@section('title', 'SiLapor | Laporan')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                @if(Auth::user()->role === 'warga')
                    Laporan Saya
                @else
                    Laporan Masyarakat
                @endif
            </h1>

            <p class="mb-0 text-gray-600">
                @if(Auth::user()->role === 'warga')
                    Daftar laporan yang telah Anda buat.
                @elseif(Auth::user()->role === 'petugas')
                    Daftar laporan masyarakat yang perlu diproses.
                @else
                    Kelola seluruh laporan masyarakat.
                @endif
            </p>
        </div>
    </div>


    {{-- Tombol Tambah Laporan hanya untuk Warga --}}
    @if(Auth::user()->role === 'warga')
        <div class="mb-3">
            <a href="{{ route('laporan.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Buat Laporan
            </a>
        </div>
    @endif


    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Laporan
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Pelapor</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($reports as $report)

                            <tr>

                                {{-- No --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                {{-- Judul --}}
                                <td>
                                    {{ $report->judul }}
                                </td>


                                {{-- Kategori --}}
                                <td>
                                    {{ $report->category->name ?? '-' }}
                                </td>


                                {{-- Pelapor --}}
                                <td>
                                    {{ $report->user->name ?? '-' }}
                                </td>


                                {{-- Status --}}
                                <td>

                                    @if($report->status === 'menunggu')

                                        <span class="badge badge-secondary">
                                            Menunggu
                                        </span>

                                    @elseif($report->status === 'diproses')

                                        <span class="badge badge-warning">
                                            Diproses
                                        </span>

                                    @elseif($report->status === 'selesai')

                                        <span class="badge badge-success">
                                            Selesai
                                        </span>

                                    @elseif($report->status === 'ditolak')

                                        <span class="badge badge-danger">
                                            Ditolak
                                        </span>

                                    @endif

                                </td>


                                {{-- Tanggal --}}
                                <td>
                                    {{ $report->created_at->format('d/m/Y') }}
                                </td>


                                {{-- Aksi --}}
                                <td>

                                    {{-- Detail untuk semua role --}}
                                    <a href="{{ route('laporan.show', $report->id) }}"
                                       class="btn btn-info btn-sm"
                                       title="Lihat Detail">

                                        <i class="fas fa-eye"></i>

                                    </a>


                                    {{-- ================================= --}}
                                    {{-- PETUGAS --}}
                                    {{-- ================================= --}}

                                    @if(Auth::user()->role === 'petugas')

                                        <button type="button"
                                                class="btn btn-warning btn-sm"
                                                data-toggle="modal"
                                                data-target="#statusModal{{ $report->id }}"
                                                title="Ubah Status">

                                            <i class="fas fa-sync-alt"></i>

                                        </button>


                                        {{-- Modal Ubah Status --}}
                                        <div class="modal fade"
                                             id="statusModal{{ $report->id }}"
                                             tabindex="-1"
                                             role="dialog">

                                            <div class="modal-dialog"
                                                 role="document">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <h5 class="modal-title">
                                                            Ubah Status Laporan
                                                        </h5>

                                                        <button type="button"
                                                                class="close"
                                                                data-dismiss="modal">

                                                            <span>&times;</span>

                                                        </button>

                                                    </div>


                                                    <form action="{{ route('laporan.updateStatus', $report->id) }}"
                                                          method="POST">

                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-body">

                                                            <p>
                                                                <strong>
                                                                    {{ $report->judul }}
                                                                </strong>
                                                            </p>

                                                            <div class="form-group">

                                                                <label for="status{{ $report->id }}">
                                                                    Status Laporan
                                                                </label>

                                                                <select name="status"
                                                                        id="status{{ $report->id }}"
                                                                        class="form-control"
                                                                        required>

                                                                    <option value="menunggu"
                                                                        {{ $report->status === 'menunggu' ? 'selected' : '' }}>
                                                                        Menunggu
                                                                    </option>

                                                                    <option value="diproses"
                                                                        {{ $report->status === 'diproses' ? 'selected' : '' }}>
                                                                        Diproses
                                                                    </option>

                                                                    <option value="selesai"
                                                                        {{ $report->status === 'selesai' ? 'selected' : '' }}>
                                                                        Selesai
                                                                    </option>

                                                                    <option value="ditolak"
                                                                        {{ $report->status === 'ditolak' ? 'selected' : '' }}>
                                                                        Ditolak
                                                                    </option>

                                                                </select>

                                                            </div>

                                                        </div>


                                                        <div class="modal-footer">

                                                            <button type="button"
                                                                    class="btn btn-secondary"
                                                                    data-dismiss="modal">

                                                                Batal

                                                            </button>

                                                            <button type="submit"
                                                                    class="btn btn-primary">

                                                                <i class="fas fa-save"></i>
                                                                Simpan Status

                                                            </button>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    @endif


                                    {{-- ================================= --}}
                                    {{-- ADMIN --}}
                                    {{-- ================================= --}}

                                    @if(Auth::user()->role === 'admin')

                                        {{-- Edit --}}
                                        <a href="{{ route('laporan.edit', $report->id) }}"
                                           class="btn btn-warning btn-sm"
                                           title="Edit">

                                            <i class="fas fa-edit"></i>

                                        </a>


                                        {{-- Hapus --}}
                                        <form action="{{ route('laporan.destroy', $report->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus"
                                                    onclick="return confirm('Yakin ingin menghapus laporan ini?')">

                                                <i class="fas fa-trash"></i>

                                            </button>

                                        </form>

                                    @endif

                                </td>

                            </tr>


                        @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center text-muted">

                                    Belum ada data laporan.

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