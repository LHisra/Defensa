<?php 
    include_once "conexion.php";
    $ac_cod=$_POST['ac_cod'];
    pg_query("DELETE FROM auto_clave WHERE ac_cod=".$ac_cod);
    header("Location: control-auto-clave.php");
?>