@extends('layouts.admin.mainAdmin')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Semua Tim</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID TIM</th>
                    <th>Nama Tim</th>
                    <th>Jenis Tim</th>
                    <th>Verif SKMA Ketua</th>
                    <th>Verif KTM Ketua</th>
                    <th>Verif SKMA Anggota 1</th>
                    <th>Verif KTM Anggota 1</th>
                    <th>Verif SKMA Anggota 2</th>
                    <th>Verif KTM Anggota 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTeam as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td>
                        <a href="#">
                            {{ $team->namaTim }}
                        </a>
                    </td>
                    <td>{{ $team->jenisTim }}</td>
                    <td>
                        @if ($team->verifSKMAKetua == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                    <td>
                        @if ($team->verifKTMKetua == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                    <td>
                        @if ($team->verifSKMA1 == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                    <td>
                        @if ($team->verifKTM1 == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                    <td>
                        @if ($team->verifSKMA2 == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                    <td>
                        @if ($team->verifKTM2 == true)
                        Sudah
                        @else
                        Belum
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID TIM</th>
                    <th>Nama Tim</th>
                    <th>Jenis Tim</th>
                    <th>Verif SKMA Ketua</th>
                    <th>Verif KTM Ketua</th>
                    <th>Verif SKMA Anggota 1</th>
                    <th>Verif KTM Anggota 1</th>
                    <th>Verif SKMA Anggota 2</th>
                    <th>Verif KTM Anggota 2</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection
