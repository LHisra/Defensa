<?php 
    include_once "conexion.php";
    $cod=$_POST['cod'];
    pg_query("DELETE FROM t_departamento WHERE cod=".$cod);
    header("Location: departamento.php");
?>