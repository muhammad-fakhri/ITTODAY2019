@extends('layouts.mainHome')
@section('content')
<p id="user-welcome">Halo, {{ Auth::user()->name }}</p>
<div class="row">
    <div class="column">
        <div class="box">
            <a href="/data-diri/ketua-tim">
                <div class="inner-box1 inner-box"></div>
                <a href="/data-diri/ketua-tim">Isi Data Tim</a>
            </a>
        </div>
        <div class="box hidden">
            <a href="{{ route('bayar') }}">Unggah Bukti Pembayaran</a>
        </div>
        <div class="box hidden">
            <a href="{{ route('berkas') }}">Unggah Berkas</a>
        </div>
    </div>
    <div class="column gone">
        <div class="box">
            <a href="{{ route('bayar') }}">
                <div class="inner-box2 inner-box"></div>
                <a href="{{ route('bayar') }}">Unggah Bukti Pembayaran</a>
            </a>
        </div>
    </div>
    <div class="column gone">
        <div class="box">
            <a href="{{ route('berkas') }}">
                <div class="inner-box3 inner-box"></div>
                <a href="{{ route('berkas') }}">Unggah Berkas</a>
            </a>
        </div>
    </div>
</div>
@endsection