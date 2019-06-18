<?php
require 'librerias.php';
?>
<html>
<head>

</head>
<body>
<div class="d-flex justify-content-center">
    <form action="saveAlumno.php" method="post" enctype="multipart/form-data" style="width: 50%">
        <strong >Formulario para ingresar datos del alumno</strong>
        <hr>
        <div class="form-group">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" required name="Nombre">
        </div>
        <div class="form-group">
            <label for="">Imagen</label>
            <input class="form-control" type="file" required name="Imagen">
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input type="email" class="form-control" required name="Correo">
        </div>
        <div>
            <input type="submit" value="Guardar ">
        </div>
    </form>
</div>
</body>
</html>