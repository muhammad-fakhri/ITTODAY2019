@extends('layouts.main2')
@section('content')
<div class="container verify-wrapper">
    <div class="row verify-content">
        <h3>Verifikasi Alamat Email Kamu</h3>
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            <p class="text-center">Tautan verifikasi baru telah dikirim ke alamat email Anda.</p>
        </div>
        @endif
        <p class="text-justify">Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang tautan verifikasi.</p>
        <div class="btn-custom">
            <a href="{{ route('verification.resend') }}" class="btn">Kirim Ulang Tautan Verifikasi</a>
        </div>
    </div>
</div>
@endsection
