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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            vertical-align: top;
        }

        th {
            background: #f0f0f0;
        }

        .badge {
            background: #e5e7eb;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .pagination {
            margin-top: 20px;
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
            <h2>📘 Submission Tugas Mahasiswa</h2>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email</th>
                        <th>Pertemuan</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                        <th>Waktu Submit</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($submissions as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->nama_mahasiswa }}</td>
                            <td>{{ $s->email ?? '-' }}</td>
                            <td>
                                <span class="badge">
                                    Pertemuan {{ $s->pertemuan_ke }}
                                </span>
                            </td>
                            <td>{{ $s->deskripsi ?? '-' }}</td>
                            <td>
                                <a href="{{ $s->url }}" target="_blank" class="btn">
                                    📎 Buka File
                                </a>
                            </td>
                            <td>{{ $s->created_at->format('d M Y H:i') }}</td>
                            <td>{{ $s->nilai ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align:center;">
                                Belum ada submission
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="pagination">
                {{ $submissions->links() }}
            </div>
        </div>

    </div>
    </div>
@endsection