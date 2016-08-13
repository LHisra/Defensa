<?php
    include_once "conexion.php";
    $u_nombre=ucfirst(strtolower($_POST['u_nombre']));
    $sql = "SELECT  u_nombre  FROM unidad
    WHERE u_nombre = '".trim($u_nombre)."';";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    if($u_nombre == $dato['u_nombre'] ) {
        header("Location: unidad.php?error");
    }else {
        $sql2 = "INSERT INTO unidad(u_nombre) VALUES ('$u_nombre');";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: unidad.php");
        }
    
    
?>