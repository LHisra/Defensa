<?php
    include_once "conexion.php";
    $rda_cod=$_POST['rda_cod'];
    $rda_cpe=$_POST['rda_cpe'];
    $rda_cdes=$_POST['rda_cdes'];
    $rda_descripcion=$_POST['rda_descripcion'];
    
        $sql2 = "UPDATE re_de_ad SET rda_cpe=$rda_cpe, rda_cdes=$rda_cdes, rda_descripcion='$rda_descripcion' WHERE rda_cod=$rda_cod";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: interna.php");
        
    

?>

