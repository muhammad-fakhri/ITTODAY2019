<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('img/logo.png') }}" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/" style="@if (!isset($tipe))
                    color: white;
                @endif" class="nav-menu-1">Beranda</a></li>
                    <li class="menu-has-children"><a style="@if (!isset($tipe))
                    color: white;
                    @else
                    color:#F67E7D;
                @endif" class="nav-menu-1">Kompetisi</a>
                        <ul>
                            <li><a href="{{ route('apps') }}">Appstoday</a></li>
                            <li><a href="{{ route('hack') }}">Hacktoday</a></li>
                            <li><a href="{{ route('daming') }}">Data Science Competition</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a style="@if (!isset($tipe))
                    color: white;
                    @else
                    color:#F67E7D;
                @endif" class="nav-menu-1">Acara</a>
                        <ul>
                            <li><a href="{{ route('seminar') }}">Seminar</a></li>
                            <li><a href="{{ route('workshop') }}">Workshop</a></li>
                        </ul>
                    </li>
                    <li><a href="http://himalkom.cs.ipb.ac.id" style="@if (!isset($tipe))
                    color: white;
                @endif" class="nav-menu-1">Himalkom IPB</a></li>
                    <li class="menu-has-children"><a style="@if (!isset($tipe))
                    color: white;
                    @else
                    color:#F67E7D;
                @endif" class="nav-menu-1">Masuk</a>
                        <ul>
                            <li><a href="#" onclick="alert('Coming soon !')">Masuk</a></li>
                            <li><a href="#" onclick="alert('Coming soon !')">Daftar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
