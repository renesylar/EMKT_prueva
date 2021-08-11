<?PHP
//////////////////////////////////////////////
// Sistema somos-emkt, index page.          //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 4   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Moderna Bootstrap Template - Index 2 without slider</title>


        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">

        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">


    </head>

    <body>
       
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-transparent">
            <?PHP include_once './header.php'; ?>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

                <!-- Slide 1 -->
                <div class="carousel-item active">


                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>EMKT</span></h2>
                        <img src="../assets/img/slider_img_1.png" height="130"/>                        
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Leer mas</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Leer mas</a>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section><!-- End Hero -->

        <main id="main">


            <!-- ======= Features Section ======= -->
            <section class="features">
                <div class="container">

                    <div class="section-title">
                        <h2>Nuestros servicios</h2>
                        <p>Trabajamos con marcas que están decididas a separarse del montón y diferenciarse con una base estratégica sólida, que les permitan construir negocios escalables, prósperos y automatizados en un mercado digital cada vez más saturado.

                            Nuestras soluciones estratégicas y técnicas están basadas en más de 10 años de experiencia acumulada en el mundo digital. Hemos vivido en carne propia la evolución digital y hemos creado un método único, transformador y replicable en más de 1,000 marcas.</p>
                    </div>
                    <br>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-4">
                            <h3>EMKT CONSULTING</h3>
                            <img src="../assets/img/features-4.svg" class="img-fluid" alt="">

                            <p class="font-italic">
                                Nuestra división de consultoría está diseñada para ti que eres un empresario serio y con un camino recorrido, 
                                que has incursionado en el mundo digital, pero que sientes la frustración de haber trabajado con múltiples proveedores 
                                que no te generan los resultados que buscas. 

                            </p>

                            <ul>
                                <li><i class="icofont-check"></i> Consultorías de estrategia de ventas y persuasión digital</li>
                                <li><i class="icofont-check"></i> Consultorías de estrategia de marketing digital</li>
                                <li><i class="icofont-check"></i> Consultoría estratégica de automatización de negocios digitales</li>
                                <li><i class="icofont-check"></i> Consultoría estratégica de marca personal</li>

                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <h3>¿COMO TRANSFORMAMOS TU NEGOCIO?</h3>
                            <p class="font-italic">
                                Contamos con el mejor equipo tecnico calificado, para hacer de tu empresa propere, encaminada hacia tus metas
                            </p>

                            <ul>
                                <li><i class="icofont-check"></i> Consultoria de Marketing Digital.</li>
                                <li><i class="icofont-check"></i> Desarrollo de tecnilogias y automatizacion.</li>
                                <li><i class="icofont-check"></i> Proyectos audiovisuales y multimedia.</li>
                                <li><i class="icofont-check"></i> Consultoria de ventas y presuacion digital.</li>
                                <li><i class="icofont-check"></i> Proyectos creativos y de branding.</li>
                                <li><i class="icofont-check"></i> Gestion de social media.</li>
                            </ul>
                            <img src="../assets/img/features-2.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 pt-4">
                            <h3>¿QUIENES HAN CONFIADO
                                EN NOSOTROS?</h3>
                            <img src="../assets/img/features-3.svg" class="img-fluid" alt="">

                            <p class="font-italic">
                                En EMKT encuentras una extensión estratégica para tu negocio, porque cuidamos cada detalle y diseñamos, construimos y ejecutamos estrategias diferenciadoras con resultados reales. 
                                Nos ponemos en tus zapatos y sabemos la importancia de que cada centavo invertido se multiplique en ganancias y crecimiento desmedido para tu negocio. 
                                Nos sentimos orgullosos de ayudar a más de 1,000 empresarios a prosperar y queremos lograr lo mismo contigo..
                            </p>


                        </div>
                    </div>


                </div>
            </section><!-- End Features Section -->

            <section class="features">
                <div class="container">

                    <div class="section-title">

                        <div class="row" data-aos="fade-up">
                            <div class="col-md-7">
                                <img src="../assets/img/features-1.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-5 pt-4">
                                <h2>Trabaja con nosotros</h2>
                                <p>Si te interesa ser parte de nuestro equipo, llena la suguiente solictud</p>
                                <hr>
                                <button onclick="showLogIn()" class="btn btn-outline-primary">Toca aqui para agregar solicitud de empleo</button>

                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Features Section -->

        </main><!-- End #main -->
        <!-- ======= modal Section ======= -->
        <div class="modal fade fill-in" id="modalLogIn" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="pg-close"></i>
            </button>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center"> <img src="../assets/img/logo.png" alt="logo" height="45" width="100">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <div align="justify">
                            <div class="">
                                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                                    <h5>Solucitud de empleo</h5>


                                    <form action="../Controllers/RequestRegistrer.php" method="POST" enctype="multipart/form-data">
                                        <label>Nombres: </label>
                                        <div class="controls">
                                            <input type="text" id="usuario" name="name" placeholder="Nombres" class="form-control"  autocomplete="off" required />
                                        </div>
                                        <br>
                                        <label>Apellidos: </label>
                                        <div class="controls">
                                            <input type="text" id="usuario" name="last" placeholder="Apellidos" class="form-control" required autocomplete="off"/>
                                        </div>
                                        <br>
                                        <label>Edad: </label>
                                        <div class="controls">
                                            <input type="number" id="usuario" name="age" placeholder="Apellidos" value="18" class="form-control" required min="18" max="99"/>
                                        </div>
                                        <br>
                                        <label>Correo: </label>
                                        <div class="controls">
                                            <input type="email" id="usuario" name="email" placeholder="Correo" class="form-control" required autocomplete="off"/>
                                        </div>
                                        <br>
                                        <label>Habilidad tecnica: </label>
                                        <div class="controls">
                                            <div class="dropdown">
                                                <select class="form-control"  name="hability"aria-label=".form-select-sm example">
                                                    <option selected>Seleccione una habilidad</option>
                                                    <option value="PHP">PHP</option>
                                                    <option value="HTML">HTML</option>
                                                    <option value="CSS">CSS</option>
                                                    <option value="LARAVEL">LARAVEL</option>
                                                    <option value="JAVA">JAVA</option>
                                                    <option value="JS">JS</option>
                                                    <option value="ANGULAR">ANGULAR</option>
                                                    <option value="NODE">NODE</option>
                                                    <option value="LINUX">LINUS</option>
                                                    <option value="SERVIDORES">SERVIDORES</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <p>Su solicutud sera recibida y se le notificara por correo electronico. </p>
                                        </div>


                                        <br />
                                        <input type="submit" name="submit" class="btn btn-primary btn-cons m-t-10" value="Registrar" onclick="validar();" /><br /><br />
                                        <h4 id="msgError" class="text-danger bold font-montserrat"></h4>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
        </div>
        <!-- End modal -->
        <!-- ======= Footer ======= -->
        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <?PHP include_once './footer.php'; ?>

        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/venobox/venobox.min.js"></script>
        <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="../assets/vendor/counterup/counterup.min.js"></script>
        <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>
        <!-- Template form JS File -->
        <script src="../assets/js/form-modal.js"></script>
    </body>
 <?php
        if (isset($_GET['mess'])) {

            if ($_GET['mess'] == 'done') {
                echo '<script>window.alert("Gracias por registrarte, pronto nos contactaremos contigo!");</script>';
            } elseif ($_GET['mess'] == 'error') {
                echo '<script>window.alert("Oh no! Parece que tenemos problemas en guardar tus datos, pueva intentando mas tarde");</script>';
            }
        }
        ?>
</html>

