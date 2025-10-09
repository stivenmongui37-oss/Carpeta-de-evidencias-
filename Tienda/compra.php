<?php include('includes/header.php') ?>

<?php


$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$precio = [
    "Pulsar ns 160 pro" => 1099900000,
    "Pulsar ns 250" => 13799000,
];

$total = $precio[$prodcuto] * $cantidad;
?> 

<section class= "compra">
    <h2> Resumen de la compra </h2>
    <div class="resumen">
        <p> <stong> Producto: </stong><?php echo $prodcuto; ?> </p>
        <p> <stong> Cantidad: </stong><?php echo $cantidad; ?> </p>
        <p> <stong> Total a Pagar: </stong><?php echo $number_format($total, 0, ´.´,´.´) ?> </p>
</div>
<a href="tienda.php" class="btn"> volver a la Tienda </a>

<?php include('includes/footer.php')?>