@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
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
<br><br>
<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/apps.png') }}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Appstoday</h1>
                <h5>
                    AppsToday merupakan salah satu cabang kompetisi IT Today 2019 pada bidang inovasi aplikasi. Lomba ini menjadi wadah bagi peserta akan menjadi generasi developer baru baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang TIK. Peserta AppsToday merupakan mahasiswa S1 atau diploma. Perangkat lunak yang diajukan harus bersesuaian dengan tema acara IT Today 2019 yaitu “Revolutionize The World With Future Technology” dengan tagline “Bring The Future Today”.
                </h5>
                <a class="primary-btn text-uppercase" {{-- href="{{ route('downApps') }}" --}} onclick=" alert('Coming soon')" style="color: white;">Download Rulebook</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Timeline Appstoday</h1>
            </div>
        </div>
        <div class="timeline-img">
            <img src="{{ asset('img/timeline-apps.png') }}" alt="timeline appstoday" id="timeline-appstoday">
        </div>
        <!-- Timeline End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
