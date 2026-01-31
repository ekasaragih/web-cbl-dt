@extends('layouts.app')

@section('content')

<style>
    .hero-gradient {
        background: linear-gradient(135deg, #0d2c54 0%, #1a4a85 100%);
        color: white;
        padding: 90px 0;
        border-radius: 0 0 50px 50px;
        margin-bottom: 60px;
    }

    .section-title {
        color: #0d2c54;
        font-weight: 800;
        position: relative;
        display: inline-block;
        margin-bottom: 35px;
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

    .info-card {
        border: none;
        background: #f8f9fa;
        transition: 0.3s ease;
    }

    .info-card:hover {
        background: white;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transform: translateY(-5px);
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: #0d2c54;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin: 0 auto 20px;
    }

    .divider {
        width: 80px;
        height: 4px;
        background: #ffc107;
        border-radius: 2px;
        margin: 25px auto;
    }
</style>

<div class="hero-gradient text-center">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">Halaman Sedang Dikembangkan</h1>
        <p class="lead mb-4 opacity-75">
            Sistem pembelajaran ini sedang dipersiapkan untuk mendukung kegiatan
            akademik dosen dan mahasiswa secara optimal.
        </p>

        <div class="divider"></div>

        <p class="w-75 mx-auto opacity-75">
            Kami berkomitmen menghadirkan platform yang informatif, terstruktur,
            dan mudah digunakan sebagai bagian dari inovasi pembelajaran.
        </p>
    </div>
</div>

<div class="container">

    <section class="mb-5 pb-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Apa yang Akan Tersedia</h2>
            <p class="text-muted">
                Halaman ini dirancang untuk menunjang proses pembelajaran dan pengelolaan akademik.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card info-card h-100 p-4 text-center">
                    <div class="icon-circle">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h5 class="fw-bold text-primary mb-3">Untuk Dosen</h5>
                    <p class="text-muted">
                        Informasi model pembelajaran, panduan implementasi,
                        perangkat pendukung, serta dokumentasi akademik
                        yang dapat digunakan dalam kegiatan perkuliahan.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card info-card h-100 p-4 text-center">
                    <div class="icon-circle">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h5 class="fw-bold text-primary mb-3">Untuk Mahasiswa</h5>
                    <p class="text-muted">
                        Akses materi pembelajaran, instruksi kegiatan,
                        informasi tugas, serta panduan pelaksanaan
                        yang mendukung pembelajaran aktif dan reflektif.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="text-center mb-5 pb-4">
        <div class="card bg-dark text-white p-5 rounded-4 shadow">
            <div class="card-body">
                <h4 class="fw-bold mb-3">Terima Kasih atas Kesabarannya</h4>
                <p class="opacity-75 mb-4">
                    Silakan kembali mengunjungi halaman ini dalam waktu dekat.
                    Konten akan segera tersedia setelah tahap pengembangan selesai.
                </p>

                <span class="badge bg-warning text-dark px-4 py-2 fs-6">
                    Status: Dalam Pengembangan
                </span>
            </div>
        </div>
    </div>

</div>

@endsection