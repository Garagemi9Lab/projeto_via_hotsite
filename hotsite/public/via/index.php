<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>

<!-- O loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Container do artigo -->	
	<div class="artigo-container">
		
		<!-- Título do post -->
		<h1>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		
		<!-- Categoria -->
		<?php the_category(); ?>
		
		<!-- Autor -->
		<?php the_author(); ?>
		
		<!-- Data -->
		<?php the_date(); ?>
		
		<!-- Conteúdo do post -->
		<?php the_content(); ?>
		
	</div>
	
<?php endwhile; ?>
<?php endif; ?>

<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>