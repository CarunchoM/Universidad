<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Alumno</title>
</head>
<body>


<?php
require_once 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id =  mysqli_real_escape_string($conexion, $_POST['id']);
  $nombre =  mysqli_real_escape_string($conexion, $_POST['nombre']);
  $apellido1 =  mysqli_real_escape_string($conexion, $_POST['apellido1']);
  $apellido2 =   mysqli_real_escape_string($conexion, $_POST['apellido2']);
  $dni =  mysqli_real_escape_string($conexion, $_POST['dni']);
  $celectronico =  mysqli_real_escape_string($conexion, $_POST['celectronico']);
  $telefono =  mysqli_real_escape_string($conexion, $_POST['telefono']);
  $fnacimiento = mysqli_real_escape_string($conexion, $_POST['fnacimiento']);
  $sexo = mysqli_real_escape_string($conexion, $_POST['sexo']);
  $facultad = mysqli_real_escape_string($conexion, $_POST['facultad']);

  // Actualizar el registro del alumno
  $sql = "UPDATE alumnos SET Nombre='$nombre', Apellido1='$apellido1', Apellido2='$apellido2', DNI='$dni', CElectronico='$celectronico', Telefono='$telefono', FNacimiento='$fnacimiento', Sexo='$sexo', Facultad='$facultad' WHERE Id=$id";

  if ($conexion->query($sql) === TRUE) {
    
    echo "<script>alert('Alumno Actualizado Correctamente');</script>";
  } else {
    echo "<script>alert('Error al Actualizar el Alumno: ');</script>" . $conexion->error;
  }
} 


$conexion->close();
echo "<script>location.href='buscar.html'</script>";

?>
</body>
</html>