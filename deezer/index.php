<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deezer - Streaming de música | Probar Flow. Descargar y escuchar música gratis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/deezer-icon.ico">

    <!-- <link rel="stylesheet" type="text/css"  href="css/estilo.css" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/deezer-icon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilos-landingpage.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar navbar-expand-md">
        <div style="padding-left: 100px" class="col-5 col-sm-0 col-md-2 col-lg- col-xl-">
            <a href="index.php">
                <img src="img/registro/Deezer-nav.png" style="height: 30px;width: 125px">
            </a>
        </div>
        <div id="bloque-ofertas" class="col-2 col-md-6  col-lg- col-xl-">
            <button id="txt-oferta"><h4>Ofertas</h4></button>
        </div>
        <div class="collapse navbar-collapse col-md-4 col-lg- col-xl-">
            <a href="conectarse-email.html"><button id="boton-nav-1" class="btn btn-outline-primary ">conectarse</button></a>
            <a href="registro-correo.html"><button id="boton-nav-2" class="btn btn-primary btm btm "> registrarse </button></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- ********************   bloque uno ******************************************-->
    <div id="bloque1">
        <div id="bloque1-1" style="text-align: center">
            <h1 style="font-size: 36px;font-weight: 700;color: white;">
                Escucha tu música, sin límites. Donde <br> quieras , cuando quieras.
            </h1>
            <p style="color: white"> Prueba Premium+ gratis durante 30 días*</p>
            <center>
                <input style="padding:10px" type="button" class="boton-rosado" id="boton-rosado-1" value="Prueba Premiun+">
            </center>
        </div>
    </div>

    <!-- ************************************bloque 2******************************************** -->
    <section id="bloque2">
        <img id="imagen-bloque-dos" src="img/celular.png">
        <div id="txt-landin-1" class="contenedor">
            <h2 style="color: #2692b7; font-weight: 700;font-size: 36px; ">
                Escucha lo que te gusta
            </h2>
            <p id="texto-bloque2" class="texto" style="max-width: 460px">
                Encuentra tus futuras pasiones y tus canciones favoritas de siempre entre millones de canciones. Descubre la playlist perfecta
                o crea una a tu medida, y explora las colecciones de música por género. Puedes escuchar todo en cualquiera
                de tus dispositivos,desde el Top 40 hasta los artistas emergentes.
            </p>
        </div>

        <div id="txt-landin-2">
            <h2 style="color: #2692b7; font-weight: 700;font-size: 36px; ">
                Música acorde a tus gustos
            </h2>
            <p id="p-txt-landin-2" style="width: 460px;" class="texto">
                Inicia Deezer y explora todos los géneros musicales del mundo. Disfruta de novedosas playlists creadas por Editores Deezer
                de todo el mundo o crea las tuyas propias en cuestión de minutos.
            </p>
        </div>
    </section>
    <!--******************************bloque 3***********************************************-->
    <div id="div-bloque-tres">
        <div style="color: white;">
            <img src="img/flow.png " style="height: 50px;margin: 0 auto; width: 155px;margin: 10px 120px;">
            <h2 style="padding-right: 10px;">Tu propia banda sonora</h2>
            <p style="margin: 10px 5px 100px;">Flow incluye la música que te gusta, nuevas<br> recomendaciones seleccionadas
                exclusivamente para <br> ti y canciones de las que ya no te acordabas para que<br> disfrutes de horas ininterrumpidas
                de música.</p>
        </div>
    </div>
    <!-- *******************************bloque especial **************************************-->
    <section id="sec-especial" style="height: 800px;background-color: white; ">
        <div style="padding: 0px 124px 0px 124px;height: 1024px">
            <div style="padding: 120px 0px 0px 0px;height: 1024px">
                <div class="row ">
                    <input class="btm-blo-esp" type="button" value="Modo sin conexion" onclick="funcion1();">
                    <input class="btm-blo-esp" type="button" value="Canal" onclick="funcion2();">
                    <input class="btm-blo-esp" type="button" value="Letras" onclick="funcion3();">
                    <input class="btm-blo-esp" type="button" value="Ecualizador" onclick="funcion4();">
                </div>
                <div class="row" style="height:860px">
                    <div id="texto-bloque-especial">
                        <p id="p-1">
                            Descarga tus canciones, tus playlists y tus álbumes favoritos usando la conexión WiFi para tenerlos todos en un mismo sitio
                            y escucharlos cuando te apetezca.
                        </p>
                        <p style="display: none" id="p-2">
                            Explora nuestras selecciones musicales y nuestros podcasts temáticos para descubrir los clásicos del futuro y nuevos tesoros.
                        </p>
                        <p style="display: none" id="p-3">
                            ¡Ya es hora de admitir que no te sabes algunas canciones! Sigue las letras de tus canciones favoritas en pantalla y no vuelvas
                            a cantar "quiero ser una roca forestal" nunca más.
                        </p>
                        <p style="display: none" id="p-4">
                            Ajusta el ecualizador y escucha tu música tal como a ti te gusta
                        </p>
                    </div>
                    <div id="circuloamarillo">
                        <div id="celular-bloque-especial">
                            <div id="pantalla-bloque-especial"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- ****************    bloque cuatro ******************************************* -->
    <section id="bloque-cuatro">
        <div id="div-4-1">
            <div id="div-texto-bloque4">
                <h2 id="siempre-contigo">Siempre Contigo </h2>
                <p style="padding: 0 0 20px">
                    Descarga tu música con Premium+ para llevártela cuando sales a correr o a cenar.Disponible de forma permanente, en todos
                    tus dispositivos, incluso sin WiFi ni 4G.</p>
                <img src="img/icon.png" style="padding: 0 0 40px"><br>
                <span style="color: white">
                    <input type="button" value="mas informacion" class="boton-azul">
                </span>
            </div>
        </div>
    </section>
    <!--**************************************bloque 5****************************************-->
    <section id="bloquecinco">
        <div id="imagenes-bloque5" class="">
            <img class="imagenes-bloque5" src="img/apple.png" alt="apple">
            <img class="imagenes-bloque5" src="img/android.png" alt="droid">
            <img class="imagenes-bloque5" src="img/windows.png" alt="">
            <img class="imagenes-bloque5" src="img/blackberry" alt="">
            <img class="imagenes-bloque5" src="img/roku.png" alt="">
            <img class="imagenes-bloque5" src="img/samsung.png" alt="">
            <img class="imagenes-bloque5" src="img/bang.png" alt="">
            <img class="imagenes-bloque5" src="img/sony.png " alt="">
            <img class="imagenes-bloque5" src="img/jaw.png" alt="">
            <img class="imagenes-bloque5" src="img/bose.png" alt="">
        </div>
    </section>
    <!--*******************************bloque 6***********************************************-->
    <section id="secion-6">
        <h2 style="font-size: 45px;margin-bottom: 50px">Disfruta de tu música</h2>
        <div id="div-bloque-6-datos" class="row" style="padding-left: 300px;padding-right: 300px">
            <div style="height: 400px;width: 250px;background-color: white;margin-right: 10px;padding-top: 20px">
                <h3 style="margin-bottom: 30px">Gratis <br> $0.00 <br> /mes</h3>
                <p>Anuncios ocasionales <br> Reproducción aleatoria <br> Música en línea</p>
                <input type="button" value="registrate" class="boton-rosado " style="width: 200px;background-color: #8E8E94;padding-bottom: 10px">
            </div>
            <div style="height: 400px;width: 250px;background-color: #2692B7;color: white;padding-top: 20px;background-position-x: 0px">
                <h3 style="margin-bottom: 30px">Premium+ <br> $5.99 <br> /mes

                </h3>
                <p>Sin anuncios <br> Música ilimitada <br> Modo sin conexión</p>
                <input type="button" value="prueba premiun+" class="boton-rosado " style="width: 200px;padding-bottom: 10px">
            </div>
            <div style="height: 400px;width: 250px;background-color: white;margin-left: 10px;padding-top: 20px">
                <h3 style="margin-bottom: 30px">Deezer Family <br> $8.99 <br> /mes

                </h3>
                <p>Sin anuncios <br> Música ilimitada <br> Modo sin conexión <br> 6 perfiles</p>
                <input type="button" value="suscribirse" class="boton-rosado " style="width: 200px;background-color: #FEB50D;padding-bottom: 10px">
            </div>
        </div>
    </section>
    <!-- ************************pie de mi pagina ****************************************** -->

    <footer class="row">
        <div id="deezer-logo-footer" class="col-md-4">
            <a href="html-1.html">
                <img src="img/registro/deezer2.png" style="height: 40px;
                    width: 181px;   ">
            </a>
        </div>

        <div class="col-md-8" style="padding-top: 30px">
            <table id="table-footer">
                <tr>
                    <th>Deezer
                        </thead>
                        <th>¿Quien eres?
                            </thead>
                            <th>¿Quienes somos?
                                </thead>
                                <th>Legal
                                    </thead>
                </tr>
                <tr>
                    <td>ofertas</td>
                    <td>sellos y artistas</td>
                    <td>quienes somos</td>
                    <td>condiciones generales de uso</td>
                </tr>
                <tr>
                    <td>ventajs</td>
                    <td>desarolladores</td>
                    <td>ofertas de empleo</td>
                    <td>datos personales y cokies</td>
                </tr>
                <tr>
                    <td>explorar los canales</td>
                    <td>presna</td>
                    <td></td>
                    <td>avisos legales</td>
                </tr>
                <tr>
                    <td>dispositivos</td>
                    <td></td>
                    <td></td>
                    <td>ajustes de privacidad</td>
                </tr>
                <tr>
                    <td>blog</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ayuda</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        </div>
    </footer>

    <script src="js/index-script.js"></script>
    <script>
        alert("se ocupa internet para cargar los iconos de fontawesome");
    </script>
</body>

</html>