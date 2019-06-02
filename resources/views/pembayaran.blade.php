@extends('layouts.mainAuth')
@section('content')
<div class="payment-wrapper">
    <p>Unggah bukti pembayaranmu disini</p>
    <div id="payment-img">
        <img src="
        @if ($Bayar->alamatBayar)
        	{{ Storage::url($Bayar->alamatBayar) }}
        @else
        	{{ url('img/default_file.jpg') }}
        @endif
        ">
    </div>
    <form method="POST" action="{{ route('postBayar') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="bayar" id="payment-input"><br>
        <button id="payment-btn" type="submit">Unggah</button>
    </form>
</div>
@endsection
