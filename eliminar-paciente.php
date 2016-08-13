
<?php 
    include_once "conexion.php";
    $p_cod=$_POST['p_cod'];
    pg_query("DELETE FROM paciente WHERE p_cod=$p_cod");
    header("Location: paciente.php");
?>