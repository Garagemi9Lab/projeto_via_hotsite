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
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144370249-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-144370249-1');
		</script>
		
		<!-- Google Tag Manager -->
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-PKWGDHG');
		</script>
		<!-- End Google Tag Manager -->
	</head>

	<body class="">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKWGDHG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
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
										<a href="{{route('index')}}/#register" id="btnCadastro">Cadastro</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
		</nav>