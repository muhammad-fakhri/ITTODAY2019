@extends('layouts.mainAuth')
@section('content')
<div class="payment-wrapper">
    <p>Informasi Pembayaran</p>
    <div class="payment-info">
        Nominal pembayaran untuk setiap mata lomba adalah sebagai berikut:<br>
        &ensp;&ensp;&ensp;AppsToday&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: Rp 100.000<br>
        &ensp;&ensp;&ensp;HackToday&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: Rp 50.000<br>
        &ensp;&ensp;&ensp;Data Science Competition : Rp 100.000<br>
        Pembayaran untuk setiap mata lomba dapat dilakukan via transfer ke<br>
        &ensp;&ensp;&ensp;Nomor Rekening &ensp;: 0824678264 (BNI)<br>
        &ensp;&ensp;&ensp;Atas Nama&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: Fakhoor Izaaz Wildhanrahman
    </div>
    <p>Unggah Bukti Pembayaran</p>
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
            @elseif($Team->verifBayar == 3)
            Bukti pembayaran ditolak
            @else
            Belum terverifikasi
            @endif
        </u>
    </label>
    <br>
    <p class="small">*Jika bukti pembayaran sudah terverfikasi maka Anda tidak diperkenankan untuk mengganti bukti pembayaran yang sudah ada.</p>
    <form method="POST" action="{{ route('postBayar') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="bayar" id="payment-input"><br>
        <button id="payment-btn" type="submit">Unggah</button>
    </form>
</div>
@endsection
