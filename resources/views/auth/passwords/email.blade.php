@extends('layouts.mainAuth')
@section('content')
<div class="reset-content">
    <div class="inner-reset-content">
        <h3>Setel Ulang Kata Sandi</h3>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <label for="email" class="label">Email</label>
            <br>
            <input type="email" name="email" class="input @error('email') is-invalid @enderror reset-password-input" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <div id="reset-password-btn">
                <button type="submit">Kirim Tautan Setel Ulang Kata Sandi</button>
            </div>
        </form>
    </div>
</div>
@endsection
