<?php
	$urlSite = get_site_url();
	$urlTema = get_template_directory_uri();
?>

<section class="banner bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="content">  
                    <h2>Baixe o Guia para </br>tornar-se dono do </br>próprio negócio <span>Grátis</span>
                </div>	

                <div class="form download d-none">
                    <form method="post" id="download">
                        <div>
                            <input type="email" name="email" placeholder="E-mail" required>
                            <div hidden="hidden" class="fields-hidden">
                                <input type="text" name="nomee" placeholder="Nome completo" required>
                                <input type="text" name="nomee-empresa" placeholder="Nome da empresa" required>
                                <input type="tel" name="celulear" placeholder="Celular" class="sp_celphones" required>
                                <input type="submit" class="submit" placeholder="Baixar agora">
                            </div>
                            <a href="javascript:void(0)" class="show-fields">Baixar agora</a>
                            <a href="<?php echo $urlTema ?>/assets/pdf/tornar-se-dono-do-proprio-negocio.pdf" download id="pdf" hidden>pdf</a>
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
                    <form method="post" id="download">
                        <div>
                            <input type="email" name="email" placeholder="E-mail" required>
                            <div hidden="hidden" class="fields-hidden">
                                <input type="text" name="nomee" placeholder="Nome completo" required>
                                <input type="text" name="nomee-empresa" placeholder="Nome da empresa" required>
                                <input type="tel" name="celulear" placeholder="Celular" class="sp_celphones" required>
                                <input type="submit" class="submit" placeholder="Baixar agora">
                            </div>
                            <a href="javascript:void(0)" class="show-fields">Baixar agora</a>
                            <a href="<?php echo $urlTema ?>/assets/pdf/Checklist.pdf" download id="pdf" hidden>pdf</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>