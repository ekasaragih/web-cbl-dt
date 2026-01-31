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

                    <div class="input-group mb-3">
                        <input type="password" name="otp" id="otpInput" class="form-control form-control-lg"
                            placeholder="Masukkan OTP" autofocus>
                        <button class="btn btn-outline-secondary" type="button" id="toggleOtp">
                            <i class="fa-solid fa-eye" id="otpIcon"></i>
                        </button>
                    </div>

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

<script>
    const otpInput = document.getElementById('otpInput');
    const toggleOtp = document.getElementById('toggleOtp');
    const otpIcon = document.getElementById('otpIcon');

    toggleOtp.addEventListener('click', function () {
        const type = otpInput.getAttribute('type') === 'password' ? 'text' : 'password';
        otpInput.setAttribute('type', type);

        otpIcon.classList.toggle('fa-eye');
        otpIcon.classList.toggle('fa-eye-slash');
    });
</script>
@endsection