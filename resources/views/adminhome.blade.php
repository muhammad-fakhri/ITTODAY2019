<!doctype html>

@extends('layouts.navbar3')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <link href="{{asset('css/themify-icons')}}.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="../lib/js-xlsx/xlsx.core.min.js"></script>
		<script type="text/javascript" src="../lib/FileSaver/FileSaver.min.js"></script> 
		<script type="text/javascript" src="../lib/html2canvas/html2canvas.min.js"></script>
		<script type="text/javascript" src="../tableExport.js"></script>
		<script type="text/javaScript">         
			var sFileName = 'ngophi';
			// function ExportXLSX(){
				// $('#participant').tableExport({fileName: sFileName,
							// type: 'xlsx'
						   // });
			// }
			function ExportCSV(){
				$('#participant').tableExport({type:'csv'});
			}
		</script>
	<style>
        table, td, th {    
            border: 1px solid #ddd;
            text-align: left;
            color: #000000;
            background-color: #fff;
        }
        th, td {
            padding: 15px;
        }
        table {
        width: 100%;
        align: center;
        counter-reset: row-num;
        }
        table tr {
        counter-increment: row-num;
        }
        table tr td:first-child::before {
            content: counter(row-num) ". ";
        }
        </style>
    </head>
    <body style="background:url( {{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">

            <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="post-snippet mb64">
		                        <div class="post-title">
                                    <h1 class="uppercase mb0" align="center">Admin Panel</h1><br>
                                </div>
                                <div>
                                    <h4 class="inline-block">   Tabel Peserta Lomba</h4><br>
                                </div>
								<a href="#" onClick="ExportCSV();">DownloadCSV</a> 
								<br/>
								<br/>
								<div id="participant">
                                <table>
                                    <tr>
                                        <th width="10px">Nomor</th>
                                        <th width="100px">Nama Grup</th>
                                        <th width="100px">Email</th>
                                        <th width="50px">Jenis Lomba</th>
                                        <th width="50px">Status KTM</th>
                                        <th width="50px">Status Surat</th>
                                        <th width="50px">Status Pembayaran</th>
                                    </tr>
                                    @foreach($user as $human )
                                    <tr>
                                        <td></td><td><a style="font-size: 18px; color: blue;" href='{{ url("/antiribetclub/detail/{$human->id}") }}'>{{App\User::find($human->team_id)->name}}</a></td>
                                        <td>{{App\User::find($human->team_id)->email}}</a></td>
                                        <td>{{$human->type}}</td>
                                        <td>
											<!-- 3 Members -->
											@if($human->member_one != NULL && $human->member_two != NULL && $human->member_three != NULL)
												@if($human->ktm_img1 != NULL && $human->ktm_img2 != NULL && $human->ktm_img3 != NULL)
													@if($human->verify_ktm == 1)
														<b style="color:green">CONFIRMED</b>
													@elseif($human->verify_ktm == 2)
														<b style="color:#aa00ff">DECLINED</b>
													@else
														<b style="color:#ff9000">PENDING</b>
													@endif
												@else
													<b style="color:red">NOT CONFIRMED</b>
												@endif
											@endif
											
											<!-- 2 Members -->
											@if($human->member_one != NULL && $human->member_two != NULL && $human->member_three == NULL)
												@if($human->ktm_img1 != NULL && $human->ktm_img2 != NULL)
													@if($human->verify_ktm == 1)
														<b style="color:green">CONFIRMED</b>
													@elseif($human->verify_ktm == 2)
														<b style="color:#aa00ff">DECLINED</b>
													@else
														<b style="color:#ff9000">PENDING</b>
													@endif
												@else
													<b style="color:red">NOT CONFIRMED</b>
												@endif
											@endif
											
											<!-- 1 Members -->
											@if($human->member_one != NULL && $human->member_two == NULL && $human->member_three == NULL)
												@if($human->ktm_img1 != NULL)
													@if($human->verify_ktm == 1)
														<b style="color:green">CONFIRMED</b>
													@elseif($human->verify_ktm == 2)
														<b style="color:#aa00ff">DECLINED</b>
													@else
														<b style="color:#ff9000">PENDING</b>
													@endif
												@else
													<b style="color:red">NOT CONFIRMED</b>
												@endif
											@endif
										</td>
                                        <td>@if($human->letter == NULL)
												<b style="color:red">NOT CONFIRMED</b>
											@else
												@if($human->verify_letter == 1)
													<b style="color:green">CONFIRMED</b>
												@elseif($human->verify_letter == 2)
														<b style="color:#aa00ff">DECLINED</b>
												@else
													<b style="color:#ff9000">PENDING</b>
												@endif
											@endif
										</td>
                                        <td>@if($human->type != 'HackToday')
												@if($human->payment == NULL)
													<b style="color:red">NOT CONFIRMED</b>
												@else
													@if($human->verify_payment == 1)
														<b style="color:green">CONFIRMED</b>
													@elseif($human->verify_payment == 2)
														<b style="color:#aa00ff">DECLINED</b>
													@else
														<b style="color:#ff9000">PENDING</b>
													@endif
												@endif
											@else
												<b style="color:green">FREE</b>
											@endif
										</td>
                                    </tr>
                                    @endforeach
                                    </table>
									</div>
		                    </div>
		                </div>
		                
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
    	<script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>

@endsection