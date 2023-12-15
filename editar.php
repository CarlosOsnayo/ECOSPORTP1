<?php
include("conexion.php");
$con = connection();

$codigo = $_POST["codigo"];
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$fecham = $_POST["fecham"];

$sql = "UPDATE alumno SET codigo='$codigo',apellido= '$apellido', nombre='$nombre', dni='$dni', direccion='$direccion',telefono= '$telefono', fecham='$fecham'";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: sobremi.php");
} else {
    echo "Error: " . mysqli_error($con);
}
?>