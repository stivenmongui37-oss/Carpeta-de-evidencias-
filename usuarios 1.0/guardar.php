<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";
$conexionon->query($sql);
$conexionon->query($sql);
header('Location: index.html');
?>