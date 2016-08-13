<?php
    include_once "conexion.php";
    $p_cod=$_POST['p_cod'];
    $p_nombre=ucfirst(strtolower($_POST['p_nombre']));
    $p_cantidad=$_POST['p_cantidad'];
    
  
    $sql = "SELECT  p_cod, p_nombre FROM m_permanente
    WHERE p_nombre = '".trim($p_nombre)."';";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);  

    if($dato['p_cod'] == $p_cod){
        $sql3 = "UPDATE m_permanente
        SET p_nombre='$p_nombre', p_cantidad=$p_cantidad
        WHERE p_cod=$p_cod; ";
        $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: permanente.php");

    }elseif ($p_nombre == $dato['p_nombre'] ) {
        header("Location: permanente.php?eli");
    }else {
        $sql4 = "UPDATE m_permanente
        SET p_nombre='$p_nombre', p_cantidad=$p_cantidad
        WHERE p_cod=$p_cod; ";
        $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: permanente.php");
        }
?>
