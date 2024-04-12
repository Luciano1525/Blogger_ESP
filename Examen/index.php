<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Artículo</title>
    <link rel="stylesheet" href="http://localhost/ExamenP2/Examen/estilo.css">
</head>
<body>
<h1>Agregar Artículo</h1>
    <form action="agregar_articulo.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>
        
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="fecha">Fecha: Automatica</label><br>
        
        <input type="submit" value="Añadir Artículo">
    </form>
    
    <br>
    
    <form action="http://localhost/ExamenP2/Examen/ver_articulos.php" method="post">
        <input type="submit" value="Ver Artículos">
    </form>
</body>
</html>
