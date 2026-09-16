@extends('layouts.app')

@section('title', 'SiLapor | Laporan')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
            <p class="mb-0 text-gray-600">
                Kelola seluruh laporan masyarakat.
            </p>
        </div>
    </div>

    <div class="mb-3">
        <a href="{{ route('laporan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Laporan
        </a>
    </div>

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
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $report->judul }}</td>

                                <td>
                                    {{ $report->category->name ?? '-' }}
                                </td>

                                <td>
                                    {{ $report->user->name ?? '-' }}
                                </td>

                                <td>
                                    {{ ucfirst($report->status) }}
                                </td>

                                <td>
                                    {{ $report->created_at->format('d/m/Y') }}
                                </td>

                                <td>

                                    <!-- Detail -->
                                    <a href="{{ route('laporan.show', $report->id) }}"
                                        class="btn btn-info btn-sm"
                                        title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('laporan.edit', $report->id) }}"
                                       class="btn btn-warning btn-sm"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Hapus -->
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

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center text-muted">
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