<?php
    include_once "conexion.php";
    $in_cc=$_POST['in_cc'];
    $in_cantidad=$_POST['in_cantidad'];
    

    $sql = 'SELECT * FROM inyectadoras';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
    if($dato['in_cc']!=$in_cc ){
         
            $sql2 = "INSERT INTO inyectadoras( in_cc, in_cantidad) VALUES ('$in_cc', $in_cantidad);";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: total.php");
        }else {
            header("Location: total.php");
    
    }

?>

