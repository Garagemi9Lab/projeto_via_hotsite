@php
	//$urlSite = get_site_url();
	//$urlTema = get_template_directory_uri();
@endphp




<section class="banner bg" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">

                <div class="content" style="color:#fff; ">  
                    <h2 style="font-size:4rem !important; font-weight:lighter">A GENTE RESOLVE SEU DIA A DIA, PRA VOCÊ FOCAR NAS DECISÕES MAIS IMPORTANTES.</h2>
                    <br>
                    <h2 style="font-weight:bold;">VIA: A PLATAFORMA <br>INTELIGENTE <br>QUE TRABALHA <br>POR VOCÊ.</span>
                </div>	

                <div class="form download d-none">
                    
                    <form method="post" action="{{ route('leed') }}" id="download">
                        <div id="response"></div>
                        <div>
                            <div hidden="hidden" class="fields-hidden">
                                <input type="email" name="email" placeholder="E-mail" required>
                                <input type="text" name="name" placeholder="Nome completo" required>
                                <input type="text" name="empresa" placeholder="Nome da empresa" required>
                                <input type="tel" name="celular" placeholder="Celular" class="sp_celphones" required>
                                <input type="submit" class="submit" placeholder="Baixar agora" style="font-size:2.5rem; background-color: #FB813F; margin-top:50px;">
                            </div>
                            <a href="javascript:void(0)" id="btnBaixarAgora" class="show-fields" style="font-size:2.5rem; background-color: #FB813F; margin-top:50px;">CADASTRAR</a>
                            <a href="{{ asset('via/assets/pdf/tornar-se-dono-do-proprio-negocio.pdf') }}" download="Tornar-se dono do próprio negócio.pdf" id="pdf" hidden>pdf</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="form download d-block">
                    <form method="post" action="{{ route('leed') }}" id="download2">
                        <div id="response2"></div>
                        <div>
                            <input type="email" name="email" placeholder="E-mail" required>
                            <div hidden="hidden" class="fields-hidden">
                                <input type="text" name="name" placeholder="Nome completo" required>
                                <input type="text" name="empresa" placeholder="Nome da empresa" required>
                                <input type="tel" name="celular" placeholder="Celular" class="sp_celphones" required>
                                <input type="submit" class="submit" placeholder="Baixar agora">
                            </div>
                            <a href="javascript:void(0)" id="btnBaixarAgora" class="show-fields">Baixar agora</a>
                            <a href="{{ asset('via/assets/pdf/tornar-se-dono-do-proprio-negocio.pdf') }}" download id="pdf2" hidden>pdf</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        var mudarBanner = () =>{
            var imagens = ['b1','b2','b3','b4'];
            var nImgAtual = 0;
            var divBanner = document.getElementById('banner');
            divBanner.style.transition = 'background 1000ms ease';
    
            var t = setInterval(()=>{
                //Mudar o banner
                divBanner.style.backgroundImage = `url(../../via/assets/images/banners/${imagens[nImgAtual]}.jpg)`;
    
                //Controla as imagens
                if(nImgAtual == imagens.length-1)
                    nImgAtual = 0;
                else
                    nImgAtual++;
            },5000)
            
        }
        mudarBanner();
</script>


<section>
    <div class="container">
        <div class="col-sm-12">
            <p class="texto1">
                Existem ações que só você pode fazer. E existem outras que a agente pode executar: contabilidade, gestão financeira, gestão de funcionários e muito mais. Garantimos uma operação mais eficiente, reduzimos gastos e aumentamos a produtividade do seu negócio. Com isso, você ganha tempo para focar no que realmente interessa: o crescimento da sua empresa.
            </p>
        </div>
    </div>
    
</section>
    