
<?php 
    include_once "conexion.php";
    $p_cod=$_POST['p_cod'];
    pg_query("DELETE FROM m_permanente WHERE p_cod=".$p_cod);
    header("Location: permanente.php");
?>