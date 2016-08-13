<?php
    include_once "conexion.php";
    $p_nombre=ucfirst(strtolower($_POST['p_nombre']));
    $p_cantidad=$_POST['p_cantidad'];
    
    $sql = "SELECT  p_nombre  FROM m_permanente
    WHERE p_nombre = '".trim($p_nombre)."';";
    
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    if($p_nombre == $dato['p_nombre'] ) {
        header("Location: permanente.php?eli");
    }else {
        $sql2 = "INSERT INTO m_permanente( p_nombre, p_cantidad) VALUES ('$p_nombre', $p_cantidad);";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: permanente.php");
        }
?>

