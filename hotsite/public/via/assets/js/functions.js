//Slider de clientes
(function($) {

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };
    
      $('.sp_celphones').mask(SPMaskBehavior, spOptions);



    $('.customers-slider').slick({
        prevArrow:"<button type='button' class='slick-prev pull-left partnership-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right partnership-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '60px',
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
})(jQuery);

//exibir form banner
(function($) {
    $(".download .show-fields").click(function(){
        $(this).hide();
        $(".banner h2").hide();
        $(".download .fields-hidden").removeAttr('hidden');
    });
})(jQuery);

//baixar pdf form banner
(function($) {
    $( "#download" ).submit(function(e) {
        e.preventDefault();

        let dt = $('#download').serializeArray();
        //console.log(dt);
        $('#response').addClass("alert alert-success").removeClass('alert-danger').html('Aguarde...');

        $.post('/leed',dt, function(data){
            setTimeout(function(){
                //$('#pdf')[0].click();
                $('#response').hide(0,'linear');
                if(data.status == "true"){
                    $('#response').show().addClass("alert alert-success").removeClass('alert-danger').html('Dados salvos, logo entraremos em contato...')
                }
            },3000);
        },'JSON')
            .fail(function(data){
                if( data.status === 422 ) {
                    var errors = $.parseJSON(data.responseText);
                    $('#response').html('');
                    $.each(errors, function (key, value) {
                        // console.log(key+ " " +value);
                        $('#response').addClass("alert alert-danger").removeClass('alert-success');

                        if($.isPlainObject(value)) {
                            $.each(value, function (key, value) {   
                                //console.log(key+ " " +value);
                                $('#response').show().append(value+"<br/>");
                                if(value == 'Email já cadastrado!'){
                                    //$('#pdf')[0].click();
                                }
                            });
                        }else{
                            //$('#response').show().append(value+"<br/>"); //this is my div with messages
                        }
                    });
                }
            })
            
        
        //$(this).submit();
    });  

    $( "#download2" ).submit(function(e) {
        e.preventDefault();

        let dt = $('#download2').serializeArray();
        //console.log(dt);
        //$('#response2').addClass("alert alert-success").removeClass('alert-danger').html('Aguarde, logo seu download irá iniciar!');

        $.post('/leed',dt, function(data){
            setTimeout(function(){
                $('#response2').hide(0,'linear');
                //window.location.href = $('a#pdf2').prop('href')
                
            },3000);
        },'JSON')
            .fail(function(data){
                if( data.status === 422 ) {
                    var errors = $.parseJSON(data.responseText);
                    $('#response2').html('');
                    $.each(errors, function (key, value) {
                        // console.log(key+ " " +value);
                        $('#response2').addClass("alert alert-danger").removeClass('alert-success');

                        if($.isPlainObject(value)) {
                            $.each(value, function (key, value) {   
                                //console.log(key+ " " +value);
                                $('#response2').show().append(value+"<br/>");
                                if(value == 'Email já cadastrado!'){
                                    //window.location.href = $('a#pdf2').prop('href')
                                    //alert($('a#pdf2').prop('href'))
                                    //$('a#pdf2').click();
                                }
                            });
                        }else{
                            //$('#response').show().append(value+"<br/>"); //this is my div with messages
                        }
                    });
                }
            })
            
        
        //$(this).submit();
    });  
})(jQuery);

//exibir form cadastro
(function($) {
    $(".register .show-fields").click(function(){
        $(this).hide();
        $(".register .fields-hidden").removeAttr('hidden');
    });
})(jQuery);


//exibe div de cadastro enviado
(function($) {
    $("#form-register").submit(function(event) {

        // Cancels the form's submit action.
        event.preventDefault();
        $(this).hide();
        let dt = $('#form-register').serializeArray();

        $.post('/leed',dt, function(data){
            $('#form-register').hide();
        },'JSON')
            .fail(function(data){
                if( data.status === 422 ) {
                    var errors = $.parseJSON(data.responseText);
                    $('.response').html('');
                    $.each(errors, function (key, value) {
                        // console.log(key+ " " +value);
                        $('.response').addClass("alert alert-danger").removeClass('alert-success');

                        if($.isPlainObject(value)) {
                            $.each(value, function (key, value) {   
                                //console.log(key+ " " +value);
                                $('.response').show().append(value+"<br/>");
                            });
                        }else{
                            //$('#response').show().append(value+"<br/>"); //this is my div with messages
                        }
                    });
                }
            })

        $(".response").removeAttr('hidden');
    });
    
})(jQuery);

var clickCadastrar = ()=>{
    document.querySelector('#btnBaixarAgora').click();
    document.querySelector('#download2 a#btnBaixarAgora').click();
    window.scrollTo(0,50);
}

var url = window.location.href;
if(url.indexOf('#register') > -1){
    clickCadastrar();
}

var btnCadastro = document.getElementById('btnCadastro');
btnCadastro.addEventListener('click',function(e){
    e.preventDefault();
    
    let page = window.location.pathname.replace('/','');
    if(page == ''){
        clickCadastrar();
    }else{
        window.location.href = btnCadastro.getAttribute("href");
    }
});

var cd2 = document.getElementById('cadastrar2');
cd2.addEventListener('click',function(e){
    e.preventDefault();

    let cd1 = document.querySelector('.download .show-fields');
    //cd1.click();
    cd3 = document.getElementById('btnBaixarAgora')
    cd3.click();
    

    cd4 = document.querySelector('#download2 a#btnBaixarAgora');
    cd4.click();
    window.scrollTo(0,30);
})

