@extends('layouts.admin.mainAdminAuth')
@section('content')
<div class="form-area">
    <h3>Admin Register</h3>
    <form action="{{ route('adminRegisterPost') }}" class="input-form" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="label2">Nama</label>
            <br>
            <input type="text" name="name" class="input" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label for="email" class="label2">Email</label>
            <br>
            <input type="email" name="email" class="input" value="{{ old('email') }}" required autocomplete="email">
            <label for="password" class="label2">Password</label>
            <br>
            <input type="password" name="password" class="input" required autocomplete="new-password">
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
