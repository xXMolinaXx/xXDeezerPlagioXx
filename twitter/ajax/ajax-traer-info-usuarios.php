<?php
    $parametro=$_POST['usuario'];
    $archivos=fopen("../data/usuarios.json","r");
    $linea="";
    while(($linea=fgets($archivos))){
        $json=json_decode($linea,true);
        if( $json['usuario']==$parametro){
            echo json_encode($json);
            exit();
        }
    }
?>