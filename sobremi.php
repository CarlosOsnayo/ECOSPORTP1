<?php
include("conexion.php");
$con = connection();
$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST" action="insertar.php">
        <h1>Registrarse</h1>
        <input type="int" name="codigo" placeholder="Codigo"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="number" name="dni" placeholder="DNI"><br>
        <input type="text" name="direccion" placeholder="Dirección"><br>
        <input type="email" name="correo" placeholder="Correo electrónico"><br>
        <input type="date" name="fecham" placeholder="Fecha de matrícula"><br>

        <div class="boton">
            <input type="submit" value="REGISTRAR">
            <input type="submit" value="ELIMINAR">
            <input type="submit" value="MODIFICAR">
            <input type="submit" value="CONSULTAR">
        </div>
    </form>
</body>
</html>