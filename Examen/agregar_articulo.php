<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $autor = $_POST['autor'];
    $fecha_publicacion = date("Y-m-d H:i:s");
    
    $imagen = $_FILES['imagen'];
    $imagen_nombre = $imagen['name'];
    $imagen_temporal = $imagen['tmp_name'];
    $ruta_imagen = __DIR__ . '/uploads/' . $imagen_nombre;


    move_uploaded_file($imagen_temporal, $ruta_imagen);
    
    $articulo = array(
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'autor' => $autor,
        'fecha_publicacion' => $fecha_publicacion,
        'imagen' => 'http://localhost/ExamenP2/Examen/uploads/' . $imagen_nombre
    );
    
    if (!isset($_SESSION['articulos'])) {
        $_SESSION['articulos'] = array();
    }
    $_SESSION['articulos'][] = $articulo;
    
    echo "Artículo agregado correctamente.";
} else {
    echo "Error al procesar el formulario.";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulo Añadido</title>
</head>
<body>
<form action="http://localhost/ExamenP2/Examen/index.php" method="post">
        <input type="submit" value="Regresar">
    </form>
</body>
</html>