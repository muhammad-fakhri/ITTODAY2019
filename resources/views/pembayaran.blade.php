@extends('layouts.mainAuth')
@section('content')
<div class="payment-wrapper">
    <p>Unggah bukti pembayaranmu disini</p>
    <div id="payment-img">
        <img src="{{ url('img/gallery/4.jpg') }}">
    </div>
    <form method="POST" action="#">
        <input type="file" name="" id="payment-input"><br>
        <button id="payment-btn">Unggah</button>
    </form>
</div>
@endsection
