//Slider de clientes
(function($) {
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
        $('#response').addClass("alert alert-success").removeClass('alert-danger').html('Aguarde, logo seu download irá iniciar!');

        $.post('/leed',dt, function(data){
            $('#pdf')[0].click();
            $('#response').hide();
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
                                    $('#pdf')[0].click();
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

