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
                    $("#tabla").DataTable();
                } );

                </script>
    </head>
    
<body>
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
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                                                         
                                                        <div class="row-fluid "> 
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
                                
                                </div>
                                <div class="panel panel-default panelmio">
                                    <h4 class="panel-title">    
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">    
                                            <div class="panel-heading" role="tab" id="headingTres">
                                               Inyectadoras
                                            </div>
                                        </a>
                                    </h4>    
                                    <div id="collapseCuatro" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingCuatro">
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
                                                    <div class="row-fluid resaltar"> 
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
                        <div><p class="text-pagina"> General Inyectadoras</p>
                            <table id="tabla" class="display    table table-hover table-bordered" >
                                <thead>
                                    <tr class="active">
                                        <th>Fecha</th>
                                        <th>Cantidad Solicitada</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad Entregada</th>
                                        <th>Cantidad Disponible</th>
                                        <th></th>
                                        <th></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM in_general';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);

                                            $sql6 = "SELECT * FROM inyectadoras where in_cod= '$dato[in_cod]'";
                                            $result6 = pg_query($sql6) or die('ERROR BD');
                                            $dato6 = pg_fetch_array($result6);
                                            echo "<tr>";
                                                $date = date_create($dato['ingeneral_fecha']);
                                                $date2 = date_format($date, 'd-m-Y');
                                                echo "<td class=''> $date2 </td>";
                                                echo "<td class=''> $dato[ingeneral_solicitud]</td>";
                                                echo "<td class=''> $dato6[in_cc] cc</td>";
                                                echo "<td class=''> $dato[ingeneral_entregada]</td>";
                                                echo "<td class=''> $dato6[in_cantidad] </td>";
                                                echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button> </td>";
                                                echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button> </td>";                                           
                                                
                                            echo "</tr>" ;
                                            echo "<div class='modal fade' id='bs-remove-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                echo "<div class='modal-dialog modal-sm'>";    
                                                echo"<div class='modal-content'>";
                                                        echo "<div class='modal-header'>";
                                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Eliminar Inyectadora</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                echo "<form method='POST' action='eliminar-general.php' name='eliminar-general'>";
                                                                echo " ¿Estas Seguro que quieres eliminar este registro?";
                                                                echo "<input type='hidden' class='form-control' value='$dato[ingeneral_cod]' name='ingeneral_cod'>   ";
                                                                echo "<input type='hidden' class='form-control' value='$dato6[in_cod]' name='in_cod'>   ";

                                                                
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
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Editar Inyectadora</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                
                                                                echo " <form  method='POST' action='editar-general.php' name='editar-general'>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Fecha</label>";
                                                                        echo "<input type='text' class='form-control' name='ingeneral_fecha' value='$date2'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Cantidad Solicitada</label>";
                                                                        echo "<input type='text' class='form-control' name='ingeneral_solicitud' value='$dato[ingeneral_solicitud]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Descripcion</label>";
                                                                            echo "<select class='form-control' name='in_cod'>";
                                                                                $sql6 = 'SELECT in_cod, in_cc FROM inyectadoras';
                                                                                $result6 = pg_query($sql6) or die('ERROR BD');              
                                                                                $columna6 = pg_numrows($result6);
                                                                                for($i6=1; $i6<=$columna6; $i6++){
                                                                                    $dato6 = pg_fetch_array($result6);
                                                                                    echo "<option value='$dato6[in_cod]'>$dato6[in_cc] cc</option>";
                                                                                     }
                                                                            echo "</select>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Cantidad Entregada</label>";
                                                                        echo "<input type='text' class='form-control' name='ingeneral_entregada' value='$dato[ingeneral_entregada]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo " <br>¿Estas seguro que quieres editar ";
                                                                            echo "<input type='hidden' class='form-control' value='$dato[ingeneral_cod]' name='ingeneral_cod' >   ";
                                                                    echo "</div>";
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
                            $sql8 = "SELECT * FROM inyectadoras";
                            $result8 = pg_query($sql8) or die('ERROR BD');
                            $dato8 = pg_fetch_array($result8);

                            if($dato8==null) { ?>
                                <a class="btn btn-success" href="total.php" role="button" >
                                    Preciona aqui para agregar un tipo de Inyectadora <span class="glyphicon glyphicon-plus"> </span> 
                                </a>
                            <?php } else{ ?>
                        
                                     <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                                        Nuevo Registro <span class="glyphicon glyphicon-plus"> </span> 
                                    </button>
                                    
                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Registro Inyectadoras General</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="POST" action="ingreso-general.php" name="ingreso-total">
                                                        <div class="form-group">
                                                            <label>Cantidad Solicitada</label>
                                                            <input type="text" class="form-control" name="ingeneral_solicitud">
                                                        </div>         
                                                        <?php     
                                                            echo "<div class='form-group'>";
                                                                echo "<label>Descripcion</label>";
                                                                    echo "<select class='form-control' name='in_cod'>";
                                                                        $sql7 = 'SELECT in_cod, in_cc FROM inyectadoras';
                                                                        $result7 = pg_query($sql7) or die('ERROR BD');              
                                                                        $columna7 = pg_numrows($result7);
                                                                            for($i7=1; $i7<=$columna7; $i7++){
                                                                                $dato7 = pg_fetch_array($result7);
                                                                                    echo "<option value='$dato7[in_cod]'>$dato7[in_cc] cc</option>";
                                                                            }
                                                                    echo "</select>";
                                                            echo "</div>";
                                                        ?>
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" name="ingeneral_entregada" value="0">
                                                        </div>    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                    <div class="row-fluid">
                    
                    </div>
                </div>


        </div>
    </div>
    
</body>
</html>

<!-- 

                        -->

