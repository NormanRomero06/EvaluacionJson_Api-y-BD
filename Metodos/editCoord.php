<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idC = $_POST["idC"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $fechaNac = $_POST["fechaNac"];
    $titulo = $_POST["titulo"];
    $email = $_POST["email"];
    $facultad = $_POST["facultad"];

    $query =
    "UPDATE coordinador SET nombres = ?, apellidos = ?, fechaNac = ?, titulo = ?, email = ?, facultad = ? WHERE idC = ?";

  $result = $mysql->execute_query($query, [
    $nombres,
    $apellidos,
    $fechaNac,
    $titulo,
    $email,
    $facultad,
    $idC,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}