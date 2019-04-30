@extends('layouts.app_new')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hacktoday
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="/appstoday"> Hacktoday</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img_new/about-img.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Hacktoday</h1>
                <h5>
                    HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2018 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia.
                </h5>
                <a class="primary-btn text-uppercase" href="#">Download Rulebook</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->
@endsection