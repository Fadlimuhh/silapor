<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with(['user', 'category'])
            ->latest()
            ->get();

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

        $data['user_id'] = 1;
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
}