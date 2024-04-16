<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Actualizacion Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="universidad.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<?php
require_once 'conexion.php';
// Obtener el DNI o C. Electronico a Borrar o Actualizar
$dni = $_GET['dni'];
$celectronico = $_GET['celectronico'];

// Obtener los datos del alumno
$sql = "SELECT * FROM alumnos WHERE CElectronico='$celectronico' or DNI='$dni'";
$result = $conexion->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Mostrar formulario de actualización con los datos del alumno
    echo "<h2>Editar Alumno</h2>";
    echo "<form method='post' action='actualizar.php'>";
    echo "<input type='hidden' name='id' value='{$row['Id']}'>";
    echo "Nombre: <input type='text' name='nombre' value='{$row['Nombre']}'><br>";
    echo "Apellido 1: <input type='text' name='apellido1' value='{$row['Apellido1']}'><br>";
    echo "Apellido 2: <input type='text' name='apellido2' value='{$row['Apellido2']}'><br>";
    echo "DNI: <input type='text' name='dni' value='{$row['DNI']}'><br>";
    echo "Telefono: <input type='text' name='telefono' value='{$row['Telefono']}'><br>";
    echo "Correo: <input type='text' name='celectronico' value='{$row['CElectronico']}'><br>";
    echo "Fecha Nacimiento: <input type='date' name='fnacimiento' value='{$row['FNacimiento']}'><br>";
    echo "Sexo: <input type='text' name='sexo' value='{$row['Sexo']}'><br>";
    echo "Facultad: <input type='text' name='facultad' value='{$row['Facultad']}'><br>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
} else {
    echo "<script>alert('Alumno no encontrado');</script>";
    }

?>
<br>
 <a class="btn btn-primary" id="inicio" href="index.html">Inicio</a> 
</body>
</html>