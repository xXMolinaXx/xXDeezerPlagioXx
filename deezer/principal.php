<?php include("seguridad.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deezer.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---***************css y fontawesome************************************************-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/playlist.css">
    <link rel="stylesheet" href="css/barra-gris.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/deezer-icon.ico">
    <style>
        .espacio {
            margin-bottom: 20px;
        }
    </style>

</head style="overflow-x: hidden;">

<body>
    <div class="row">
        <!--inicio del bloque gris-->
        <div id="tabla">
            <!--inicio de tabla -->
            <div>
                <div>
                    <img src="img/deezer-blanco.png" style="height: 24px; width: 117px;margin: 24px 0px 0px 35px;">
                    <input type="search" placeholder="Buscar" id="boton-buscar"><button id="btn-buscar" ><i class="fas fa-search"></i></button>
                </div>
            </div>
            <!--fin de primer seccion-->
            <nav class="nav" class="navegar">
                <div tabindex="-1" style="right: -17px;">
                    <div style="padding:0px 20px 0px 30px">
                        <a href="principal.php"> <div style="color:white" class="espacio-p">INICIO</div></a>
                        <a href="explorar.php"> <div style="color:white" class="espacio-p">EXPLORAR</div></a>
                        <div style="color:white">RECOMENDACION</div>
                    </div>
                    <div>
                        <button type="button" id="boton">
                            <i class="fas fa-heart" style="vertical-align:baseline;">Favoritas</i>
                        </button>
                        <a href="Playlist.php">
                            <button type="button" id="boton">
                                <i class="fas fa-music" style="vertical-align:baseline">Playlist</i>
                            </button></a>
                        <button type="button" id="boton">
                            <i class="fas fa-compact-disc" style="vertical-align:baseline">Albumes</i>
                            <button type="button" id="boton">
                                <i class="fas fa-clock" style="vertical-align:baseline">Actividad</i>
                                <button type="button" id="boton">
                                    <i class="fas fa-play" style="vertical-align:baseline">Aplicaciones</i>
                                    <button id="boton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-agregar-musica">
                                        <i class="fas fa-music"></i>
                                        <i class="fas fa-plus"></i>agrega musica
                                    </button>
                    </div>
                </div>
            </nav>
            <div id="div-agr-sal">

                <a href="salir.php">
                    <button id="boton">
                        <i class="fas fa-sign-out-alt"></i>salir
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!--fin del bloque gris-->
    <!--*************************************  **********  main *******************************-->
    <div style="margin-left: 297px;width: 1130px;padding: 10px;margin-bottom: 100px;">
        <!-- ***************seccion 1******************************-->




        <section style="position: initial">
            <div>
                <div style="margin-left: 950px">
                    <a id="a" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <button class="carousel-control-prev-icon bordes" aria-hidden="true" style="border-radius: 15px 0px 0px 15px;height: 40px;width: 29px;"><i
                                class="fas fa-angle-double-left"></i></button>
                    </a>
                    <a id="a" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <button class="bordes" style="border-radius: 0px 15px 15px 0px;" class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fas fa-angle-double-right"></i></button>
                    </a>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div style="margin: 10px 0px 10px 0px" class="row">
                                <div id="bloque1" class="row bloque-secion-1">
                                    <img style=" height: 250px;" src="img/principal/358x358-000000-80-0-0.jpg">
                                    <button class="play"><i class="fas fa-play"></i></button>
                                    <div class="contenido-1">
                                        <div style="padding: 76px 0px 10px 142px;">
                                            <h3>Flow</h3>
                                            <p>tu propia banda sonora</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="bloque1" class="row bloque-secion-1">
                                    <img style=" height: 250px;" src="img/principal/BFMV.jpg">
                                    <button class="play"><i class="fas fa-play"></i></button>
                                    <div class="contenido-1">
                                        <div style="padding: 76px 0px 10px 142px;">
                                            <h3>Flow</h3>
                                            <p>inspiradas en tu flow</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div style="margin: 10px 0px 10px 0px" class="row">
                                <div id="bloque1" class="row bloque-secion-1">
                                    <img style=" height: 250px;" src="img/principal/358x358-000000-80-0-0.jpg">
                                    <button class="play"><i class="fas fa-play"></i></button>
                                    <div class="contenido-1">
                                        <div style="padding: 76px 0px 10px 142px;">
                                            <h3>Flow</h3>
                                            <p>tu propia banda sonora</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="bloque1" class="row bloque-secion-1">
                                    <img style=" height: 250px;" src="img/principal/BFMV.jpg">
                                    <button class="play"><i class="fas fa-play"></i></button>
                                    <div class="contenido-1">
                                        <div style="padding: 76px 0px 10px 142px;">
                                            <h3>Flow</h3>
                                            <p>inspiradas en tu flow</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- **********************secion dos ****************************************************-->



        <section>
            <div class="row" style="margin-top:20px;padding: 13px; ">
                <div>
                    <div class="row" style="margin-bottom: 30px">
                        <div>
                            <a href="explorar.php">
                                <p class="txt-pre" id="exp">Explorar ></p>
                            </a>
                            <p class="txt-b-t">Explorar por genero y momento</p>
                        </div>
                        <div style="margin-left: 750px">
                            <a id="a" class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                <button class="carousel-control-prev-icon bordes" aria-hidden="true" style="border-radius: 15px 0px 0px 15px;height: 40px;width: 29px;"><i
                                        class="fas fa-angle-double-left"></i></button>
                            </a>
                            <a id="a" class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                <button class="bordes" style="border-radius: 0px 15px 15px 0px;" class="carousel-control-next-icon" aria-hidden="true"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </a>
                        </div>
                    </div>
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row" style="padding: 0px 10px 0px 10px;">
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">narco
                                            <br> coridos</div></a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="padding: 0px 10px 0px 10px;">
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div></a>
                                    <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div></a>
                                    <a href="explorar.html"><div id="bloquecito-especial">quieres mas</div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- seccion tres-->




        <section>
            <div class="row" style="margin-top:20px;padding: 13px; ">
                <div>
                    <div class="row" style="margin-bottom: 30px">
                        <div>
                            <a href="explorar.html">
                                <p class="txt-pre" id="exp">Explorar ></p>
                            </a>
                            <p class="txt-b-t">Explorar por genero y momento</p>
                        </div>
                        <div style="margin-left: 750px">
                            <a id="a" class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <button class="carousel-control-prev-icon bordes" aria-hidden="true" style="border-radius: 15px 0px 0px 15px;height: 40px;width: 29px;"><i
                                        class="fas fa-angle-double-left"></i></button>
                            </a>
                            <a id="a" class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <button class="bordes" style="border-radius: 0px 15px 15px 0px;" class="carousel-control-next-icon" aria-hidden="true"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </a>
                        </div>
                    </div>
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row" style="padding: 0px 10px 0px 10px;">
                                    <div class="row" style="padding: 10px 10px 10px 50px;">
                                        <div class="bloques-3 row">
                                            <img src="img/principal/img-secion2/metalesencial.jpg" class="img-bloque-3">
                                            <div style=" width: 50%;padding: 100px 0px 0px 80px;">
                                                <p>metal esencial <br>60 canciones</p>
                                                <button class="btn btn-outline-dark"><i class="fas fa-play"></i> reproducir
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bloques-3 row">
                                            <img src="img/principal/img-secion2/rockworkout.jpg" class="img-bloque-3">
                                            <div style=" width: 50%;padding: 100px 0px 0px 80px;">
                                                <p>rock workout <br>101 canciones</p>
                                                <button class="btn btn-outline-dark"><i class="fas fa-play"></i> reproducir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="padding: 0px 10px 0px 10px;">
                                    <div class="row" style="padding: 10px 10px 10px 50px;">
                                        <div class="bloques-3 row">
                                            <img src="img/principal/img-secion2/metalesencial.jpg" class="img-bloque-3">
                                            <div style=" width: 50%;padding: 100px 0px 0px 80px;">
                                                <p>metal esencial <br>60 canciones</p>
                                                <button class="btn btn-outline-dark"><i class="fas fa-play"></i> reproducir
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bloques-3 row">
                                            <img src="img/principal/img-secion2/rockworkout.jpg" class="img-bloque-3">
                                            <div style=" width: 50%;padding: 100px 0px 0px 80px;">
                                                <p>rock workout <br>101 canciones</p>
                                                <button class="btn btn-outline-dark"><i class="fas fa-play"></i> reproducir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  ************************seccion 4 *******************************-->
        <section>
            <div class="row" style="margin-bottom: 30px">
                <div>
                    <p class="txt-pre" id="exp"> popular</p>
                </div>
                <div style="margin-left: 860px;">
                    <a id="a" class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                        <button class="carousel-control-prev-icon bordes" aria-hidden="true" style="border-radius: 15px 0px 0px 15px;height: 40px;width: 29px;"><i
                                class="fas fa-angle-double-left"></i></button>
                    </a>
                    <a id="a" class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                        <button class="bordes" style="border-radius: 0px 15px 15px 0px;" class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fas fa-angle-double-right"></i></button>
                    </a>
                </div>
            </div>
            <div id="carousel-3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/chester.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/bachata.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/regeton.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/regeton.jpg)"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/chester.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/bachata.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/regeton.jpg)"></div>
                            <div class="bloquecitos-4" style="background-image: url(img/principal/img-secion2/regeton.jpg)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ********************************ventana modal******************************************************** -->
        <!-- Modal -->
        <div class="modal fade" id="Modal-agregar-musica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">agregate las buenas rolas a nuestra base de datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding-left:100px;background-image: url(img/principal/musica-fondo.jpg);    background-size: 79px; ">
                        <input class="espacio" id="text-artista" type="text" placeholder="Artista"> <br>
                        <input class="espacio" id="text-cancion" type="text" placeholder="Cancion"> <br>
                        <input class="espacio" id="text-genero" type="text" placeholder="Genero"> <br>

                    </div>
                    <div class="modal-footer">
                        <button id="boton-modal-salirse" type="button" class="btn btn-secondary" data-dismiss="modal" onclick="regargar();">Salirse</button>
                        <button id="guardar-rolon" type="button" class="btn btn-primary">Guardar el rolon</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********************************fin de ventana modal******************************************************** -->

        <!--**********************fin*******************************************************-->
    </div>
    </div>


    <!-- ********************* script del proyecto *************************-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script-principal.js"></script>
</body>

</html>