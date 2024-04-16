<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borrar Alumno</title>
</head>
<body>

<?php
require_once 'conexion.php';

// Obtener el ID del alumno a eliminar
$id = $_GET['id'];

// Eliminar el registro del alumno
$sql = "DELETE FROM alumnos WHERE Id=$id";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Registro eliminado correctamente');</script>";

} else {
    echo "<script>alert('Error al eliminar el registro: ');</script>"  . $conexion->error;
 
}

$conexion->close();

echo "<script>location.href='buscar.html'</script>";


?>
