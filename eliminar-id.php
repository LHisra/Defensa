<?php 
    include_once "conexion.php";
    $cod=$_POST['cod'];
    pg_query("DELETE FROM t_usuario WHERE cod=".$cod);
    header("Location: cuentas.php");
?>