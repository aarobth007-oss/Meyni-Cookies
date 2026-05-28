<?php
$conexion = new mysqli("localhost", "root", "", "meyni_cookies");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>