
<?php 
    include_once "conexion.php";
    $pres_cod=$_POST['pres_cod'];
    pg_query("DELETE FROM prestamo_material WHERE pres_cod=".$pres_cod);
    header("Location: prestamo-permanente.php");
?>