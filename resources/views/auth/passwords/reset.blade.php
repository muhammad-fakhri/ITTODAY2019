@extends('layouts.mainAuth')
@section('content')
    <div class=" verify-content">
        <h3>Setel Ulang Kata Sandi</h3>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <label for="email" class="label">Email</label>
            <br>
            <input type="email" name="email" class="input @error('email') is-invalid @enderror reset-password-input" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="password" class="label">Kata Sandi</label>
            <br>
            <input type="password" name="password" class="input @error('password') is-invalid @enderror reset-password-input" required autocomplete="new-password" autofocus>
            @error('password')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="password-confirm" class="label">Konfirmasi Kata Sandi</label>
            <br>
            <input type="password" name="password_confirmation" class="input" required autocomplete="new-password" autofocus>
            <br>
            <br>
            <div class="form-group lower-form">
                <button type="submit">
                    Setel Ulang Kata Sandi
                </button>
            </div>
        </form>
    </div>
@endsection
