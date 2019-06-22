@extends('layouts.mainAuth')
@section('content')
<div class="payment-wrapper">
    <p>Unggah bukti pembayaranmu disini</p>
    <div id="payment-img">
        <img src="
        @if ($Bayar->alamatBayar)
            {{ asset($Bayar->alamatBayar) }}
        @else
            {{ url('img/default_file.jpg') }}
        @endif
        ">
    </div>
    <label class="label" style="color: black;">Status Pembayaran :
        <u>
            @if ($Team->verifBayar == 1)
            Sudah terverifikasi
            @elseif($Team->verifBayar == 2)
            Sedang diproses
            @else
            Belum terverifikasi
            @endif
        </u>
    </label>
    <br>
    <small>*Jika bukti pembayaran sudah terverfikasi maka Anda tidak diperkenankan untuk mengganti bukti pembayaran yang sudah ada.</small>
    <form method="POST" action="{{ route('postBayar') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="status_bayar" value="@if ($Team->verifBayar == 1){{'no'}}@else{{'yes'}}@endif" hidden>
        <input type="file" name="bayar" id="payment-input"><br>
        <button id="payment-btn" type="submit">Unggah</button>
    </form>
</div>
@endsection
