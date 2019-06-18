<?php
require 'conexion.php';
$consulta = $pdo->query("SELECT * FROM examen");
require 'librerias.php';
?>

<html>
<head>

</head>
<tbody>
<h3 class="text-center">Datos de los Estudiantes</h3>
<a href="index.html" class="btn btn-primary">Volver atras</a>
<div class="container-fluid">
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Ver foto</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($consulta as $item): ?>
            <tr>
                <td><?php echo $item['nombre']?></td>
                <td><?php echo $item['correo']?></td>
                <td><a href="fotos/<?php echo $item['nombre_imagen']?>">Ver foto</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</tbody>
</html>
