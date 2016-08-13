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
                        <a href="ingreso.php">  <div class="col-lg-12 item">
                            <span class="glyphicon glyphicon-circle-arrow-up btn-lg"></span>
                            <text class="text-item">ingreso</text>
                            </div>
                        </a>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 item resaltar">
                            <span class="glyphicon glyphicon-circle-arrow-down btn-lg"></span>
                            <text class="text-item">egreso</text>
                        </div>
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
                        <a href="departamento.php"> <div class="col-lg-12 item">
                            <span class="glyphicon glyphicon-home btn-lg"></span>
                            <text class="text-item">Departamentos</text>
                            </div>
                        </a>    
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
                        <div><p class="text-pagina"> Registro de Egreso</p>
                            <table class="table table-hover table-bordered s">
                                <tbody>
                                    <tr class="active">
                                        <td>Nombre Material</td>
                                        <td>Tipo</td>
                                        <td>Cantidad Egresada</td>
                                        <td>Nombre Medico</td>
                                        <td>Apellido</td>
                                        <td>Departamento Destino</td>
                                    </tr>
                                    <?php

                                        include_once "conexion.php";
                                        $sql = 'SELECT * FROM t_egreso';
                                        $sql2 = 'SELECT cod, m_nombre, m_tipo FROM t_egreso';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            $dato = pg_fetch_array($result);    
                                               
                                                echo"<tr>";
                                                echo "<td> $dato[m_nombre]</td>";
                                                echo "<td> $dato[m_tipo]</td>";
                                                echo "<td> $dato[m_cantidad_egresada]</td>";
                                                echo "<td> $dato[me_nombre]</td>";
                                                echo "<td> $dato[me_apellido]</td>";
                                                echo "<td> $dato[d_nombre]</td>";
                                            
                                                echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button </td>";
                                                
                                                echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button </td>";
                                            
                                            echo "<div class='modal fade' id='bs-edit-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>";
                                                echo "<div class='modal-dialog'>";
                                                echo "<div class='modal-dialog modal-sm'>";    
                                                echo"<div class='modal-content'>";
                                                        echo "<div class='modal-header'>";
                                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                echo "<h4 class='modal-title' id='myModalLabel'>Editar Egreso Egreso</h4>";
                                                        echo "</div>";
                                                            echo "<div class='modal-body'>";
                                                                
                                                                echo " <form  method='POST' action='editar-egreso-material.php' name='editar egreso material'>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Nombre del Material</label>";
                                                                        echo "<input type='text' class='form-control' name='m_nombre' placeholder='$dato[m_nombre]'>";
                                                                        echo "<input type='hidden' class='form-control' name='cod' value = '$dato[cod]' placeholder=''>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Tipo</label>";
                                                                        echo "<input type='text' class='form-control' name='m_tipo' placeholder='$dato[m_tipo]'>";
                                                                    echo "</div>";
                                                                    
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Cantidad Egresada</label>";
                                                                        echo "<input type='text' class='form-control' name='m_cantidad' placeholder='$dato[m_cantidad_egresada]'>";
                                                                    echo "</div>";
                                                                    
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Nombre del medico</label>";
                                                                        echo "<input type='text' class='form-control' name='me_nombre' placeholder='$dato[me_nombre]'>";
                                                                    echo "</div>";
                                            
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Apellido</label>";
                                                                        echo "<input type='text' class='form-control' name='me_apellido' placeholder='$dato[me_apellido]'>";
                                            
                                                                    echo "</div>";
                                            
                                            
                                                                    echo "<div class='form-group'>";
                                                                        echo "<label>Departamento de Destino</label>";
                                                                        echo "<input type='text' class='form-control' name='d_nombre' placeholder='$dato[d_nombre]'>";
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
                        
                    </div>
                    <div class="row-fluid">
                    
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>
