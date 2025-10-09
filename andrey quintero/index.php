<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola php</h1>

    <?php 
    
    $nombre = " Andrey Quintero ";
    $edad = 18;

    define("pais" ,  " Colombia ");
    Const ciudad = " iBAGUE ";
        echo " <h3> Hola Mi Nombre es $nombre, Tengo $edad años  y soy de " . pais . " y vivo en " . ciudad;
    
    ?>

    <?php 
    
    $texto = "Hola Mundo "; // String
    $numero = 20;           // Entero
    $decimal = 9.5;         // Decimal
    $activar = true;        // Boleana
    $nulo =  null;         // Null  
    
    echo "<P> Tipo de Dato Texto: $texto </P>";
    echo "<P> Tipo de Dato Numerico: $numero </P>";
    echo "<P> Tipo de Dato: Decimal $decimal </P>";
    echo "<P> Tipo de Dato: Boleana $activar </P>";
    echo "<P> Tipo de Dato: Null  $nulo </P>";


    // Operaciones Aritmeticas

    $num1 = 10;
     $num2 = 20;

     $suma =  $num1 + $num2;
     $resta = $num1 - $num2;
     $multiplicacion = $num1 * $num2;
     $division = $num1 / $num2;


     echo "<h3>  La Suma es : $suma</h3>"; 
     
     echo "<h3>  La Resta es : $resta</h3>";

     echo "<h3>  La Multiplicacion es : $multiplicacion</h3>"; 

     echo "<h3>  La Division es : $division</h3>"; 




    
    
    
    ?>
</body>
</html>