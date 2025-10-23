function mostrarmensaje() {
            alert("Hola, este es un mensaje desde JavaScript!");
        }

function cambiartexto() {
    const titulo = document.getElementById("titulo");
    titulo.textContent = "Este texto ha cambiado a javascript";
    titulo.style.color = "red";
}
let contador = 0;
function suma () {
    contador++
    document.getElementById("contador").textContent = contador;
}

function resta () {
    contador--
    document.getElementById("contador").textContent = contador;
}                                           

function cambiarimagen() {
    document.getElementById("imagen").src = "https://e0.pxfuel.com/wallpapers/736/59/desktop-wallpaper-dabi-boku-no-hero-mha-my-hero-thumbnail.jpg";
}

function volver() {
    document.getElementById("imagen").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrT9Q-2ZnzuWQ8xxNNtoG11qOQtf65Ms_2uBb4wgR3gAJicbIZBGJF5tWQ3v2q_eBip3E&usqp=CAU";
}

function mostrarhora() {
    const hora = new Date()
    document.getElementById("hora").textContent = hora.toLocaleTimeString();
    const fecha = new Date()
    document.getElementById("fecha").textContent = fecha.toLocaleDateString();
}

setInterval(mostrarhora, 1000);
