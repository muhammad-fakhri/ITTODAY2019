@extends('layouts.app')
@section('content')
<div class="form-group">
    <label for="email" class="label">Email</label>
    <br>
    <input type="text" name="email" class="input">
    <label for="password" class="label">Kata Sandi</label>
    <br>
    <input type="password" name="password" class="input">
</div>
<div class="form-group lower-form">
    <button type="submit">Masuk</button>
    <a href="#" class="forget-password">Lupa kata sandi ? </a>
</div>
@endsection
