<?php
// Incluye el archivo de conexión a la base de datos
include("conexionPymes.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$dias_trabajados = $_POST["dias_trabajados"];
$salario = $_POST["salario_mensual"];
$trasporte = $_POST["auxilio_de_transporte"];
$inasistencias = $_POST["inasistencias"];
$novedades = $_POST["novedades"];
$justificacion = $_POST["justificacion"];


$dias_del_mes = 30; // Supongamos que hay 30 días en el mes
$horas_diarias = 8; // Supongamos 8 horas de trabajo al día

// Calcular las horas trabajadas al mes
$horas_trabajadas_al_mes = ($dias_trabajados * $horas_diarias);

$sql = "INSERT INTO asistencias(horas_trabajadas_al_mes) VALUES ('$horas_trabajadas_al_mes')";

$salario_mes = ($salario / $dias_del_mes) * $dias_trabajados + $trasporte;

$sql = "INSERT INTO asistencias(salario_mes) VALUES ('$salario_mes')";

// Inserta datos en la tabla "empleados"
$Datos = "INSERT INTO empleados(cedula, nombres, apellidos, salario_mensual, auxilio_de_transporte)
VALUES ('$cedula', '$nombre', '$apellido', '$salario', '$trasporte')";

$ejecuto = mysqli_query($conexion, $Datos);

// Ahora, inserta datos en la tabla "asistencias"
$Data = "INSERT INTO asistencias(cedula, dias_trabajados, horas_trabajadas_al_mes, salario_mes, inasistencias, novedades, justificacion)
VALUES ('$cedula', '$dias_trabajados', '$horas_trabajadas_al_mes', $salario_mes, '$inasistencias', '$novedades', '$justificacion')";

$ejecutar = mysqli_query($conexion, $Data);



?>