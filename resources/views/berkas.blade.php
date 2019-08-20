@extends('layouts.mainAuth')
@section('content')
<div class="berkas-wrapper">
    {{-- @if ($Lomba == 1 || $Lomba == 2) --}}
    <form method="POST" enctype="multipart/form-data">
        {{-- @else --}}
        {{-- <form method="POST" action="{{ route('postBerkas') }}" enctype="multipart/form-data"> --}}
            {{-- @endif --}}
            @csrf
            @if ($Lomba == 1)
            <p>Unggah proposal terbaikmu disini</p>
            @elseif($Lomba == 2)
            <p>Unggah writeup terbaikmu disini</p>
            @elseif($Lomba == 3)
            <p>Unggah makalah terbaikmu disini</p>
            @else
            <p>Unggah berkas lomba terbaikmu disini</p>
            @endif
            <input type="text" value="{{ $Berkas->namaBerkas }}" disabled placeholder="nama berkas" id="nama-berkas"><br>
            <input type="file" name="berkas" id="berkas-input">
            <br>
            <small>*ukuran berkas maksimum 10MB</small>
            <p class="change-file-instruction">Untuk mengganti berkas yang ingin di submit, Anda hanya perlu mengunggah berkas yang baru kemudian berkas yang lama akan otomatis terhapus dan digantikan dengan berkas yang baru.</p>
            {{-- <br> --}}
            @if ($Lomba == 1 )
            <hr>
            <p>Lampirkan link videomu disini</p>
            <input type="text" name="linkVideo" class="link-input" value="{{ $Berkas->linkVideo }}"><br>
            {{-- <button id="berkas-btn" type="submit">Simpan</button> --}}
            <button id="berkas-btn" type="button" onclick="alert('Periode pengumpulan proposal dan link video telah selesai !'); return false;">Simpan</button>
            @elseif ($Lomba == 2 )
            <br>
            <button id="berkas-btn" type="button" onclick="alert('Periode pengumpulan writeup telah selesai !'); return false;">Simpan</button>
            @else
            <br>
            {{-- <button id="berkas-btn" type="submit">Simpan</button> --}}
            <button id="berkas-btn" type="button" onclick="alert('Periode pengumpulan makalah telah selesai !'); return false;">Simpan</button>
            @endif
        </form>
</div>
@endsection
