<?php
    $usuarioSelect = $_POST["usuario"];
    $archivo = fopen("../data/usuarios.json", "r");
    $registros = array();
    while ($linea = fgets($archivo)) {
        $registro = json_decode($linea, true);
        $registros[] = $registro;
    }
    for ($i=0; $i < sizeof($registros); $i++) { 
        if ($usuarioSelect == $registros[$i]["usuario"]) {
            $dato = $registros[$i];
        
        }
    }
    fclose($archivo);
    
    $archivo = fopen("../data/tweets.json", "a+");
    
    $registroUsuario["usuario"] = $dato["usuario"];
    $registroUsuario["nombre"] = $dato["nombre"];
    $registroUsuario["urlImagen"] = $dato["urlImagen"];
    
    $registroTweet["usuario"] = $registroUsuario;
    $registroTweet["tweet"] = $tweet = $_POST["tweet"];
    $registroTweet["hashtags"] = $hashtags = $_POST["hashtags"];
    
    fwrite($archivo, json_encode($registroTweet) . "\n");
    fclose($archivo);
    echo json_encode($registroTweet);
?>