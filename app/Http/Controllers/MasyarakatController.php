<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    /**
     * Menampilkan daftar masyarakat.
     */
    public function index()
    {
        $masyarakat = User::where('role', 'warga')->latest()->get();

        return view('masyarakat.index', compact('masyarakat'));
    }

    /**
     * Menampilkan form tambah masyarakat.
     */
    public function create()
    {
        return view('masyarakat.create');
    }

    /**
     * Menyimpan masyarakat baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nik' => 'required|string|max:20|unique:users,nik',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'status' => 'required|in:aktif,nonaktif,belum_verifikasi',
            'password' => 'required|string|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'warga';

        User::create($data);

        return redirect()
            ->route('masyarakat.index')
            ->with('success', 'Data masyarakat berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail masyarakat.
     */
    public function show(User $masyarakat)
    {
        return view('masyarakat.show', compact('masyarakat'));
    }

    /**
     * Menampilkan form edit masyarakat.
     */
    public function edit(User $masyarakat)
    {
        return view('masyarakat.edit', compact('masyarakat'));
    }

    /**
     * Memperbarui data masyarakat.
     */
    public function update(Request $request, User $masyarakat)
    {
        $data = $request->validate([
            'nik' => 'required|string|max:20|unique:users,nik,' . $masyarakat->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $masyarakat->id,
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

        $masyarakat->update($data);

        return redirect()
            ->route('masyarakat.index')
            ->with('success', 'Data masyarakat berhasil diperbarui.');
    }

    /**
     * Menghapus masyarakat.
     */
    public function destroy(User $masyarakat)
    {
        $masyarakat->delete();

        return redirect()
            ->route('masyarakat.index')
            ->with('success', 'Data masyarakat berhasil dihapus.');
    }
}