<?php
    get_header(); 
    $urlSite = get_site_url();
	$urlTema = get_template_directory_uri();
?>

<?php if (have_posts()) the_post();?> 

<div class="content-area">
	<main id="main" class="site-main" role="main">

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <img src="<?php echo $urlTema ?>/assets/images/sobre-a-via.jpg">  
                        <h1 class="title">Muito mais do que soluções:<span> resultados</span></h1>
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </section>


	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>


