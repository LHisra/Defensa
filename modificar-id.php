<?php
    include_once "conexion.php";
    $_ECI=null;
    $cod=$_POST['cod'];
    $ci=$_POST['ci'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $tipo=$_POST['tipo'];


    $sql = 'SELECT * FROM t_usuario';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
    if($dato['id']!=$id and $dato['ci']!=$ci){
        if($pass==$pass2) 
            $sql2 = "UPDATE t_usuario SET ci='$ci', nombre='$nombre', apellido='$apellido', id='$id', pass='$pass', tipo='$tipo' WHERE cod=$cod;";
            
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: cuentas.php");
        }
    
    if($dato['ci']==$ci){
        session_start();
        $ECI=1;    
        header("Location: cuentas.php");
    }
?>