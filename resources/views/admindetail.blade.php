
<!doctype html>

@extends('layouts.navbar3')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background:url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		<div class="main-container">
		
		<section class="page-title page-title-1 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/footer.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                	@if($user->type == "AppsToday")
		                		<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconapps.png" style="width: auto; height: 200px;">
		                	@elseif($user->type == "HackToday")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconhack.png" style="width: auto; height: 200px;">
		                	@elseif($user->type == "Business IT Case")
			                	<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconbisnis.png" style="width: auto; height: 200px;">
		                	@endif
		                </div>
		            </div>
		            
		        </div>

				@if($user->type != 'HackToday')		        
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$user->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Berkas</a>
					</li>
					<li>
						<a href="#buktibayar">Bukti Pembayaran</a>
					</li>
				</ol>
				@else
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$user->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Upload Berkas</a>
					</li>
				</ol>
				@endif
			</section>
			
			<section style="padding-top: 60px; padding-bottom: 0px; background-color: #26c99e;">
				<h2 align="center"> ADMIN PANEL </h2>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					
					<!-- Alert Foto KTM -->
					<!-- 3 Members -->
					@if($user->member_one != NULL && $user->member_two != NULL && $user->member_three != NULL)
						@if($user->ktm_img1 != NULL && $user->ktm_img2 != NULL && $user->ktm_img3 != NULL)
							@if($user->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($user->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>	
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Dalam Proses Verifikasi, Harap Tunggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #c64444 !important;" align="center">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Kartu Tanda Mahasiswa / Kartu Pelajar Belum Diupload.
						</div>
						@endif
					@endif
					<!-- 2 Members -->
					@if($user->member_one != NULL && $user->member_two != NULL && $user->member_three == NULL)
						@if($user->ktm_img1 != NULL && $user->ktm_img2 != NULL)
							@if($user->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($user->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Dalam Proses Verifikasi, Harap Tunggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Kartu Tanda Mahasiswa / Kartu Pelajar Belum Diupload.
						</div>
						@endif
					@endif
					<!-- 1 Member -->
					@if($user->member_one != NULL && $user->member_two == NULL && $user->member_three == NULL)
						@if($user->ktm_img1 != NULL)
							@if($user->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($user->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;" align="center">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Dalam Proses Verifikasi, Harap Tunggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert"  style="color: #fff !important; background-color: #c64444 !important;" align="center">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Kartu Tanda Mahasiswa / Kartu Pelajar Belum Diupload.
						</div>
						@endif
					@endif

					<!-- Alert Surat Keterangan Mahasiswa Aktif -->
					@if($user->letter == NULL)
					<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
						<button type="button" class="close tutupletter">
							<span aria-hidden="true">&times;</span>
						</button>
						Surat Keterangan Mahasiswa / Siswa Aktif Belum Diupload.
					</div>
					@else
						@if($user->verify_letter == 1)
						<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;" align="center">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Berhasil Diverifikasi.
						</div>
						@elseif($user->verify_letter == 2)
						<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
						</div>
						@else
						<div class="alert alert-dismissible letter" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;" align="center">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Dalam Proses Verifikasi, Harap Tunggu Kurang Dari 2 x 24 Jam.
						</div>
						@endif
					@endif

					<!-- Alert Bukti Pembayaran -->
					@if($user->type != 'HackToday')
						@if($user->payment == NULL)
						<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
							<button type="button" class="close tutuppayment">
								<span aria-hidden="true">&times;</span>
							</button>
							Bukti Pembayaran Belum Diupload.
						</div>
						@else
							@if($user->verify_payment == 1)
							<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;" align="center">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Berhasil Diverifikasi.
							</div>
							@elseif($user->verify_payment == 2)
							<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;" align="center">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible payment" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;" align="center">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Dalam Proses Verifikasi, Harap Tunggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@endif
					@endif
			</section>

            <section style="padding-top: 0px;" id="profil">
		        <div class="container">
		            <div class="row">
                    <div class="feature bordered text-center bg-secondary" style="background-color: white; box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2);" align="center">
                            @if($user->type != 'HackToday')
								@if($user->verify_ktm == 1 && $user->verify_letter == 1 && $user->verify_payment == 1)
									<div class="alert alert-success col-md-2 pull-right" role="alert" style="margin-bottom: 0px; padding-right: 5px; padding-left: 5px;">
										<strong>STATUS:</strong> VERIFIED
									</div>
								@else
									<div class="alert alert-danger col-md-2 pull-right" role="alert" style="margin-bottom: 0px; padding-right: 5px; padding-left: 5px;">
										<strong>STATUS:</strong> NOT VERIFIED
									</div>
								@endif

							@elseif($user->type == 'HackToday')
								@if($user->verify_ktm == 1 && $user->verify_letter == 1)
                                <div class="alert alert-success col-md-2 pull-right" role="alert" style="margin-bottom: 0px; padding-right: 5px; padding-left: 5px;">
                                    <strong>STATUS:</strong> VERIFIED
                                </div>
								@else
                                <div class="alert alert-danger col-md-2 pull-right" role="alert" style="margin-bottom: 0px; padding-right: 5px; padding-left: 5px;">
                                    <strong>STATUS:</strong> NOT VERIFIED
                                </div>
								@endif
							@endif
						<h4 class="uppercase mb40 mb-xs-24 col-md-offset-2">{{App\User::find($user->team_id)->name}}</h4>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
								<p style="color:black !important;">
								@if($user->member_one !=NULL)
								{{$user->member_one}}
								@else
								<b style="color: red">Member 1 Not Found</b>
								@endif</p>
								<p style="color:black !important;">
								@if($user->member_two !=NULL)
								{{$user->member_two}}
								@else
								<b style="color: red">Member 2 Not Found</b>
								@endif</p>
								<p style="color:black !important;">
								@if($user->member_three !=NULL)
								{{$user->member_three}}
								@else
								<b style="color: red">Member 3 Not Found</b>
								@endif</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Institution</h6>
							<p style="color:black !important;">
								{{$user->school}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Province</h6>
							<p style="color:black !important;">
								{{$user->province}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Contact</h6>
							<div style="color:black !important;">
								<p> {{App\User::find($user->team_id)->email}} </p>
								<p> {{$user->phone_num}} </p>
								<p> {{$user->line_id}} </p>
							</div>
						</div>
					</div>
		            </div>
		        </div>
			</section>
			
			<section style="padding-top: 0px; padding-bottom: 20px" id="berkas">
		        <div class="container">
		            <div class="row">
					<div class="feed-item mb96 mb-xs-48 text-center" align="center">
						<h4 align="center"><b>Kartu Tanda Mahasiswa</b></h4>
						@if($user->member_one !=NULL)
							@if($user->ktm_img1!=NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h5 class="uppercase mb0">{{$user->member_one}}</h5>  
			                        <img alt="Pic" src="{{asset($user->ktm_img1)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto;">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img1)}}">Lihat KTM</a>
			                        </div>
			                        
			                    </div>
			                </div>
			                @else
							<p><h5 align="center" style="color:red">
				                <b>KTM MEMBER 1 NOT UPLOADED</b>
							</h5></p>
							@endif
						@endif
						@if($user->member_two !=NULL)
							@if($user->ktm_img2)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h5 class="uppercase mb0">{{$user->member_two}}</h5>
			                        <img alt="Pic" src="{{asset($user->ktm_img2)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img2)}}">Lihat KTM</a>
			                        </div>
			                    </div>
			                </div>
			                @else
							<p><h5 align="center" style="color:red">
				                <b>KTM MEMBER 2 NOT UPLOADED</b>
							</h5></p>
							@endif
						@endif
						@if($user->member_three !=NULL)
							@if($user->ktm_img3 != NULL)
							<div class="col-md-4 col-sm-6">
			                    <div class="image-tile outer-title text-center" align="center">
									<h5 class="uppercase mb0">{{$user->member_three}}</h5>	
			                        <img alt="Pic" src="{{asset($user->ktm_img3)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
			                        <div class="title mb16"><br>
										<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->ktm_img3)}}">Lihat KTM</a>	                            
			                        </div>
			                    </div>
			                </div>
			                @else
							<p><h5 align="center" style="color:red">
				                <b>KTM MEMBER 3 NOT UPLOADED</b>
							</h5></p>
			                @endif
						@endif
		            </div>
				</div>
				<div class="row" align="center">
					<div style="margin-left: 50px">
						<a class="btn btn-lg btn-danger mb8 mt-xs-24 col-md-3 col-md-offset-1" style="color: white" href='{{ url("antiribetclub/tolakktm/{$user->id}") }}'>Tolak KTM</a>
					</div>
					<div>
						<a class="btn btn-lg btn-primary mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/verifyktm/{$user->id}") }}'>Konfirmasi KTM</a>
					</div>
					<div>
						<a class="btn btn-lg btn-warning mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/unverifyktm/{$user->id}") }}'>Batalkan Konfirmasi KTM</a>
					</div>
				</div>
			</section>
			<section style="padding-top: 50px; padding-bottom: 0px">
				<div class="container">
					<div class="feed-item mb96 mb-xs-48 text-center" align="center">
						<h4 align="center"><b>Surat Keterangan Siswa Aktif</b></h4>	                
							@if($user->letter !=NULL)
								<h4 align="center" style="color: green; font-weight: bold">
									SURAT KETERANGAN TELAH DIUPLOAD
								</h4>
								<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->letter)}}">Download Surat Keterangan</a>
							@else
								<h4 align="center" style="color: red; font-weight: bold">
									SURAT KETERANGAN BELUM DIUPLOAD
								</h4>
							@endif
					</div>
				</div>
				<div class="row" align="center">
					<div style="margin-left: 50px;">
						<a class="btn btn-lg btn-danger mb8 mt-xs-24 col-md-3 col-md-offset-1" style="color: white" href='{{ url("antiribetclub/tolakletter/{$user->id}") }}'>Tolak Surat Keterangan</a>
					</div>
					<div>
						<a class="btn btn-lg btn-primary mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/verifyletter/{$user->id}") }}'>Konfirmasi Surat Keterangan</a>
					</div>
					<div>
						<a class="btn btn-lg btn-warning mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/unverifyletter/{$user->id}") }}'>Batalkan Konfirmasi Surat</a>
					</div>
				</div>
			</section>
			<section style="padding-top: 50px; padding-bottom: 0px" id="buktibayar">	
				<div class="container">
					<div class="feed-item mb96 mb-xs-48 text-center">              
						<div class="row mb32 mb-xs-16">
							<div align="center">
							@if($user->type != 'HackToday')
							<h4 align="center"><b>Bukti Pembayaran</b></h4>  
								@if($user->payment!=NULL)
								<img alt="Article Image" class="mb32 mb-xs-16" src="{{asset($user->payment)}}" style="display: block; max-width:400px; max-height:200px; width: auto; height: auto; margin: auto">
								<br><a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{asset($user->payment)}}">Lihat Bukti Pembayaran</a>
								@else
								<h4><b style="color: red">BUKTI PEMBAYARAN BELUM DIUPLOAD</b></h4>
								@endif 
								<div class="row" align="center"><br>
									<div style="margin-left: 50px;">
										<a class="btn btn-lg btn-danger mb8 mt-xs-24 col-md-3 col-md-offset-1" style="color: white" href='{{ url("antiribetclub/tolakpayment/{$user->id}") }}'>Tolak Pembayaran</a>
									</div>
									<div>
										<a class="btn btn-lg btn-primary mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/verifypayment/{$user->id}") }}'>Konfirmasi Pembayaran</a>
									</div>
									<div>
										<a class="btn btn-lg btn-warning mb8 mt-xs-24 col-md-3" style="color: white" href='{{ url("antiribetclub/unverifypayment/{$user->id}") }}'>Batalkan Konfirmasi Pembayaran</a>
									</div>
								</div>  
							@endif      
							</div>
						</div>
					</div>
				</div>
			</section>
		                    
					</div>
				</div>
			</div>
		</div>
	</div>
		
				
		<script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
		<script>
		$(document).ready(function(){
			$(".tutupmain").click(function(){
				$(".main").fadeTo(200, 0).slideUp(200,0);
			});
		});	
		
		$(document).ready(function(){
			$(".tutupktm").click(function(){
				$(".ktm").fadeTo(200, 0).slideUp(200,0);
			});
		});

		$(document).ready(function(){
			$(".tutupletter").click(function(){
				$(".letter").fadeTo(200, 0).slideUp(200,0);
			});
		});

		$(document).ready(function(){
			$(".tutuppayment").click(function(){
				$(".payment").fadeTo(200, 0).slideUp(200,0);
			});
		});	
		</script>	
    </body>
</html>

@endsection