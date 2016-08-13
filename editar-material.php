<?php
    include_once "conexion.php";
    $_ECI=null;
    $cod=$_POST['cod'];
    $m_nombre=$_POST['m_nombre'];
    $m_tipo=$_POST['m_tipo'];
    $m_descripcion=$_POST['m_descripcion'];
    

    $sql = 'SELECT * FROM t_materiales';
    $result = pg_query($sql) or die('ERROR BD');
    $cod = pg_numrows($result);
    $dato = pg_fetch_array($result);
    
    if($dato['m_nombre']==$m_nombre and $dato['m_tipo']!=$m_tipo){
         
            $sql2 = "UPDATE t_materiales SET m_nombre='$m_nombre', m_tipo='$m_tipo', m_descripcion ='$m_descripcion'  WHERE cod=$cod;";
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: materiales.php");
        } 
    if($dato['m_nombre']!=$m_nombre and $dato['m_tipo']!=$m_tipo){
         
            $sql2 = "UPDATE t_materiales SET m_nombre='$m_nombre', m_tipo='$m_tipo', m_descripcion ='$m_descripcion'  WHERE cod=$cod;";
            
            
            $result2 = pg_query($sql2) or die('ERROR AL INSERTAR DATOS:' . pg_last_error());
            header("Location: materiales.php");
        } else {
            header("Location: materiales.php");
    
    }

?>
