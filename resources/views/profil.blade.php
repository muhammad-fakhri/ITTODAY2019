@extends('layouts.mainProfil')
@section('content')
<form method="POST" action="/data-diri/{{ $profil_page }}/{{ $Peserta->id }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="row" id="form-title-area">
        <h1 id="form-title">Edit Data
            @switch($profil_page)
            @case(1)
            Ketua Tim
            @break
            @case(2)
            Anggota 1
            @break
            @case(3)
            Anggota 2
            @break
            @default
            Ketua Tim
            @endswitch
        </h1>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <a href="/data-diri/ketua-tim" @if ($profil_page==1) class="active" @endif>
                Ketua Tim
            </a>
        </div>
        <div class="col">
            <a href="/data-diri/anggota1" @if ($profil_page==2) class="active" @endif>
                Anggota 1
            </a>
        </div>
        <div class="col">
            <a href="/data-diri/anggota2" @if ($profil_page==3) class="active" @endif>
                Anggota 2
            </a>
        </div>
    </div>
    <hr>
    <div class="column">
        <div class="left">
            <img src="
            @if ($Peserta->namaFoto && $Peserta->alamatFoto)
                {{ asset($Peserta->alamatFoto) }}
            @else
                {{ url('img/home/profil.png') }}
            @endif
            ">
            <label class="label">Foto 3x4</label><br>
            <input type="text" class="link_input" value="@if ($Peserta->namaFoto){{$Peserta->namaFoto}}@else{{"Belum ada foto"}}@endif" disabled>
            <input type="file" name="foto" class="input_file"><br>
            <hr>
            @include('layouts.statusVerif')
            <hr>
            <h3>Pesan Verifikasi</h3>
            <br>
            <div class="message-area">
                <p>
                    @if ($Peserta->pesan)
                    {{ $Peserta->pesan }}
                    @else
                    Anda tidak memiliki pesan pemberitahuan dari panitia.
                    @endif
                </p>
            </div>
        </div>
        <div class="right">
            <label class="label">Nama Lengkap</label><br>
            <input type="text" name="nama" class="input" value="{{ $Peserta->nama }}"><br>
            <label class="label">NIM</label><br>
            <input type="text" name="nim" class="input" value="{{ $Peserta->nim }}"><br>
            <label class="label">Tempat Lahir</label><br>
            <input type="text" name="tmptLahir" class="input" value="{{ $Peserta->tmptLahir }}"><br>
            <label class="label">Tanggal Lahir</label><br>
            <input type="date" name="tglLahir" class="input_date" value="{{ $Peserta->tglLahir }}"><br>
            <label class="label">Jenis Kelamin</label><br>
            <select class="select" name="jenKel">
                <option value="2" @if ($Peserta->jenKel == 2)
                    selected
                    @endif >Pilih ...</option>
                <option value="1" @if ($Peserta->jenKel == 1)
                    selected
                    @endif>Laki-laki</option>
                <option value="0" @if ($Peserta->jenKel == 0)
                    selected
                    @endif>Perempuan</option>
            </select>
            <br>
            <label class="label">Asal Instansi/Sekolah/Universitas</label><br>
            <input type="text" name="asalInstansi" class="input" value="{{ $Peserta->asalInstansi }}"><br>
            <label class="label">Fakultas</label><br>
            <input type="text" name="fakultas" class="input" value="{{ $Peserta->fakultas }}"><br>
            <label class="label">Jurusan</label><br>
            <input type="text" name="jurusan" class="input" value="{{ $Peserta->jurusan }}"><br>
            <label class="label">Email</label><br>
            <input type="email" name="email" class="input" value="{{ $Peserta->email }}"><br>
            <label class="label">Nomor HP Aktif</label><br>
            <input type="text" name="noHP" class="input" value="{{ $Peserta->noHP }}"><br>
            <label class="label">Nomor Whatsapp (Jika berbeda dengan nomor HP Aktif)</label><br>
            <input type="text" name="noWA" class="input" value="{{ $Peserta->noWA }}"><br>
            <label class="label">Id Line</label><br>
            <input type="text" name="idLine" class="input" value="{{ $Peserta->idLine }}"><br>
            <label class="label">Foto KTM/Kartu Pelajar</label><br>
            <img src="
            @if ($Peserta->namaKTM && $Peserta->alamatKTM)
                {{ asset($Peserta->alamatKTM) }}
            @else
            {{ url('img/default_file.jpg') }}
            @endif
            " class="berkas-image">
            <input type="file" name="ktm" class="input_file"><br>
            <label class="label">Berkas Bukti Mahasiswa/Siswa</label><br>
            <input type="text" value="{{ $Peserta->namaSKMA }}" class="link_input" disabled><br>
            <input type="file" name="skma" class="input_file" id="aboveSmall"><br>
            <p id="small">**Surat keterangan mahasiswa aktif / Kartu Rencana Studi (mahasiswa) / Surat keterangan aktif siswa</p><br>
            <div class="btn-area">
                <button class="save-btn custom-btn">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection
