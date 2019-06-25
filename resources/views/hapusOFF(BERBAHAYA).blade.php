<!DOCTYPE html>
<html>

<head>
    <title>BERBAHAYA ! HAPUS AKUN </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>HALAMAN HAPUS AKUN, HANYA BOLEH DIGUNAKAN UNTUK HAPUS AKUN DUMMY YANG DIGUNAKAN SAAT TESTING</h1>
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>ID</th>
                <th>Nama Tim</th>
                <th>Nama User</th>
                <th>Email User</th>
                <th>Jenis Lomba</th>
                <th>Tindakan</th>
            </thead>
            @foreach ($dataTeam as $Team)
            <tr>
                <td>{{ $Team->id }}</td>
                <td>{{ $Team->namaTim }}</td>
                <td>
                    @if ($Team->jenisTim==1)
                    AppsToday
                    @elseif($Team->jenisTim==2)
                    HackToday
                    @elseif($Team->jenisTim==3)
                    Data Science Competition
                    @endif
                </td>
                <td>
                    <a href="{{ route('hapus',['id'=>$Team->id]) }}" class="btn btn-danger">Hapus Tim</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
