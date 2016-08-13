<?php
    include_once "conexion.php";
    
    $cod=$_POST['cod'];
    $m_cantidad=$_POST['m_cantidad'];   
    $m_nombre=$_POST['m_nombre'];   
    $m_tipo=$_POST['m_tipo'];   
    $me_nombre=$_POST['me_nombre'];   
    $me_apellido=$_POST['me_apellido'];   
    $d_nombre=$_POST['d_nombre'];   
    $sql = "SELECT * FROM t_materiales WHERE cod=$cod";
    $sql1 = "SELECT * FROM t_egreso WHERE cod=$cod";
    
    $result = pg_query($sql) or die('ERROR  BD');
    $result1 = pg_query($sql1) or die('ERROR  BD');
    
    $dato = pg_fetch_array($result);
    $dato1 = pg_fetch_array($result1);
    
    if($m_cantidad >= $dato1['m_cantidad_egresada']){ 
    $n= $dato['m_cantidad'] - $m_cantidad;    
    if($dato['m_cantidad'] >= $m_cantidad){
         
            $sql2 = "UPDATE t_materiales SET m_cantidad=$n WHERE cod=$cod;";   
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            $sql3 = "UPDATE t_egreso SET m_cantidad_egresada=$m_cantidad WHERE cod=$cod;";
            $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());

            header("Location: egreso-material.php");
        } else {
            header("Location: egreso-material.php");
    
    }
    }
    if($m_cantidad < $dato1['m_cantidad_egresada']){
    $n= $dato['m_cantidad'] + $m_cantidad;    
        if($dato['m_cantidad'] >= $m_cantidad){
         
            $sql2 = "UPDATE t_materiales SET m_cantidad=$n WHERE cod=$cod;";   
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            $sql3 = "UPDATE t_egreso SET m_cantidad_egresada=$m_cantidad WHERE cod=$cod;";
            $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());

            header("Location: egreso-material.php");
        } else {
            header("Location: egreso-material.php");
    
        }
    }

?>

