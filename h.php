<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

    <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables.csss">
<link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables_themeroller.css">
  
<!-- jQuery -->
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
        

            <table id="tabla" class="display    table table-hover table-bordered" >
                <thead>
                    <tr class="active">
                        <th>Fecha</th>
                        <th>Tiempo</th>
                        <th>Paciente</th>
                        <th>Unidad</th>
                        <th>Nombre</th>
                        <th>Medico</th>
                        <th>Recibe</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Fecha</th>
                        <th>Tiempo</th>
                        <th>Paciente</th>
                        <th>Unidad</th>
                        <th>Nombre</th>
                        <th>Medico</th>
                        <th>Recibe</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>

                <tbody>
                    
                                    
                                <?php
                                
                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM salidad_entrada';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);
                                            
                                             echo "<tr>";
                                                 echo "<td class=''> $dato[se_fecha]</td>";
                                                 echo "<td class=''> $dato[se_tiempo]</td>";
                                                 echo "<td class=''> $dato[se_paciente]</td>";
                                                 echo "<td class=''> ";
                                                    $sql4 = "SELECT u_nombre FROM unidad where  u_cod ='$dato[u_cod]'";
                                                    $result4 = pg_query($sql4) or die('ERROR BD');
                                                    $dato4 = pg_fetch_array($result4);            
                                                        echo "$dato4[u_nombre]";
                                                             

                                                 echo "</td>";
                                                 echo "<td class=''> $dato[se_nombre]</td>";
                                                 echo "<td class=''> $dato[se_medico]</td>";
                                                 echo "<td class=''>"; 
                                                    if ($dato['se_recibe'   ]==0){
                                                        echo "No";    
                                                    }else{
                                                        echo"Si";
                                                    }
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
                                                                
                                                                echo " <form  method='POST' action='editar-permanente.php' name='editar-permanente'>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Paciente</label>";
                                                                        echo "<input type='text' class='form-control' name='se_paciente' placeholder='$dato[se_paciente]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Departamento de Destino</label>";
                                                                            echo "<select class='form-control' name='u_cod'>";
                                                                                $sql6 = 'SELECT u_cod, u_nombre FROM unidad';
                                                                                $result6 = pg_query($sql6) or die('ERROR BD');              
                                                                                $columna6 = pg_numrows($result6);
                                                                                for($i6=1; $i6<=$columna6; $i6++){
                                                                                    $dato6 = pg_fetch_array($result6);
                                                                                    echo "<option value='$dato6[u_cod]'>$dato6[u_nombre]</option>";
                                                                                     }
                                                                            echo "</select>";
                                                                        echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Nombre del Material</label>";
                                                                        echo "<input type='text' class='form-control' name='se_nombre' placeholder='$dato[se_nombre]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Descripcion</label>";
                                                                        echo "<input type='text' class='form-control' name='se_medico' placeholder='$dato[se_medico]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo " <br>¿Estas seguro que quieres editar ";
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

            

            

    
</body>
</html>