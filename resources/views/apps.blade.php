@extends('layouts.main')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    AppsToday
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('apps') }}"> AppsToday</a></p>
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
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/apps.png') }}" class="event-image" alt="appstoday">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>AppsToday</h1>
                <p>
                    AppsToday merupakan salah satu cabang kompetisi IT Today 2019 pada bidang
                    inovasi aplikasi. Lomba ini menjadi wadah bagi peserta untuk menjadi generasi developer
                    baru yang kreatif dan inovatif guna memajukan daya saing Indonesia di bidang TIK.
                    Peserta AppsToday merupakan mahasiswa S1 atau diploma. Perangkat lunak yang
                    diajukan harus bersesuaian dengan tema acara AppsToday 2019 yaitu “Enhancing
                    Human Capability with Technology”.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('downApps') }}" style="color: white;">Download Rulebook</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12 timeline-title">
                <h1 class="text-center">Timeline AppsToday</h1>
            </div>
        </div>
        <div>
            <img class="timeline-img" src="{{ asset('img/timeline/timeline-apps.jpg') }}" alt="timeline appstoday" id="timeline-appstoday">
        </div>
        <!-- Timeline End -->
        <!-- FAQ Start -->
        <div class="row faq-wrapper">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="accordion" id="accordionExample">
                    <h1 class="text-center" id="faq-title">Frequently Asked Question</h1>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <div class="faq-button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Apa itu AppsToday?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                AppsToday merupakan salah satu rangkaian lomba IT TODAY yang merujuk pada pembuatan aplikasi yang kreatif dan inovatif dalam memecahkan berbagai permasalahan yang mendasar dalam kegiatan sehari-hari.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Bagaimana susunan rangkaian lomba AppsToday?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Tahap pertama: Registrasi dan menyelesaikan submisi proposal dan video.
                                <br>
                                Tahap final: Presentasi karya kepada juri maupun pengunjung melalui stand.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Apakah peserta harus berasal dari institusi yang sama?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Ya, anggota tim harus berasal dari universitas/institusi yang sama tapi boleh lintas jurusan.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Berapa anggota per tim yang diperbolehkan?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tim terdiri dari 1-3 anggota.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Siapa saja yang boleh mengikuti kompetisi ini?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Mahasiswa S1/Diploma di seluruh Indonesia.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. Kapan periode pendaftaran dan penyisihan dibuka?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Pendaftaran dapat dilakukan mulai tanggal 30 Mei – 10 Juli 2019.
                                <br>
                                Sedangkan, tahap penyisihan proposal dan video dapat dilakukan mulai tanggal 30 Mei – 30 Juli 2019.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. Berapa biaya pendaftaran untuk mengikuti kompetisi AppsToday?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Biaya pendaftaran untuk mengikuti kompetisi AppsToday adalah sebesar Rp. 100.000,00 yang harus dibayarkan dan mengirimkan bukti pembayaran sebelum pendaftaran ditutup. Apabila peserta tidak melakukan hal diatas, maka peserta dianggap gugur dari rangkaian kompetisi. Tata cara pembayaran yang sah dapat dilihat pada rulebook yang dapat di unduh pada website ittoday.web.id.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. Bagaimana dengan format pengumpulan?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Proposal aplikasi dikumpulkan dalam format .pdf sedangkan video aplikasi dapat diunggah di youtube dan dikumpulkan dalam bentuk link yang dapat dituliskan di website ittoday.web.id pada akun yang telah terdaftar.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9. Berapa banyak tim yang lolos ke tahap final?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tim yang lolos tahap final sebanyak 5-7 tim. </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    10. Apakah ada ketentuan penggunaan bahasa?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Gunakan bahasa indonesia yang baik dan benar serta dapat dimengerti oleh orang lain. Apabila penggunaan bahasa kurang dapat dimengerti, submisi peserta tidak akan mendapat point secara maksimal.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    11. Apakah peserta mendapatkan akomodasi pada saat final?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tidak, namun peserta akan dibantu oleh pj AppsToday untuk dicarikan akomodasi selama berada di IPB. </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- FAQ End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
