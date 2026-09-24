<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = User::where('role', 'petugas')
            ->latest()
            ->get();

        return view('petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'status' => 'required|in:aktif,nonaktif,belum_verifikasi',
            'password' => 'required|string|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'petugas';

        User::create($data);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil ditambahkan.');
    }

    public function show(User $petugas)
    {
        return view('petugas.show', compact('petugas'));
    }

    public function edit(User $petugas)
    {
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, User $petugas)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $petugas->id,
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'status' => 'required|in:aktif,nonaktif,belum_verifikasi',
        ]);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'string|min:8',
            ]);

            $data['password'] = Hash::make($request->password);
        }

        $petugas->update($data);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil diperbarui.');
    }

    public function destroy(User $petugas)
    {
        $petugas->delete();

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil dihapus.');
    }
}