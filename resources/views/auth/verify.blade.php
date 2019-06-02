@extends('layouts.main3')
@section('content')
<div class="verify">
    <div class="content-verify">
        <h3>Verifikasi Email</h3>
        <div class="verify-img"></div>
        <div class="verify-form">
            <p>Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang tautan verifikasi.</p>
            <div class="btn-verify">
                <a href="{{ route('verification.resend') }}" class="">Kirim Ulang Kode Verifikasi</a>
            </div>
        </div>
    </div>
</div>
@endsection
