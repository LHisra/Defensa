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
                                                         
                                                        <div class="row-fluid "> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Prestamo/Per
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="salidad-entrada.php"> 
                                                         
                                                        <div class="row-fluid resaltar"> 
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
                        <div>
                            <p class="text-pagina"> Salida/Entrada</p>
                                <table id="tabla" class="display    table table-hover table-bordered" >
                    <thead>
                        <tr class="active">
                            <th>Fecha</th>
                            <th>Paciente</th>
                            <th>Unidad</th>
                            <th>Nombre</th>
                            <th>Medico</th>
                            <th>Recibe</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                

                <tbody>
                    
                                    
                                <?php
                                
                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM salidad_entrada';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);
                                            
                                             echo "<tr>";
                                                $date = date_create($dato['se_fecha']);
                                                $date2 = date_format($date, 'd-m-Y');
                                                echo "<td class=''> $date2</td>";
                                                  echo "<td> ";
                                                    $sql3 = "SELECT p_nombre, p_apellido FROM paciente where  p_cod ='$dato[p_cod]'";
                                                    $result3 = pg_query($sql3) or die('ERROR BD');
                                                    $dato3 = pg_fetch_array($result3);            
                                                    echo "$dato3[p_nombre]";
                                                 echo "</td>";
                                                 echo "<td> ";
                                                    $sql4 = "SELECT u_nombre FROM unidad where  u_cod ='$dato[u_cod]'";
                                                    $result4 = pg_query($sql4) or die('ERROR BD');
                                                    $dato4 = pg_fetch_array($result4);            
                                                    echo "$dato4[u_nombre]";
                                                 echo "</td>";
                                                 echo "<td class=''> $dato[se_nombre]</td>";
                                                 echo "<td> ";
                                                    $sql5 = "SELECT m_nombre, m_apellido FROM medico where  m_cod ='$dato[m_cod]'";
                                                    $result5 = pg_query($sql5) or die('ERROR BD');
                                                    $dato5 = pg_fetch_array($result5);            
                                                    echo "$dato5[m_nombre] $dato5[m_apellido]";
                                                 echo "</td>";
                                                 echo "<td> $dato[se_recibe]";
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
                                                                echo "<form method='POST' action='eliminar-salidad-entrada.php' name='eliminar-salidad-entrada'>";
                                                                echo " ¿Estas Seguro que quieres eliminar este registro?";
                                                                echo "<input type='hidden' class='form-control' value='$dato[se_cod]' name='se_cod'>   ";

                                                                
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
                                                                
                                                                
                                                                echo " <form  method='POST' action='editar-salidad-entrada.php' name='editar-salidad-entrada'>";
                                                                        echo "<div class='form-group'>";
                                                                        echo "<label>Fecha</label>";
                                                                        echo "<input type='text' class='form-control' name='se_fecha' value='$date2'>";
                                                                        echo "</div>";
                                                                        echo "<div class='form-group'>";
                                                                        echo "<label>Paciente ($dato3[p_nombre])</label>";
                                                                            echo "<select class='form-control' name='p_cod'>";
                                                                                $sql10 = 'SELECT p_cod, p_nombre, p_apellido FROM paciente';
                                                                                $result10 = pg_query($sql10) or die('ERROR BD');              
                                                                                $columna10 = pg_numrows($result10);
                                                                                for($i10=1; $i10<=$columna10; $i10++){
                                                                                    $dato10 = pg_fetch_array($result10);
                                                                                    echo "<option value='$dato10[p_cod]'>$dato10[p_nombre] $dato10[p_apellido]</option>";
                                                                                     }
                                                                            echo "</select>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Departamento de Destino</label>";
                                                                            echo "<select class='form-control' name='u_cod'>";
                                                                                $sql20 = 'SELECT u_cod, u_nombre FROM unidad';
                                                                                $result20 = pg_query($sql20) or die('ERROR BD');              
                                                                                $columna20 = pg_numrows($result20);
                                                                                for($i20=1; $i20<=$columna20; $i20++){
                                                                                    $dato20 = pg_fetch_array($result20);
                                                                                    echo "<option value='$dato20[u_cod]'>$dato20[u_nombre]</option>";
                                                                                     }
                                                                            echo "</select>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Nombre del Material</label>";
                                                                        echo "<input type='text' class='form-control' name='se_nombre' value='$dato[se_nombre]'>";
                                                                    echo "</div>";
                                                                    if($dato['se_recibe'] == 'No'){    
                                                                        echo "<div class='form-group'>"; 
                                                                             echo "<label>Recibe</label>";
                                                                            echo "<br>";
                                                                            echo "<div class='radio-inline'>";  
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='se_recibe' id='opciones_1' value='Si' >";
                                                                                echo "Si";
                                                                              echo "</label>";
                                                                            echo "</div>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='se_recibe' id='opciones_2' value='No' checked>";
                                                                                echo "No";
                                                                                echo "</label>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                    }else{    echo "<div class='form-group'>"; 
                                                                             echo "<label>Recibe</label>";
                                                                            echo "<br>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='se_recibe' id='opciones_1' value='Si' checked>";
                                                                                echo "Si";
                                                                              echo "</label>";
                                                                            echo "</div>";
                                                                            echo "<div class='radio-inline'>";
                                                                              echo "<label class='checkbox-inline'>";
                                                                                echo "<input type='radio' name='se_recibe' id='opciones_2' value='No' >";
                                                                                echo "No";
                                                                                echo "</label>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                    } 
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Medico </label>";
                                                                                echo "<select class='form-control' name='m_cod'>";
                                                                                    $sql11 = 'SELECT m_cod, m_nombre, m_apellido FROM medico';
                                                                                    $result11 = pg_query($sql11) or die('ERROR BD');              
                                                                                    $columna11 = pg_numrows($result11);
                                                                                    for($i11=1; $i11<=$columna11; $i11++){
                                                                                        $dato11 = pg_fetch_array($result11);
                                                                                        echo "<option value='$dato11[m_cod]'>$dato11[m_nombre] $dato11[m_apellido]</option>";
                                                                                         }
                                                                                echo "</select>";
                                                                            
                                                                        echo "</div>";
                                                                    
                                                                    echo "<div class='form-group'>";
                                                                        echo " <br>¿Estas seguro que quieres editar?";
                                                                            echo "<input type='hidden' class='form-control' value='$dato[se_cod]' name='se_cod' placeholder=''>   ";
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

               
                    
                </tbody>
            </table>      
                        </div>
                        <br>
                        <?php 
                            $sql8 = "SELECT * FROM medico";
                            $result8 = pg_query($sql8) or die('ERROR BD');
                            $dato8 = pg_fetch_array($result8);


                            $sql9 = "SELECT * FROM paciente";
                            $result9 = pg_query($sql9) or die('ERROR BD');
                            $dato9 = pg_fetch_array($result9);

                            if($dato8==null) { ?>
                                <a class="btn btn-success" href="Medico.php" role="button" >
                                    Preciona aqui para agregar un Medico <span class="glyphicon glyphicon-plus"> </span> 
                                </a>
                            <?php } elseif($dato9==null){ ?>
                                <a class="btn btn-success" href="Paciente.php" role="button" >
                                    Preciona aqui para agregar un Paciente <span class="glyphicon glyphicon-plus"> </span> 
                                </a>
                            <?php }else { ?>
                                <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                                    Nuevo Material <span class="glyphicon glyphicon-plus"> </span> 
                                </button>
                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Salidad/Entrada</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form  method="POST" action="ingreso-salidad-entrada.php" name="ingreso-salidad-entrada">
                                                <?php     
                                                    echo "<div class='form-group'>";
                                                        echo "<label>Paciente</label>";
                                                        echo "<select class='form-control' name='p_cod'>";
                                                            $sql1 = 'SELECT p_cod, p_nombre, p_apellido FROM paciente';
                                                            $result1 = pg_query($sql1) or die('ERROR BD');              
                                                            $columna1 = pg_numrows($result1);
                                                            for($i1=1; $i1<=$columna1; $i1++){
                                                                $dato1 = pg_fetch_array($result1);
                                                                echo "<option value='$dato1[p_cod]'>$dato1[p_nombre] $dato1[p_apellido]</option>";
                                                                 }
                                                        echo "</select>";
                                                    echo "</div>";
                                                ?>  
                                                <?php     
                                                    echo "<div class='form-group'>";
                                                        echo "<label>Departamento de Destino</label>";
                                                        echo "<select class='form-control' name='u_cod'>";
                                                            $sql7 = 'SELECT u_cod, u_nombre FROM unidad';
                                                            $result7 = pg_query($sql7) or die('ERROR BD');              
                                                            $columna7 = pg_numrows($result7);
                                                            for($i7=1; $i7<=$columna7; $i7++){
                                                                $dato7 = pg_fetch_array($result7);
                                                                echo "<option value='$dato7[u_cod]'>$dato7[u_nombre]</option>";
                                                                 }
                                                        echo "</select>";
                                                    echo "</div>";
                                                ?>    
                                                <div class="form-group">
                                                    <label>Nombre del Material </label>
                                                    <input type="hidden" class="form-control" required name="se_recibe" value="No">
                                                    <input type="text" class="form-control" required name="se_nombre" placeholder="Nombre del Material">
                                                </div>
                                                <?php     
                                                    echo "<div class='form-group'>";
                                                        echo "<label>Nombre del Medico</label>";
                                                        echo "<select class='form-control' name='m_cod'>";
                                                            $sql2 = 'SELECT m_cod, m_nombre, m_apellido FROM medico';
                                                            $result2 = pg_query($sql2) or die('ERROR BD');              
                                                            $columna2 = pg_numrows($result2);
                                                            for($i2=1; $i2<=$columna2; $i2++){
                                                                $dato2 = pg_fetch_array($result2);
                                                                echo "<option value='$dato2[m_cod]'>$dato2[m_nombre] $dato2[m_apellido]</option>";
                                                                 }
                                                        echo "</select>";
                                                    echo "</div>";
                                                ?>                    
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

<!-- 

                        -->

