<?php 
    include_once "conexion.php";
    $se_cod=$_POST['se_cod'];
    pg_query("DELETE FROM salidad_entrada WHERE se_cod=".$se_cod);
    header("Location: salidad-entrada.php");
?>