@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-6">
                <h1>
                    IT TODAY 2019
                </h1>
                <h3 class="text-crem" id="tagline">
                    #BringTheFutureToday
                </h3>
                    <a href="#point" class="btn header-btn">
                    Cari tahu</a>
            </div>
            <div class="banner-img col-lg-6 col-md-6">
                <img class="img-fluid" src="{{ asset('img/banner-img.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start Appstoday -->
<section class="home-about-area" id="point">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="appstoday-info">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/apps.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Appstoday</h1>
                <p>
                    AppsToday merupakan salah satu cabang kompetisi IT Today 2019 yang bisa menjadi wadah bagi peserta untuk menjadi generasi developer baru yang kreatif dan inovatif guna memajukan daya saing Indonesia di bidang TIK.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('apps') }}">Detail</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="hacktoday-info">
                <h1>Hacktoday</h1>
                <p>
                    HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2019 dalam bidang keamanan teknologi informasi.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('hack') }}">Detail</a>
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/hack.png') }}" alt="">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="daming-info">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/daming.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Data Science Competition</h1>
                <p>
                    Data Science Competition merupakan kompetisi bertaraf nasional dalam bidang analisis data yang akan menghasilkan suatu pola atau prediksi dari suatu data.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('daming') }}">Detail</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="seminar-info">
                <h1>Seminar Nasional</h1>
                <p>
                    Seminar Nasional adalah salah satu rangkaian acara dalam IT Today 2019. Acara ini membawa tema: "Revolutionize The World With Future Technology".
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('seminar') }}">Detail</a>
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/seminar.png') }}" alt="">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="workshop-info">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/workshop.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Workshop Computer Vision</h1>
                <p>
                    Acara ini merupakan pelatihan di bidang computer vision. Computer vision merupakan suatu bidang yang berhubungan dengan bagaimana komputer dapat dibuat untuk mendapatkan pemahaman tingkat tinggi dari gambar digital atau video.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('workshop') }}">Detail</a>
            </div>
        </div>
    </div>
</section>
<!-- End Appstoday -->
<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-crem">Gallery IT TODAY 2019</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/1.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/2.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/3.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/4.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/5.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/6.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/7.JPG') }}" alt="gallery-image">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <img src="{{ asset('img/gallery/8.JPG') }}" alt="gallery-image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->
@endsection
@section('animation')
<script>
ScrollReveal().reveal('#appstoday-info');

</script>
@endsection
