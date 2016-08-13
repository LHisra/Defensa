<?php
    session_start();
    if($_SESSION==null){
        header("Location: index.php");
    }
    if($_SESSION['tipo']!=0){ 
        header("Location: ingreso.php");
    }
?>

<!doctype html>
<html lang="es">
                      
	<head>
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
        <script type="text/javascript" src="js/js.js"></script>
        <script type="text/javascript" src="js/jq.js"></script>
	    <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript"> </script>
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
            
                <div id="menu" class="well col-lg-2"> 
                    <div class="row-fluid">
                        <a href="inicio.php"> <div class="col-lg-12 item" id="menu-titulo"><p class="text-titulo"> Inicio </p> </div> </a>
                    </div>
                     <div class="row">
                        <a href="materiales.php"> <div class="col-lg-12 item">
                            <span class="glyphicon glyphicon-align-justify btn-lg"></span>
                            <text class="text-item">Materiales</text>
                            </div>
                        </a>
                    </div>
                    
                    <div class="row">
                        <a href="ingreso.php"> <div class="col-lg-12 item">
                            <span class="glyphicon glyphicon-circle-arrow-up btn-lg"></span>
                            <text class="text-item">ingreso</text>
                            </div>
                        </a>
                    </div>
                    
                    <div class="row">
                        <a href="egreso.php"> <div class="col-lg-12 item">
                            <span class="glyphicon glyphicon-circle-arrow-down btn-lg"></span>
                            <text class="text-item">egreso</text>
                            </div>
                        </a>
                    </div>
                    <?php 
                     if($_SESSION['tipo']!=0){ echo"<!--";} ?>
                    <div class="row">             
                        <a href="cuentas.php"> <div class="col-lg-12 item ">
                            <span class="glyphicon glyphicon-user btn-lg"></span>
                            <text class="text-item">Cuentas</text>
                            </div> 
                        </a>
                    </div>
                    <div class="row">             
                        <div class="col-lg-12 item resaltar">
                            <span class="glyphicon glyphicon-home btn-lg"></span>
                            <text class="text-item">Departamentos</text>
                        </div>
                    </div>
                    <?php
                    if($_SESSION['tipo']!=0){ echo"-->";} ?>
                    
                   
                     <div class="row">
                       <div class="col-lg-12 item" id="ubv-logo2"> </div>
                    </div>
                </div>

                
                <div class="col-lg-9">
                    <div class="col-lg-2"> </div>
                    <div class="col-lg-10 row-fluid cuerpo-top" >
                        <div><p class="text-pagina"> Departamentos</p>
                            <table class="table table-hover table-bordered s">
                                <tbody>
                                    <tr class="active">
                                        <td>Nombre</td>
                                        <td>Descripcion</td>
                                    </tr>
                                    <?php
                                        include_once "conexion.php";
                                        $sql = 'SELECT cod, d_nombre, d_descripcion FROM t_departamento';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);    
                                               
                                                echo"<tr>";
                                                echo "<td> $dato[d_nombre]</td>";
                                                echo "<td> $dato[d_descripcion]</td>";
                                            
                                                echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button </td>";
                                                echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button </td>";
                                            
      
                                            echo "<div class='modal fade' id='bs-remove-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                echo "<div class='modal-dialog modal-sm'>";    
                                                echo"<div class='modal-content'>";
                                                        echo "<div class='modal-header'>";
                                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Eliminar</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                echo "<form method='POST' action='eliminar-departamento.php' name='cuentas'>";
                                                                echo " ¿Estas Seguro que quieres eliminar $dato[d_nombre]?";
                                                                echo "<input type='hidden' class='form-control' value='$dato[cod]' name='cod' placeholder=''>   ";  
                                                                
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
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Editar</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                
                                                                echo " <form  method='POST' action='editar-id.php' name='cuentas'>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Cedula </label>";
                                                                        echo "<input type='text' class='form-control' name='ci' placeholder='$dato[d_nombre]'>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Nombre</label>";
                                                                        echo "<input type='text' class='form-control' name='nombre' placeholder='$dato[d_descripcion]'>";
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                            Nuevo Departamento <span class="glyphicon glyphicon-plus"> </span> 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Nuevo Departamento</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="ingreso-departamento.php" name="ingreso-departamento">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="d_nombre" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control" name="d_descripcion" placeholder="">
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
