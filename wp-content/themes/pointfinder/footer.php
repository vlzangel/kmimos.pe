<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory', 'display' )."/css/CaviarDreams.css"; ?>" type="text/css" charset="utf-8" />

<style type="text/css">
    #PageSubscribe{position:relative; max-width: 700px;  margin: 0 auto;  padding: 25px;  top: 75px; border-radius: 20px;  background: #ba2287;  overflow: hidden;}
    #PageSubscribe .exit{float: right; cursor: pointer;}
    #PageSubscribe .section{ width: 50%; padding: 10px; float: left; font-size: 17px; text-align: left;}
    #PageSubscribe .section.section1{font-size: 20px;}
    #PageSubscribe .section.section1 span{font-size: 25px;}
    #PageSubscribe .section.section1 .images{padding:10px 0; text-align: center;}
    #PageSubscribe .section.section3{width: 100%; font-size: 17px; font-weight: bold; text-align: center;}
    #PageSubscribe .section.section2{}
    #PageSubscribe .section.section2 .message{font-size: 15px; border: none; background: none; opacity:0; visible: hidden; transition: all .3s;}
    #PageSubscribe .section.section2 .message.show{opacity:1; visible:visible;}
    #PageSubscribe .section.section2 .icon{width: 30px; padding: 5px 0;}
    #PageSubscribe .section.section2 .subscribe {margin: 20px 0;  }
    #PageSubscribe .section.section2 form{margin: 0; display:flex;}
    #PageSubscribe .section.section2 input,
    #PageSubscribe .section.section2 button{width: 100%; max-width: calc(100% - 60px); margin: 5px; padding: 5px 10px; color: #CCC; font-size: 15px; border-radius: 20px;  border: none; background: #FFF; }
    #PageSubscribe .section.section2 button {padding: 10px;  width: 40px;}
    .span-email-show{ display: list-item; }
    .span-email-hide{ display: none; }
    @media screen and (max-width:480px), screen and (max-device-width:480px) {
        #PageSubscribe { top: 15px;}
        #PageSubscribe .section{ width: 100%; padding: 10px 0; font-size: 12px;}
        #PageSubscribe .section.section1 {font-size: 15px;}
        #PageSubscribe .section.section1 span {font-size: 20px;}
        #PageSubscribe .section.section3 {font-size: 12px;}
    }

    .gm-style * {
        font-family: caviar_dreamsregular !important;
        font-size: 9px  !important;
    }

    .gm-style > div > div > div > div {
        padding-top: 1px !important;
    }
</style>

