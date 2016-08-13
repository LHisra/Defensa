<?php
    include_once "conexion.php";
    
    $in_cod=$_POST['in_cod'];
    $inturno_dia=$_POST['inturno_dia'];
    $inturno_ts=$_POST['inturno_ts'];
    $inturno_ns=$_POST['inturno_ns'];
    
    $total = $inturno_dia +$inturno_ts+$inturno_ns;
    $sql2 ="SELECT * FROM inyectadoras WHERE in_cod=$in_cod;";      
    $result2 = pg_query($sql2) or die('ERROR BD');
    $columna2 = pg_numrows($result2);
    $dato = pg_fetch_array($result2);
    
    if($total > $dato['in_cantidad']){
            header("Location: turno.php?error");

    }else{

        $sql3 = "INSERT INTO in_turno(
            inturno_fecha, in_cod, inturno_ts, inturno_ns, inturno_total, inturno_dia)
    VALUES( now(), $in_cod, $inturno_ts, $inturno_ns, $total, $inturno_dia);";
    $result3 = pg_query($sql3) or die('ERROR BD');
    header("Location: turno.php");
    }
    
    ?>