<?php
/*
    Programado por Luis Cabrera Benito 
  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
    
    Blog:       https://parzibyte.me/blog
    Ayuda:      https://parzibyte.me/blog/contrataciones-ayuda/
    Contacto:   https://parzibyte.me/blog/contacto/
*/
$ubicacion = json_decode(file_get_contents("php://input"));
$mensaje = "Timestamp: " . $ubicacion->timestamp . PHP_EOL;
$mensaje .= "Latitud: " . $ubicacion->coordenadas->latitud . PHP_EOL;
$mensaje .= "Longitud: " . $ubicacion->coordenadas->longitud . PHP_EOL . PHP_EOL;
file_put_contents("ubicaciones.txt", $mensaje, FILE_APPEND);
