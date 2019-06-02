<h3>Status Verifikasi</h3>
<table>
    <tr>
        <td>Foto 3x4</td>
        <td>:</td>
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifFotoKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(2)
            @if ($Team->verifFoto1 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(3)
            @if ($Team->verifFoto2 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @default
            @if ($Team->verifFotoKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @endswitch
        </td>
    </tr>
    <tr>
        <td>Bukti Mahasiswa/Siswa</td>
        <td>:</td>
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifSKMAKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(2)
            @if ($Team->verifSKMA1 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(3)
            @if ($Team->verifSKMA2 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @default
            @if ($Team->verifSKMAKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @endswitch
        </td>
    </tr>
    <tr>
        <td>KTM/Kartu Pelajar</td>
        <td>:</td>
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifKTMKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(2)
            @if ($Team->verifKTM1 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @case(3)
            @if ($Team->verifKTM2 == 1)
            Sudah
            @else
            Belum
            @endif
            @break
            @default
            @if ($Team->verifKTMKetua == 1)
            Sudah
            @else
            Belum
            @endif
            @endswitch
        </td>
    </tr>
</table>
