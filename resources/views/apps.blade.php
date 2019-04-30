@extends('layouts.app_new')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Appstoday
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="/appstoday"> Appstoday</a></p>
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
                <h1>Appstoday</h1>
                <h5>
                    AppsToday merupakan salah satu cabang kompetisi IT Today 2018 pada bidang inovasi aplikasi. Lomba ini dibuat sebagai wadah bagi peserta yang akan menjadi generasi developer baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang teknologi informasi.
                </h5>
                <a class="primary-btn text-uppercase" href="#">Download Rulebook</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->
@endsection