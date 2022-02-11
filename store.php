<?php
include('conexion.php');

if(count($_POST) > 0){
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $ocupacion = $_POST['ocupacion'];

    $sql = "insert into escuela (nombres, apellido_paterno, apellido_materno, ocupacion)
    VALUES ('$nombre', '$apellidop', '$apellidom', '$ocupacion')";

    $conn->exec($sql);

    header('location : index.php');
}
        
?>