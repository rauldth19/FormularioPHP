<?php

//Datos para la conexión
$servername = "localhost";
$database = "login";
$username = "root";
$password = "";


// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Comprobar conexión
if (!$conn) {

    die("No hay conexión: ".mysqli_connect_error());
}

?>