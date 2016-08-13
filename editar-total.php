<?php
    include_once "conexion.php";
    $in_cod=$_POST['in_cod'];
    $in_cc=$_POST['in_cc'];
    $sql = "SELECT * FROM inyectadoras WHERE in_cod=$in_cod";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);
    
            $sql2 = "UPDATE inyectadoras SET in_cc=$in_cc WHERE in_cod=$in_cod;";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: total.php");
       
?>
