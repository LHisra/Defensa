<?php
    session_start();
    if($_SESSION==null){
        header("Location: index.php");
    }
    
?>

<!doctype html>
<html lang="es">
                      
	<head>
        <meta charset=UTF-8>
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
        <link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables.csss">
        <link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables_themeroller.css">
        <script type="text/javascript" language="javascript" src="css/DataTables/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="css/DataTables/media/js/jquery.dataTables.js"></script>

                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css.map">
                <link rel="stylesheet" type="text/css" href="css/head.css">
                <link rel="stylesheet" type="text/css" href="css/body.css">        
                <link rel="stylesheet" type="text/css" href="css/footer.css">
                <link rel="stylesheet" type="text/cs s" href="css/main.css">
                <link rel="stylesheet" type="text/css" href="css/menu.css">
                <link rel="stylesheet" type="text/css" href="css/cuerpo.css">
                <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>

                <script type="text/javascript" >
                    $(document).ready(function() {
                    $("#tablee").DataTable();
                } );

                </script>
    </head>
<body>
   <?php
        if(isset($_GET['errorcantidad'])){ 
            echo "
                <div id='sub' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog '>
                        <div class='modal-body'>
                            <div class=' alert alert-danger'>
                                La cantidad solicitada es Mayor a la cantidad disponible <span class='glyphicon glyphicon-'></span>
                                <span class='close' data-dismiss='modal'><button type='button' class='btn btn-default btn-xs' ><b>Aceptar</b></button></span>            
                            </div>
                        </div>
                    </div>
                </div>
                <script language='javascript'>
                    $('#sub').modal({
                        show: true
                    })
                </script>"; 
        }else{ 
            echo ""; 
        } 
    ?>


    <div id="main" class=row-fluid>
        <div id="head" class ="col-lg-12 row-fluid" > 
            <div class="col-lg-9"> 
                <p class="banner-text"> Hospital Periferico de Coche</p>
            </div>
            <div class="col-lg-3"> </div> 
                <p class="banner-text"> <span class="glyphicon glyphicon-user btn-lg"></span> <?php echo "Hola ".$_SESSION['nombre']. " ".$_SESSION['apellido'] ?> 
                    <a href="index.php"><span class="glyphicon glyphicon-remove btn-lg"> </span></a> </p>
                
        </div>
        <div id="cuerpo" class ="row-fluid" > 
            
                <div id="menu" class=" well col-lg-2"> 
                        <a href="inicio.php">
                            <div class="row">
                                
                            </div>
                        </a>
                        <div class="row-fluid">
                            <div class="col-lg-12">    
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default panelmio">
                                    <h4 class="panel-title">        
                                        <a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                Material Esteril
                                            </div>
                                        </a>
                                    </h4>    
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="permanente.php">
                                                         
                                                        <div class="row-fluid"> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Permanente
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="prestamo-permanente.php">
                                                         
                                                        <div class="row-fluid resaltar"> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Prestamo/Per
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="salidad-entrada.php"> 
                                                         
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> Salidad/Entrada
                                                        </div> 
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">    
                                                <div class="panel-heading" role="tab" id="headingTres">
                                                   Inyectadoras
                                                </div>
                                            </a>
                                        </h4>    
                                        <div id="collapseCuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCuatro">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="total.php"> 
                                                        <div class="row-fluid">
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> 
                                                            Total
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="general.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            General
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="turno.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Turno
                                                        </div> 
                                                    </a>
                                                </h4>
                                                    
                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">    
                                                <div class="panel-heading" role="tab" id="headingCinco">
                                                   Agregar
                                                </div>
                                            </a>
                                        </h4>    
                                        <div id="collapseCinco" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCinco">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="unidad.php"> 
                                                        <div class="row-fluid">
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> 
                                                            Unidad
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="Medico.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Medico
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="paciente.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Paciente
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="cuentas.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Cuentas
                                                        </div> 
                                                    </a>
                                                </h4>    
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a href="control-auto-clave.php">    
                                                <div class="panel-heading" role="tab">
                                                    Control Auto Clave
                                                    </div>
                                            </a>
                                        </h4>    
                                        
                                    </div>
                                </div>
                            </div>        
                        </div>        
                         
                         <div class="row-fluid">
                           <div class="col-lg-12 item" id="ubv-logo2"> </div>
                        </div>
                </div>
                <div class="col-lg-9">
                    
                                              
                    <div class="col-lg-2"> 

                    </div>
                    <div class="col-lg-10 row-fluid cuerpo-top" >
                        <div><p class="text-pagina"> Pretamos de Materiales Permanentes</p>
                            <table id="tablee" class="   table table-hover table-bordered" >
                                <thead>
                                    <tr class="active">
                                        <th>Nombre</th>
                                        <th>Cantidad Prestada</th>
                                        <th>Fecha de Prestamo</th>
                                        <th>Devuelto</th>
                                        <th>Fecha de devolucion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                  
                               <?php
                                
                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM prestamo_material';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);
                                            $sql2 = 'SELECT p_nombre FROM m_permanente WHERE p_cod=$$dato[m_cod]';
                                            $result2 = pg_query($sql) or die('ERROR BD');
                                            $dato2 = pg_fetch_array($result2);
                                                  
                                            echo "<tr>";
                                                echo "<td> ";
                                                    $sql4 = "SELECT p_nombre FROM m_permanente WHERE p_cod ='$dato[p_cod]'";
                                                    $result4 = pg_query($sql4) or die('ERROR BD');
                                                    $dato4 = pg_fetch_array($result4);            
                                                    echo "$dato4[p_nombre]";
                                                 echo "</td>";
                                                 echo "<td class=''> $dato[pres_cantidad]</td>";
                                                 $date = date_create($dato['pres_fecha_e']);
                                                 $date2 = date_format($date, 'd-m-Y');

                                                 echo "<td class=''> $date2</td>";
                                                 echo "<td class=''> $dato[pres_devuelto]</td>";
                                                 echo "<td class=''>" ;

                                                    if($dato["pres_fecha_i"] != "2015-01-01"){
                                                    $date3 = date_create($dato['pres_fecha_i']);
                                                    $date4 = date_format($date3, 'd-m-Y');
                                                    echo"$date4";
                                                    }else{
                                                        echo "No hay fecha";
                                                    }
                                                 echo"</td>";
                                                echo "</td>";
                                                    echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button> </td>";
                                                    echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button> </td>";                                           
                                            echo "</tr>" ;
                                            
                                        
                                        echo "<div class='modal fade' id='bs-remove-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                echo "<div class='modal-dialog modal-sm'>";    
                                                echo"<div class='modal-content'>";
                                                        echo "<div class='modal-header'>";
                                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Eliminar</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                echo "<form method='POST' action='eliminar-prestamo-permanente.php' name='eliminar-prestamo-permanente'>";
                                                                echo " ¿Estas Seguro que quieres eliminar este registro?";
                                                                echo "<input type='hidden' class='form-control' value='$dato[pres_cod]' name='pres_cod'>   ";
                                                            echo "</div>";
                                                        echo "<div class='modal-footer'>";
                                                        echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
                                                        echo "<button type='submit' class='btn btn-danger'>Eliminar</button>";
                                                        echo" </div>";
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "</form>";
                                            echo "</div>";
                                            echo "</div> ";
                                            
                                                                                        
                                            echo "<div class='modal fade' id='bs-edit-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                echo "<div class='modal-dialog modal-sm'>";    
                                                echo"<div class='modal-content'>";
                                                        echo "<div class='modal-header'>";
                                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Editar Marterial</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                
                                                                echo " <form  method='POST' action='editar-prestamo-permanente.php' name='editar-prestamo-permanente'>";
                                                                    echo "<div class='form-group'>";
                                                                            echo "<label>Material a Prestar ($dato4[p_nombre]) </label>";
                                                                            echo "<select class='form-control' name='p_cod'>";             
                                                                            $sql6 = 'SELECT p_cod, p_nombre FROM m_permanente';
                                                                            $result6 = pg_query($sql6) or die('ERROR BD');              
                                                                            $columna6 = pg_numrows($result6);
                                                                            for($i6=1; $i6<=$columna6; $i6++){
                                                                                    $dato6 = pg_fetch_array($result6);
                                                                                    echo "<option value='$dato6[p_cod]'>$dato6[p_nombre]</option>";
                                                                                     }
                                                                            echo "</select>";
                                                                        echo "</div>";
                                                                        
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Cantidad Prestada</label>";
                                                                        echo "<input type='text' class='form-control' name='pres_cantidad' value='$dato[pres_cantidad]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Fecha de prestamo</label>";
                                                                        echo "<input type='text' class='form-control' name='pres_fecha_e' value='$date2'>";
                                                                    echo "</div>";
                                                                    if($dato['pres_devuelto'] == 'No'){    
                                                                        echo "<div class='form-group'>"; 
                                                                             echo "<label>Devuelto</label>";
                                                                            echo "<br>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='pres_devuelto' id='opciones_1' value='Si' >";
                                                                                echo "Si";
                                                                              echo "</label>";
                                                                            echo "</div>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='pres_devuelto' id='opciones_2' value='No' checked>";
                                                                                echo "No";
                                                                                echo "</label>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                    }else{    echo "<div class='form-group'>"; 
                                                                             echo "<label>Devuelto</label>";
                                                                            echo "<br>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='pres_devuelto' id='opciones_1' value='Si' checked>";
                                                                                echo "Si";
                                                                              echo "</label>";
                                                                            echo "</div>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='pres_devuelto' id='opciones_2' value='No' >";
                                                                                echo "No";
                                                                                echo "</label>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                    }    
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Fecha de Egreso</label>";
                                                                            if($dato["pres_fecha_i"] == "2015-01-01"){
                                                                            echo "<input type='text' class='form-control' name='pres_fecha_i' value='No hay fecha'>";
                                                                            }else{
                                                                            echo "<input type='text' class='form-control' name='pres_fecha_i' value='$date4'>";
                                                                            }
                                                                        echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo " <br>¿Estas seguro que quieres editar este registro?";
                                                                            echo "<input type='hidden' class='form-control' value='$dato[pres_cod]' name='pres_cod'>";
                                                                    echo "</div>";
                                                            
                                                        echo "<div class='modal-footer'>";
                                                        echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
                                                        echo "<button type='submit' class='btn btn-primary'>Editar</button>";
                                                        echo" </div>";
                                                    echo "</div>";
                                                echo"</form>";
                                            echo "</div>";
                                            echo "</div> ";
                                            echo "</div> ";
                                        }
                                ?>                                                                             
                                </tbody>
                            
                            
                            </table>        
                        </div>
                        
                        <?php 
                            $sql8 = "SELECT * FROM m_permanente";
                            $result8 = pg_query($sql8) or die('ERROR BD');
                            $dato8 = pg_fetch_array($result8);

                            if($dato8==null) { ?>
                                <a class="btn btn-success" href="permanente.php" role="button" >
                                    Preciona aqui para agregar un Material <span class="glyphicon glyphicon-plus"> </span> 
                                </a>
                            <?php } else{ ?>
                        
                                <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                                    Nuevo prestamo <span class="glyphicon glyphicon-plus"> </span> 
                                </button>
                                
                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Registro de Prestamo</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form  method="POST" action="ingreso-prestamo-permanente.php" name="ingreso-prestamo-permanente">
                                                <div class="form-group">
                                                    <?php     
                                                        
                                                            echo "<label>Material a Prestar</label>";
                                                            echo "<select class='form-control' name='p_cod'>";
                                                                $sql7 = 'SELECT p_cod, p_nombre FROM m_permanente';
                                                                $result7 = pg_query($sql7) or die('ERROR BD');              
                                                                $columna7 = pg_numrows($result7);
                                                                for($i7=1; $i7<=$columna7; $i7++){
                                                                    $dato7 = pg_fetch_array($result7);
                                                                    echo "<option value='$dato7[p_cod]  '>$dato7[p_nombre]</option>";
                                                                     }
                                                            echo "</select>";
                                                        
                                                    ?>    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Cantidad a prestar</label>
                                                    <input type="number" class="form-control"  name="pres_cantidad" required >
                                                </div>                                  
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-danger btn-sm">Guardar</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        
                            <?php } ?>



                    </div>
                    <div class="row-fluid">
                    
                    </div>
                </div>


        </div>
    </div>
    
</body>
</html>

