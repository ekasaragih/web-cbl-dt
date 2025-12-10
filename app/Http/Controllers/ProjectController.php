<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        // get latest proj
        $projects = Project::latest()->get();
        return view('pages.project', compact('projects'));
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