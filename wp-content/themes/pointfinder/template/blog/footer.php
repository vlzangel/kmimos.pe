<style>
    /*FOOTER*/
    footer{}
    footer.wpf-footer{display:none;}
    footer .contact{ padding: 20px 0; background: #ededed;}
    footer .contact .group{display: flex; flex-flow: wrap; /*align-items: center;*/}
    footer .contact .section{width: 28%;}
    footer .contact .section.redes{width: 16%;}
    footer .contact .section.redes .icon{ width: 40px; margin:5px 0; padding:10px; color: #FFF; font-size: 20px; text-align: center; border-radius: 50%; cursor: pointer; background: #23d3c4; display: block;}
    footer .contact .section .item{padding: 5px 0; font-size: 15px;}
    footer .contact .section .item a{color: #555;}
    footer .contact .section .item a.kmimos{color: #0992a3;}
    footer .contact .section .item.title{ font-size: 15px; font-weight: bold;}

    footer .payment{ padding: 20px 0; background: #FFF;}
    footer .payment .group{display: flex; flex-flow: wrap; align-items: center;}
    footer .payment .section{ }
    footer .payment .title{ width: 30%; font-size: 20px; font-weight: bold;}
    footer .payment .items{ width: 70%;}
    footer .payment .items .title{width: 30%;}
    footer .payment .items .item{width: calc(15% - 20px); margin: 10px; padding-top: 5%;  background: #FFF center/contain no-repeat; display: inline-block;}

    footer .payment .items.efectivo .item{width: 10%; padding-top: 10%;}
    footer .payment .items.efectivo.title{width: 30%;}    /* width: 30%; */
    footer .payment .items.efectivo.title .item{width: 100%; max-width: 150px; height: 70px; padding: 0;}

    footer .info{ padding: 10px;  color: #FFF; font-size: 20px; text-align: center; background: #23d3c4; }


    @media screen and (max-width:768px), screen and (max-device-width:768px){}
    @media screen and (max-width:480px), screen and (max-device-width:480px){
        footer .contact .group{display: block;}
        footer .contact .section{width: auto; margin: 10px 20px;}
        footer .contact .section.redes{width: auto; text-align: center;}
        footer .contact .section.redes .icon{display: inline-block;}

        footer .payment .group{display: block; text-align: center;}
        footer .payment .title{width: auto;}
        footer .payment .items{width: auto;}
        footer .payment .items.efectivo .item{width: 20%; padding-top: 10%;}
        footer .payment .items.efectivo.title{width: auto;}

        /* RESPONSIVE SUGERIDO
        footer .contact .section {margin: 0px 0 0 60px;}
        footer .contact .section.redes{position: absolute; width: 50px; left: 0; top: 0; margin: 0px;}
        footer .payment .items .item{width: calc(25% - 20px);}
        */
    }
</style>
        <footer id="footer">
            <div class="contact">
                <div class="group contain">
                    <div class="section redes">
                        <a href="https://www.facebook.com/Kmimosmx/" target="_blank"><i class="icon phone fa fa-facebook"></i></a>
                        <a href="https://twitter.com/kmimosmx/" target="_blank"><i class="icon phone fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/kmimosmx/" target="_blank"><i class="icon phone fa fa-instagram"></i></a>
                    </div>
                    <div class="section menu">
                        <div class="item title">Acerca De Nosotros</div>
                        <div class="item"><a href=""></a>¿Quiénes somos?</div>
                        <div class="item"><a href="<?php echo site_url(); ?>/contacta-con-nosotros/" target="_blank">Contáctenos</a></div>
                        <div class="item">¡Estamos contratando!</div>
                        <div class="item"><a href="<?php echo site_url(); ?>/blog/" target="_blank">Blogs</a></div>
                        <div class="item">¡GANA DINERO! Recomiéndanos a tus amigos</div>
                    </div>
                    <div class="section menu">
                        <div class="item title">Politicas</div>
                        <div class="item">Pagos en efectivo</div>
                        <div class="item">Privacidad</div>
                        <div class="item">Políticas de facturación</div>
                        <div class="item"><a href="<?php echo site_url(); ?>/terminos-y-condiciones/" target="_blank">Términos y Condiciones de Uso</a></div>
                    </div>
                    <div class="section menu">
                        <div class="item title">Servicio al cliente</div>
                        <div class="item">Preguntas Frecuentes - Ayuda</div>
                    </div>
                </div>
            </div>
            <div class="payment">
                <div class="group contain">
                    <div class="section items efectivo title">
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/PROPUESTA-ALTERNA-PAG-1-02-2.jpg');"></div>
                    </div>
                    <div class="section items efectivo">
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-03.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-01.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-04.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-02.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-05.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-07-1.jpg');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/para-programación-pago-en-efectivo-06-1.jpg');"></div>
                    </div>
                </div>
                <div class="group contain">
                    <div class="section title">Métodos de Pago</div>
                    <div class="section items">
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-08.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/MasterCard_early_1990s_logo.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/banco-santander.gif');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-11.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-12.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-13.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/ixe-e1500047984369.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-15.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-16.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/07/American_Express_icon-icons.com_60519-e1500047707828.png');"></div>
                        <div class="item" style="background-image: url('https://www.kmimos.com.mx/wp-content/uploads/2017/06/Para-blog-07.png');"></div>
                        <!--div class="item" style="background-image: url('');"></div-->
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="contain">
                    Copyright &copy; 2017 <span class="logo"></span> Todos Los Derechos Reservados.<br>
                    <!-- Importante! <span class="logo"></span> es una tienda únicamente en línea, por lo cual no contamos con tienda física .<br> -->
                    Oficinas Corporativas: Bosque de Duraznos 65, Bosque de las Lomas Miguel Hidalgo, México, D.F. C.P. 11700
                </div>
            </div>
        </footer>
        <?php
        //wp_footer();
        get_footer();
        ?>
    </body>
</html>
