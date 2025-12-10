@extends('layouts.app')

@section('content')
<style>
    .guide-header {
        background: white;
        border-left: 5px solid #0d2c54;
        padding: 20px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        background-color: transparent;
        font-size: 1.1rem;
        padding-bottom: 15px;
        transition: 0.3s;
    }

    .nav-tabs .nav-link.active {
        color: #0d2c54;
        border-bottom: 3px solid #ffc107;
        font-weight: 800;
        background-color: transparent;
    }

    .nav-tabs .nav-link:hover {
        color: #0d2c54;
        border-color: transparent;
    }

    .feature-list li {
        margin-bottom: 8px;
        font-size: 0.95rem;
        color: #444;
    }

    .citation-text {
        font-size: 0.8rem;
        color: #888;
        font-style: italic;
    }

    .pdf-container {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #dee2e6;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
</style>

<div class="container pb-5">

    <div class="row mb-4">
        <div class="col-md-12">
            <div class="guide-header d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="fw-bold text-dark mb-2">
                        <i class="fa-solid fa-book-open me-2 text-primary"></i>Pusat Panduan CBL-DT
                    </h2>
                    <p class="text-muted mb-0">
                        Akses pedoman lengkap implementasi model <em>Challenge Based Learning</em> terintegrasi
                        <em>Design Thinking</em>.
                    </p>
                </div>
                <div class="d-none d-md-block">
                    <i class="fa-solid fa-book fa-3x text-secondary opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs nav-fill mb-4" id="panduanTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="dosen-tab" data-bs-toggle="tab" data-bs-target="#dosen" type="button"
                role="tab" aria-controls="dosen" aria-selected="true">
                <i class="fa-solid fa-chalkboard-user me-2"></i>Panduan Dosen
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="mahasiswa-tab" data-bs-toggle="tab" data-bs-target="#mahasiswa" type="button"
                role="tab" aria-controls="mahasiswa" aria-selected="false">
                <i class="fa-solid fa-user-graduate me-2"></i>Panduan Mahasiswa
            </button>
        </li>
    </ul>

    <div class="tab-content" id="panduanTabContent">

        <div class="tab-pane fade show active" id="dosen" role="tabpanel" aria-labelledby="dosen-tab">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="alert alert-light border shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="fw-bold text-primary mb-3">
                                    <i class="fa-solid fa-circle-info me-2"></i>Tentang Panduan Dosen
                                </h5>
                                <p class="text-secondary mb-3">
                                    Buku ini dirancang sebagai pegangan praktis bagi dosen dalam memfasilitasi
                                    pembelajaran Anatomi Fisiologi Manusia berbasis CBL-DT. Dokumen ini mencakup
                                    strategi mendalam untuk membimbing mahasiswa melalui setiap fase sintaks
                                    <span class="citation-text">(Nawawi et al., 2025)</span>.
                                </p>
                                <ul class="list-unstyled feature-list">
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Peran Fasilitator:</strong> Panduan membimbing mahasiswa merumuskan
                                        tantangan dari masalah nyata.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Metode Evaluasi:</strong> Instrumen penilaian formatif, sumatif,
                                        penilaian diri, dan penilaian sejawat
                                        <span class="citation-text">(Sumber: Naskah Akademik, 2025)</span>.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Sintaks Pembelajaran:</strong> Rincian aktivitas dosen dari tahap
                                        <em>Empathize</em> hingga <em>Rencana Tindak Lanjut</em>.
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4 text-center border-start">
                                <img src="https://cdn-icons-png.flaticon.com/512/3429/3429149.png" alt="PDF Icon"
                                    width="60" class="mb-3 opacity-75">
                                <br>
                                <a href="{{ asset('files/panduan-dosen.pdf') }}"
                                    class="btn btn-primary w-100 mb-2 fw-bold rounded-pill" download>
                                    <i class="fa-solid fa-download me-2"></i> Unduh PDF
                                </a>
                                <small class="text-muted d-block">Versi: 2025 (Terbaru)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pdf-container">
                <iframe src="{{ asset('files/panduan-dosen.pdf') }}" width="100%" height="800px" style="border: none;">
                </iframe>
            </div>
        </div>

        <div class="tab-pane fade" id="mahasiswa" role="tabpanel" aria-labelledby="mahasiswa-tab">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="alert alert-light border shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="fw-bold text-success mb-3">
                                    <i class="fa-solid fa-circle-info me-2"></i>Tentang Panduan Mahasiswa
                                </h5>
                                <p class="text-secondary mb-3">
                                    Panduan ini membantu mahasiswa beradaptasi dengan model pembelajaran aktif. Fokus
                                    utamanya adalah melatih keterampilan berpikir kritis dan pemecahan masalah melalui
                                    kolaborasi tim <span class="citation-text">(Nawawi et al., 2025)</span>.
                                </p>
                                <ul class="list-unstyled feature-list">
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Aktivitas Belajar:</strong> Langkah demi langkah melakukan investigasi,
                                        ideasi, dan prototyping.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Critical Thinking:</strong> Cara menganalisis masalah kompleks &
                                        menciptakan solusi inovatif.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-success me-2"></i>
                                        <strong>Refleksi Diri:</strong> Panduan melakukan refleksi atas proses belajar
                                        dan hasil karya.
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4 text-center border-start">
                                <img src="https://cdn-icons-png.flaticon.com/512/3389/3389081.png" alt="Student Icon"
                                    width="60" class="mb-3 opacity-75">
                                <br>
                                <a href="{{ asset('files/panduan-mahasiswa.pdf') }}"
                                    class="btn btn-success w-100 mb-2 fw-bold rounded-pill" download>
                                    <i class="fa-solid fa-download me-2"></i> Unduh PDF
                                </a>
                                <small class="text-muted d-block">Versi: 2025 (Terbaru)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pdf-container">
                <iframe src="{{ asset('files/panduan-mahasiswa.pdf') }}" width="100%" height="800px"
                    style="border: none;">
                </iframe>
            </div>
        </div>

    </div>
</div>
@endsection