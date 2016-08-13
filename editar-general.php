<?php
    include_once "conexion.php";

    $ingeneral_cod=$_POST['ingeneral_cod'];
    $ingeneral_solicitud=$_POST['ingeneral_solicitud'];
    $in_cod=$_POST['in_cod'];
    $ingeneral_entregada=$_POST['ingeneral_entregada'];
    $ingeneral_fecha=$_POST['ingeneral_fecha'];

    $sql= "UPDATE in_general
            SET ingeneral_fecha='$ingeneral_fecha', ingeneral_solicitud=$ingeneral_solicitud, in_cod=$in_cod, 
            ingeneral_entregada=$ingeneral_entregada 
            WHERE ingeneral_cod=$ingeneral_cod;";
    $result = pg_query($sql) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
    
    $sql2 ="SELECT * FROM in_general; ";      
    $result2 = pg_query($sql2) or die('ERROR BD');
    $columna2 = pg_numrows($result2);
        $total= 0;
        for($i2=1; $i2<=$columna2; $i2++){
            $dato = pg_fetch_array($result2);
                
                $total = $total + $dato['ingeneral_entregada'];
            }
    
    $sql3= "UPDATE inyectadoras
            SET in_cantidad=$total
            WHERE in_cod=$in_cod;";
    $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: general.php");
?>

