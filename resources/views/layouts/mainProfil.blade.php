<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'IT TODAY 2019' }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hexagons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
</head>

<body>
    <div class="big-wrapper">
        <div class="nav-fake">
            {{-- @if (session('resent'))
            <div class="alert alert-success" role="alert">
                <p class="text-center">
                    Tautan verifikasi baru telah dikirim ke alamat email Anda.
                </p>
            </div>
            @endif
            --}} </div>
        @include('layouts.nav')
        <div class="outer-wrapper">
            <div id="team-info-area">
                <form method="POST" action="/data-team/{{$Team->id}}" id="team-info">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="row">
                        <div class="col">
                            <label class="label">Nama Tim</label><br>
                            <input type="text" name="namaTim" class="input" value="{{ $Team->namaTim }}">
                        </div>
                        <div class="col">
                            <label class="label">Cabang Kompetisi</label><br>
                            <select class="select" name="jenisTim">
                                <option value="0" @if ($Team->jenisTim == 0)
                                    selected
                                    @endif>Pilih ...</option>
                                <option value="1" @if ($Team->jenisTim == 1)
                                    selected
                                    @endif>Appstoday</option>
                                <option value="2" @if ($Team->jenisTim == 2)
                                    selected
                                    @endif>Hacktoday</option>
                                <option value="3" @if ($Team->jenisTim == 3)
                                    selected
                                    @endif>Data Science Competition</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="custom-btn save-btn" id="team-info-btn">Simpan Nama Tim dan Cabang Kompetisi</button>
                </form>
            </div>
            <div class="wrapper">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/hexagons.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
