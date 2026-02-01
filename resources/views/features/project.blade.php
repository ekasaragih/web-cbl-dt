@extends('layouts.app')

@section('content')

<style>
    /* Header Style (Sama dengan Repository) */
    .header-course {
        background: linear-gradient(rgba(13, 44, 84, 0.95), rgba(13, 44, 84, 0.85)), url('https://source.unsplash.com/1600x900/?technology,student');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 40px;
        border-radius: 20px;
        margin-bottom: 40px;
        box-shadow: 0 15px 40px rgba(13, 44, 84, 0.2);
    }

    /* Card Upload Style */
    .card-upload {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        background: #fff;
    }

    .card-upload-header {
        background: #0d2c54;
        color: white;
        padding: 20px;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Card Project Style */
    .card-project {
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 12px;
        transition: all 0.3s ease;
        background: #fff;
        height: 100%;
        overflow: hidden;
        position: relative;
        top: 0;
    }

    .card-project:hover {
        top: -5px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .file-preview-box {
        height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.5rem;
        background-color: #f8f9fa;
        border-bottom: 1px solid #eee;
    }

    .badge-pertemuan {
        background-color: #e3f2fd;
        color: #0d47a1;
        font-weight: 700;
        padding: 5px 12px;
        border-radius: 50px;
        font-size: 0.75rem;
        text-transform: uppercase;
    }

    .text-date {
        font-size: 0.75rem;
        color: #6c757d;
        font-style: italic;
    }

    /* Input Group Icons */
    .input-group-text {
        background-color: #f1f3f5;
        border: 1px solid #ced4da;
        color: #495057;
    }
</style>

<div class="container">

    <div class="header-course text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-warning text-dark fw-bold mb-3 px-3 py-2 rounded-pill"><i
                        class="fa-solid fa-shapes me-2"></i>Project Based Learning</span>
                <h1 class="display-5 fw-bold mb-2">Galeri Tugas & Proyek</h1>
                <p class="lead mb-0 text-light opacity-90">
                    Kumpulan tugas, portofolio, dan hasil karya mahasiswa pada mata kuliah Anatomi Fisiologi Manusia.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="sticky-top" style="top: 20px; z-index: 10;">
            <div class="card card-upload">
                <div class="card-upload-header">
                    <i class="fa-solid fa-upload"></i> Upload Tugas Baru
                </div>
                <div class="card-body p-4">

                    <form action="{{ route('project.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Nama Mahasiswa / Kelompok</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="nama_mahasiswa" class="form-control"
                                    placeholder="Contoh: Kelompok 1" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Contoh: kupa@gmail.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Pertemuan Ke-</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
                                <select name="pertemuan_ke" class="form-select" required>
                                    <option value="" disabled selected>Pilih Pertemuan...</option>
                                    @for($i=1; $i<=16; $i++) <option value="{{ $i }}">Pertemuan {{ $i }}
                                        </option>
                                        @endfor
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Link File Tugas</label>
                            <input type="url" name="url" class="form-control" placeholder="https://drive.google.com/..."
                                required>
                            <div class="form-text small text-muted">
                                <i class="fa-solid fa-circle-info"></i>
                                Masukkan link Google Drive (pastikan aksesnya publik)
                            </div>

                            @error('url')
                            <div class="text-danger small mt-1">
                                URL tidak boleh kosong
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Deskripsi Singkat</label>
                            <textarea name="deskripsi" class="form-control" rows="3"
                                placeholder="Tuliskan keterangan tugas..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold py-2 rounded-pill">
                            <i class="fa-solid fa-paper-plane me-2"></i> Kirim Tugas
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection