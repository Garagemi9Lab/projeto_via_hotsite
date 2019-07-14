<?php
	$urlSite = get_site_url();
	$urlTema = get_template_directory_uri();
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?></title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-md-4 col-lg-4">
						<a href="<?php echo $urlSite ?>">
							<img src="<?php echo $urlTema ?>/assets/images/logomarca-via.png" alt="Logomarca Via" class="logo">
						</a> 
					</div> 
					<div class="col-xs-8 col-md-8 col-lg-8">
						<!-- MENU -->
						<nav>
							<ul>
								<li>
									<a href="<?php echo $urlSite ?>/sobre">Sobre</a>
									<a href="<?php echo $urlSite ?>/#register">Cadastro</a>
								</li>
							</ul>
						</nav>
						<!-- MENU -->
					</div>
				</div>
			</div>
		</header>