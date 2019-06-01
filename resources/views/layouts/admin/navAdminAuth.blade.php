<header id="header" id="home" @if (isset($tipe)) style="background: linear-gradient(90deg, #F67E7D 0%, #FFB997 100%);" @endif>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('img/logo.png') }}" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/" class="nav-menu-1">Beranda</a></li>
                    <li><a href="{{ route('adminLogin') }}" class="nav-menu-1">Login (Admin)</a></li>
                    <li><a href="{{ route('adminRegister') }}" class="nav-menu-1">Daftar (Admin)</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
