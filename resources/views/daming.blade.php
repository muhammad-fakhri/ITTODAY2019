@extends('layouts.app')
@section('content') 
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Data Science Competition
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('daming') }}">Data Science Competition</a></p>
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
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/daming.png') }}" class="event-image" alt="data-science">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Data Science Competition</h1>
                <p>
                    Data Science Competition merupakan kompetisi bertaraf nasional dalam bidang analisis data yang akan menghasilkan suatu pola atau prediksi dari suatu data. Peserta diharapkan dapat memberikan solusi terkait permasalahan yang ada di Indonesia melalui data. Kompetisi terbuka untuk mahasiswa program Sarjana di seluruh Indonesia, dengan masing-masing tim beranggotakan maksimal tiga orang.
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
                <h1 class="text-center">Timeline Data Science Competition</h1>
            </div>
        </div>
            <img class="timeline-img" src="{{ asset('img/timeline-dsc.png') }}" alt="timeline data science competition" id="timeline-dsc">
        <!-- Timeline End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
