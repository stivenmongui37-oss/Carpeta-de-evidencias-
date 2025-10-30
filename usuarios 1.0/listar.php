<?php
include('conexion.php');

$resultado = $conexion->query("SELECT * FROM usuarios ORDER BY id DESC");

echo "<table>";
echo "<tr><th>ID</th><th>NOMBRE</th><th>CORREO</th></tr>";

while($fila = $resultado->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['correo'] . "</td>";
    echo "</tr>";
}

echo "</table>";



?>