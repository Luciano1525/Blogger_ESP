<?php

session_start();


if (isset($_SESSION['articulos']) && !empty($_SESSION['articulos'])) {
    echo "<h1>Artículos Publicados</h1>";
    foreach ($_SESSION['articulos'] as $articulo) {
        echo "<h2>{$articulo['titulo']}</h2>";
        echo "<p>{$articulo['descripcion']}</p>";
        echo "<p>Autor: {$articulo['autor']}</p>";
        echo "<p>Fecha de publicación: {$articulo['fecha_publicacion']}</p>";
        // Ajustamos la ruta de la imagen para que sea absoluta
        echo "<img src='{$articulo['imagen']}' alt='Imagen del artículo'>";

        echo "<hr>";
    }
} else {
    echo "No hay artículos publicados.";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
    <link rel="stylesheet" href="http://localhost/ExamenP2/Examen/img.css">

</head>
<body>
<form action="http://localhost/ExamenP2/Examen/index.php" method="post">
        <input type="submit" value="Agregar Otro Artículo">
    </form>
</body>
</html>