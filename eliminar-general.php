<?php 
    include_once "conexion.php";
    $ingeneral_cod=$_POST['ingeneral_cod'];
    $in_cod=$_POST['in_cod'];
  	

    pg_query("DELETE FROM in_general WHERE ingeneral_cod=".$ingeneral_cod);
    
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