<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Refrigeración Raymondi, con más de 30 años de experiencia. Ubicados en Buenos Aires, Zona Norte.
     Ofrecemos soluciones integrales en una amplia gamma de equipos de refrigeración, incluyendo instalación, mantenimiento y reparación.
      Nos adaptamos a las necesidades de cada cliente para proporcionar un servicio de alta calidad.">
    <title>Refrigeración Raymondi</title>
    <link rel="icon" type="image/jpg" href="./assets/imgs/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/general.css?v3">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5FDH2B841G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5FDH2B841G');
    </script>
</head>

<body>
    <main class="container-fluid">

        <nav class="row" id="contact-links">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <ul>
                    <li>Servicios de refrigeración</li>
                    <li class="copy-clipboard">
                        <i class="fa-solid fa-phone"></i><?php echo $phone ?>
                    </li>
                    <li class="copy-clipboard">
                        <i class="fa-solid fa-envelope"></i>raymondirefrigeracion@gmail.com
                    </li>
                    <li>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $phone ?>&text=<?php echo $web_presentation ?>">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/refrigeracionraymond1/">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/refrigeracionraymondi/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.tiktok.com/@refrigeracionraymondi">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <nav class="row" id="menu">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <ul>
                    <li class="logo">
                        <a href="#header-nav">
                            <h1>
                                <span>Refrigeración</span>
                                <span>Raymondi</span>
                            </h1>
                        </a>
                    </li>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#video">Videos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>

        <div class="row" id="inicio">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <img src="./assets/imgs/bg-2.webp" alt="">
                <div class="home-text">
                    <p>INSTALACIÓN
                        MANTENIMIENTO
                        Y REPARACIÓN</p>
                    <p>+30 años de experiencia en el rubro.</p>
                </div>
            </div>
        </div>

        <div class="row" id="servicios">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <div class="services-titles">
                    <p>Servicio de soluciones integrales en equipos de refrigeración</p>
                    <p>Asesoramiento de acuerdo a las necesidades de cada cliente.</p>
                </div>
                <ul>
                    <li>
                        <div>
                            <img class="img-fluid" src="./assets/imgs/services-1.webp" alt="">
                        </div>
                        <p>Instalación</p>
                        <p>Brindamos un servicio que incluye la instalación de una amplia gama de equipos de refrigeración.</p>
                    </li>
                    <li>
                        <div>
                            <img class="img-fluid" src="./assets/imgs/services-2.webp" alt="">
                        </div>
                        <p>Mantenimiento</p>
                        <p>Disponemos de un servicio completo de mantenimiento y cuidado para todo tipo de equipos.</p>
                    </li>
                    <li>
                        <div>
                            <img class="img-fluid" src="./assets/imgs/services-3.webp" alt="">
                        </div>
                        <p>Reparación y/o modificación</p>
                        <p>Enfrentamos desafíos y brindamos soluciones para mantener tu equipo en excelentes condiciones.</p>
                    </li>
                </ul>
                <hr>
            </div>
        </div>

        <div class="row" id="detalle">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <p>¡Gracias por elegirnos!</p>
                <p>Servicios de precisión para un óptimo rendimiento</p>
            </div>
        </div>

        <div class="row" id="videos">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">

                <div class="row video" id="video">
                    <div class="col-md-6 col-12">
                        <blockquote class="tiktok-embed" title="Tiktok video" cite="https://www.tiktok.com/@refrigeracionraymondi/video/7299099743601413381" data-video-id="7299099743601413381" style="max-width: 605px;min-width: 325px;">
                            <section title="Primer tiktok"> <a target="_blank" title="@refrigeracionraymondi" href="https://www.tiktok.com/@refrigeracionraymondi?refer=embed">@refrigeracionraymondi</a> El mejor de los mejores mostrándonos este hermoso trabajo 😎 <a title="refrigeracion" target="_blank" href="https://www.tiktok.com/tag/refrigeracion?refer=embed">#refrigeracion</a> <a title="refrigerator" target="_blank" href="https://www.tiktok.com/tag/refrigerator?refer=embed">#refrigerator</a> <a title="tecnico" target="_blank" href="https://www.tiktok.com/tag/tecnico?refer=embed">#tecnico</a> <a title="tecnicorefrigeracion" target="_blank" href="https://www.tiktok.com/tag/tecnicorefrigeracion?refer=embed">#tecnicorefrigeracion</a> <a title="fy" target="_blank" href="https://www.tiktok.com/tag/fy?refer=embed">#fy</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="fypシ" target="_blank" href="https://www.tiktok.com/tag/fyp%E3%82%B7?refer=embed">#fypシ</a> <a target="_blank" title="♬ sonido original - Refrigeración Raymondi" href="https://www.tiktok.com/music/sonido-original-7299099762593614597?refer=embed">♬ sonido original - Refrigeración Raymondi</a> </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                    <div class="col-md-6 col-12 descripcion">
                        <p>¡Estamos en TikTok!</p>
                        <p>¡Seguinos para ver nuestros trabajos!</p>
                        <p>Este video muestra de forma sencilla como procedemos con la instalación de un equipo. En este caso es un hermoso Samsung inverter al cual se lo documentó mostrando como fue el fin del proceso tanto de la unidad interior como exterior.</p>
                        <button><a href="https://www.tiktok.com/@refrigeracionraymondi" target="_blank">Ver perfil</a></button>
                    </div>
                </div>

                <div class="row video">
                    <div class="col-md-6 col-12">
                        <blockquote class="tiktok-embed" title="Tiktok video" cite="https://www.tiktok.com/@refrigeracionraymondi/video/7299101450901130502" data-video-id="7299101450901130502" style="max-width: 605px;min-width: 325px;">
                            <section title="Segundo tiktok"> <a target="_blank" title="@refrigeracionraymondi" href="https://www.tiktok.com/@refrigeracionraymondi?refer=embed">@refrigeracionraymondi</a> Hallazgo de pérdida y solución 🥳 <a title="refrigeracion" target="_blank" href="https://www.tiktok.com/tag/refrigeracion?refer=embed">#refrigeracion</a> <a title="refrigerator" target="_blank" href="https://www.tiktok.com/tag/refrigerator?refer=embed">#refrigerator</a> <a title="tecnico" target="_blank" href="https://www.tiktok.com/tag/tecnico?refer=embed">#tecnico</a> <a title="tecnicorefrigeracion" target="_blank" href="https://www.tiktok.com/tag/tecnicorefrigeracion?refer=embed">#tecnicorefrigeracion</a> <a title="fy" target="_blank" href="https://www.tiktok.com/tag/fy?refer=embed">#fy</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="fypシ" target="_blank" href="https://www.tiktok.com/tag/fyp%E3%82%B7?refer=embed">#fypシ</a> <a target="_blank" title="♬ sonido original - Refrigeración Raymondi" href="https://www.tiktok.com/music/sonido-original-7299101473133251333?refer=embed">♬ sonido original - Refrigeración Raymondi</a> </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                    <div class="col-md-6 col-12 descripcion">
                        <p>¡Todo tipo de trabajos!</p>
                        <p>Instalaciones, nofrost a analógicos y mucho más.</p>
                        <p>En este video podemos ver como luego de hayar una pérdida se realizan todos los pasos siguientes para poder repararla y luego volver a cargar el gas.</p>
                        <button><a href="https://www.tiktok.com/@refrigeracionraymondi/video/7299101450901130502" target="_blank">Ver en TikTok</a></button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" id="marcas">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 text-center">
                <h2>Algunas de las marcas con las que trabajamos</h2>
                <ul>
                    <li class="samsung"><img class="img-fluid" src="./assets/imgs/marca-samsung.webp" alt="Icono Samsung"></li>
                    <li class="lg"><img class="img-fluid" src="./assets/imgs/marca-lg.webp" alt="Icono LG"></li>
                    <li class="bgh"><img class="img-fluid" src="./assets/imgs/marca-bgh.webp" alt="Icono BGH"></li>
                    <li class="surrey"><img class="img-fluid" src="./assets/imgs/marca-surrey.webp" alt="Icono Surrey"></li>
                    <li class="philco"><img class="img-fluid" src="./assets/imgs/marca-philco.webp" alt="Icono Philco"></li>
                    <li class="electrolux"><img class="img-fluid" src="./assets/imgs/marca-electrolux.webp" alt="Icono Electrolux"></li>
                    <li class="whirlpool"><img class="img-fluid" src="./assets/imgs/marca-whirlpool.webp" alt="Icono Whirlpool"></li>
                </ul>
            </div>
        </div>

        <div class="row" id="contacto">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 text-center">
                <h3>Estamos ubicados dentro del partido de Pilar.</h3>
                <p>Contamos con cobertura en partidos aledaños. Consultar por otros partidos.</p>
                <div>
                    <iframe title="GoogleMaps - Del Viso" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d148883.82016668303!2d-58.95276963865058!3d-34.4547189006107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9ce000021e8d%3A0xb7476c86aa6dd3e0!2sPilar%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1698085934630!5m2!1ses-419!2sar" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <hr>
            </div>
        </div>

        <div class="row" id="detalle2">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <p>Tu consulta no es molestia.</p>
                <p>¡Comunicate con nosotros mediante nuestro Whatsapp!</p>
            </div>
        </div>

        <footer class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <ul class="footer">
                    <li class="logo">
                        <a href="#header-nav">
                            <span>Refrigeración</span>
                            <span>Raymondi</span>
                        </a>
                    </li>
                    <li>
                        <div>Contacto</div>
                        <ul>
                            <li class="copy-clipboard">
                                <i class="fa-solid fa-envelope"></i>raymondirefrigeracion@gmail.com
                            </li>
                            <li class="copy-clipboard">
                                <i class="fa-solid fa-phone"></i><?php echo $phone ?>
                            </li>
                            <li>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491140586727&text=Buenas Refrigeración Raymondi!"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                            </li>
                            <li>
                                <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.tiktok.com/@refrigeracionraymondi"><i class="fa-brands fa-tiktok"></i>TikTok</a>
                            </li>
                            <li>
                                <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div>Links importantes</div>
                        <ul>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $phone ?>&text=<?php echo $web_presentation ?>">Whatsapp</a></li>
                            <li><a target="_blank" href="https://www.tiktok.com/@refrigeracionraymondi">TikTok</a></li>
                            <li><a target="_blank" href="https://wa.me/+5491140586727">Support</a></li>
                            <li><a target="_blank" href="https://maps.app.goo.gl/R5nTNAaSqZN7K2pFA">¿En qué zona estamos?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </footer>

        <div id="whatsapp-fixed">
            <a title="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $phone ?>&text=<?php echo $web_presentation ?>">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://kit.fontawesome.com/54a40cf424.js" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>