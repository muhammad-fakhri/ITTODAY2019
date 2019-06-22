<h3>Status Verifikasi</h3>
<br>
<table>
    <tr class="verif-category">
        <td>Foto 3x4 :</td>
    </tr>
    <tr class="verif-value">
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifFotoKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifFotoKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(2)
            @if ($Team->verifFoto1 == 1)
            Sudah terverifikasi
            @elseif($Team->verifFoto1 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(3)
            @if ($Team->verifFoto2 == 1)
            Sudah terverifikasi
            @elseif($Team->verifFoto2 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @default
            @if ($Team->verifFotoKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifFotoKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @endswitch
        </td>
    </tr>
    <tr><td style="color: white;" class="divider"> f</td></tr>
    <tr class="verif-category">
        <td>Bukti Mahasiswa/Siswa :</td>
    </tr>
    <tr class="verif-value">
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifSKMAKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifSKMAKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(2)
            @if ($Team->verifSKMA1 == 1)
            Sudah terverifikasi
            @elseif($Team->verifSKMA1 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(3)
            @if ($Team->verifSKMA2 == 1)
            Sudah terverifikasi
            @elseif($Team->verifSKMA2 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @default
            @if ($Team->verifSKMAKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifSKMAKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @endswitch
        </td>
    </tr>
    <tr><td style="color: white;" class="divider"> f</td></tr>
    <tr class="verif-category">
        <td>KTM/Kartu Pelajar :</td>
    </tr>
    <tr class="verif-value">
        <td>
            @switch($profil_page)
            @case(1)
            @if ($Team->verifKTMKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifKTMKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(2)
            @if ($Team->verifKTM1 == 1)
            Sudah terverifikasi
            @elseif($Team->verifKTM1 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @case(3)
            @if ($Team->verifKTM2 == 1)
            Sudah terverifikasi
            @elseif($Team->verifKTM2 == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @break
            @default
            @if ($Team->verifKTMKetua == 1)
            Sudah terverifikasi
            @elseif($Team->verifKTMKetua == 2)
            Sedang Diproses
            @else
            Belum terverifikasi
            @endif
            @endswitch
        </td>
    </tr>
</table>
