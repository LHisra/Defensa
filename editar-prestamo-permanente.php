<?php
    include_once "conexion.php";
    $pres_cod=$_POST['pres_cod'];
    $p_cod=$_POST['p_cod'];
    $pres_cantidad=$_POST['pres_cantidad'];
    $pres_fecha_e=$_POST['pres_fecha_e'];
    $pres_devuelto=$_POST['pres_devuelto'];
    $pres_fecha_i=$_POST['pres_fecha_i'];
    
    $date = date_create($pres_fecha_e);
    $date2 = date_format($date, 'Y-m-d');
    
    
  
    if($pres_devuelto == 'No'){
        $sql3 = "UPDATE prestamo_material
        SET p_cod='$p_cod', pres_cantidad=$pres_cantidad, pres_fecha_e='$date2'
        WHERE pres_cod=$pres_cod; ";
        $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: prestamo-permanente.php");
    }elseif($pres_fecha_i == 'No hay fecha'){
        $sql4 = "UPDATE prestamo_material
        SET p_cod=$p_cod, pres_cantidad=$pres_cantidad, pres_fecha_e='$pres_fecha_e', pres_devuelto='$pres_devuelto',pres_fecha_i= now()
        WHERE pres_cod=$pres_cod; ";
        $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: prestamo-permanente.php");
    }

    else {
        $date3 = date_create($pres_fecha_i);
        $date4 = date_format($date3, 'Y-m-d');
        $sql4 = "UPDATE prestamo_material
        SET p_cod=$p_cod, pres_cantidad=$pres_cantidad, pres_fecha_e='$date2', pres_devuelto='$pres_devuelto',pres_fecha_i= '$date4'    
        WHERE pres_cod=$pres_cod; ";
        $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        
        header("Location: prestamo-permanente.php");
        }
        

?>

