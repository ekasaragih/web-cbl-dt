<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->filled('q')) {
            $q = $request->q;

            $query->where(function ($sub) use ($q) {
                $sub->where('nama_mahasiswa', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('pertemuan_ke', 'like', "%{$q}%");
            });
        }

        $submissions = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

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
                'bail',
                'required',
                function ($attribute, $value, $fail) {
                    if (!str_contains($value, 'drive.google.com')) {
                        $fail('Link harus berasal dari Google Drive.');
                    }
                },
                'url',
            ]

        ]);

        $response = Http::timeout(5)->get($request->url);

        if (!$response->successful()) {
            return back()
                ->withErrors(['url' => 'Link tidak dapat diakses. Pastikan file bersifat publik.'])
                ->withInput();
        }

        Project::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'pertemuan_ke' => $request->pertemuan_ke,
            'deskripsi' => $request->deskripsi,
            'nilai' => $request->nilai,
            'URL' => $request->url,
        ]);

        return back()->with('success_submit', true);
    }

    public function updateNilai(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        Project::where('id', $id)->update([
            'nilai' => $request->nilai,
        ]);

        return back()->with('success', 'Nilai berhasil diperbarui');
    }


}