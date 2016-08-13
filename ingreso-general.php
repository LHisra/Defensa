<?php
    include_once "conexion.php";
    $ingeneral_solicitud=$_POST['ingeneral_solicitud'];
    $in_cod=$_POST['in_cod'];
    $ingeneral_entregada=$_POST['ingeneral_entregada'];

    $sql = "SELECT * FROM in_general";
    $result = pg_query($sql) or die('ERROR  BD');
    $dato = pg_fetch_array($result);
    
        $sql2 = "INSERT INTO in_general(ingeneral_solicitud, in_cod, ingeneral_entregada) VALUES ($ingeneral_solicitud, $in_cod, $ingeneral_entregada);";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: general.php");
    
?>