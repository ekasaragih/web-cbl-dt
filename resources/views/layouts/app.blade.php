<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model CBL-DT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'DM Sans', sans-serif;
        }

        .navbar-custom {
            background-color: #0d2c54;
        }

        .card {
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    {{-- ini bisa langsung utk mobile and desktop --}}
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">CBL-DT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                            href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('panduan') ? 'active' : '' }}"
                            href="{{ route('panduan') }}">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('perangkat') ? 'active' : '' }}"
                            href="{{ route('perangkat') }}">Perangkat Pembelajaran</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('project') ? 'active fw-bold' : '' }}"
                            href="{{ route('project') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('evaluasi') ? 'active' : '' }}"
                            href="{{ route('evaluasi') }}">Evaluasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center py-4 mt-5 text-muted border-top bg-white">
        &copy; {{ date('Y') }} Model Pembelajaran CBL-DT
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>