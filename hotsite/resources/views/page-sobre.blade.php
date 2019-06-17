@include('includes.header')

@php 
    //if (have_posts()) the_post();
@endphp 

<div class="content-area">
	<main id="main" class="site-main" role="main">

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <img src="{{ asset('via/assets/images/sobre-a-via.jpg') }}">  
                        <h1 class="title">Muito mais do que soluções:<span> resultados</span></h1>
                        <?php //echo the_content(); ?>
                        <p>Administrar empresas envolve comprometimento, 
                            conhecimento e experiência. E nós agregramos 
                            esses fatores com a precisão da tecnologia. 
                            Através da nossa ferramenta exclusiva, geramos 
                            dados sobre gestão empresarial, gestão orçamentaria, 
                            contabilidade fiscal, controle patrimonial e criamos soluções 
                            inovadoras.</p>
                    </div>
                </div>
            </div>
        </section>


	</main><!-- .site-main -->
</div><!-- .content-area -->

@include('includes.footer')


