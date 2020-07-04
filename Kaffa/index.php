<?php include("bd/conexion.php")?>
<?php include("includes/header.php")

?>


<!-- Recibiendo msjs de estado  -->
<?php if(isset($_SESSION['message'])) { ?>
<div class="alert alert-<?= $_SESSION['message_type'];?>
                alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php session_unset(); } ?>
<!--  FIN Recibiendo msjs de estado  -->
<!-- Recibinedo datos de el inicio de sesion -->
<?php
if (isset($_POST['subSesion'])) {
    $email = $_POST['emailS'];
    $contra = $_POST['contrasennaS'];


    $con = "SELECT * FROM tbl_users WHERE email='$email' AND contrasenna='$contra' AND estado='1'";
    $result = mysqli_query($conexion, $con);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $estado = $row['estado'];
        $nombreS = $row['nombre'];
        
        if ($estado == '1') {
            session_start();
            $_SESSION['emailS'] = $_POST['emailS'];
            $_SESSION['nombreS'] = $nombreS." ".$row['ap']." ".$row['am'];
            header('Location: user/inicio.php');
        }
        
    }
}
?>
<!--  FIN Reciobinedo datos de el inicio de sesion -->
<!--Recibiendo usuario inexistente (boton Iniciar Sesion)-->
<?php
    if (isset($_POST['subSesion'])) {
        $emailE = $_POST['emailS'];
        echo "<div class='alert alert-danger' align='center'>
          <button class='close' data-dismiss='alert'>X</button>
          <strong>No existe niiguna cuenta con el correo electrónico: ".$emailE."</strong>
          </div> ";
          
    }?>
<!-- FIN Recibiendo usuario inexistente (boton Iniciar Sesion)-->



