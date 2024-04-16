<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado Alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="universidad.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once 'conexion.php';

// Consulta para seleccionar todos los alumnos
$sql = "SELECT * FROM alumnos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "<h2 class='mb-4'>Listado de Alumnos</h2>";
    echo "<table id='tabla1' border='2'>";
    echo "<tr class='form-group'><th>Id</th><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Correo</th><th>Telefono</th><th>Fecha Nacimiento</th><th>Sexo</th><th>Facultad</th><th>Acciones</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['Id']}</td>";
        echo "<td>{$row['Nombre']}</td>";
        echo "<td>{$row['Apellido1']} {$row['Apellido2']}</td>";
        echo "<td>{$row['DNI']}</td>";
        echo "<td>{$row['CElectronico']}</td>";
        echo "<td>{$row['Telefono']}</td>";
        echo "<td>{$row['FNacimiento']}</td>";
        echo "<td>{$row['Sexo']}</td>";
        echo "<td>{$row['Facultad']}</td>";
        echo "<td><a class='btn btn-primary' href='pactualizacionl.php?id={$row['Id']}'>Editar</a> | <a class='btn btn-primary' href='pborrar.php?id={$row['Id']}'>Eliminar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<script>alert('No se encontraron alumnos.');</script>";
}

$conexion->close();

?>
<br>
 <a class="btn btn-primary" id="inicio" href="index.html">Inicio</a> 
</body>
</html>
