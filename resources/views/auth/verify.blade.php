@extends('layouts.mainAuth')
@section('content')
<div class="verify-content">
    <h3>Verifikasi Alamat Email Anda</h3>
    <p class="text-justify">Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang tautan verifikasi.</p>
    <div class="btn-custom">
        <a href="{{ route('verification.resend') }}">Kirim Ulang Tautan Verifikasi</a>
    </div>
</div>
@endsection
