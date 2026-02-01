<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index()
    {
        $submissions = Project::latest()->paginate(10);
        return view('features.evaluasi', compact('submissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'nullable|email',
            'pertemuan_ke' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
            'nilai' => 'nullable|numeric|min:0|max:100',
            'url' => [
                'required',
                'url',
                function ($attribute, $value, $fail) {
                    if (!str_contains($value, 'drive.google.com')) {
                        $fail('Link harus berasal dari Google Drive.');
                    }

                    if (!preg_match('/\/file\/d\//', $value)) {
                        $fail('Link harus berupa link file Google Drive, bukan folder.');
                    }
                }
            ]
        ]);

        // cek apakah link bisa diakses
        $response = Http::timeout(5)->get($request->url);

        if (!$response->successful()) {
            return back()->withErrors([
                'url' => 'Link tidak dapat diakses. Pastikan file bersifat publik.',
            ])->withInput();
        }

        Project::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'pertemuan_ke' => $request->pertemuan_ke,
            'deskripsi' => $request->deskripsi,
            'nilai' => $request->nilai,
            'URL' => $request->url, // kolom DB boleh uppercase
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil dikumpul');
    }

}