@extends('layouts.gate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card p-5">
                <h3 class="fw-bold mb-3">Masuk Sebagai</h3>
                <p class="text-muted mb-4">
                    Pilih peran Anda untuk melanjutkan ke sistem pembelajaran.
                </p>

                <form method="POST" action="{{ route('gate.role') }}">
                    @csrf

                    <button name="role" value="dosen" class="btn btn-primary btn-lg w-100 mb-3">
                        <i class="fa-solid fa-chalkboard-user me-2"></i>
                        Dosen
                    </button>

                    <button name="role" value="mahasiswa" class="btn btn-outline-primary btn-lg w-100">
                        <i class="fa-solid fa-graduation-cap me-2"></i>
                        Mahasiswa
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection