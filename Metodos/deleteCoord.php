<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idC = $_POST["idC"];
    $my_query = "DELETE from coordinador where idC = $idC";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>