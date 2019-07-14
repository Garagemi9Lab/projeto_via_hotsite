@include('includes.header')

@php 
    //if (have_posts()) the_post();
@endphp 

<div class="content-area">
	<main id="main" class="site-main" role="main">
        @include('templates.banner')
	
        <!-- .sliders. -->
        @include('templates.slider')
	
        <!-- .clientes. -->
        @include('templates.clientes')

        <!-- .conheça a via. -->
        @include('templates.conheca')

        <!-- .cadastro. -->

	</main><!-- .site-main -->
</div><!-- .content-area -->

@include('includes.footer')


