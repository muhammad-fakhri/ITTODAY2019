@extends('layouts.admin.mainAdmin')
@section('content')
<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Detail Tim</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form">
            <div class="row">
                <div class="col-xs-4">
                    <label>ID Tim</label>
                    <input type="text" class="form-control" disabled value="{{ $dataTeam->id }}">
                </div>
                <div class="col-xs-4">
                    <label>Nama Tim</label>
                    <input type="text" class="form-control" disabled value="{{ $dataTeam->namaTim }}">
                </div>
                <div class="col-xs-4">
                    <!-- select -->
                    <div class="form-group">
                        <label>Jenis Tim</label>
                        <select class="form-control" disabled>
                            <option>Appstoday</option>
                            <option>Hacktoday</option>
                            <option>Data Science</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-------------------------- Ketua Tim -------------------------->
                <div class="col-xs-4">
                    <h3>Ketua Tim</h3>
                    <div class="form-group">
                        <label>ID Ketua Tim</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Ketua Tim</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->nama }}" disabled>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label>NIM Ketua Tim</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->nim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->tmptLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->tglLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Asal Instansi</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->asalInstansi }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->fakultas }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->jurusan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>No Hape</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->noHP }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>ID Line</label>
                        <input type="text" class="form-control" value="{{ $dataKetua->idLine }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" @if ($dataKetua->jenKel == 1)
                        value="Laki-laki"
                        @else
                        value="Perempuan"
                        @endif
                        disabled>
                    </div>
                    <div class="form-group">
                        <label>SKMA Ketua Tim</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="SKMA Ketua TIM">
                    </div>
                    <div class="form-group">
                        <label>KTM Ketua Tim</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="KTM Ketua TIM">
                    </div>
                </div>
                <!-------------------------- Ketua Tim END -------------------------->
                <!-------------------------- Anggota 1 -------------------------->
                <div class="col-xs-4">
                    <h3>Anggota 1</h3>
                    <div class="form-group">
                        <label>ID Anggota 1</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota 1</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->nama }}" disabled>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label>NIM Anggota 1</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->nim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->tmptLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->tglLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Asal Instansi</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->asalInstansi }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->fakultas }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->jurusan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>No Hape</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->noHP }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>ID Line</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota1->idLine }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" @if ($dataAnggota1->jenKel == 1)
                        value="Laki-laki"
                        @else
                        value="Perempuan"
                        @endif
                        disabled>
                    </div>
                    <div class="form-group">
                        <label>SKMA Anggota 1</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="SKMA Anggota 1">
                    </div>
                    <div class="form-group">
                        <label>KTM Anggota 1</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="KTM Anggota 1">
                    </div>
                </div>
                <!-------------------------- Ketua Anggota 1 END -------------------------->
                <!-------------------------- Anggota 2 -------------------------->
                <div class="col-xs-4">
                    <h3>Anggota 2</h3>
                    <div class="form-group">
                        <label>ID Anggota 2</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota 2</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->nama }}" disabled>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label>NIM Anggota 2</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->nim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->tmptLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->tglLahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Asal Instansi</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->asalInstansi }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->fakultas }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->jurusan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>No Hape</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->noHP }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>ID Line</label>
                        <input type="text" class="form-control" value="{{ $dataAnggota2->idLine }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" @if ($dataAnggota2->jenKel == 1)
                        value="Laki-laki"
                        @else
                        value="Perempuan"
                        @endif
                        disabled>
                    </div>
                    <div class="form-group">
                        <label>SKMA Anggota 2</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="SKMA Anggota 2">
                    </div>
                    <div class="form-group">
                        <label>KTM Anggota 2</label><br>
                        <img src="{{ url('img/admin/user.jpg') }}" alt="KTM Anggota 2">
                    </div>
                </div>
                <!-------------------------- Anggota 2 END -------------------------->
            </div>
        </form>
    </div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
