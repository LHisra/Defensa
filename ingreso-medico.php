<?php
    include_once "conexion.php";
    $m_ci=ucfirst(strtolower($_POST['m_ci']));
    $m_nombre=ucfirst(strtolower($_POST['m_nombre']));
    $m_apellido=ucfirst(strtolower($_POST['m_apellido']));
    $u_cod=$_POST['u_cod'];
    
    $sql = "SELECT  m_ci  FROM medico
    WHERE m_ci = '".trim($m_ci)."';";
    
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    if($m_ci == $dato['m_ci'] ) {
        header("Location: medico.php?error");
    }else {
        $sql2 = "INSERT INTO medico(m_ci, m_nombre, m_apellido, u_cod) 
        VALUES ('$m_ci', '$m_nombre', '$m_apellido', $u_cod);";

        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: medico.php");
        }
?>

