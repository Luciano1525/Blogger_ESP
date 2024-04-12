<?php

require_once('class.producto.php');

$producto = new Producto(24, "YAMAHA YZF-R6", 6319999, 1, "http://localhost/ExamenP2/prueba/r6.jpg");

//Variable de Sesion
/*
session_start();
$_SESSION['producto'] = $producto;
*/


//Cookie
setcookie("producto", base64_encode(serialize($producto)), time()+(60*60*24));

//NOTA: Para destruir la cookie cambiar el signo de + por signo de -
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ir a otro archivo</title>
</head>
<body>
    <form action="http://localhost/ExamenP2/prueba/variablecookie.php" method="post">
        <input type="submit" value="Ir a otro archivo">
    </form>
</body>
</html>
