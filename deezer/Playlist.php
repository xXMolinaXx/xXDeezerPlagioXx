<?php include("seguridad.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Explorar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--****************estilos css********************************************************-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/principal.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos-explorar.css">
  <link rel="stylesheet" href="css/barra-gris.css">
  <link rel="stylesheet" href="css/playlist.css">
  <link rel="stylesheet" href="css/estilos-ventana-modal.css">
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
            <a href="principal.php"> <div style="color:white" class="espacio-p" >INICIO</div></a>
            <a href="explorar.html"> <div style="color:white" class="espacio-p" >EXPLORAR</div></a>
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


  <!--***************************************************  main  *************-->
  <div style="margin-left: 220px;overflow: hidden;width: 1130px;padding: 33px;">
    <!--presentacion-->
    <div style="padding: 24px;margin-left: auto;margin-right: auto;">
      <div class="row">
        <img src="img/principal/musica-fondo.jpg" style="height: 250px;width: 250px;border-radius: 3px;">
        <div id="p-d-t" style="width: 700px;">
          <h1 id="h1-p">Inspirada en</h1>
          <h2 id="h2-1-p">tus artistas favoritos</h2>
          <h2 id="h2-2-p">Descubre música parecida a los artistas que has estado escuchando últimamente,disfruta de deezer.</h2>
        </div>
      </div>
    </div>
    <!--tabla de playlist-->
    <div style="padding: 20px 50px 20px 50px">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cancion</th>
            <th scope="col">Artista </th>
            <th scope="col">genero</th>
          </tr>
        </thead>
        <tbody id="tabla-canciones">
        </tbody>
      </table>
    </div>
  </div>
  </div>

  <!-- ********************************ventana modal******************************************************** -->
  <!-- Modal -->
  <div   class="modal fade" id="Modal-agregar-musica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="height: 430px;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">agregate las buenas rolas a nuestra base de datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding: 60px 10px 10px 120px;;background-image: url(img/principal/musica-fondo.jpg);    background-size: 5px; ">
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




  <!-- ********************* script del proyecto *************************-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script-principal.js"></script>
  <script src="js/script-playlist.js"></script>
</body>

</html>