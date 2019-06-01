@extends('layouts.main2')
@section('content')
<div class="verify-content">
    <h3>Setel Ulang Kata Sandi</h3>
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
        <div class="form-group lower-form" id="reset-password-btn">
            <button type="submit">Kirim Tautan Setel Ulang Kata Sandi</button>
        </div>
    </form>
</div>
@endsection
