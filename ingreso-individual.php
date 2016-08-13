<?php
    include_once "conexion.php";
    $in_cod=$_POST['in_cod'];
    $inindividual_solicitada=$_POST['inindividual_solicitada'];
    $inindividual_entregada=$_POST['inindividual_entregada'];
    $u_cod=$_POST['u_cod'];
    $inindividual_servicio=$_POST['inindividual_servicio'];

    $sql = "SELECT * FROM in_individual";
    $result = pg_query($sql) or die('ERROR  BD');
    $dato = pg_fetch_array($result);
    
        $sql2 = "INSERT INTO in_individual(in_cod, inindividual_solicitada, inindividual_entregada, u_cod, inindividual_servicio) VALUES ($in_cod, $inindividual_solicitada, $inindividual_entregada, $u_cod, '$inindividual_servicio')";
        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: individual.php");
    
?>