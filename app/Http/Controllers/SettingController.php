<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Setting;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        if (!$setting) {
            $setting = Setting::create([
                'nama_website' => 'SiLapor',
                'email_admin' => 'admin@silapor.id',
                'nomor_telepon' => '081234567890',
                'alamat' => 'Jakarta Barat',
                'deskripsi' => 'Sistem Pelaporan Masyarakat berbasis web.',
            ]);
        }

        $totalLaporan = Report::count();

        $totalMasyarakat = User::where('role', 'warga')->count();

        $totalPetugas = User::where('role', 'petugas')->count();

        $totalKategori = Category::count();

        return view('pengaturan.index', compact(
            'setting',
            'totalLaporan',
            'totalMasyarakat',
            'totalPetugas',
            'totalKategori'
        ));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama_website' => 'required|string|max:255',
            'email_admin' => 'required|email|max:255',
            'nomor_telepon' => 'nullable|string|max:30',
            'alamat' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $setting = Setting::first();

        if (!$setting) {
            $setting = new Setting();
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }

        $setting->fill($data);
        $setting->save();

        return redirect()
            ->route('pengaturan')
            ->with('success', 'Pengaturan berhasil disimpan.');
    }
}