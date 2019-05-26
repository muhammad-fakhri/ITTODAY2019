@extends('layouts.app')
@section('content') 
<!-- start banner Area --> 
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hacktoday
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('hack') }}"> Hacktoday</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<br><br>
<!-- Start home-about Area -->
<section class="home-about-area" id="point">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="appstoday-info">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/hack.png') }}" class="event-image" alt="hacktoday">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Hacktoday</h1>
                <p>
                    HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2019 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia. Lomba HackToday yang diadakan IT Today 2019 bertujuan agar setiap peserta mampu mengembangkan kemampuannya pada bidang Information Security.
                </p>
                <a class="primary-btn text-uppercase" onclick=" alert('Coming soon')" style="color: white;">Download Rulebook</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12 timeline-title">
                <h1 class="text-center">Timeline Hacktoday</h1>
            </div>
        </div>
            <img class="timeline-img" src="{{ asset('img/timeline-hack.png') }}" alt="timeline hacktoday" id="timeline-hacktoday">
        <!--    Timeline End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