<script type='text/javascript'>
    function SubscribeSite(){
        clearTimeout(SubscribeTime);
        
        var CampaignMonitor = '<div id="subForm">'+
        '<input id="fieldEmail" name="cm-vydlhk-vydlhk" type="email" placeholder="Introduce tu correo aqu&iacute" required />'+
        '<button onclick="register()" id="btn-envio"><i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>'+
        '<div id="msg" class="span-email-hide">Registro Exitoso. Por favor revisa tu correo en la Bandeja de Entrada o en No Deseados</div>'+
        '<div id="msg-vacio" class="span-email-hide">Debe completar los datos</div>'+
        '<div id="msg-register" class="span-email-hide">El email no es valido</div>'+
        '<div id="msg-error" class="span-email-hide">Este correo ya est&aacute; registrado. Por favor intenta con uno nuevo</div>';

        var dog = '<img height="70" align="bottom" src="https://www.kmimos.com.mx/wp-content/uploads/2017/07/propuestas-banner-09.png">'
            +'<img height="20" align="bottom" src="https://www.kmimos.com.mx/wp-content/uploads/2017/07/propuestas-banner-10.png">';

        var html='<div id="PageSubscribe"><i class="exit fa fa-times" aria-hidden="true" onclick="SubscribePopUp_Close(\'#message.Msubscribe\')"></i>'
            +'<div class="section section1"><span>G&aacute;nate  <strong>S/.8</strong> en tu primera reserva</span><br>&#8216;&#8216;Aplica para clientes nuevos&#8217;&#8217;<div class="images">'+dog+'</div></div>'
            +'<div class="section section2"><span><strong>&#161;SUSCR&Iacute;BETE!</strong> y recibe el Newsletter con nuestras <strong>PROMOCIONES, TIPS DE CUIDADOS PARA MASCOTAS,</strong> etc.!</span>'+CampaignMonitor+'</div>';


        SubscribePopUp_Create(html);
    }

    function register(){     
        if( jQuery('#fieldEmail').val() == ""){
            jQuery("#msg-vacio").removeClass('span-email-hide');
            jQuery("#msg-vacio").addClass('span-email-show');
            return;
        }else{
            var mail= jQuery('#fieldEmail').val();
            var email = {'cm-vydlhk-vydlhk': mail}
            var datos = {'source': 'home', 'email': mail}
            var result = getGlobalData("../../../landing/newsletter.php",'POST', datos);
                console.log(result);
            if (result == 1) {
                jQuery("#msg-vacio").removeClass('span-email-show');
                jQuery('#msg-error').removeClass('span-email-show');
                jQuery('#msg-register').removeClass('span-email-show');
                jQuery("#msg-vacio").addClass('span-email-hide');
                jQuery('#msg-error').addClass('span-email-hide');
                jQuery('#msg-register').addClass('span-email-hide');
                jQuery('#msg').removeClass('span-email-hide');
                jQuery('#msg').addClass('span-email-show');
                result = getGlobalData("http://kmimos.intaface.com/t/j/s/vydlhk/",'POST', email);
            }else if (result == 2){
                jQuery("#msg-vacio").removeClass('span-email-show');
                jQuery('#msg-error').removeClass('span-email-show');
                jQuery('#msg').removeClass('span-email-show');
                jQuery('#msg-register').addClass('span-email-show');
                jQuery('#msg-register').removeClass('span-email-hide');
                jQuery("#msg-vacio").addClass('span-email-hide');
                jQuery('#msg-error').addClass('span-email-hide');
                jQuery('#msg').addClass('span-email-hide');
            }else if (result == 3){
                jQuery("#msg-vacio").removeClass('span-email-show');
                jQuery('#msg-error').removeClass('span-email-hide');
                jQuery('#msg-register').removeClass('span-email-show');
                jQuery("#msg-vacio").addClass('span-email-hide');
                jQuery('#msg-error').addClass('span-email-show');
                jQuery('#msg-register').addClass('span-email-hide');
                jQuery('#msg').removeClass('span-email-show');
                jQuery('#msg').addClass('span-email-hide');
            }else{
                jQuery("#msg-vacio").removeClass('span-email-hide');
                jQuery('#msg-error').removeClass('span-email-show');
                jQuery('#msg-register').removeClass('span-email-show');
                jQuery("#msg-vacio").addClass('span-email-show');
                jQuery('#msg-error').addClass('span-email-hide');
                jQuery('#msg-register').addClass('span-email-hide');
                jQuery('#msg').removeClass('span-email-show');
                jQuery('#msg').addClass('span-email-hide');
            }
        }
    }

    function getGlobalData(url,method, datos){
        return jQuery.ajax({
            data: datos,
            type: method,
            url: url,
            async:false,
            success: function(data){
                return data;
            }
        }).responseText;
    }


    jQuery(document).ready(function(e){
        if(jQuery('body').hasClass('home')){
            SubscribeTime = setTimeout(function(){
                SubscribeSite();
            }, 7400);
        }
    });
</script>
<!-- Dajan -->
    <!--[if lt IE 9]>
        <script src='".get_home_url()."/wp-content/themes/pointfinder/js/html5shiv.js'></script>
    <![endif]-->
<script type='text/javascript'>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-103343585-1', 'auto');
    ga('send', 'pageview');
