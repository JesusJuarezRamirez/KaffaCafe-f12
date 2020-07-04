<?php include("../includes/headeru.php")?>
<?php include("../bd/conexion.php")?>


<?php 
#mantener session abierta
if (!isset($_SESSION)) {
    session_start();
}


$emailS = $_SESSION['emailS'];
$nombreS = $_SESSION['nombreS'];
if(isset($_SESSION['emailS'])) { 
   /*echo $emailS.$nombreS;*/
    ?>
<?php  } ?>

<body>

    <!--============Menu de navegación ============-->

    <div class="headerwrapper">
        <div id="header" class="container">
            <div class="logo"> <a href="inicio.php"><img src="../assets/images/LOGOKF.png" alt="logo" width="165" height="74"></a> </div>
            <!--Logo de KF
                agregar despues fase 3  <p><?php //echo $nombreS; ?></p>-->
            
            <nav>
                <ul id="navigations">
                    
                    <li><a href="#navigations">INICIO</a></li>
                    <li> <a href="#slider">QUIENES SOMOS</a></li>
                    <li><a href="#map">UBICACIÓN</a></li>
                    <li><a href="#bestdishes">MENÚ</a></li>
                    <li><a href="#contactus">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
        <!--Fin de header-->
    </div> <!-- Fin de Estilo header-->



    <!--============ Slider de Fotos ============-->


    <div class="sliderwrapper">
        <div id="slider" class="container">
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Disfruta de nuestras mejores malteadas </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">En el establecimiento Kaffa Café, estamos
                            completamente comprometidos contigo, de que tengas las confianza
                            de venir, relajarte, despreocuparte, ver, pedir y disfrutar de nuestro increible servicio. Y
                            que mejor que puedas hacer y realizar tus actividades
                            tomando una deliciosa malteada de café helado. ¡Atrévete a probar!
                        </p>
                        <img src="../assets/images/Capturaas.PNG" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slide1img">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">¡Siéntete como en casa! </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Tenemos la idea de que tú mereces la mejor
                            estancia, mientras te encuentres dentro de Kaffa café queremos
                            que te sientas libre y cómodo estando con nosotros, nos complace ofrecerte un sitio donde te
                            pases un momento alegre.
                        </p>
                        <img src="../assets/images/slide2.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Tenemos todo lo que buscas </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Deliciosos postres, exquisitos bizcochos,
                            panecillos, galletas y alguna otra delicia más que se
                            necesita para disfrutar de un rico café calientito o una maravillosa malteada, disfruta de
                            Kaffa Café y sus productos.</p>
                        <img src="../assets/images/slide3.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                </ul>
            </div>
        </div> <!-- End of Slider-->
    </div> <!-- end of sliderwrapper-->



    <!--============ Conoce Kaffa cafe ============-->



    <div class="bestdisheswrapper">
        <div id="bestdishes" class="container">

            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Conoce Kaffa Café</h2>
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="../assets/images/lugar1.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>PASATELA</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="../assets/images/lugar2.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>DE</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="../assets/images/lugar3.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>MARAVILLA</h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="../assets/images/lugar4.png" width="226" height="225" alt="sliderimg">
                            <h3>Pasa</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="../assets/images/lugar3.png" width="226" height="225" alt="sliderimg">
                            <h3>Momentos</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="../assets/images/lugar1.png" width="226" height="225" alt="sliderimg">
                            <h3>Increíbles</h3>
                        </div> <!-- end of item-->
                    </li>
                </ul>
            </div> <!-- Fin de Conoce kaffa cafe -->
        </div>
    </div> <!-- Fin de fotos -->

    <!--============ Reservar ============-->

    <div class="bookonlinewrapper">
        <div class="container" id="bookonline">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Reservación.</h3>
            <form>
                <input type="text" class="name wow zoomIn"  name="nombreR" value="<?php echo $nombreS; ?>">
                <input type="text" class="email wow zoomIn"  name="emailR" value="<?php echo $emailS; ?>">
                <input type="text" class="to wow zoomIn" placeholder="Fehca: (dd-mm-aaaa)">
                <input type="number" class="persons wow zoomIn" placeholder="Número de personas">



                <button disabled class="booknow wow fadeInUp"> Reservar ahora </button>

            </form>


        </div>
    </div> <!-- Fin de Reservar-->



    <!--============ MAPA ============-->

    <div class="mapwrapper">
        <div id="map" class="container">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250.6395337340266!2d-99.13920111044482!3d19.630562600855246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa375b9e86c91c187!2sKaffa%20Caf%C3%A9!5e0!3m2!1ses-419!2seg!4v1593323422809!5m2!1ses-419!2seg"
                class="googlemap"></iframe>


        </div> <!-- Fin de mapa -->

    </div> <!-- Fin de Div para mapa-->



    <!--============ Nuestro Menú ============-->


    <div class="contactwrapper">
        <div id="contactus" class="container">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">Menú Semanal</h3>
            <div class="staff">
                <ul>
                    <li><img src="../assets/images/menu1.jpeg" width="163" height="163" class="myimage wow fadeIn" title="mido"
                            alt="1">
                    </li>
                    <li><img src="../assets/images/menu2.jpeg" width="163" height="163" class="myimage2 wow fadeIn"
                            data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="../assets/images/menu3.jpeg" width="163" height="163" class="myimage3 wow fadeIn"
                            data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="../assets/images/menu4.jpeg" width="163" height="163" class="myimage4 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                    <li><img src="../assets/images/menu5.jpeg" width="163" height="163" class="myimage5 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                    <li><img src="../assets/images/menu6.jpeg" width="163" height="163" class="myimage6 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                </ul>

            </div>
            <!-- Fin Nuestro Menú -->

            <img src="../assets/images/logo_menu.png" width="486" height="137" class="firstpop" alt="pop">
            <img src="../assets/images/logo_menu.png" width="487" height="137" class="secondpop" alt="pop">
            <img src="../assets/images/logo_menu.png" width="487" height="137" class="thirdpop" alt="pop">
            <img src="../assets/images/logo_menu.png" width="487" height="137" class="fourthpop" alt="pop">
            <img src="../assets/images/logo_menu.png" width="487" height="137" class="fifthpop" alt="pop">
            <img src="../assets/images/logo_menu.png" width="487" height="137" class="sixthpop" alt="pop">


        </div>
        <!--Fin de logo KC-->
    </div> <!-- Fin de sección Menú -->


    <!--============ FOOTER (pie de pag) ============-->


    <div class="footerwrapper">
        <footer class="container">
            <div class="customerreview">
                <h2>Comentarios de clientes</h2>
                <div class="review">
                    <p><strong>&#8220; Buena comida, precios económicos, excelente atención y ambiente tranquilo.
                        </strong>
                        <strong>&#8221; </strong></p>

                    <h4>- Reseña tomada de Google</h4>


                </div> <!-- Reseña -->

                <div class="clearfix"></div>
                <div class="line"></div>

                <div class="review">
                    <p><strong>&#8220; Es un lugar muy agradable, excelente atención, muy rica la comida y buenos
                            precios. </strong>
                        <strong>&#8221;</strong></p>

                    <h4>- Reseña tomada de Google</h4>
                </div> <!-- Reseña -->





            </div>
            <div class="socialize">

                <h2>Redes sociales</h2>
                <div class="socialimgs">
                    <a href="https://www.facebook.com/Real-de-Kaffa-caf%C3%A9-109155183987833" target="_blank"><img
                            src="../assets/images/fb.png" width="68" height="68" class="facebook" alt="fb"></a>
                    <a href="https://www.google.com/maps/place/Kaffa+Caf%C3%A9/@19.6306588,-99.1412981,17z/data=!4m10!1m2!2m1!1skaffa+cafe!3m6!1s0x0:0xa375b9e86c91c187!8m2!3d19.6306638!4d-99.139123!9m1!1b1"
                        target="_blank">
                        <img src="../assets/images/g+.png" width="68" height="68" class="google" alt="g+"></a>
                </div>
                <!--Fin de Redes sociales-->
            </div>


            <div class="sendfeedback">
                <h2>Buzón de sugerencias</h2>
                <form>
                    <h6>Tu nombre:</h6>
                    <input type="text" class="yourname">
                    <h6>Número de teléfono:</h6>
                    <input type="text" class="mobilenumber">
                    <h6>Mensaje:</h6>
                    <textarea></textarea>

                    <button>Enviar </button>



                </form>

            </div> <!-- Fin de Buzón -->
        </footer> <!-- Fin Pie de pagina-->
    </div> <!-- Fin estructura de pie de pagina -->




    <!--============ Banner de facebook, pruebaaaa ============-->
    <div class="copyrightswrapper">
        <div id="copyrights" class="container">
            <p>Kaffa Café <a href="https://www.facebook.com/Real-de-Kaffa-caf%C3%A9-109155183987833" target="_blank"> Página de Facebook
                </a>...</p>

        </div> <!-- Fin de banner de Face-->
    </div> <!-- Fin de HTML5-->
    <div class="fixedsocial">
        <a href="https://www.facebook.com/Real-de-Kaffa-caf%C3%A9-109155183987833" target="_blank"><img src="../assets/images/facebook.png"
                width="20" height="20" alt="fb"> </a>
        </a>
    </div>

    <!--SCRIPTS Jquery obvmente-->
    <script type="text/javascript">
        $('.sliderwrapper .slider').glide({
            autoplay: 7000,
            animationDuration: 3000,
            arrows: true,



        });
    </script>

    <script type="text/javascript">
        $('.bestdisheswrapper .slider').glide({
            autoplay: false,
            animationDuration: 700,
            arrows: true,
            navigation: false,



        });
    </script>




</body>

</html>