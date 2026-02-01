<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $submissions = Project::latest()->paginate(10);
        return view('features.evaluasi', compact('submissions'));
    }

    // Simpan data dari form / webhook
    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'nullable|email',
            'pertemuan_ke' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
            'url' => 'required|url'
        ]);

        Project::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'pertemuan_ke' => $request->pertemuan_ke,
            'deskripsi' => $request->deskripsi,
            'url' => $request->url,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil dikirim');
    }
}