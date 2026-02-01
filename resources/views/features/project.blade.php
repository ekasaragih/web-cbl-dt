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
                {{-- <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                    <div class="d-inline-block bg-white p-3 rounded-circle shadow-sm"
                        style="width: 80px; height: 80px; line-height: 80px;">
                        <i class="fa-solid fa-cloud-arrow-up text-primary fs-2"></i>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="sticky-top" style="top: 20px; z-index: 10;">
                    <div class="card card-upload">
                        <div class="card-upload-header">
                            <i class="fa-solid fa-upload"></i> Upload Tugas Baru
                        </div>
                        <div class="card-body p-4">
                            <form action="https://formspree.io/f/mpqrgqpd" method="POST">
                                <label>
                                    Your email:
                                    <input type="email" name="email">
                                </label>
                                <label>
                                    Your message:
                                    <textarea name="message"></textarea>
                                </label>
                                <!-- your other form fields go here -->
                                <button type="submit">Send</button>
                            </form>
                            <form {{-- action="{{ route('project.store') }}" --}} method="POST"
                                enctype="multipart/form-data">
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
                                    <label class="form-label small fw-bold text-muted">Pertemuan Ke-</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
                                        <select name="pertemuan_ke" class="form-select" required>
                                            <option value="" disabled selected>Pilih Pertemuan...</option>
                                            {{-- @for($i=1; $i<=16; $i++) <option value="{{ $i }}">Pertemuan {{ $i }}
                                                </option>
                                                @endfor --}}
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted">File Tugas</label>
                                    <input type="file" name="file_project" class="form-control" required>
                                    <div class="form-text small text-muted"><i class="fa-solid fa-circle-info"></i> PDF,
                                        JPG, PNG (Max 5MB)</div>
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

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-3">
                        <form {{-- action="{{ route('project') }}" --}} method="GET" class="row g-2 align-items-center">
                            <div class="col-auto">
                                <span class="fw-bold text-dark"><i class="fa-solid fa-filter me-1"></i> Filter:</span>
                            </div>
                            <div class="col-auto">
                                <select name="pertemuan"
                                    class="form-select form-select-sm border-0 bg-light fw-bold text-primary"
                                    onchange="this.form.submit()">
                                    <option value="">Semua Pertemuan</option>
                                    {{-- @for($i=1; $i<=16; $i++) <option value="{{ $i }}" {{ request('pertemuan')==$i
                                        ? 'selected' : '' }}>Pertemuan {{ $i }}</option>
                                        @endfor --}}
                                </select>
                            </div>
                            <div class="col-auto ms-auto">
                                <select name="sort" class="form-select form-select-sm border-0"
                                    onchange="this.form.submit()">
                                    {{-- <option value="latest" {{ request('sort')=='latest' ? 'selected' : '' }}>Terbaru
                                    </option>
                                    <option value="oldest" {{ request('sort')=='oldest' ? 'selected' : '' }}>Terlama
                                    </option> --}}
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="row g-4">
                    @forelse($projects as $p)
                    <div class="col-md-6">
                        <div class="card card-project">
                            <div class="file-preview-box">
                                @php
                                $ext = pathinfo($p->file_path, PATHINFO_EXTENSION);
                                @endphp

                                @if(in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif']))
                                <i class="fa-regular fa-image text-success"></i>
                                @elseif(strtolower($ext) == 'pdf')
                                <i class="fa-regular fa-file-pdf text-danger"></i>
                                @else
                                <i class="fa-regular fa-file-lines text-secondary"></i>
                                @endif
                            </div>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge-pertemuan">Pertemuan {{ $p->pertemuan_ke }}</span>
                                    <small class="text-date">
                                        <i class="fa-regular fa-clock me-1"></i> {{ $p->created_at->diffForHumans() }}
                                    </small>
                                </div>

                                <h5 class="card-title fw-bold text-dark mb-1 text-truncate"
                                    title="{{ $p->nama_mahasiswa }}">
                                    {{ $p->nama_mahasiswa }}
                                </h5>

                                <p class="card-text small text-secondary mb-3 text-truncate">
                                    {{ $p->deskripsi ?? 'Tidak ada deskripsi tambahan.' }}
                                </p>

                                <a href="{{ asset('storage/' . $p->file_path) }}" target="_blank"
                                    class="btn btn-outline-primary btn-sm w-100 fw-bold rounded-pill">
                                    <i class="fa-regular fa-eye me-1"></i> Lihat / Download
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="text-center py-5 bg-white rounded-3 shadow-sm border border-dashed">
                            <div class="mb-3 text-muted display-1 opacity-25">
                                <i class="fa-solid fa-box-open"></i>
                            </div>
                            <h5 class="fw-bold text-dark">Belum ada tugas ditemukan</h5>
                            <p class="text-muted small">Coba ganti filter pertemuan atau jadilah yang pertama mengupload.
                            </p>
                            @if(request('pertemuan'))
                            <a href="{{ route('project') }}" class="btn btn-sm btn-secondary rounded-pill">Reset Filter</a>
                            @endif
                        </div>
                    </div>
                    @endforelse --}}
                </div>
            </div>

        </div>
    </div>
@endsection