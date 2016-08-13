<?php
    include_once "conexion.php";
    $d_nombre=$_POST['d_nombre'];
    $d_descripcion=$_POST['d_descripcion'];
    

    $sql = 'SELECT * FROM t_departamento';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
     
            $sql2 = "INSERT INTO t_departamento(d_nombre, d_descripcion) VALUES('$d_nombre', '$d_descripcion');";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: departamento.php");
        
    
    
    
?>