<?php 
    include_once "conexion.php";
    $cod=$_POST['cod'];
    pg_query("DELETE FROM t_materiales WHERE cod=".$cod);
    header("Location: materiales.php");
?>