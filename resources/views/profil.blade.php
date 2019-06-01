@extends('layouts.mainProfil')
@section('content')
<form method="POST" action="#" enctype="#">
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
            <img src="{{ url('img/home/profil.png') }}">
            <label class="label">Pas Foto 3x4</label><br>
            <input type="file" name="name" class="input_file"><br>
        </div>
        <div class="right">
            <label class="label">Nama Lengkap</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">NIM</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Tempat Lahir</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Tanggal Lahir</label><br>
            <input type="date" name="name" class="input_date"><br>
            <label class="label">Jenis Kelamin</label><br>
            <select class="select">
                <option value="">Pilih ...</option>
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
            </select>
            <br>
            <label class="label">Asal Instansi/Sekolah/Universitas</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Fakultas</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Jurusan</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Email</label><br>
            <input type="email" name="name" class="input"><br>
            <label class="label">Nomor HP Aktif</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Nomor Whatsapp (Jika berbeda dengan nomor HP Aktif)</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Id Line</label><br>
            <input type="text" name="name" class="input"><br>
            <label class="label">Berkas Bukti Mahasiswa/Siswa</label><br>
            <img src="{{ url('img/gallery/3.JPG') }}" class="berkas-image">
            <input type="file" name="name" class="input_file"><br>
            <label class="label">Scan KTM/Kartu Pelajar</label><br>
            <img src="{{ url('img/gallery/3.JPG') }}" class="berkas-image">
            <input type="file" name="name" class="input_file"><br>
            <div class="btn-area">
                {{-- <button class="cancel-btn custom-btn">Batal</button> --}}
                <button class="save-btn custom-btn">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection
