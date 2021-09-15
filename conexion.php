<?php

$mysqli = new mysqli('localhost', 'root', '12345678', 'personal');

if($mysqli->connect_error){

    die('Error en la conexion'. $mysqli->connect_error);
}

printf("Servidor informacion: %s\n", $mysqli->server_info);

?>