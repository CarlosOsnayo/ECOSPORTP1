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

$sql = "INSERT INTO alumno VALUES ('$codigo', '$apellido', '$nombre', '$dni', '$direccion', '$telefono', '$fecham')";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: sobremi.php");
} else {
    echo "Error: " . mysqli_error($con);
}
?>