@extends('layouts.app')

@section('content')

<style>
    .hero-gradient {
        background: linear-gradient(135deg, #0d2c54 0%, #1a4a85 100%);
        color: white;
        padding: 80px 0;
        border-radius: 0 0 50px 50px;
        margin-bottom: 50px;
    }

    .section-title {
        color: #0d2c54;
        font-weight: 800;
        position: relative;
        display: inline-block;
        margin-bottom: 40px;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 50%;
        height: 4px;
        background: #ffc107;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    /* Timeline CSS */
    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: #e9ecef;
        transform: translateX(-50%);
    }

    .timeline-item {
        margin-bottom: 60px;
        position: relative;
    }

    .timeline-icon {
        width: 60px;
        height: 60px;
        background: #0d2c54;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .timeline-content {
        width: 45%;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #ffc107;
        transition: transform 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
    }

    .timeline-item:nth-child(odd) .timeline-content {
        margin-left: auto;
    }

    .timeline-item:nth-child(even) .timeline-content {
        margin-right: auto;
    }

    /* Responsive adjustment */
    @media (max-width: 768px) {
        .timeline::before {
            left: 30px;
        }

        .timeline-icon {
            left: 30px;
        }

        .timeline-content {
            width: 85%;
            margin-left: 70px !important;
        }
    }

    .feature-card {
        transition: 0.3s;
        border: none;
        background: #f8f9fa;
    }

    .feature-card:hover {
        background: white;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        transform: translateY(-5px);
    }
</style>

<div class="hero-gradient text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Model CBL-DT</h1>
        <p class="lead mb-4">Challenge Based Learning terintegrasi Design Thinking</p>
        <p class="w-75 mx-auto opacity-75">
            Model pembelajaran inovatif pada materi Anatomi Fisiologi Manusia untuk meningkatkan
            Keterampilan Berpikir Kritis Mahasiswa melalui pemecahan masalah nyata yang terstruktur dan kreatif.
        </p>
        <div class="mt-4">
            <a href="#about" class="btn btn-warning btn-lg fw-bold px-4 me-2">Tentang Model</a>
            <a href="#sintaks" class="btn btn-outline-light btn-lg fw-bold px-4">Lihat Tahapan</a>
        </div>
    </div>
</div>

<div class="container">

    <section id="about" class="mb-5 pb-5">
        <div class="text-center">
            <h2 class="section-title">Tentang Model CBL-DT</h2>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <img src="https://img.freepik.com/free-vector/team-checklist-concept-illustration_114360-1025.jpg"
                    alt="Collaboration" class="img-fluid rounded-3 shadow-sm">
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold text-dark mb-3">Integrasi Dua Kekuatan Besar</h3>
                <p class="text-muted text-justify">
                    Model CBL-DT adalah sintesis dari <strong>Challenge Based Learning (CBL)</strong> dan <strong>Design
                        Thinking (DT)</strong>.
                    Model ini dirancang untuk menjawab tantangan pendidikan abad ke-21 dengan menempatkan mahasiswa
                    sebagai pusat pembelajaran.
                </p>
                <p class="text-muted text-justify">
                    Mahasiswa tidak hanya belajar teori, tetapi ditantang untuk memecahkan masalah nyata (CBL)
                    menggunakan pendekatan empati dan prototipe yang sistematis (DT).
                    Tujuannya adalah meningkatkan <strong>Keterampilan Berpikir Kritis</strong> yang meliputi
                    interpretasi, analisis, evaluasi, inferensi, eksplanasi, dan pengaturan diri.
                </p>
                <div class="alert alert-primary border-0 shadow-sm mt-3">
                    <strong>Fondasi Teori:</strong> Model ini dibangun di atas landasan teori Konstruktivisme,
                    Kognitivisme, Integrasi Kurikulum, dan Technology Acceptance Model (TAM).
                </div>
            </div>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="card feature-card h-100 p-4">
                    <div class="fs-1 mb-3" style="color: #ffc107;"><i class="fa-solid fa-building"></i></div>
                    <h5 class="fw-bold text-primary">Konstruktivisme</h5>
                    <p class="small text-muted">Mahasiswa membangun pengetahuan melalui pengalaman langsung dan
                        interaksi
                        sosial.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card h-100 p-4">
                    <div class="fs-1 mb-3" style="color: #ffc107;"><i class="fa-solid fa-brain"></i></div>
                    <h5 class="fw-bold text-primary">Kognitivisme</h5>
                    <p class="small text-muted">Menekankan pemrosesan informasi aktif, strategi belajar, dan
                        metakognisi.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card h-100 p-4">
                    <div class="fs-1 mb-3" style="color: #ffc107;"><i class="fa-solid fa-link"></i></div>
                    <h5 class="fw-bold text-primary">Integrasi Kurikulum</h5>
                    <p class="small text-muted">Pembelajaran lintas disiplin yang holistik, relevan, dan bermakna.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card h-100 p-4">
                    <div class="fs-1 mb-3" style="color: #ffc107;"><i class="fa-solid fa-mobile-screen"></i></div>
                    <h5 class="fw-bold text-primary">Teori TAM</h5>
                    <p class="small text-muted">Pemanfaatan teknologi yang mudah digunakan dan bermanfaat dalam
                        pembelajaran.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <section id="sintaks" class="pb-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Sintaks & Tahapan Model</h2>
            <p class="text-muted">6 Tahapan Sistematis Model CBL-DT untuk Pembelajaran Bermakna.</p>
        </div>

        <div class="timeline">

            <div class="timeline-item">
                <div class="timeline-icon">1</div>
                <div class="timeline-content">
                    <span class="badge bg-warning text-dark mb-2">Empathize</span>
                    <h4 class="fw-bold text-primary">Ide & Permasalahan</h4>
                    <p class="small text-muted mb-2"><em>"Mengidentifikasi ide atau masalah utama yang relevan dengan
                            konteks."</em></p>
                    <p class="card-text">
                        Dosen menyajikan "Big Idea". Mahasiswa melakukan brainstorming, membangun empati, dan mengaitkan
                        masalah nyata dengan konsep materi Anatomi Fisiologi.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Curah pendapat (Brainstorming)</li>
                        <li>✔️ Memahami perspektif pengguna</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">2</div>
                <div class="timeline-content">
                    <span class="badge bg-warning text-dark mb-2">Define</span>
                    <h4 class="fw-bold text-primary">Tantangan</h4>
                    <p class="small text-muted mb-2"><em>"Merumuskan tantangan yang bermakna dan spesifik."</em></p>
                    <p class="card-text">
                        Mempersempit masalah umum menjadi tantangan spesifik (Essential Question). Mahasiswa
                        mendefinisikan batasan masalah dan tujuan akhir.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Merumuskan pertanyaan esensial</li>
                        <li>✔️ Analisis inti persoalan</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">3</div>
                <div class="timeline-content">
                    <span class="badge bg-warning text-dark mb-2">Ideate</span>
                    <h4 class="fw-bold text-primary">Investigasi</h4>
                    <p class="small text-muted mb-2"><em>"Mengembangkan pertanyaan, investigasi, dan eksplorasi
                            informasi."</em></p>
                    <p class="card-text">
                        Mahasiswa menyusun pertanyaan pemandu (Guiding Questions), mencari sumber ilmiah, dan
                        menghasilkan berbagai gagasan solusi kreatif.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Studi literatur & observasi</li>
                        <li>✔️ Menghasilkan alternatif solusi</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">4</div>
                <div class="timeline-content">
                    <span class="badge bg-warning text-dark mb-2">Prototype</span>
                    <h4 class="fw-bold text-primary">Solusi</h4>
                    <p class="small text-muted mb-2"><em>"Merancang dan mengembangkan solusi kreatif (prototipe)."</em>
                    </p>
                    <p class="card-text">
                        Ide abstrak diubah menjadi bentuk konkret (poster, video, model). Solusi harus memiliki landasan
                        ilmiah yang kuat.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Pembuatan prototipe nyata</li>
                        <li>✔️ Aplikasi konsep materi</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">5</div>
                <div class="timeline-content">
                    <span class="badge bg-warning text-dark mb-2">Test</span>
                    <h4 class="fw-bold text-primary">Penilaian, Publikasi & Refleksi</h4>
                    <p class="small text-muted mb-2"><em>"Mengevaluasi solusi, publikasi, dan refleksi proses."</em></p>
                    <p class="card-text">
                        Mahasiswa mempresentasikan hasil (Gelar Karya), menerima umpan balik dari audiens, dan
                        merefleksikan proses belajar mereka.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Presentasi & Umpan balik</li>
                        <li>✔️ Refleksi diri (Self-regulation)</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">6</div>
                <div class="timeline-content bg-light border-warning">
                    <span class="badge bg-success mb-2">Kebaruan / Novelty</span>
                    <h4 class="fw-bold text-success">Rencana Tindak Lanjut (RTL)</h4>
                    <p class="small text-muted mb-2"><em>"Menyusun langkah implementasi berkelanjutan."</em></p>
                    <p class="card-text">
                        Memastikan solusi tidak berhenti di kelas. Mahasiswa menyusun rencana aksi nyata untuk
                        keberlanjutan solusi di masa depan.
                    </p>
                    <ul class="list-unstyled small text-secondary">
                        <li>✔️ Revisi prototipe</li>
                        <li>✔️ Rencana implementasi nyata</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <div class="text-center mb-5 pb-4">
        <div class="card bg-dark text-white p-5 rounded-4 shadow">
            <div class="card-body">
                <h3 class="fw-bold">Informasi Panduan Lengkap</h3>
                <p class="lead opacity-75">
                    Lihat penjelasan lengkap mengenai alur, instruksi, dan ketentuan kegiatan yang disediakan untuk
                    dosen
                    dan mahasiswa.
                </p>
                <a href="{{ route('panduan') }}" class="btn btn-warning btn-lg fw-bold mt-3 px-5 rounded-pill">
                    Buka Halaman Panduan
                </a>
            </div>
        </div>
    </div>

</div>

@endsection