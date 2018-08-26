<?php
    $archivos=fopen("../data/trendings.json","r");
    $linea="";
    $jsonAreglos=array();
    while(($linea=fgets($archivos))){
        $json=json_decode($linea,true);
        $jsonAreglos[]=$json;
    }
    echo json_encode($jsonAreglos);

?>