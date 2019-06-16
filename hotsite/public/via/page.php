<?php
get_header(); ?>

<?php if (have_posts()) the_post();?> 

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">  
                            <?php echo the_content(); ?>
                        </div>	
                    </div>
                </div>
            </div>
        </section>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
