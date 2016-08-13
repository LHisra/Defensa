<?php
   include_once "conexion.php";

   
    $id=ucfirst(strtolower($_POST['id']));
    $pass=$_POST['pass'];
    
    $sql = "SELECT * FROM t_usuario WHERE id='$id'";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    if($pass == $dato['pass']){
        session_start();
        $_SESSION["id"]=$id;
        $_SESSION["tipo"]=$dato['tipo'];
        $_SESSION["nombre"]=$dato['nombre'];
        $_SESSION["apellido"]=$dato['apellido'];    
        header("Location: permanente.php");
    }else{
        header("Location: index.php?error");
    }

    
?>

