<header id="header" id="home" @if (isset($tipe)) style="background: linear-gradient(90deg, #F67E7D 0%, #FFB997 100%);" @endif>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('img/logo.png') }}" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/" class="nav-menu-1">Beranda</a></li>
                    <li class="menu-has-children"><a style="color: white;" class="nav-menu-1">Kompetisi</a>
                        <ul>
                            <li><a href="{{ route('apps') }}">Appstoday</a></li>
                            <li><a href="{{ route('hack') }}">Hacktoday</a></li>
                            <li><a href="{{ route('daming') }}">Data Science Competition</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a style="color: white;" class="nav-menu-1">Acara</a>
                        <ul>
                            <li><a href="{{ route('seminar') }}">Seminar</a></li>
                            <li><a href="{{ route('workshop') }}">Workshop</a></li>
                        </ul>
                    </li>
                    <li><a href="http://himalkom.cs.ipb.ac.id" class="nav-menu-1">Himalkom IPB</a></li>
                    @if (!isset($auth_page))
                    @guest
                    <li class="menu-has-children">
                        <a style="color: white;" class="nav-menu-1">Masuk</a>
                        <ul>
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Daftar</a></li>
                            @endif
                        </ul>
                    </li>
                    @else
                    <li class="menu-has-children">
                        <a style="color: white;" class="nav-menu-1">{{ Auth::user()->name }}</a>
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/data-diri/ketua-tim">Data Tim</a></li>
                            <li><a href="{{ route('bayar') }}">Pembayaran</a></li>
                            <li><a href="{{ route('propo') }}">Proposal</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
