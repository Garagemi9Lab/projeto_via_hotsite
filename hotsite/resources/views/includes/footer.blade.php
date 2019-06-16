@php
	//$urlSite = get_site_url();
	//$urlTema = get_template_directory_uri();
@endphp

<footer>
    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-md-4 col-lg-3 f-col-1">
                <div>
                    <div class="col-links">
                        <div>
                            <h2>Mapa</h2>
                            <a href="{{ route('sobre') }}">Sobre</a>
                            <a href="http://via.com.vc" target="_blank">Via portal</a>
                        </div>
                    </div>

                    <div class="col-inf">
                        <div>
                            <h2>Via</h2>
                            <p>Telefone:
                                <span>(11) 2500-6767</span>
                            </p>
                            <p>Av Antártica, 62 </br> São Paulo-SP</p>
                            <p>CEP 01141-060</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 col-lg-5 f-col-2">
                <div class="col-logo">
                    <img src="{{asset('via/assets/images/logomarca-via.png')}}" alt="Logomarca Via"/>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 col-lg-4 f-col-3">
                <div class="col-policy">
                    <p>Compliance with Our Privacy Policy</p>
                    <span>We use the information we collect only in compliance with this Privacy Policy. 
                        Customers who subscribe to our Subscription Services are obligated through our 
                        agreements with them to comply with this Privacy Policy. We Never Sell Personal 
                        Information We will never sell your Personal Information to any third party.
                    </span>
                </div>
                <div class="col-policy">
                    <p>We Never Sell Personal Information</p>
                    <span>We will never sell your Personal Information to any third party. </span>          
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 copyright">
                <p>©2016 – Via todos os direitos reservados<p>
            </div>
        </div>

    </div>
</footer>



@php /*wp_footer(); */ @endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{ asset('via/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('via/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('via/assets/js/functions.js') }}"></script>

<!-- Fecha o body -->
</body>

<!-- Fecha o HTML -->
</html>