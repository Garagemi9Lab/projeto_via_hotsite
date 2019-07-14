<?php
get_header(); ?>

<?php if (have_posts()) the_post();?> 

<div class="content-area">
	<main id="main" class="site-main" role="main">

		<?php require_once 'templates/banner.php'; ?>  
	
		<!-- .sliders. -->
		<?php require_once 'templates/slider.php'; ?>  
	
		<!-- .clientes. -->
		<?php require_once 'templates/clientes.php'; ?>  

		<!-- .conheça a via. -->
		<?php require_once 'templates/conheca.php'; ?>  

		<!-- .cadastro. -->
		<?php require_once 'templates/cadastro.php'; ?>  

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>


