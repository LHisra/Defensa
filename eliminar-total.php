
<?php 
    include_once "conexion.php";
    $in_cod=$_POST['in_cod'];
    pg_query("DELETE FROM inyectadoras WHERE in_cod=".$in_cod);
    header("Location: total.php");
?>