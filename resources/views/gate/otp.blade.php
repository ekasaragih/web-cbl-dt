@extends('layouts.gate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-5">
                <h4 class="fw-bold mb-3 text-center">Verifikasi Akses</h4>

                <p class="text-muted text-center mb-4">
                    Masukkan One-Time Password sesuai peran Anda.
                </p>

                <form method="POST" action="{{ route('otp.verify') }}">
                    @csrf

                    <input type="text" name="otp" class="form-control form-control-lg mb-3" placeholder="Masukkan OTP">


                    <button class="btn btn-primary w-100 btn-lg">
                        Verifikasi
                    </button>
                </form>

                <p class="small text-muted text-center mt-3">
                    @error('otp')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </p>
            </div>
        </div>
    </div>
</div>
@endsection