<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        // filter based on Pertemuan (jika ada input)
        if ($request->has('pertemuan') && $request->pertemuan != '') {
            $query->where('pertemuan_ke', $request->pertemuan);
        }

        // get latest proj
        $sort = $request->get('sort', 'latest');
        if ($sort == 'oldest') {
            $query->oldest();
        } else {
            $query->latest();
        }

        $projects = $query->get();
        return view('features.project', compact('projects'));
    }

    // ini harusnya dari pov mhsw sih
    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'pertemuan_ke' => 'required',
            'file_project' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,zip|max:5120', // max file 5MB
        ]);

        // upload file
        $path = $request->file('file_project')->store('public/uploads');

        Project::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'pertemuan_ke' => $request->pertemuan_ke,
            'deskripsi' => $request->deskripsi,
            'file_path' => str_replace('public/', '', $path), // save to new clean path
        ]);

        return redirect()->back()->with('success', 'Project successfully updated!');
    }
}