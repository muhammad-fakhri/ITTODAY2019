@extends('layouts.main3')
@section('content')
<div class="verify">
    <div class="content-verify">
        <h3>Verifikasi Email</h3>
        <p>Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.
            Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang tautan verifikasi.</p>
        <div class="inner-verify"></div>
        <form action="{{ route('verification.resend') }}">
            <div class="form-group verify-form">
                <button type="submit">Kirim Ulang Kode Verifikasi</button>
            </div>
        </form>
    </div>
</div>
@endsection