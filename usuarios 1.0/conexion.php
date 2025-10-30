<?php
$conexion = new mysqli('localhost:3307','root','','usuarios_db');

if($conexion->connect_errno){
    die('ERROR DE CONEXIÓN:'. $conexion->connect_error);
}






?>