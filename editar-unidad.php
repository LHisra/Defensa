<?php
    include_once "conexion.php";
    $u_cod=$_POST['u_cod'];
    $u_nombre=ucfirst(strtolower($_POST['u_nombre']));
    
    $sql = "SELECT  u_cod, u_nombre FROM unidad
    WHERE u_nombre = '".trim($u_nombre)."';";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);  

    $sql2 = "SELECT  u_cod FROM unidad
    WHERE u_cod = $u_cod";
    $result2 = pg_query($sql2) or die('ERROR BD');
    $dato2 = pg_fetch_array($result2);

    if($dato['u_cod'] == $dato2['u_cod']){
        $sql3 = "UPDATE unidad
        SET u_nombre='$u_nombre'
        WHERE u_cod=$u_cod; ";
        $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: unidad.php");

    }elseif ($u_nombre == $dato['u_nombre'] ) {
        header("Location: unidad.php?error");
    }else {
        $sql4 = "UPDATE unidad
        SET u_nombre='$u_nombre'
        WHERE u_cod=$u_cod; ";
        $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: unidad.php");
        }

?>
