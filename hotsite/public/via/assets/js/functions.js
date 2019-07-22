//Slider de clientes
(function($) {

    var detectar_mobile = function() {
        var check = false; //wrapper no check
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
    }

    var rolarForm = function(){
        if(!detectar_mobile()){
            window.scrollTo(0,550);
        }else{
            window.scrollTo(0,370);
        }
    }

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

    $(".download .show-fields").click(function(){
        //$(this).hide();
        //$(".banner h2").hide();
        //$(".download .fields-hidden").removeAttr('hidden');
        $('#form_btx').show();
        rolarForm();
    });

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
                    $('#response').show().addClass("alert alert-success").removeClass('alert-danger').html('Dados salvos, logo entraremos em contato...');
                    
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

    $(".register .show-fields").click(function(){
        $(this).hide();
        $(".register .fields-hidden").removeAttr('hidden');
    });

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
    this.rolarForm();
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
    this.rolarForm();
})

