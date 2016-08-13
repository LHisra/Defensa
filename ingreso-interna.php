<?php
    include_once "conexion.php";
    $rda_cpe=$_POST['rda_cpe'];
    $rda_cdes=$_POST['rda_cdes'];
    $rda_descripcion=$_POST['rda_descripcion'];
    

    $sql = 'SELECT * FROM re_de_ad';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
            $sql2 = "INSERT INTO re_de_ad( rda_cpe, rda_cdes, rda_descripcion) VALUES ($rda_cpe, $rda_cdes, '$rda_descripcion');";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: interna.php");
        
    

?>

