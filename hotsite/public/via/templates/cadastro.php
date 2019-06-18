<?php $urlSite = get_site_url(); ?>

<section class="form register" id="register">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <h2 class="title"><span>Faça seu cadastramento</span> e entraremos em contato</h2>

                <form action="<?php echo $urlSite ?>/#register" method="post" id="form-register">
                    <div>
                        <input type="email" name="email" placeholder="E-mail" required>
                        <div hidden="hidden" class="fields-hidden">
                            <input type="text" name="nome" placeholder="Nome completo" required>
                            <input type="text" name="nome-empresa" placeholder="Nome da empresa" required>
                            <input type="tel" name="celular" placeholder="Celular" class="sp_celphones" required>
                            <input type="submit" class="submit" placeholder="Cadastrar">
                        </div>
                        <a href="javascript:void(0)" class="show-fields">Cadastrar</a>
                    </div>
                </form>

                <div class="response" hidden="hidden">
                    <p>Cadastro Efetuado</p>
                </div>

            </div>
        </div>
    </div>
</section>
