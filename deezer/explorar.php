<?php include("seguridad.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Explorar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos-explorar.css">
    <link rel="stylesheet" href="css/barra-gris.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/deezer-icon.ico">
</head>

<body style="overflow-x: hidden;">
    <div class="row">
        <!--inicio del bloque gris-->
        <div id="tabla">
            <!--inicio de tabla -->
            <div>
                <div>
                    <img src="img/deezer-blanco.png" style="height: 24px; width: 117px;margin: 24px 0px 0px 35px;">
                    <input type="search" placeholder="Buscar" id="boton-buscar">
                </div>
            </div>
            <!--fin de primer seccion-->
            <nav class="nav" class="navegar">
                <div tabindex="-1" style="right: -17px;">
                    <div style="padding:0px 20px 0px 30px">
                        <a href="principal.php"> <div style="color:white" class="espacio-p">INICIO</div></a>
                        <a href="explorar.html"> <div style="color:white" class="espacio-p">EXPLORAR</div></a>
                        <div style="color:white">RECOMENDACION</div>
                    </div>
                    <div>
                        <button type="button" id="boton">
                            <i class="fas fa-heart" style="vertical-align:baseline;">Favoritas</i>
                        </button>
                        <a href="Playlist.html">
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
    <!--  ****************main********************     -->
    <div style="margin-left: 297px;width: 1130px;padding: 10px;">
        <h1 id="h1-1">Todos los canales</h1>
        <div>
            <h3 class="encabezados">Destacados</h3>
            <div class="row">
                <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div></a>
                <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div></a>
                <a href="Playlist.html"><div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div></a>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">narco
                    <br> coridos</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">esclusivas
                    de Deezer</div>
            </div>
        </div>
        <div>
            <h3 class="encabezados">Musica</h3>
            <div class="row">
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">narco
                    <br> coridos</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">esclusivas
                    de <br> Deezer</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">narco
                    <br> coridos</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">esclusivas
                    de <br> Deezer</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/pop.jpg)">pop</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/rock.jpg)">rock</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/baladas.jpg)">baladas</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/soul.jpg)">soul</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">narco
                    <br> coridos</div>
                <div class="bloquecitos" style="background-image: url(img/principal/img-secion2/narcocorrido.jpg)">esclusivas
                    de <br> Deezer</div>
            </div>
        </div>
    </div>
    </div>

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
                    <button id="boton-modal-salirse" type="button" class="btn btn-secondary" data-dismiss="modal">Salirse</button>
                    <button id="guardar-rolon" type="button" class="btn btn-primary">Guardar el rolon</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ********************************fin de ventana modal******************************************************** -->




    <!-- ********************* script del proyecto *************************-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script-principal.js"></script>


</body>

</html>