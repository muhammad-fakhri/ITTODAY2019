@extends('layouts.main')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-header col-lg-12">
                <img src="{{ asset('img/logo-about.png') }}">
                <p class="text-white link-nav">Revolutionize The World With The Future Technology</p>
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
            <div class="col-lg-5 home-about-left no-padding" id="about-left">
                <img class="mx-auto d-block img-fluid" id="about-image" src="{{ asset('img/logo-picture.jpg') }}" alt="logo">
            </div>
            <div class="col-lg-7 home-about-right no-padding" id="about-right">
                <h1 id="about-title">Apa itu IT TODAY 2019?</h1>
                <div class="about-paragraph">
                    <div id="divider"></div>
                    <p>
                        IT Today 2019 merupakan acara nasional tahunan bertemakan teknologi yang pada tahun ini mengusung tema “Revolutionize The World With The Future Technology” dipersembahkan oleh Departemen Ilmu Komputer FMIPA IPB bersama dengan <a id="himalkom-link" href="http://himalkom.cs.ipb.ac.id">Himpunan Mahasiswa Ilmu Komputer IPB</a>.
                    </p>
                    <p>
                        IT Today 2019 hadir sebagai wujud peran aktif Himpunan Mahasiswa Ilmu Komputer IPB untuk meningkatkan literasi dan kecakapan teknologi mahasiswa IPB serta masyarakat umum guna menyongsong transformasi digital.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Goal Start -->
        <div class="row">
            <div class="col-lg-12 goal-section">
                <h1>Tujuan IT TODAY 2019</h1>
                <div class="goal-content" id="first-goal">
                    Memperkenalkan teknologi informasi terbaru pada masyarakat se-Jabodetabek, khususnya mahasiswa
                </div>
                <div class="goal-content">
                    Sebagai sarana mahasiswa untuk menyalurkan ide, minat, aspirasi, dan kreativitas di bidang IT
                </div>
                <div class="goal-content">
                    Mampu menumbuhkan cinta terhadap karya anak bangsa Indonesia
                </div>
                <div class="goal-content">
                    Memperkenalkan Departemen Ilmu Komputer IPB ke masyarakat luas
                </div>
            </div>
        </div>
        
        <!-- Goal End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
