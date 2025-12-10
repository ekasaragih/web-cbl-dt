@extends('layouts.app')

@section('content')

<style>
    .header-course {
        background: linear-gradient(rgba(13, 44, 84, 0.9), rgba(13, 44, 84, 0.8)), url('https://source.unsplash.com/1600x900/?biology,science');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 30px;
        border-radius: 20px;
        margin-bottom: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .badge-custom {
        background-color: #ffc107;
        color: #0d2c54;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 0.9rem;
    }

    .card-resource {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s, box-shadow 0.3s;
        background: #fff;
        height: 100%;
        overflow: hidden;
    }

    .card-resource:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .card-icon-bg {
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
    }

    .bg-blue-light {
        background-color: #e3f2fd;
        color: #0d47a1;
    }

    .bg-green-light {
        background-color: #e8f5e9;
        color: #1b5e20;
    }

    .bg-yellow-light {
        background-color: #fffde7;
        color: #fbc02d;
    }

    .bg-purple-light {
        background-color: #f3e5f5;
        color: #7b1fa2;
    }

    .topic-item {
        background: #fff;
        border-left: 4px solid #0d2c54;
        margin-bottom: 10px;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: 0.2s;
    }

    .topic-item:hover {
        background: #f8f9fa;
        margin-left: 5px;
    }
</style>

<div class="container">
    <div class="header-course text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="badge-custom mb-3">Mata Kuliah Konten</span>
                <h1 class="display-5 fw-bold">Anatomi Fisiologi Manusia</h1>
                <p class="lead mb-3 text-warning opacity-100 fw-bold" style="font-size: 1.1rem;">
                    Kode: TPB 6183 &bull; 2 SKS &bull; Semester Genap
                </p>
                <hr class="my-4 border-light opacity-25">
                <p class="mb-0 text-light" style="line-height: 1.8;">
                    Mata kuliah ini bertujuan menjelaskan fungsi-fungsi organ dan mekanisme kerja sistem organ pada
                    manusia sebagai dasar analisis kelainan-kelainan pada kinerja tubuh. Mahasiswa akan diajak untuk
                    menginterpretasi, menganalisis, dan mengevaluasi konsep sistem tubuh yang terintegrasi. <span
                        class="citation-source text-warning">(Sumber: Deskripsi MK, RPS 2025)</span>
                </p>
            </div>
            <div class="col-md-4 text-center mt-4 mt-md-0">
                <div class="card bg-white text-dark p-3 rounded-4 shadow-sm">
                    <h6 class="fw-bold text-uppercase text-muted small">Dosen Pengampu</h6>
                    <h5 class="fw-bold mb-0 text-primary">Sulton Nawawi</h5>
                    <small class="text-muted">Prodi Pendidikan Biologi - UIN Raden Fatah</small>
                    <small class="text-muted d-block fst-italic mt-1">(Nawawi, 2025)</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 mb-4">
            <h3 class="fw-bold text-dark border-start border-5 border-primary ps-3">Repository Dokumen</h3>
            <p class="text-muted ps-3">Akses dan unduh perangkat pembelajaran lengkap melalui tautan berikut.</p>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-resource">
                <div class="card-icon-bg bg-blue-light">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">RPS & Silabus</h5>
                    <p class="card-text small text-muted">Rencana Pembelajaran Semester detail untuk acuan perkuliahan.
                    </p>
                    <a href="https://drive.google.com/drive/folders/1UmFbxbT50gKj-OtPhD_JuOq7hhV5zIh5?usp=drive_link"
                        target="_blank" class="btn btn-outline-primary btn-sm w-100 fw-bold">
                        Buka Drive ↗
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-resource">
                <div class="card-icon-bg bg-green-light">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">LKM Mahasiswa</h5>
                    <p class="card-text small text-muted">Lembar Kerja Mahasiswa untuk setiap pertemuan dan topik.</p>
                    <a href="https://drive.google.com/drive/folders/19M-QfBNaJIpZbui-sl3Dklm6op7azFXH?usp=drive_link"
                        target="_blank" class="btn btn-outline-success btn-sm w-100 fw-bold">
                        Akses LKM ↗
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-resource">
                <div class="card-icon-bg bg-yellow-light">
                    <i class="fa-solid fa-chart-column"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Instrumen Penilaian</h5>
                    <p class="card-text small text-muted">Rubrik dan format penilaian untuk tugas dan proyek.</p>
                    <a href="https://drive.google.com/drive/folders/1Jsx_wsIjHklIF3FZHnwGxdkvCDMjGbvZ?usp=drive_link"
                        target="_blank" class="btn btn-outline-warning text-dark btn-sm w-100 fw-bold">
                        Lihat Instrumen ↗
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-resource">
                <div class="card-icon-bg bg-purple-light">
                    <i class="fa-solid fa-check-circle"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Lembar Validasi</h5>
                    <p class="card-text small text-muted">Dokumen validasi ahli terkait model CBL-DT.</p>
                    <a href="https://drive.google.com/drive/folders/1Oq0VY7ag9hshJ6o0dmVR-N69nIvV8mod?usp=drive_link"
                        target="_blank" class="btn btn-outline-secondary btn-sm w-100 fw-bold">
                        Buka Dokumen ↗
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-bold mb-0 text-primary">
                        <i class="fa-solid fa-book-open"></i> Bahan Kajian & Topik Materi
                    </h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="topic-item">1. Pendahuluan & Konsep Dasar</div>
                            <div class="topic-item">2. Homeostasis & Termoregulasi</div>
                            <div class="topic-item">3. Nutrisi & Sistem Pencernaan</div>
                            <div class="topic-item">4. Sistem Peredaran Darah</div>
                            <div class="topic-item">5. Sistem Respirasi</div>
                            <div class="topic-item">6. Sistem Ekskresi</div>
                        </div>
                        <div class="col-md-6">
                            <div class="topic-item">7. Sistem Koordinasi (Saraf & Endokrin)</div>
                            <div class="topic-item">8. Sistem Imun</div>
                            <div class="topic-item">9. Sistem Reproduksi</div>
                            <div class="topic-item">10. Sistem Gerak (Rangka & Otot)</div>
                            <div class="topic-item">11. Sistem Indera</div>
                            <div class="topic-item">12. Sistem Integumen</div>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <small class="text-muted">Sumber: RPS Anatomi Fisiologi Manusia </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-bold mb-0 text-dark">
                        <i class="fa-solid fa-book"></i> Referensi Utama
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled small text-secondary">
                        <li class="mb-3">
                            <strong>Guyton AC and Hall JE (2011).</strong><br>
                            <em>Textbook of Medical Physiology. 12th ed.</em> Saunders, Elsevier.
                        </li>
                        <li class="mb-3">
                            <strong>Marieb, E. N., & Hoehn, K. (2019).</strong><br>
                            <em>Human anatomy & physiology.</em> Pearson education limited.
                        </li>
                        <li class="mb-3">
                            <strong>Tortora, G. J., & Derrickson, B. H. (2018).</strong><br>
                            <em>Principles of anatomy and physiology.</em> John Wiley & Sons.
                        </li>
                    </ul>
                    <div class="alert alert-info small mb-0">
                        <i class="fa-solid fa-circle-info"></i> Materi tambahan berupa artikel jurnal pendidikan dan
                        biologi tersedia dalam folder <strong>Bahan Ajar</strong> di Google Drive.
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection