<?php
    include_once "conexion.php";
    $cod=$_POST['cod'];
    $ci=ucfirst(strtolower($_POST['ci']));
    $nombre=ucfirst(strtolower($_POST['nombre']));
    $apellido=ucfirst(strtolower($_POST['apellido']));
    $id=ucfirst(strtolower($_POST['id']));
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $tipo=$_POST['tipo'];


    $sql = "SELECT  id, ci  FROM t_usuario
    WHERE id = '".trim($id)."';";
    $result = pg_query($sql) or die('ERROR BD');
    $dato = pg_fetch_array($result);        
    
    $sql2 = "SELECT  id, ci  FROM t_usuario
    WHERE ci = '".trim($ci)."';";
    $result2 = pg_query($sql2) or die('ERROR BD');
    $dato2 = pg_fetch_array($result2);        
    
        if($pass2==$pass){
            if($id == $dato['id'] ) {
                header("Location: cuentas.php?errorid");
            }elseif($ci == $dato2['ci']) {
                header("Location: cuentas.php?errorci");
            }else{

                $sql2 = "INSERT INTO t_usuario(ci, nombre, apellido, id, pass, tipo) VALUES ('$ci', '$nombre', '$apellido', '$id', '$pass', $tipo);";
                $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
                echo $tipo;
                header("Location: cuentas.php");
            }
        }else{
        header("Location: cuentas.php?errorcontra");

        }    
?>
