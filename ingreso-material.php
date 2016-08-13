<?php
    include_once "conexion.php";
    
    $cod=$_POST['cod'];
    $m_cantidad=$_POST['m_cantidad'];   
    $m_nombre=$_POST['m_nombre'];   
    $m_tipo=$_POST['m_tipo'];   
    $sql = "SELECT * FROM t_materiales WHERE cod=$cod";
    
    $result = pg_query($sql) or die('ERROR  BD');
    $dato = pg_fetch_array($result);
    
     $n= $dato['m_cantidad'] + $m_cantidad;

         
            $sql2 = "UPDATE t_materiales SET m_cantidad=$n WHERE cod=$cod;";   
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            $sql3 = "INSERT INTO t_ingreso( m_nombre, m_tipo, m_cantidad_ingresada) VALUES ('$m_nombre', '$m_tipo', $m_cantidad);";
            $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());

            header("Location: materiales.php");
       
    
   

?>