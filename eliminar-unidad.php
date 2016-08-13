<?php 
    include_once "conexion.php";
    $u_cod=$_POST['u_cod'];
    pg_query("DELETE FROM unidad WHERE u_cod=".$u_cod);
    header("Location: unidad.php");
?>