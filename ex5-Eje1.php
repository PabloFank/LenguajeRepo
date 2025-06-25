<?php
// Extraer variables de $_REQUEST de forma segura
$edad = isset($_REQUEST['edad']) ? (int) $_REQUEST['edad'] : 0;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : '';

// Función de descuento
function descuento($e){
    if($e < 15){
        return 0.05;
    } elseif($e <= 30){
        return 0.10;
    } elseif($e > 30){
        return 0.30;
    } else {
        return 0.20;
    }
}

// Función de color 
function color($e){
    if($e < 15){
        return "d64747";
    } elseif($e <= 30){
        return "47d686";
    } elseif($e > 30){
        return "477bd6";
    } else {
        return "8460d1";
    }
}
$color_f = color($edad);
?>

<html>
<head>
<body bgcolor="#<?=$color_f?>">
    <title>Edad y Descuento</title>
</head>
    <p>Su nombre es: <?=$nombre?> </p>
    <p>Su edad es: <?=$edad?> </p>
    <p>Su descuento es: <?=descuento($edad) * 100;?>%</p>
</body>
</html>
