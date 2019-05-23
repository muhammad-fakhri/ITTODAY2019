@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Workshop IT Today 2019
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('workshop') }}">Workshop</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<br><br>
<section class="home-about-area" id="point">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="appstoday-info">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/workshop.png') }}" class="event-image" alt="workshop">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Workshop IT Today 2019</h1>
                <p>
                    Workshop IT Today 2019 adalah sebuah acara baru di dalam rangkaian acara IT Today 2019. Acara ini akan hadir dengan tema yang sangat berkaitan dengan dunia teknologi informasi. Kami memfasilitasi bagi mereka yang tertarik dengan workshop ini untuk saling berkumpul, berdiskusi, bertukar pikiran dan merasakan praktik langsung atau latihan dari tema yang akan dibawakan nanti.
                </p>
                <a class="primary-btn text-uppercase" onclick="alert('Pendaftaran belum dibuka')" style="color: white;">Daftar</a>
            </div>
        </div>
        <br>
        <br>
        <br>    
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <h2>SYARAT DAN KETENTUAN</h1>
                <br>
                <ul class="term">
                    <li>1. Peserta adalah Mahasiswa S1/sederajat.</li>
                    <li>2. Peserta mendaftar workshop melalui website ittoday.web.id</li>
                    <li>3. Peserta diperbolehkan membawa “Laptop” masing-masing, ataupun menggunakan komputer yang disediakan oleh panitia</li>
                    <li>4. Peserta akan mendapatkan sertifikat online setelah workshop selesai diadakan</li>
                </ul>
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h2>TEMPAT KEGIATAN</h1>
                <br>
                <h4>Lab Komputer 1 Ilmu Komputer</h4>
                <h4>Institut Pertanian Bogor</h4>
                <br>
                <h2>KUOTA PESERTA</h3>
                <br>
                <h4>Mahasiswa IPB : 25 orang</h4>
                <h4>Mahasiwa Non-IPB : 25 orang</h4>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Timeline Workshop</h1>
            </div>
        </div>
        <div class="timeline-img">
            <img src="{{ asset('img/timeline-workshop.png') }}" alt="timeline workshop" id="timeline-workshop">
        </div>
        <!-- Timeline End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
