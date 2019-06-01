@extends('layouts.main3')
@section('content')
<div class="verify">
    <div class="content-verify">
        <h3>Verifikasi Email</h3>
        <p>Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.
            Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang tautan verifikasi.</p>
        <div class="inner-verify"></div>
        <div class="btn-verify">
            <a href="{{ route('verification.resend') }}">Kirim Ulang Kode Verifikasi</a>
        </div>
    </div>
</div>
@endsection