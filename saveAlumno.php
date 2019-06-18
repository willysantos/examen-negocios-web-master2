<?php
require 'conexion.php';


if (!empty($_POST)){


    $archivo =  $_FILES['Imagen']['name'];
    $ubicacion = $_FILES['Imagen']['tmp_name'];
    $nombre = time() .'-'. mt_rand(1, 1000) . '-'.$archivo;
    move_uploaded_file($ubicacion, "fotos/".$nombre);
    print_r($nombre);

    $nombreCompleto = $_POST['Nombre'];
    $correo = $_POST['Correo'];

    $errores = [];

    if (empty($nombreCompleto)) {
        $errores[] = "El campo del nombre no debe estar vacio";
    }
    if (empty($correo)){
        $errores[] = 'El campo del correo electronico no debe estar vacio';
    }

    if (count($errores) == 0){
        $smtl = $pdo->prepare("INSERT INTO examen (nombre, nombre_imagen, correo) VALUES (?,?,?)");
        $smtl->bindValue(1, $nombreCompleto);
        $smtl->bindValue(2, $nombre);
        $smtl->bindValue(3, $correo);
        $smtl->execute();
        echo 'Se guardo exitosamente. No se ecnontraron errores';
    }else{
        echo "Los errores encontrados son ".count($errores)." los cuales son: <br>";
        for ($i = 0; $i < count($errores); $i++){
            echo "#$i - $errores[$i]<br>";
        }
    }
    echo "<br>";
    echo "<a href='index.html'>Volver a la Pagina Principal</a>";
}


?>