<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'warga') {
            $reports = Report::with(['user', 'category'])
                ->where('user_id', Auth::id())
                ->latest()
                ->get();
        } else {
            $reports = Report::with(['user', 'category'])
                ->latest()
                ->get();
        }

        return view('laporan.index', compact('reports'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('laporan.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Laporan otomatis menjadi milik user yang sedang login
        $data['user_id'] = Auth::id();

        // Status awal laporan
        $data['status'] = 'menunggu';

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('laporan', 'public');
        }

        Report::create($data);

        return redirect()
            ->route('laporan')
            ->with('success', 'Laporan berhasil ditambahkan.');
    }

    public function edit(Report $report)
    {
        $categories = Category::all();

        return view('laporan.edit', compact('report', 'categories'));
    }

    public function update(Request $request, Report $report)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|in:menunggu,diproses,selesai,ditolak',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('laporan', 'public');
        } else {
            unset($data['foto']);
        }

        $report->update($data);

        return redirect()
            ->route('laporan')
            ->with('success', 'Laporan berhasil diperbarui.');
    }

    public function updateStatus(Request $request, Report $report)
    {
        $data = $request->validate([
            'status' => 'required|in:menunggu,diproses,selesai,ditolak',
        ]);

        $report->update([
            'status' => $data['status'],
        ]);

        return redirect()
            ->route('laporan')
            ->with('success', 'Status laporan berhasil diperbarui.');
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()
            ->route('laporan')
            ->with('success', 'Laporan berhasil dihapus.');
    }

    public function show(Report $report)
    {
        $report->load(['user', 'category']);

        return view('laporan.show', compact('report'));
    }

    public function updateTanggapan(Request $request, Report $report)
    {
        $data = $request->validate([
            'tanggapan' => 'required|string',
        ]);

        $report->update([
            'tanggapan' => $data['tanggapan'],
        ]);

        return redirect()
            ->route('laporan.show', $report->id)
            ->with('success', 'Tanggapan berhasil dikirim.');
    }
}