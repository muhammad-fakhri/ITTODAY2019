@extends('layouts.main2')
@section('content')
<div class="form-area">
    <form action="{{ route('login') }}" class="input-form" method="POST">
        @csrf
        <ul class="nav-list">
            <li>
                <a href="{{ route('login') }}" class="
                            @if ($login==true)
                                active
                                @else
                                noactive
                            @endif
                            ">Masuk</a>
            </li>
            <li class="splitter">|</li>
            <li>
                <a href="{{ route('register') }}" class="
                            @if ($register==true)
                                active
                            @else
                                noactive
                            @endif
                            ">Daftar</a>
            </li>
        </ul>
        <div class="form-group">
            <label for="email" class="label">Email</label>
            <br>
            <input type="text" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="password" class="label">Kata Sandi</label>
            <br>
            <input type="password" name="password" class="input @error('password') is-invalid @enderror" required autocomplete="current-password">
            @error('password')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group lower-form">
            <button type="submit">Masuk</button>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forget-password">Lupa kata sandi ? </a>
            @endif
        </div>
    </form>
</div>
@endsection