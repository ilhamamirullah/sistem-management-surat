<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Bootstrap -->
		<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<!-- Animate.css -->
		<link href="{{asset('/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body style="background:#F7F7F7;">
		<div class="">

			<div id="wrapper">
				<div id="login" class=" form">
					<section class="login_content">
						{!! Form::open(['url'=>'/login']) !!}
						<h1>Login Form</h1>
						<div>
							{!! Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Username']) !!}
						</div>
						<div>
							{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
						</div>
						<div>
							<!-- {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!} -->
							<button type="submit" class="btn btn-primary submit">
								<i class="fa fa-btn fa-sign-in"></i> Login
							</button>
							<a class="reset_pass" href="#">Lost your password?</a>
						</div>
						<div class="clearfix"></div>
						<div class="separator">
							<div class="clearfix"></div>
							<br />
							<div>
								<img src="{{ asset('image/rajonet-reborn2.png') }}" style="width:340px">

								<p>©2017 SIMANSUR<br/>
									Sistem Informasi Surat<br/>
									Rajonet Indonesia All Rights Reserved.</p>
							</div>
						</div>
						{!! Form::close() !!}
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
