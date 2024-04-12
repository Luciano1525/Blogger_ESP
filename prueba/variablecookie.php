<?php

require_once('class.producto.php');

//VARIABLE DE SESION
/*
session_start();
$producto = $_SESSION['producto'];


//Para destruir la variable de sesion
//session_destroy();
*/




/* ESTE METODO ES PARA VARIABLES DE SESION
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de otro archivo</title>
    <link rel="stylesheet" href="http://localhost/ExamenP2/img.css">

</head>
<body>

<h1>Contenido recuperado de la sesión</h1>
    <p>Nombre del producto: <?php echo $producto->get_nombre(); ?></p>
    <!-- Mostrar la imagen del producto -->
    <img src="<?php echo $producto->get_imagen(); ?>" alt="Imagen del producto">
    <!-- Puedes mostrar más información del producto si lo necesitas -->

    <form action="http://localhost/ExamenP2/index.php" method="post">
        <input type="submit" value="Ir a otro archivo">
    </form>
</body>
</html>
*/




// Recuperar la Cookie
if (isset($_COOKIE['producto'])){
    $producto = unserialize(base64_decode($_COOKIE['producto']));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido recuperado de la cookie</title>
    <link rel="stylesheet" href="http://localhost/ExamenP2/prueba/img.css">
</head>
<body>
    <h1>Contenido recuperado de la cookie</h1>
    <p>Nombre del producto: <?php echo $producto->get_nombre(); ?></p>
    <p>Precio del producto: <?php echo $producto->get_precio(); ?></p>
    <!-- Mostrar la imagen del producto -->
    <img src="<?php echo $producto->get_imagen(); ?>" alt="Imagen del producto">
    <form action="http://localhost/ExamenP2/prueba/index.php" method="post">
        <input type="submit" value="Ir a otro archivo">
    </form>

</body>
</html>

<?php
} else {
    echo "La cookie no existe";
}
?>
