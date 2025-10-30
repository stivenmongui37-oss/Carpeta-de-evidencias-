async function cargarUsuarios() {
    const respuesta = await fetch('listar.php');
    const datos = await respuesta.text();
    document.getElementById("tabla").innerHTML = datos;
}

document.addEventListener("DOMContentLoaded", cargarUsuarios);