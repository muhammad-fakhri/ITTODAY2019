@extends('layouts.navbar2')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AppsToday - IT TODAY 2018</title>
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
		<section class="page-title page-title-4 image-bg overlay parallax" >
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/bggradien.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h3 class="uppercase mb0">APPS TODAY</h3>
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
            <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8 col-md-offset-1">
                <img alt="Screenshot" class="mb-xs-24" src="img/iconapps.png" style="height: auto; weight: 450px">
            </div>
            <div class="container" id="rulebook">
                <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                    <div class="feature bordered text-center">
                        <p class="lead mb40" style="color: white">
                        AppsToday merupakan salah satu cabang kompetisi IT Today 2018 pada bidang inovasi aplikasi. Lomba ini dibuat sebagai wadah bagi peserta yang akan menjadi generasi developer baru yang kreatif dan inovatif untuk memajukan daya saing Indonesia di bidang teknologi informasi.
                        </p>
                        <a class="btn btn-lg btn-white mb8 mt-xs-24" href="http://ittoday.web.id/rulebook/Rulebook%20AppsToday.pdf">DOWNLOAD RULEBOOK</a>
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
							  <span class="time-wrapper"><span class="time" style="color:white">30 Mei – 20 Juli 2018</span></span>
							</div>
						</li>
						<li>
						  <div class="direction-l">
							<div class="flag-wrapper">
							  <span class="hexa"></span>
							  <span class="flag">Submisi Tahap 1</span>
							  <span class="time-wrapper"><span class="time" style="color:white">30 Mei – 23 Juli 2018</span></span>
							</div>
						</li>
						<li>
						  <div class="direction-r">
							<div class="flag-wrapper">
							  <span class="hexa"></span>
							  <span class="flag">Pengumuman Peserta Tahap 2</span>
							  <span class="time-wrapper"><span class="time" style="color:white">27 Juli 2018</span></span>
							</div>
						</li>
						<li>
						<div class="direction-l">
							<div class="flag-wrapper">
							<span class="hexa"></span>
							<span class="flag">Submisi Tahap 2</span>
							<span class="time-wrapper"><span class="time" style="color:white">28 Juli – 13 Agustus 2018</span></span>
							</div>
						</li>
						<li>
						<div class="direction-r">
							<div class="flag-wrapper">
							<span class="hexa"></span>
							<span class="flag">Pengumuman Finalis</span>
							<span class="time-wrapper"><span class="time" style="color:white">25 Agustus 2018</span></span>
							</div>
						</li>
						<li>
						<div class="direction-l">
							<div class="flag-wrapper">
							<span class="hexa"></span>
							<span class="flag">Final</span>
							<span class="time-wrapper"><span class="time" style="color:white">15 September 2018</span></span>
							</div>
						</li>
						<li>
						<div class="direction-r">
							<div class="flag-wrapper">
							<span class="hexa"></span>
							<span class="flag">Pameran Karya Finalis</span>
							<span class="time-wrapper"><span class="time" style="color:white">16 September 2018</span></span>
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
		                        <h4>3<font size=5><sup>rd</sup></font> WINNER</h4>
		                        <p>
                                Rp 1.500.000 + SERTIFIKAT + PLAKAT
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h3>1<font size=5><sup>st</sup></font> WINNER</h3>
		                        <p>
                                Rp 5.000.000 + SERTIFIKAT + PLAKAT
		                        </p>
		                    </div>
		                </div>
		                <div class="col-sm-4 text-center">
		                    <div class="feature">
		                        <i class="fa fa-trophy icon fade-3-4 inline-block mb16"></i>
		                        <h4>2<font size=5><sup>nd</sup></font> WINNER</h4>
		                        <p>
                                Rp 3.000.000 + SERTIFIKAT + PLAKAT
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
		                                <h4 class="inline-block mb0">Apa itu AppsToday?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                       AppsToday merupakan salah satu rangkaian lomba IT TODAY yang merujuk pada pembuatan aplikasi yang kreatif dan inovatif dalam memecahkan berbagai permasalahan yang mendasar dalam kegiatan sehari-hari.
										</h5>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana susunan rangkaian lomba AppsToday?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tahap pertama: Registrasi dan menyelesaikan submisi 1.<br> Tahap kedua: Membuat video dan prototype aplikasi. <br>Tahap final: Presentasi karya kepada juri maupun pengunjung melalui stand.
		                                </h5>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah peserta harus berasal dari institusi yang sama?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Ya, anggota tim harus berasal dari universitas/institusi yang sama tapi boleh lintas jurusan.
		                                </h5>
		                            </div>
                                </li>
								<li>
		                            <div class="title">
		                                <h4 class="inline-block mb0"> Berapa anggota per tim yang diperbolehkan?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
										Tim terdiri dari 1-3 anggota.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Siapa saja yang boleh mengikuti kompetisi ini?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Mahasiswa S1/D3 seluruh Indonesia.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Kapan periode pendaftaran dibuka?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Untuk tahap pendaftaran Early Bird akan dibuka pada tanggal 30 Mei-20 Juni 2018, sedangkan tahap pendaftaran reguler dibuka pada tanggal 21 Juni-11 Juli 2018.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa biaya pendaftaran untuk mengikuti kompeitisi AppsToday?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Untuk tahap pendaftaran Early Bird, biaya pendaftaran sebesar Rp 100.000, sedangkan untuk tahap pendaftaran reguler biaya sebesar Rp 150.000.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Bagaimana dengan format pengumpulan?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Proposal aplikasi dikumpulkan dalam format .pdf, Submisi tahap dua dikumpulkan dalam format .zip.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa banyak tim yang lolos ke tahap final?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tim yang lolos tahap final sebanyak 5 tim.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Berapa tim yang lolos ke tahap dua?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                        Tim yang lolos tahap dua sebanyak 15 tim.
		                                </h5>
		                            </div>
                                </li>
                                <li>
		                            <div class="title">
		                                <h4 class="inline-block mb0">Apakah ada ketentuan penggunaan bahasa?</h4>
		                            </div>
		                            <div class="content">
		                                <h5>
                                            Tidak ada, gunakan bahasa yang mudah dimengerti oleh orang lain.
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
				