<?php
    include_once "conexion.php";
    $ac_operativo=$_POST['ac_operativo'];
    $ac_descripcion=$_POST['ac_descripcion'];
    $ac_ac_fecha=$_POST['ac_fecha'];

    $date = date_create($ac_ac_fecha);
    $date2 = date_format($date, 'Y-m-d');
    
    $sql2 = "UPDATE auto_clave SET  ac_operativo = '$ac_operativo', ac_descripcion = '$ac_descripcion', ac_fecha = '$date2';";
    $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
    header("Location: control-auto-clave.php");
        
    

?>
