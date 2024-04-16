<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Alumno</title>
</head>
<body>
  

<?php
require_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$dni = $_POST['dni'];
$celectronico = $_POST['celectronico'];
$telefono = $_POST['telefono'];
$fnacimiento = $_POST['fnacimiento'];
$sexo = $_POST['sexo'];
$facultad =  $_POST['facultad'];

// $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
// $apellido1 = mysqli_real_escape_string($conexion, $_POST['apellido1']);
// $apellido2 = mysqli_real_escape_string($conexion, $_POST['apellido2']);
// $dni = mysqli_real_escape_string($conexion, $_POST['dni']);
// $celectronico = mysqli_real_escape_string($conexion, $_POST['celectronico']);
// $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
// $fnacimiento = mysqli_real_escape_string($conexion, $_POST['fnacimiento']);
// $sexo = mysqli_real_escape_string($conexion, $_POST['sexo']);
// $facultad = mysqli_real_escape_string($conexion, $_POST['facultad']);

// Insertar datos en la tabla
$sql = "INSERT INTO alumnos (Nombre, Apellido1, Apellido2, DNI, CElectronico, Telefono, FNacimiento, Sexo, Facultad)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);

// Vincular parámetros
$stmt->bind_param("sssssssss", $nombre, $apellido1, $apellido2, $dni, $celectronico, $telefono, $fnacimiento, $sexo, $facultad);

if ($stmt->execute()) {
    echo "<script>alert('Alumno agregado correctamente');</script>";

    
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$stmt->close();
$conexion->close();


 ?>

 <script>location.href='registro.html'</script>
 </body>
</html>


