<?php
    include_once "conexion.php";
    $p_cod=$_POST['p_cod'];   
    $u_cod=$_POST['u_cod'];   
    $se_nombre=ucfirst(strtolower($_POST['se_nombre']));
    $m_cod=$_POST['m_cod'];
    $se_recibe=$_POST['se_recibe'];


        
        $sql2 = "INSERT INTO salidad_entrada (se_fecha, p_cod, u_cod, se_nombre, m_cod, se_recibe)
        VALUES (now(), $p_cod, $u_cod, '$se_nombre',$m_cod, '$se_recibe');";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: salidad-entrada.php");
        
   

?>