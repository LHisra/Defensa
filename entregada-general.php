<?php
    include_once "conexion.php";
    $in_cod=$_POST['in_cod'];
    $ingeneral_cod=$_POST['ingeneral_cod'];
    $ingeneral_entregada=$_POST['ingeneral_entregada'];

    $sql = "SELECT in_cantidad FROM inyectadoras WHERE in_cod=$in_cod";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);

    $in_cantidad  = $dato['in_cantidad'] + $ingeneral_entregada;
    echo $in_cantidad;         
          
            $sql2 = "UPDATE inyectadoras SET in_cantidad=$in_cantidad WHERE in_cod=$in_cod;";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
	            
    $sql3 = "SELECT ingeneral_entregada FROM in_general WHERE ingeneral_cod=$ingeneral_cod";
    $result3 = pg_query($sql3) or die('ERROR BD');
            
            $sql4 = "UPDATE in_general SET ingeneral_entregada=$ingeneral_entregada WHERE ingeneral_cod=$ingeneral_cod;";
            $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
    

            header("Location: general.php");
    
?>
