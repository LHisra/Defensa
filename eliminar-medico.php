
<?php 
    include_once "conexion.php";
    $m_cod=$_POST['m_cod'];
    pg_query("DELETE FROM medico WHERE m_cod=$m_cod");
    header("Location: medico.php");
?>