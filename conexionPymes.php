<?php

$conexion = mysqli_connect("localhost", "root", "", "pymesasistencia");

if ($conexion) {
    echo 'Se a conectado a la base de datos';
}else {
    echo 'No se pudo conectar a la base de datos';
}

?>