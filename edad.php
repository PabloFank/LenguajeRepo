<?php
$nombre = $_POST["nombre"] ?? "";
$edad = intval($_POST["edad"] ?? 0);
$colorFondo = "white";

if ($edad >= 0 && $edad <= 15) {
    $colorFondo = "yellow";
} elseif ($edad >= 16 && $edad <= 30) {
    $colorFondo = "red";
} else {
    $colorFondo = "green";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>edad</title>
</head>
<body style="background-color: <?php echo $colorFondo; ?>;">
    <h2>Resultado</h2>
    <p>Nombre: <?php echo htmlspecialchars($nombre); ?></p>
    <p>Edad: <?php echo $edad; ?> años</p>
    <br>
    <a href="edad.html">Volver</a>
</body>
</html>