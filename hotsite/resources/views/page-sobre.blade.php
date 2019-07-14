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
                        <h1 class="title">MUITO MAIS DO QUE UM SISTEMA:<span> UMA SOLUÇÃO FEITA PARA VOCÊ</span></h1>
                        <?php //echo the_content(); ?>
                        <p style="font-size:1.9rem; line-height:2.2rem !important;">
                            Manter as contas a pagar e a receber atualizados, ter uma boa gestão financeira, administrar o departamento pessoal e cuidar da contabilidade, são os grandes desafios para o sucesso do seu negócio. Com a VIA você faz tudo isso de forma rápida, prática e eficiente, e o que é melhor: <b>GASTANDO MUITO MENOS DO QUE IMAGINA.</b>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 text-center" style="padding-top:80px;padding-bottom:80px;">
                        <a href="http://via.com.vc" style="font-size:2.5rem; background-color: #FB813F; color:#fff; padding:10px 50px; font-weight:bold">CLIQUE AQUI E FALE COM A GENTE</a>
                    </div>
                </div>
            </div>
        </section>


	</main><!-- .site-main -->
</div><!-- .content-area -->

@include('includes.footer')