</script><!-- Dajan -->
<?php
$datos = kmimos_get_info_syte();
$HTML = "</div></div>
    <div id='pf-membersystem-dialog'></div>
        <a title='".esc_html__('Back to Top','pointfindert2d')."' class='pf-up-but'><i class='pfadmicon-glyph-859'></i></a>
    </div>
    <footer class='wpf-footer'>            
        <div class='container' style='overflow: hidden;'>
            <div class='row'>
                <div class='col-xs-12 jj-xs-offiset-2 col-sm-4 col-md-3 col-lg-3 col-lg-offset-2 left'>
                    <h2>Contáctanos</h2>
                    <p>
                        <strong>Tlf: </strong> ".$datos['telefono_solo']."<br>
                        <strong>WhatsApp: </strong> ".$datos['whatsApp']."<br>
                        <strong>Email: </strong> ".$datos['email']."
                    </p>
                </div>
                <div class='col-sm-4 jj-xs-offiset-2 col-md-3 center col-lg-3 center'>
                    <h2>Navega</h2>
                    <ul>
                        <li><a href='#'>Nosotros</a></li>
                        <!--li><a href='".get_home_url()."/blog/'>Blog</a></li-->
                        <li><a href='#'>Preguntas y Respuestas</a></li>
                        <li><a href='#'>Cobertura Veterinaria</a></li>
                        <li><a href='#'>Comunicados de prensa</a></li>
                        <li><a href='".get_home_url()."/terminos-y-condiciones/'>Términos y Condiciones</a></li>
                        <li><a href='#'>Nuestros Aliados</a></li>
                        <li><a href='".get_home_url()."/contacto/'>Contáctanos</a></li>
                    </ul>
                </div>

                <div class='hidden-xs col-sm-4  col-md-3 col-lg-3 right'>
                    <h2>¡B&uacute;scanos en nuestra redes sociales!</h2>
                    <div class='socialBtns'>
                        <a href='https://www.facebook.com/".$datos['facebook']."/' target='_blank' class='facebookBtn socialBtn' title='".$datos['facebook']."'></a>
                        <a href='https://twitter.com/".$datos['twitter']."/' target='_blank' class='twitterBtn socialBtn' title='@".$datos['twitter']."'></a>
                        <a href='https://instagram.com/".$datos['instagram']."/' target='_blank' class='instagramBtn socialBtn' title='@".$datos['instagram']."'></a>
                        <img src='".get_bloginfo( 'template_directory', 'display' )."/images/dog.png' alt=''>
                    </div>
                </div>
            </div> 
        </div>
        <div class='jj-xs-offiset-2 col-md-offset-1 col-md-offset-3 jj-offset-2'>
            <span id='siteseal'>
                <script async type='text/javascript'>
                    function verifySeal() {
                        var bgHeight = '460';
                        var bgWidth = '593';
                        var url = 'https://seal.godaddy.com/verifySeal?sealID=c5u9pjdoyKXQ6dRtmwnDmY0bV6KVBrdZGPEAnPkeSt7ZRCetPjIUzVK0bnHa';
                        window.open(url,'SealVerfication','menubar=no,toolbar=no,personalbar=no,location=yes,status=no,resizable=yes,fullscreen=no,scrollbars=no,width=' + bgWidth + ',height=' + bgHeight);
                    }
                </script>
                <img src='https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_l_m.gif' onclick='verifySeal();' />
            </span>  
        </div>
    </footer>

    <style type='text/css'>
        .wpf-container{
            overflow: hidden;
        }
        .pf-defaultpage-header{
            display: none !important;
        }
        .wcvendors_sold_by_in_loop{
            display: none !important;
        }
        .wc-bookings-booking-form .wc-bookings-booking-cost{
            margin: 0px 0px 10px !important;
        }
        .wc-bookings-booking-cost{
            position: relative !important;
            left: initial;
            margin-left: 0px !important;
            top: 0px !important;
        }
        .product .related{
            clear: both !important;
        }
        .switch-candy span {
            color: #000000 !important;
        }
        .vc-image-carousel .vc-carousel-slideline-inner .vc-inner img:hover {
            -webkit-filter: grayscale(0%) !important;
            filter: grayscale(0%) !important;
            opacity: 1 !important;
            transition: all 0.5s ease;
        }
        .wpmenucartli {
            display: none !important;
        }
        .kmi_link{
            font-size: initial; 
            color: #54c8a7;
            text-transform: capitalize;
            font-weight: bold;
        }
        a.kmi_link:hover{
            color:#138675!important;
        }
        .kmi_link:hover{
            color:#138675!important;
        }
        .wpmenucartli{
            display: none !important;
        }
        .woocommerce-message a{
            display: none !important;
        }
        @media (min-width: 1200px){
            .jj-offset-2 {
                margin-left: 16.66666667% !important;
            }
            .wpf-container{
                margin: 104px 0 0 0!important;
            }
        }
        @media (min-width: 994px){
            .jj-patica-menu{
                display: none;
            }
            .inline{
                display: inline;
                margin-bottom:3px;
            }

        }
        @media (max-width: 120px) and (min-width: 962px){
            .socialBtns{
                 padding-left: 6px!important;
            }
        }
        @media (max-width: 962px){
            .socialBtns{
                padding-left: 0px;
            }
        }
        @media screen and (max-width: 750px){
            .vlz_modal_ventana{
                width: 90% !important;
            }
            .jj-xs-offiset-2{
                margin-left: 20%;
            }

            .inline{
                display: block;
            }
        }
        @media (max-width: 520px){
            .vlz_modal_contenido{
                height: 300px;
            }
        }   
    </style>
    <script>
        function ocultarModal(){
            jQuery('#jj_modal_finalizar_compra').fadeOut();
            jQuery('#jj_modal_finalizar_compra').css('display', 'none');
        }"; 

        if( isset( $_GET['a'] ) ){
            $HTML .= "
                (function($) {
                    'use strict';
                    $(function(){
                        $.pfOpenLogin('open','login');
                    })
                })(jQuery);
            ";
        }

    $HTML .= "</script>";

        if( $post->post_name == "carro" ){
            $HTML .= "
                <script>
                        jQuery('.woocommerce-message>a.button.wc-forward').css('display', 'none');
                        jQuery('.variation-Duracin').css('display', 'none');
                        jQuery('.variation-Ofrecidopor').css('display', 'none');
                        jQuery( document ).ready(function() {
                            jQuery('.woocommerce-message>a.button.wc-forward').css('display', 'none');
                        });
                </script>
                <style>
                    .woocommerce-message>a.button.wc-forward{
                        display; none;
                    }
                    input[name=coupon_code]{color: #000!important;}
                    input[name=update_cart]{display: none!important;}
                </style>
            ";
        }
        if( $post->post_name == "perfil-usuario" ){
            $HTML .= "
                <script>
                        var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;  
                        if(es_firefox){
                            jQuery('input[name=pet_birthdate]').datepicker('destroy');
                            jQuery('input[name=pet_birthdate]').removeAttr('min');  
                            jQuery('input[name=pet_birthdate]').removeAttr('max');
                            jQuery('input[name=pet_birthdate]').prop('readonly', true); 
                            if (jQuery(window).width() > 550) {
                                jQuery( 'input[name=pet_birthdate]' ).datepicker({ 
                                    option: 'dd/mm/yy',
                                    changeMonth: true,
                                    changeYear: true,
                                    minDate: '-30y',
                                    maxDate: '-1d',
                                    dataFormat: 'dd/mm/yy',
                                });
                            }
                        }
                </script>
                <style>
                    @media (max-width: 568px){ 
                        .cell50{width:100%!important;}
                        .cell25{width:50%!important;}
                    }
                </style>
            ";
        }
        if( $post->post_name == "conocer-al-cuidador" ){
            $HTML .= "
            <script>
                var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;  
                var mdate = '0d';
                if(es_firefox){
                    if (jQuery(window).width() > 550) {

                        jQuery('input[name=meeting_when],input[name=service_start],input[name=service_end]').datepicker('destroy');
                        jQuery('input[name=meeting_when]').removeAttr('min');
                        jQuery('#service_start').prop('disabled', true);
                        jQuery('#service_end').prop('disabled', true);

                         jQuery( function() {
                            var dateFormat = 'mm/dd/yy',
                              from = jQuery( '#meeting_when' )
                                .datepicker({
                                    option: 'dd/mm/yy',
                                    changeMonth: true,
                                    changeYear: true,
                                    minDate: '0d',
                                    maxDate: '1y',
                                    dataFormat: 'dd/mm/yy',
                                })
                                .on( 'change', function() {
                                  to.datepicker( 'option', 'minDate', getDate( this ) );
                                  jQuery('#service_start').prop('disabled', false);

                                }),
                              to = jQuery( '#service_start' ).datepicker({
                                option: 'dd/mm/yy',
                                changeMonth: true,
                                changeYear: true,
                                maxDate: '1y',
                                dataFormat: 'dd/mm/yy',
                              })
                              .on( 'change', function() {
                                toto.datepicker( 'option', 'minDate', getDate( this ) );
                                jQuery('#service_end').prop('disabled', false);
                              }),
                              toto = jQuery( '#service_end' ).datepicker({
                                option: 'dd/mm/yy',
                                changeMonth: true,
                                changeYear: true,
                                maxDate: '1y',
                                dataFormat: 'dd/mm/yy',
                              });
                         
                            function getDate( element ) {
                              var date;
                              try {
                                date = jQuery.datepicker.parseDate( dateFormat, element.value );
                              } catch( error ) {
                                date = null;
                              }
                         
                              return date;
                            }
                        } );
                        jQuery('input[name=meeting_when],input[name=service_start],input[name=service_end]').prop('readonly', true);
                    }
                }
            </script>";
        }
        if( $post->post_name == "finalizar-comprar" && $_GET['key'] == "" ){
            $HTML .= "
            <style>
                .jj_modal{
                    position: fixed;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                    display: table;
                    z-index: 10000000000!important;
                    background: rgba(0, 0, 0, 0.8);
                    vertical-align: middle !important;
                    display: none;
                }
                .jj_modal_interno{
                    display: table-cell;
                    text-align: center;
                    vertical-align: middle !important;
                }
                .jj_modal_ventana{
                    position: relative;
                    display: inline-block;
                    text-align: left;
                    width: 40%;
                    box-shadow: 0px 0px 4px #FFF;
                    border-radius: 5px;
                    z-index: 1000;
                }
                .jj_modal_titulo{
                    background: #FFF;
                    padding: 15px 10px;
                    font-size: 18px;
                    color: #52c8b6;
                    font-weight: 600;
                    border-radius: 5px 5px 0px 0px;
                }
                .jj_modal_contenido{
                    background: #FFF;
                    height: auto;
                    box-sizing: border-box;
                    padding: 5px 15px;
                    border-top: solid 1px #d6d6d6;
                    border-bottom: solid 1px #d6d6d6;
                    overflow: auto;
                    text-align: justify;
                }
                .jj_modal_pie{
                    background: #FFF;
                    padding: 15px 10px;
                    border-radius: 0px 0px 5px 5px;
                    height: 70px;
                }
                .jj_modal_fondo{
                    position: fixed;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 500;
                }
                .jj_boton_siguiente{
                    padding: 10px 50px;
                    background-color: #a8d8c9;
                    display: inline-block;
                    font-size: 16px;
                    border: solid 1px #2ca683;
                    border-radius: 3px;
                    float: right;
                    cursor: pointer;
                } 
                @media screen and (max-width: 750px){
                    
                }
                @media (max-width: 520px){
                    .jj_modal_ventana{
                        width: 84% ;
                    }
                }
            </style>                         
            <div id='jj_modal_jauregui' class='jj_modal'>
                <div class='jj_modal_interno'>
                    <div class='jj_modal_fondo' onclick='jQuery('#jj_modal_bienvenida').css('display', 'none');'></div>
                    <div class='jj_modal_ventana jj_modal_ventana'>
                        <div class='jj_modal_titulo'>¡Espera!</div>
                        <div class='jj_modal_contenido' style='height: auto;'>
                                <p align='center'>
                                    Transacción en progreso, esta ventana se cerrará automáticamente.<img src='https://www.kmimos.com.mx/wp-content/uploads/2016/02/preloader.gif'>
                                </p> 
                        </div>
                    </div>
                </div>
            </div>";
        }

        $HTML .= "
        <script>
            jQuery( document ).ready(function() {
                jQuery( '.reservar' ).unbind();
                jQuery( '.reservar' ).off();
                jQuery( '.conocer-cuidador' ).unbind(); 
                jQuery( '.conocer-cuidador' ).off(); ";
                
                if( $post->post_name == 'finalizar-comprar' ){
                    $HTML .= " jQuery('.payment_method_wc-booking-gateway').css('display', 'none'); ";
                }
                if( $post->post_name == 'finalizar-comprar' ){
                    $HTML .= " jQuery('.payment_method_wc-booking-gateway').css('display', 'none'); ";
                }
                if( $post->post_name == 'finalizar-comprar' && $_GET['key'] == '' ){ 
                    $HTML .= " var abrir = true;
                    jQuery(window).scroll(function() {
                            if (jQuery(document).scrollTop() > 10) {
                                jQuery('#vlz_modal_popup').fadeOut();
                            }
                        });
                    ";
                }
       $HTML .= "}); </script>";

        if(  $_SESSION['admin_sub_login'] == 'YES' ){
            $HTML .= "
                <a href='".get_home_url()."/?i=".md5($_SESSION['id_admin'])."&admin=YES' class='theme_button' style='
                    position: fixed;
                    display: inline-block;
                    left: 50px;
                    bottom: 50px;
                    padding: 20px;
                    font-size: 48px;
                    font-family: Roboto;
                    z-index: 999999999999999999;
                '>
                    X
                </a>
            ";
        }

        // Modificacion Ángel Veloz
        $DS = kmimos_session();
        if( $DS ){
            if( isset($DS['reserva']) ){
                $HTML .= "
                    <a href='".get_home_url()."/wp-content/themes/pointfinder/vlz/admin/process/mybookings_modificar.php?b=".$user_id."' class='theme_button' style='
                        position: fixed;
                        display: inline-block;
                        left: 50px;
                        bottom: 50px;
                        padding: 8px;
                        font-size: 20px;
                        font-family: Roboto;
                        z-index: 999999999999999999;
                        color: #FFF;
                        border: solid 1px #7b7b7b;
                    '>
                        Salir de modificar reserva
                    </a>
                ";
            }
        }

        echo comprimir_styles($HTML);
    
        wp_footer();

        echo "</body></html>";
?>
        
