@extends('layouts.navbar2')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HackToday - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="css/timeline.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>	
		
		<div class="main-container"  style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		<section class="page-title page-title-4 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/bggradien.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">HACK TODAY</h3>
		                </div>
		                <div class="col-md-6 text-right">
		                    <ol class="breadcrumb breadcrumb-2">
                                <li>
		                            <a href="#rulebook">Rulebook</a>
		                        </li>
		                        <li>
		                            <a href="#timeline">Timeline</a>
		                        </li>
		                        <li>
		                            <a href="#rewards">Rewards</a>
		                        </li>
		                        <!--<li>
		                            <a href="#testimonies">Testimonies</a>
		                        </li>-->
		                        <li>
		                            <a href="#faq">FAQ</a>
		                        </li>
		                    </ol>
		                </div>
		            </div>
		        </div>   
        </section>

        <section class="image-edge" style="padding-bottom: 0px; padding-top: 10px">
            <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                <img alt="Screenshot" class="mb-xs-24" src="img/iconhack.png" style="height: auto; weight: 450px">
            </div>
            <div class="container"  id="rulebook">
                <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                    <div class="feature bordered text-center">
                        <p class="lead mb40" style="color: white">
                        HackToday atau yang lebih dikenal dengan Capture The Flag adalah salah satu cabang kompetisi IT Today 2018 dalam bidang keamanan teknologi informasi. Dalam lomba ini, peserta  diharuskan untuk mencari celah-celah keamanan jaringan sehingga peserta mampu untuk menembus target yang disediakan oleh panitia. Lomba HackToday yang diadakan IT Today 2018 bertujuan agar setiap peserta mampu mengembangkan kemampuannya pada bidang Information Security.
                        </p>
                        <a class="btn btn-lg btn-white mb8 mt-xs-24" href="http://ittoday.web.id/rulebook/Rulebook%20HackToday.pdf">DOWNLOAD RULEBOOK</a>
                    </div>
                </div>
            </div>
            
        </section>
            
        <section id="timeline" style="padding-bottom: 0px">
				<div class="col-md-4 col-md-offset-4 feature bordered text-center">
				<h3 align="center">TIMELINE</h3>
		</div>
		<ul class="timeline">
				<li>
				  <div class="direction-r">
					<div class="flag-wrapper">
					  <span class="hexa"></span>
					  <span class="flag">Pendaftaran</span>
					  <span class="time-wrapper"><span class="time" style="color:white">30 Mei – 28 Juli 2018</span></span>
					</div>
				</li>
				<li>
				  <div class="direction-l">
					<div class="flag-wrapper">
					  <span class="hexa"></span>
					  <span class="flag">Penyisihan Tahap 1</span>
					  <span class="time-wrapper"><span class="time" style="color:white">4 Agustus 2018</span></span>
					</div>
				</li>
				<li>
				  <div class="direction-r">
					<div class="flag-wrapper">
					  <span class="hexa"></span>
					  <span class="flag">Submisi Writeup</span>
					  <span class="time-wrapper"><span class="time" style="color:white">4 Agustus 2018</span></span>
					</div>
				</li>
				<li>
				<div class="direction-l">
					<div class="flag-wrapper">
					<span class="hexa"></span>
					<span class="flag">Pengumuman Finalis</span>
					<span class="time-wrapper"><span class="time" style="color:white">25 Agustus 2018</span></span>
					</div>
				</li>
				<li>
				<div class="direction-r">
					<div class="flag-wrapper">
					<span class="hexa"></span>
					<span class="flag">Final</span>
					<span class="time-wrapper"><span class="time" style="color:white">2 September 2018</span></span>
					</div>
				</li>
			  </ul>
        </section>
        
        <section id="rewards" style="padding-bottom: 0px">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>3rd WINNER</h4>
		                        <p>
                                Rp 3.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h3>1st WINNER</h3>
		                        <p>
                                Rp 7.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>2nd WINNER</h4>
		                        <p>
                                Rp 5.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        <br><br>
				<div class="container">
		            <div class="row">
		                <div class="text-center">
		                    <div class="feature">
		                        <i class="icon ti ti-medall fade-3-4 inline-block mb16"></i>
		                        <h4>HONORABLE MENTIONS (2)</h4>
		                        <p>
                                Rp 1.000.000 + sertifikat + plakat
		                        </p>
		                    </div>
		                </div>	            
		        	</div>
				</div>
		    </section>
            
            <section id="faq" style="padding-bottom: 40px;" align="center" class="col-md-offset-1">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-offset-2 col-sm-6 text-center feature bordered text-center">
		                    <h3 class="mb16">FREQUENTLY ASKED QUESTIONS</h3>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="col-sm-10" style="background-color: rgba(255, 255, 255, 0.5); margin-left: 0px; margin-right: 0px">
		                    <ul class="accordion accordion-2 one-open">
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Kapan dan dimana HackToday dilaksanakan?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Hacktoday terdiri dari 2 Tahap, Tahap Penyisihan bersifat Remote yaitu via online yang artinya peserta dapat mengerjakan soal dimanapun pada hari Sabtu tanggal 4 Agustus 2018 pukul 09.00 WIB sampai dengan 16.00 WIB.
										Tahap final dilaksanakan secara onsite di FMIPA IPB, Kampus IPB Dramaga, Bogor pada hari Minggu, 9 September 2018 pukul 10.00 WIB sampai 16.00 WIB.
		                                </h5>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah HackToday 2018 dipungut biaya?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tidak, HackToday 2018 <b>gratis</b>. 
		                                </h5>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah benar peserta SMA/SMK atau sederajat dapat mengikuti HackToday 2018?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Benar, namun tidak akan ada perbedaan kesulitan soal atau hal lain. Setiap peserta mendapatkan porsi jumlah dan kesulitan soal yang sama dalam HackToday 2018.
		                                </h5>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta SMA/SMK atau sederajat mendapatkan penghargaan khusus?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Apabila ada peserta SMA/SMK atau sederajat yang dapat masuk ke dalam 3 tim terbaik pada HackToday 2018 akan mendapatkan penghargaan khusus yaitu tim SMA/SMK atau sederajat terbaik dalam HackToday. Maka tim tersebut akan mendapatkan kejuaraan ganda yaitu tim terbaik SMA/SMK atau sederajat dan tim juara 1/2/3.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana cara mendaftar HackToday?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Pendaftaran melewati website resmi ITTODAY 2018 yaitu ittoday.web.id.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah persyaratan administrasi peserta dalam HackToday 2018?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Setiap peserta dalam tim wajib menyertakan surat keterangan mahasiswa aktif dan kartu tanda mahasiswa (KTM) dan untuk SMA/SMK wajib menyertakan kartu tanda siswa dan surat keterangan siswa dari sekolah asal peserta. Apabila ada peserta dengan administrasi yang tidak lengkap maka peserta tersebut dianggap gugur dan jumlah peserta tim yang diakui hanyalah yang melengkapi persyaratan administrasi.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Seperti apa rundown tahap penyisihan 1?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tahap penyisihan 1 dilaksanakan pada tanggal 4 agustus 2018 dengan 2 sesi yaitu sesi 1 pada jam 09.00-16.00 dengan sistem jeopardy dengan scoreboard yang akan di freeze pada 1 jam sebelum penutupan sesi 1 dan sesi 2 yang akan dilaksanakan pada hari yang sama pada jam 16.00-20.00 yaitu pengumpulan/submisi write up.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apa itu write up?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Write up adalah dokumentasi peserta yang berisi bagaimana peserta tersebut menyelesaikan soal. 
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apa yang terjadi apabila peserta tidak mengumpulkan write up?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Write up merupakan sebuah aspek peniliaian untuk memastikan peserta memang menyelesaikan soal tersebut, juga menghindari adanya plagiarisme dalam penyelesaian soal. Apabila peserta tersebut tidak mengumpulkan atau menyertakan write up keseluruhan maka seluruh point yang peserta dapatkan akan hangus. Apabila peserta hanya tidak menyertakan write up untuk soal tertentu maka point untuk soal tersebut dianggap hangus.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah kualitas write up mempengaruhi peniliaian?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Write up akan bergantung terhadap kretifitas peserta dalam menyelesaikan soal. Singkat maupun tidak, tidak akan berpengaruh terhadap penilian asalkan write up memang dapat menyelesaikan soalnya. Apabila write up dinilai tidak menyelesaikan soal ataupun tidak lengkap, maka point peserta untuk soal tersebut dianggap hangus.
		                                </h5>
		                            </div>
                                </li>
                                
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapakah tim yang akan lolos ke final?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tim yang akan lolos ke final berjumlah 10 tim terbaik pada saat penyisihan tahap 1 apabila terdapat tim SMA/SMK. Apabila tidak ada tim SMA/SMK dalam 10 tim terbaik maka hanya akan diambil 9 dan diambil 1 tim terbaik SMA/SMK. Pengumuman akan dilaksanakan pada tanggal 22 Agustus 2018.
		                                </h5>
		                            </div>
                                </li>
                                <li>
                               <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Dimanakah final akan dilaksanakan?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Final dilaksanakan pada hari Minggu, 9 September 2018 pada pukul 10.00 hingga 16.00 di Fakultas MIPA,Institut Pertanian Bogor, Dramaga, Bogor.
										</h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta mendapatkan akomodasi pada saat final?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tidak, namun peserta akan dibantu oleh pj HackToday untuk dicarikan akomodasi selama berada di IPB.
										</h5>
		                            </div>
                                </li>
		                    </ul>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				