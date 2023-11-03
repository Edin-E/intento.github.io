<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>REGISTRO DE PACIENTES</title>
</head>
<body>
    <h1 style="color: #017B43; position: relative; text-align: center; top: 40px; font-family: 'Bree Serif', serif;">
    </h1>
    <form method="post">
        <input type="text" name="dpi" placeholder="DPI del paciente">
        <input type="text" name="nombre" placeholder="Nombre del paciente">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="direccion" placeholder="direccion">
        <input type="text" name="razon" placeholder="razon">
        <input type="text" name="receta" placeholder="receta">
        <input type="text" name="telefono" placeholder="telefono">
        <input type="text" name="otros" placeholder="otros">
        <input type="submit" name="registrar" value="Registrar">
    </form>
    <?php
    include("procesar_registro.php"); 
    ?>
</body>
</html>
