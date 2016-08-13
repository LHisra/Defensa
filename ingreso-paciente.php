<?php
    include_once "conexion.php";
    $p_ci=ucfirst(strtolower($_POST['p_ci']));
    $p_nombre=ucfirst(strtolower($_POST['p_nombre']));
    $p_apellido=ucfirst(strtolower($_POST['p_apellido']));
    
    $sql = "SELECT  p_ci  FROM paciente
    WHERE p_ci = '".trim($p_ci)."';";
    
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    if($p_ci == $dato['p_ci'] ) {
        header("Location: paciente.php?error");
    }else {
        $sql2 = "INSERT INTO paciente(p_ci, p_nombre, p_apellido) 
        VALUES ('$p_ci', '$p_nombre', '$p_apellido');";

        $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
        header("Location: paciente.php");
        }
?>

