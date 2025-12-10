@extends('layouts.app')

@section('content')
<h2 class="mb-4 pb-2 border-bottom">Project Mahasiswa</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card mb-5">
    <div class="card-header bg-primary text-white">Upload Tugas Baru</div>
    <div class="card-body">
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama Mahasiswa/Kelompok</label>
                    <input type="text" name="nama_mahasiswa" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Pertemuan Ke-</label>
                    <select name="pertemuan_ke" class="form-select">
                        @for($i=1; $i<=16; $i++) <option value="{{ $i }}">Pertemuan {{ $i }}</option> @endfor
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label>File Tugas (Gambar/PDF/ZIP)</label>
                <input type="file" name="file_project" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi Singkat</label>
                <textarea name="deskripsi" class="form-control" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
</div>

<div class="row">
    @foreach($projects as $p)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $p->nama_mahasiswa }}</h5>
                <h6 class="text-muted mb-2">Pertemuan {{ $p->pertemuan_ke }}</h6>
                <p class="card-text small text-muted">{{ $p->deskripsi ?? 'Tidak ada deskripsi' }}</p>

                <a href="{{ asset('storage/' . $p->file_path) }}" target="_blank"
                    class="btn btn-sm btn-outline-primary w-100">
                    Lihat File
                </a>
            </div>
            <div class="card-footer bg-white small text-muted">
                Diupload: {{ $p->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection