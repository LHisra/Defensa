<?php
    include_once "conexion.php";
    $p_cod=$_POST['p_cod'];
    $pres_cantidad=$_POST['pres_cantidad'];

    	$sql = "SELECT * FROM m_permanente WHERE p_cod=$p_cod";
        $result = pg_query($sql) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        $dato = pg_fetch_array($result);

        if($dato['p_cantidad'] > $pres_cantidad){
        $sql2 = "INSERT INTO prestamo_material
            (p_cod, pres_cantidad, pres_fecha_e, pres_devuelto, pres_fecha_i) 
            VALUES
            ($p_cod, $pres_cantidad, now(), 'No', '2015-1-1');";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: prestamo-permanente.php");
        }else{
        header("Location: prestamo-permanente.php?errorcantidad");
        
        }
?>

