<?php

    $archivo = fopen("canciones.json","r");
    $linea="";
    $linea = fgets($archivo);
    $registro = json_decode($linea,true);
    echo json_encode( $registro);


?>