<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::latest()->get();
        return view('peranpengguna', compact ('roles'));
    }
    public function store(Request $request){
        $data =$request->validate([
            'nama_peran' => 'required | string | 255',
            'deskripsi' => 'nullable | string',
            'status' => 'required | boolean',
        ]);
        Role::create($data);
        return redirect()->route('peranpengguna.index')->with('success', 'Peran pengguna berhasil ditambahkan.');
    }

    public function update(Request $request, Role $role){
        $data =$request->validate([
            'nama_peran' => 'required | string | max:255',
            'deskripsi' => 'nullable | string',
            'status' => 'required | boolean',
        ]);
        $role->update($data);
        return redirect()->route('peranpengguna.index')->with('success', 'Peran pengguna berhasil diperbarui');
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('peranpengguna.index')->with('success', 'Peran pengguna berhasil dihapus');
    }
}