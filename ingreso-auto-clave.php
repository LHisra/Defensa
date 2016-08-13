<?php
    include_once "conexion.php";
    $ac_operativo=$_POST['ac_operativo'];
    $ac_descripcion=$_POST['ac_descripcion'];
    

    $sql = 'SELECT * FROM auto_clave';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
            $sql2 = "INSERT INTO auto_clave(ac_operativo, ac_descripcion) VALUES ('$ac_operativo', '$ac_descripcion');";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: control-auto-clave.php");
        
    

?>

