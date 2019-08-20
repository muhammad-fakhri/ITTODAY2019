@extends('layouts.main')
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
                <a class="primary-btn text-uppercase" href="{{ route('downDSC') }}" style="color: white;">Download Rulebook</a>
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
        <img class="timeline-img" src="{{ asset('img/timeline/timeline-dsc.jpg') }}" alt="timeline data science competition" id="timeline-dsc">
        {{-- <h3 id="extend-registration">
            Pendaftaran diperpanjang sampai 30 Juli 2019 !
        </h3> --}}
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
                                    1. Apa itu Data Science Competition ?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Data Science Competition ( DSC ) merupakan salah satu rangkaian lomba IT TODAY yang merujuk pada analisis data yang dilakukan untuk menghasilkan suatu pola atau prediksi dari suatu data. Peserta diharapkan dapat menemukan solusi terkait permasalahan yang dapat disimpulkan dari data yang diberikan.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Bagaimana susunan rangkaian lomba Data Science Competition?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Registrasi Peserta : Pendaftaran tim melalui website ittoday.web.id
                                <br>
                                Tahap Penyisihan : Melakukan analisis pada dataset yang diberikan oleh panitia melalui situs kaggle.com. Peserta dapat melakukan analisis selama satu minggu. Peserta diharuskan membuat makalah terkait hasil analisis data serta dikumpulkan melalui website ittoday.web.id pada akun tim yang telah terdaftar.
                                <br>
                                Tahap final: Presentasi hasil analisis data yang telah diolah pada babak penyisihan kepada juri.
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
                                    6. Apakah peserta mendapatkan akomodasi pada saat final?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tidak, namun peserta akan dibantu oleh PJ Data Science Competition untuk dicarikan akomodasi selama berada di IPB.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. Berapa biaya pendaftaran untuk mengikuti kompetisi Data Science Competition?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Biaya pendaftaran untuk mengikuti kompetisi Data Science Competition adalah sebesar Rp. 100.000,00 yang harus dibayarkan dan mengirimkan bukti pembayaran sebelum pendaftaran ditutup. Apabila peserta tidak melakukan hal diatas, maka peserta dianggap gugur dari rangkaian kompetisi. Tata cara pembayaran yang sah dapat dilihat pada rulebook yang dapat di unduh pada website ittoday.web.id.
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
                                Makalah dikumpulkan dalam format .pdf melalui website ittoday.web.id pada akun yang telah terdaftar.
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
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- FAQ End -->
    </div>
</section>
<!-- End home-about Area -->
@endsection
