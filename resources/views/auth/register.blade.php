@extends('layouts.main2')
@section('content')
<div class="form-area">
    <form action="{{ route('register') }}" class="input-form" method="POST">
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
            <label for="nama" class="label2">Nama</label>
            <br>
            <input type="text" name="name" class="input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="email" class="label2">Email</label>
            <br>
            <input type="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="password" class="label2">Kata Sandi</label>
            <br>
            <input type="password" name="password" class="input @error('password') is-invalid @enderror" required autocomplete="new-password">
            @error('password')
            <small class="form-text text-muted warning-message">{{ $message }}</small>
            @enderror
            <label for="password" class="label2">Konfirmasi Kata Sandi</label>
            <br>
            <input type="password" name="password_confirmation" class="input" required autocomplete="new-password">
        </div>
        <div class="form-group lower-form">
            <button type="submit">Daftar</button>
        </div>
    </form>
</div>
@endsection
