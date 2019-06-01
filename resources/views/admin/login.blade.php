@extends('layouts.admin.mainAdminAuth')
@section('content')
<div class="form-area">
    <h3>Admin Login</h3>
    <form action="{{ route('adminLoginPost') }}" class="input-form" method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="label">Email</label>
            <br>
            <input type="text" name="email" class="input" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="password" class="label">Kata Sandi</label>
            <br>
            <input type="password" name="password" class="input" required autocomplete="current-password">
        </div>
        <div class="form-group lower-form">
            <button type="submit">Masuk</button>
            {{-- <a href="{{ route('password.request') }}" class="forget-password">Lupa kata sandi ? </a> --}}
        </div>
    </form>
</div>
@endsection
