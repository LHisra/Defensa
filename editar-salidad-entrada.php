<?php
    include_once "conexion.php";
    $se_cod=$_POST['se_cod'];
    $se_fecha=$_POST['se_fecha'];
    $p_cod=$_POST['p_cod'];
    $u_cod=$_POST['u_cod'];
    $se_nombre=$_POST['se_nombre'];
    $m_cod=$_POST['m_cod'];
    $se_recibe=$_POST['se_recibe'];
    
    $sql="UPDATE salidad_entrada SET se_fecha='$se_fecha', p_cod=$p_cod, u_cod=$u_cod, se_nombre='$se_nombre', m_cod=$m_cod, se_recibe='$se_recibe'
    WHERE se_cod=$se_cod ;";
    $result = pg_query($sql) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: salidad-entrada.php");
?>

