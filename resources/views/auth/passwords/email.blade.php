@extends('layouts.main2')
@section('content')
<div class="container verify-wrapper">
    <div class="row verify-content">
        <h3>Setel Ulang Kata Sandi</h3>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <p class="text-center">Kami telah mengirim e-mail tautan atur ulang kata sandi Anda!</p>
        </div>
        @endif
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <label for="email" class="label">Email</label>
            <br>
            <input type="email" name="email" class="input @error('email') is-invalid @enderror reset-password-input" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <br>
            <br>
            <div class="form-group lower-form">
             <button type="submit">Kirim Tautan Setel Ulang Kata Sandi</button>
         </div>
        </form>
    </div>
</div>
@endsection
