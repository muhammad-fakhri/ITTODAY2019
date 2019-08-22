@extends('layouts.main')
@section('content')
<!-- start banner Area -->
<section class="detail-banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    HackToday
                </h1>
                <p class="text-white link-nav"><a href="/">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('hack') }}"> HackToday</a></p>
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
                <h1>HackToday</h1>
                <p>
                    HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2019 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia. Lomba HackToday yang diadakan IT Today 2019 bertujuan agar setiap peserta mampu mengembangkan kemampuannya pada bidang Information Security.
                </p>
                <a class="primary-btn text-uppercase" href="{{ route('downHack') }}" style="color: white;">Download Rulebook</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Timeline Start -->
        <div class="row">
            <div class="col-lg-12 timeline-title">
                <h1 class="text-center">Timeline HackToday</h1>
            </div>
        </div>
        <img class="timeline-img" src="{{ asset('img/timeline/timeline-hack.jpg') }}" alt="timeline hacktoday" id="timeline-hacktoday">
       {{--  <h3 id="extend-registration">
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
                                    1. Kapan dan dimana HackToday dilaksanakan?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Hacktoday terdiri dari 2 Tahap, Tahap Penyisihan bersifat Remote yaitu via online yang artinya peserta dapat mengerjakan soal dimanapun pada hari Sabtu tanggal 10 Agustus 2018 pukul 09.00 WIB sampai dengan 16.00 WIB dan submisi writeup di hari yang sama pada pukul 16.00 WIB sampai dengan 20.00 WIB. Tahap final dilaksanakan secara onsite di FMIPA IPB, Kampus IPB Dramaga, Bogor pada hari Sabtu, 24 Agustus 2018 pukul 09.00 WIB sampai 15.00 WIB.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Berapa biaya pendaftaran untuk mengikuti kompetisi HackToday?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Biaya pendaftaran untuk mengikuti kompetisi HackToday adalah sebesar Rp. 50.000,00 yang harus dibayarkan dan mengirimkan bukti pembayaran sebelum pendaftaran ditutup. Apabila peserta tidak melakukan hal diatas, maka peserta dianggap gugur dari rangkaian kompetisi. Tata cara pembayaran yang sah dapat dilihat pada rulebook yang dapat di unduh pada website ittoday.web.id.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Apakah benar peserta SMA/SMK atau sederajat dapat mengikuti HackToday 2019?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Benar, namun tidak akan ada perbedaan kesulitan soal atau hal lain. Setiap peserta mendapatkan porsi jumlah dan kesulitan soal yang sama dalam HackToday 2019.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Apakah peserta SMA/SMK atau sederajat mendapatkan penghargaan khusus?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Apabila ada peserta SMA/SMK atau sederajat yang dapat masuk ke dalam 3 tim terbaik pada HackToday 2019 akan mendapatkan penghargaan khusus yaitu tim SMA/SMK atau sederajat terbaik dalam HackToday.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Bagaimana cara mendaftar HackToday?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Pendaftaran melewati website resmi IT TODAY 2019 yaitu ittoday.web.id.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. Apakah persyaratan administrasi peserta dalam HackToday 2019?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Setiap peserta dalam tim wajib menyertakan surat keterangan mahasiswa aktif ataupun kartu rencana studi terbaru dan kartu tanda mahasiswa (KTM).Kemudian, untuk SMA/SMK wajib menyertakan kartu tanda siswa dan surat keterangan siswa dari sekolah asal peserta. Apabila ada peserta dengan administrasi yang tidak lengkap maka peserta tersebut dianggap gugur dan jumlah peserta tim yang diakui hanyalah yang melengkapi persyaratan administrasi.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. Seperti apa rundown tahap penyisihan?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tahap penyisihan dilaksanakan pada tanggal 10 Agustus 2019 dengan 2 sesi yaitu sesi 1 pada jam 09.00-16.00 dengan sistem jeopardy dynamic scoring kemudian dilanjutkan dengan submisi writeup pada jam 16.00-20.00 WIB.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. Apa itu write up?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Write up adalah dokumentasi peserta yang berisi bagaimana peserta tersebut menyelesaikan soal. </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9. Apa yang terjadi apabila peserta tidak mengumpulkan write up?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Write up merupakan sebuah aspek peniliaian untuk memastikan peserta memang menyelesaikan soal tersebut, juga menghindari adanya plagiarisme dalam penyelesaian soal. Apabila peserta tersebut tidak mengumpulkan atau menyertakan write up keseluruhan maka seluruh point yang peserta dapatkan akan hangus. Apabila peserta hanya tidak menyertakan write up untuk soal tertentu maka point untuk soal tersebut dianggap hangus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    10. Apakah kualitas write up mempengaruhi peniliaian?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Write up akan bergantung terhadap kretifitas peserta dalam menyelesaikan soal. Singkat maupun tidak, tidak akan berpengaruh terhadap penilian asalkan write up memang dapat menyelesaikan soalnya. Apabila write up dinilai tidak menyelesaikan soal ataupun tidak lengkap, maka point peserta untuk soal tersebut dianggap hangus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    11. Berapakah tim yang akan lolos ke final?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tim yang akan lolos ke final berjumlah 10 tim terbaik pada saat tahap penyisihan apabila terdapat tim SMA/SMK.Namun, jika tidak ada tim SMA/SMK dalam 10 tim terbaik maka hanya akan diambil 9 dan diambil 1 tim terbaik SMA/SMK. Pengumuman akan dilaksanakan pada tanggal 14 Agustus 2019.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    12. Dimanakah final akan dilaksanakan?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Final dilaksanakan pada hari Sabtu, 24 Agustus 2019 pada pukul 09.00 hingga 15.00 di Fakultas MIPA,Institut Pertanian Bogor, Dramaga, Bogor.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <div class="faq-button collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    13. Apakah peserta mendapatkan akomodasi pada saat final?
                                </div>
                            </h2>
                        </div>
                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Tidak, namun peserta akan dibantu oleh pj HackToday untuk dicarikan akomodasi selama berada di IPB.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- FAQ End -->
    </div>
    </div>
</section>
<!-- End home-about Area -->
@endsection
