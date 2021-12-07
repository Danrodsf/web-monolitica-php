<?php

function conectar(){

//Conexion con base de datos
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "ba2507da78869e", "b59fe83e", "heroku_c9fc18d669f3592");

if ($mysqli->connect_errno) {

    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

return $mysqli;

}
?>