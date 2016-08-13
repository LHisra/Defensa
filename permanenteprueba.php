<?php
    session_start();
    if($_SESSION==null){
        header("Location: index.php");
    }
    
?>

<!doctype html>
<html lang="es">
                      
	<head>
      <meta charset="utf-8">
        
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

        <title>Proyecto</title>
            <meta charset=UTF-8>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css.map">
            <link rel="stylesheet" type="text/css" href="css/head.css">
            <link rel="stylesheet" type="text/css" href="css/body.css">        
            <link rel="stylesheet" type="text/css" href="css/footer.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
            <link rel="stylesheet" type="text/css" href="css/menu.css">
            <link rel="stylesheet" type="text/css" href="css/cuerpo.css">
            <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
          <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript"> </script>
            <link rel="stylesheet" type="text/css" href="css/datatable/media/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/datatable/examples/resources/syntax/shCore.css">
        <link rel="stylesheet" type="text/css" href="css/datatable\examples/resources/demo.css">
        <style type="text/css" class="init">

        </style>
        <script type="text/javascript" language="javascript" src="css/datatable/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="css/datatable/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="css/datatable/examples/resources/syntax/shCore.js"></script>
        <script type="text/javascript" language="javascript" src="css/datatable/examples/resources/demo.js"></script>
        <script type="text/javascript" language="javascript" class="init">
          $(document).ready(function() {
            $('#example').DataTable()
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
                                <div class="col-lg-12 item" id="menu-titulo"><p class="text-titulo"> Inicio</p> </div>
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
                                                         
                                                        <div class="row-fluid resaltar"> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Permanente
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="false" aria-controls="collapseTres">    
                                                <div class="panel-heading" role="tab" id="headingTres">
                                                   Requisicion
                                                </div>
                                            </a>
                                        </h4>    
                                        <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTres">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="interna.php"> 
                                                        <div class="row-fluid">
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> 
                                                            Interna
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="externa.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Externa
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
                                                <h4 class="panel-title">    
                                                    <a href="individual.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Individual
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
                        <div><p class="text-pagina"> Materiales Permanentes</p>
                            <table  <table id="example" class="table table-hover table-bordered s">
                                <tbody>
                                  <tr class="active">
                                    <td class=" ">Nombre</td>
                                    <td colspan="" class="">Cantidad</td>
                                  </tr>
                                    
                                <?php
                                
                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM m_permanente';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);
                                            
                                            echo "<tr>";
                                                echo "<td class=' '> $dato[p_nombre] </td>";
                                                echo "<td class=''> $dato[p_cantidad]</td>"; 
                                                echo "<button type='button' id='edit' class='btn btn-danger' data-toggle='modal' data-target='#bs-egreso-modal-sm$i'>  Egreso </button>";
                                                echo "<br>";    
                                                echo "</div>";   
                                            echo "</td>";
                                                echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button> </td>";
                                                echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button> </td>  </tr> <tr>";
                                                
                                            echo "<div class='modal fade' id='bs-remove-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                    echo "<div class='modal-dialog modal-sm'>";    
                                                        echo"<div class='modal-content'>";
                                                            echo "<div class='modal-header'>";
                                                                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                    echo "<h4 class='modal-title' id='myModalLabel'>Eliminar</h4>";
                                                                echo "</div>";
                                                                echo "<div class='modal-body'>";
                                                                    echo "<form method='POST' action='eliminar-permanente.php' name='eliminar-permanente'>";
                                                                    echo " ¿Estas Seguro que quieres eliminar $dato[p_nombre]?";
                                                                    echo "<input type='hidden' class='form-control' value='$dato[p_cod]' name='p_cod' placeholder=''>   ";
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
                                                                        echo "<label>Nombre</label>";
                                                                        echo "<input type='text' class='form-control' name='p_nombre' placeholder='$dato[p_nombre]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Tipo</label>";
                                                                        echo "<input type='text' class='form-control' name='p_cantidad' placeholder='$dato[p_cantidad]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Descripcion</label>";
                                                                        echo "<input type='text' class='form-control' name='p_descripcion' placeholder='$dato[p_descripcion]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo " <br>¿Estas seguro que quieres editar $dato[p_nombre]";
                                                                            echo "<input type='hidden' class='form-control' value='$dato[p_cod]' name='p_cod' placeholder=''>   ";
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
                         <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                            Nuevo Material <span class="glyphicon glyphicon-plus"> </span> 
                        </button>
                        
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Nuevo Material Permanente</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="ingreso-permanente.php" name="ingreso-permanente">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="p_nombre" placeholder="Nombre">
                                </div><div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control" name="p_cantidad" placeholder="Cantidad">
                                </div><div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control" name="p_descripcion" placeholder="Descripcion">
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

