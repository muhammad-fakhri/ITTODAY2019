@extends('layouts.mainAuth')
@section('content')
<div class="berkas-wrapper">
    <form method="POST" action="{{ route('postBerkas') }}" enctype="multipart/form-data">
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
        <input type="file" name="berkas" id="berkas-input"><br>
        <div @if ($Lomba !=1) style="display: none;" @endif>
            <hr>
            <p>Lampirkan link videomu disini</p>
            <input type="text" name="linkVideo" class="link-input" value="{{ $Berkas->linkVideo }}"><br>
            <button id="berkas-btn" type="submit">Simpan</button>
        </div>
    </form>
</div>
@endsection
