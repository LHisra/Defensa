<?php
    include_once "conexion.php";
    $m_cod=$_POST['m_cod'];
    $m_ci=ucfirst(strtolower($_POST['m_ci']));
    $m_nombre=ucfirst(strtolower($_POST['m_nombre']));
    $m_apellido=ucfirst(strtolower($_POST['m_apellido']));
    $u_cod=$_POST['u_cod'];
    
  
    $sql = "SELECT  m_cod, m_ci FROM medico
    WHERE m_ci = '".trim($m_ci)."';";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);  
    
    if($dato['m_cod'] == $m_cod){
        $sql3 = "UPDATE medico
        SET  m_ci='$m_ci', m_nombre='$m_nombre', m_apellido='$m_apellido', u_cod=$u_cod
        WHERE m_cod=$m_cod; ";
        $result3 = pg_query($sql3) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: medico.php");

    }elseif ($m_ci == $dato['m_ci'] ) {
        header("Location: medico.php?error");
    }else {
        $sql4 = "UPDATE medico
        SET  m_ci='$m_ci', m_nombre='$m_nombre', m_apellido='$m_apellido', u_cod=$u_cod
        WHERE m_cod=$m_cod; ";
        $result4 = pg_query($sql4) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: medico.php");
        }
?>
