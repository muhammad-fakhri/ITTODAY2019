@extends('layouts.app_new')
@section('content')
<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-6">
                <h1>
                    IT TODAY 2019
                </h1>
                <h3 class="text-white text-uppercase">
                    Bring the future today
                </h3>
                <a href="#appstoday-info" class="primary-btn header-btn text-uppercase" style="margin-top: 10px;">Acara Kami</a>
            </div>
            <div class="banner-img col-lg-6 col-md-6">
                <img class="img-fluid" src="{{ asset('img_new/banner-img.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start Appstoday -->
<section class="home-about-area" id="appstoday-info">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img_new/about-img.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Appstoday</h1>
                <h5>
                    We are here to listen from you deliver exellence
                </h5>
                <p>
                    AppsToday merupakan salah satu cabang kompetisi IT Today 2018 pada bidang inovasi aplikasi. Lomba ini dibuat sebagai wadah bagi peserta yang akan menjadi generasi developer baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang teknologi informasi.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('appstoday') }}">Lihat lebih</a>
            </div>
        </div>
    </div>
</section>
<!-- End Appstoday -->
<!-- Start Hacktoday -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-right no-padding" id="hacktoday-info">
                <h1>Hacktoday</h1>
                <h5>
                    We are here to listen from you deliver exellence
                </h5>
                <p>
                    HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2018 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('hacktoday') }}">Lihat lebih</a>
            </div>
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img_new/about-img.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hacktoday -->
<!-- Start Data Mining -->
<section class="home-about-area" id="daming-info">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img_new/about-img.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Data Mining</h1>
                <h5>
                    We are here to listen from you deliver exellence
                </h5>
                <p>
                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('daming') }}">Lihat lebih</a>
            </div>
        </div>
    </div>
</section>
<!-- End Data Mining -->
<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Gallery IT TODAY 2019</h1>
                <p class="text-white">
                    Momen keseruan di IT TODAY 2019.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-user"></span>
                        <h4>Expert Technicians</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-license"></span>
                        <h4>Professional Service</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-phone"></span>
                        <h4>Great Support</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Technical Skills</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recomended</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recomended</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->
<!-- Start brand Area -->
{{-- <section class="brand-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('img_new/l1.png') }}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('img_new/l2.png') }}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('img_new/l3.png') }}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('img_new/l4.png') }}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('img_new/l5.png') }}" alt="">
            </div>
        </div>
    </div>
</section> --}}
<!-- End brand Area -->
@endsection