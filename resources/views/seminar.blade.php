@extends('layouts.main')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Seminar Nasional IT Today 2019
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('seminar') }}">Seminar Nasional</a></p>
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
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/seminar.png') }}" class="event-image" alt="seminar">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Seminar Nasional IT Today 2019</h1>
                <p>
                    Seminar Nasional adalah salah satu rangkaian acara dalam IT Today 2019. Acara ini membawa tema: "Revolutionize The World With Future Technology". Seminar ini nantinya akan mendatangkan pembicara - pembicara bertalenta yang berasal dari perusahaan IT skala besar dan startup di Indonesia yang berkontribusi dalam perubahan teknologi digital di Indonesia.
                </p>
                <p>
                    Beberapa perusahaan asal pembicara yang akan hadir di acara ini yaitu :
                    <ul>
                        <li>- GDP Labs (Artificial Intelligence)</li>
                        <li>- Algorit.ma (Data Science)</li>
                        <li>- Tanijoy.id (Sesi Agriculture in The Future)</li>
                        <li>- WIR Group (Sesi Augmented Reality/Virtual Reality)</li>
                        <li>- Kitabisa (Future Human Interaction)</li>
                    </ul>
                </p>
                <a class="primary-btn text-uppercase" onclick="alert('Pendaftaran Seminar Nasional IT Today 2019 telah ditutup !');" style="color: white;">Daftar</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 home-about-left no-padding" id="seminar-home-about-left">
                <h2>SYARAT DAN KETENTUAN</h1>
                    <br>
                    <ul class="term">
                        <li>1. Peserta merupakan mahasiswa S1/Sederajat dan masyarakat umum yang tertarik di bidang teknologi.</li>
                        <li>2. Biaya pendaftaran seminar nasional IT Today 2019 adalah sebesar Rp. 20.000,-.</li>
                        <li>3. Peserta akan mendapatkan sertifikat online setelah seminar nasional selesai diadakan.</li>
                        <li>4. Apabila calon peserta seminar telah membayar, uang yang telah dibayar tidak dapat dikembalikan kecuali beberapa kasus yang fatal.</li>
                        <li>5. Apabila calon peserta seminar telah membayar tiket seminar namun tidak hadir saat hari H seminar, maka tiket yang telah dibayar tidak dapat dikembalikan (diuangkan).</li>
                    </ul>
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h2>TEMPAT KEGIATAN</h2>
                <br>
                <h4>Auditorium Common Class Room</h4>
                <h4>Kampus Dramaga Institut Pertanian Bogor</h4>
                <br>
                <h2>KUOTA PESERTA</h2>
                <br>
                <h4>500 orang peserta</h4>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12 timeline-title">
                <h1 class="text-center">Timeline Seminar Nasional</h1>
            </div>
        </div>
        <img class="timeline-img" src="{{ asset('img/timeline/timeline-seminar.jpg') }}" alt="timeline seminar nasional" id="timeline-seminar">
        <!-- Timeline End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