<body>
    <!--============Menu de navegación ============-->
    <div class="headerwrapper">
        <div id="header" class="container">
            <div class="logo"> <a href="index.php"><img src="assets/images/LOGOKF.png" alt="logo" width="165"
                        height="74"></a> </div>
            <!--Logo de KF-->
            <nav>
                <ul>
                    <li><a href="#navigations">INICIO</a></li>
                    <li> <a href="#slider">QUIENES SOMOS</a></li>
                    <li><a href="#map">UBICACIÓN</a></li>
                    <li><a href="#bestdishes">MENÚ</a></li>
                    <li><a href="#contactus">CONTACTO</a></li>

                    <li> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#iniciaSesion">
                            Iniciar Sesión</button></li>
                    <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#registrarse">
                            Registrarse</button></li>

                </ul>
            </nav>
        </div>
        <!--Fin de header-->
    </div> <!-- Fin de Estilo header-->

    <!-- ventana modal iniciar sesión. -->
    <div class="modal fade" id="iniciaSesion" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="POST" id="frmSesion" name="frmSesion">
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-md-12">
                                <label for="emailS" class="d-flex justify-content-center">Correo electrónico</label>
                                <input type="email" name="emailS" class="form-control" id="emailS" required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-md-10">
                                <label for="contrasennaS" class="d-flex justify-content-center">Contraseña</label>
                                <input type="password" name="contrasennaS" class="form-control" id="contrasennaS"
                                    required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class=" col-md-12 btn btn-success" id="subSesion"
                                    name="subSesion">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="dropdown-item" data-toggle="modal" href="#registrarse">¿Nuevo en Kaffa Café?
                        ¡Registrate!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ventana modal registrarse. -->
    <div class="modal fade" id="registrarse" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Registrarse / Kaffa Café</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Class/reg_users.php" method="POST" id="frmRegistro" name="frmRegistro">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ap">Apellido paterno</label>
                                <input type="text" name="ap" class="form-control" id="ap" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="am">Apellido materno</label>
                                <input type="text" name="am" class="form-control" id="am" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="num_tel">Núm. Télefonico</label>
                                <input type="text" name="num_tel" class="form-control" id="num_tel" maxlength="10"
                                    required onkeypress='return validaNumericos(event)' />
                            </div>
                            <div class="form-group col-md-8">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="contrasenna">Contraseña</label>
                                <input type="password" name="contrasenna" class="form-control" id="contrasenna"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contrasenna2">Confirmar Contraseña</label>
                                <input type="password" name="contrasenna2" class="form-control" id="contrasenna2"
                                    required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" id="subReg" name="subReg"
                            onclick="validaContra()">Registrarse</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Registro</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

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
                        <img src="assets/images/Capturaas.PNG" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slide1img">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">¡Siéntete como en casa! </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Tenemos la idea de que tú mereces la mejor
                            estancia, mientras te encuentres dentro de Kaffa café queremos
                            que te sientas libre y cómodo estando con nosotros, nos complace ofrecerte un sitio donde te
                            pases un momento alegre.
                        </p>
                        <img src="assets/images/slide2.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Tenemos todo lo que buscas </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Deliciosos postres, exquisitos bizcochos,
                            panecillos, galletas y alguna otra delicia más que se
                            necesita para disfrutar de un rico café calientito o una maravillosa malteada, disfruta de
                            Kaffa Café y sus productos.</p>
                        <img src="assets/images/slide3.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                </ul>
            </div>
        </div> <!-- Fin fotos-->
    </div> <!-- Fin Slider de Fotos-->



    <!--============ Conoce Kaffa cafe ============-->



    <div class="bestdisheswrapper">
        <div id="bestdishes" class="container">

            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Conoce Kaffa Café</h2>
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="assets/images/lugar1.png" width="226" height="225" alt="sliderimg"
                                class="wow flipInX" data-wow-delay=".8s">
                            <h3>PASATELA</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="assets/images/lugar2.png" width="226" height="225" alt="sliderimg"
                                class="wow flipInX" data-wow-delay=".8s">
                            <h3>DE</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="assets/images/lugar3.png" width="226" height="225" alt="sliderimg"
                                class="wow flipInX" data-wow-delay=".8s">
                            <h3>MARAVILLA</h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="assets/images/lugar4.png" width="226" height="225" alt="sliderimg">
                            <h3>Pasa</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="assets/images/lugar3.png" width="226" height="225" alt="sliderimg">
                            <h3>Momentos</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="assets/images/lugar1.png" width="226" height="225" alt="sliderimg">
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
            <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Inicia Sesión para realizar una reservación.</h3>
            <form>
                <button type="button" class="booknow wow fadeInUp" data-toggle="modal" data-target="#iniciaSesion">
                    Reservar ahora </button>
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
                    <li><img src="assets/images/menu1.jpeg" width="163" height="163" class="myimage wow fadeIn"
                            title="mido" alt="1">
                    </li>
                    <li><img src="assets/images/menu2.jpeg" width="163" height="163" class="myimage2 wow fadeIn"
                            data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="assets/images/menu3.jpeg" width="163" height="163" class="myimage3 wow fadeIn"
                            data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="assets/images/menu4.jpeg" width="163" height="163" class="myimage4 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                    <li><img src="assets/images/menu5.jpeg" width="163" height="163" class="myimage5 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                    <li><img src="assets/images/menu6.jpeg" width="163" height="163" class="myimage6 wow fadeIn" alt="1"
                            data-wow-delay="0.8s"></li>
                </ul>

            </div>
            <!-- Fin Nuestro Menú -->

            <img src="assets/images/logo_menu.png" width="486" height="137" class="firstpop" alt="pop">
            <img src="assets/images/logo_menu.png" width="487" height="137" class="secondpop" alt="pop">
            <img src="assets/images/logo_menu.png" width="487" height="137" class="thirdpop" alt="pop">
            <img src="assets/images/logo_menu.png" width="487" height="137" class="fourthpop" alt="pop">
            <img src="assets/images/logo_menu.png" width="487" height="137" class="fifthpop" alt="pop">
            <img src="assets/images/logo_menu.png" width="487" height="137" class="sixthpop" alt="pop">


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
                            src="assets/images/fb.png" width="68" height="68" class="facebook" alt="fb"></a>
                    <a href="https://www.google.com/maps/place/Kaffa+Caf%C3%A9/@19.6306588,-99.1412981,17z/data=!4m10!1m2!2m1!1skaffa+cafe!3m6!1s0x0:0xa375b9e86c91c187!8m2!3d19.6306638!4d-99.139123!9m1!1b1"
                        target="_blank">
                        <img src="assets/images/g+.png" width="68" height="68" class="google" alt="g+"></a>
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
            <p>Kaffa Café <a href="https://www.facebook.com/Real-de-Kaffa-caf%C3%A9-109155183987833" target="_blank">
                    Página de Facebook
                </a>...</p>

        </div> <!-- Fin de banner de Face-->
    </div> <!-- Fin de HTML5-->
    <div class="fixedsocial">
        <a href="https://www.facebook.com/Real-de-Kaffa-caf%C3%A9-109155183987833" target="_blank">
            <img src="assets/images/facebook.png" width="20" height="20" alt="fb"> </a>
        </a>
    </div>

    <!--SCRIPTS Jquery -->
    <script type="text/javascript">
        $('.sliderwrapper .slider').glide({
            autoplay: 7000,
            animationDuration: 3000,
            arrows: true,



        });

        function validaNumericos(event) {
            if (event.charCode >= 48 && event.charCode <= 57) {
                return true;
            }
            return false;
        }
    </script>
    <script type="text/javascript">
        function validaContra() {
            frmRegistro
            var p1 = document.frmRegistro.contrasenna.value;
            var p2 = document.frmRegistro.contrasenna2.value;
            if (p1 == p2) {
                document.frmRegistro.submit();
            } else {
                document.getElementById("contrasenna").value = "";
                document.getElementById("contrasenna2").value = "";
                alert("Las contraseñas no coinciden.");


            }
        }
    </script>

    <script type="text/javascript">
        $('.bestdisheswrapper .slider').glide({
            autoplay: false,
            animationDuration: 700,
            arrows: true,
            navigation: false,



        });
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>



</body>

</html>