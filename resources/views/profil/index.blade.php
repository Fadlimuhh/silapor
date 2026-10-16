@extends('layouts.app')

@section('title', 'SiLapor | Profil Saya')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800 font-weight-bold">
                Profil Saya
            </h1>

            <p class="mb-0 text-gray-600">
                Kelola informasi akun yang sedang digunakan.
            </p>
        </div>
    </div>


    @if (session('success'))
        <div class="alert alert-success shadow-sm">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger shadow-sm">

            <strong>Terjadi kesalahan:</strong>

            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <div class="row">

        {{-- FOTO / IDENTITAS --}}
        <div class="col-lg-4">

            <div class="card shadow mb-4">

                <div class="card-body text-center">

                    <img
                        src="{{ asset('assets/img/undraw_profile.svg') }}"
                        class="img-fluid rounded-circle mb-3"
                        width="150"
                        alt="Profil"
                    >

                    <h4 class="font-weight-bold text-gray-800">
                        {{ $user->name }}
                    </h4>

                    <p class="text-muted mb-2">
                        {{ ucfirst($user->role) }}
                    </p>

                    <span class="badge badge-success">
                        {{ ucfirst($user->status ?? 'aktif') }}
                    </span>

                </div>

            </div>


            {{-- INFO AKUN --}}

            <div class="card shadow mb-4">

                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-user-circle mr-2"></i>
                        Informasi Akun
                    </h6>

                </div>

                <div class="card-body">

                    <div class="mb-3">

                        <small class="text-muted">
                            Role
                        </small>

                        <div class="font-weight-bold">
                            {{ ucfirst($user->role) }}
                        </div>

                    </div>


                    <div class="mb-3">

                        <small class="text-muted">
                            Email
                        </small>

                        <div class="font-weight-bold">
                            {{ $user->email }}
                        </div>

                    </div>


                    <div>

                        <small class="text-muted">
                            Bergabung
                        </small>

                        <div class="font-weight-bold">
                            {{ $user->created_at?->format('d F Y') ?? '-' }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- DATA PROFIL --}}
        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-user-edit mr-2"></i>
                        Informasi Profil
                    </h6>

                </div>


                <div class="card-body">

                    <form
                        action="{{ route('profile.update') }}"
                        method="POST"
                    >

                        @csrf
                        @method('PUT')


                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        <strong>Nama Lengkap</strong>
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        value="{{ old('name', $user->name) }}"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        <strong>Email</strong>
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        value="{{ old('email', $user->email) }}"
                                        required
                                    >

                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        <strong>Nomor HP</strong>
                                    </label>

                                    <input
                                        type="text"
                                        name="no_hp"
                                        class="form-control"
                                        value="{{ old('no_hp', $user->no_hp) }}"
                                    >

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        <strong>NIK</strong>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        value="{{ $user->nik ?? '-' }}"
                                        readonly
                                    >

                                    <small class="text-muted">
                                        NIK tidak dapat diubah melalui profil.
                                    </small>

                                </div>

                            </div>

                        </div>


                        <div class="form-group">

                            <label>
                                <strong>Alamat</strong>
                            </label>

                            <textarea
                                name="alamat"
                                class="form-control"
                                rows="3"
                            >{{ old('alamat', $user->alamat) }}</textarea>

                        </div>


                        <div class="text-right">

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >

                                <i class="fas fa-save mr-1"></i>

                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            {{-- KEAMANAN --}}
            <div class="card shadow">

                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-danger">
                        <i class="fas fa-shield-alt mr-2"></i>
                        Keamanan Akun
                    </h6>

                </div>


                <div class="card-body">

                    <form
                        action="{{ route('profile.password') }}"
                        method="POST"
                    >

                        @csrf
                        @method('PUT')


                        <div class="form-group">

                            <label>
                                <strong>Password Baru</strong>
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password baru"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                <strong>Konfirmasi Password</strong>
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password baru"
                                required
                            >

                        </div>


                        <small class="text-muted d-block mb-3">
                            Password minimal 8 karakter.
                        </small>


                        <div class="text-right">

                            <button
                                type="submit"
                                class="btn btn-danger"
                            >

                                <i class="fas fa-key mr-1"></i>

                                Ganti Password

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection