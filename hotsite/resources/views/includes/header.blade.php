@php
	//$urlSite = get_site_url();
	//$urlTema = get_template_directory_uri();
@endphp

<!DOCTYPE html>
<html class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Via</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script -->
        <link rel="stylesheet" href="{{ asset('via/style.css') }}">
        <link rel="stylesheet" href="{{ asset('via/assets/front-end/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('via/assets/front-end/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('via/assets/front-end/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('via/assets/front-end/css/slick-theme.css') }}">
        @php 
            //wp_head(); 
        @endphp
	</head>

	<body class="">
        @php /*body_class();*/ @endphp
		<style>
			body { padding-top: 70px; }
		</style>
		<nav class="navbar  navbar-fixed-top">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-md-4 col-lg-4">
							<a href="{{ route('index') }}">
								<img src="{{ asset('via/assets/images/logomarca-via.png') }}" alt="Logomarca Via" class="logo">
							</a> 
						</div> 
						<div class="col-xs-8 col-md-8 col-lg-8">
							<nav>
								<ul>
									<li>
										<a href="{{route('sobre')}}">Sobre</a>
										<a href="{{route('index')}}/#register">Cadastro</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
		</nav>