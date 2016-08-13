<?php
    session_start();
    if($_SESSION==null){
        header("Location: index.php");
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
            
                <div id="menu" class=" well col-lg-2"> 
                    
                        <div class="row resaltar">
                            <div class="col-lg-12 item" id="menu-titulo"><p class="text-titulo"> Inicio</p> </div>
                        </div>
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
                    <div class="col-lg-1"> </div>
                    <div class="col-lg-11 row-fluid cuerpo-top" >

                    </div> 
                    
                    <br><br><br>
                        <div id="carousel-example-generic" class="carousel slide mycarousel" data-ride="carousel">
                            <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img src="img/hospital.jpg" alt="...">
                                  <div class="carousel-caption">
                                    ...
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="img/hospital.jpg" alt="...">
                                  <div class="carousel-caption">
                                    ...
                                  </div>
                                </div>
                                ...
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>  
                            
                        


                    </div>
                   
                </div>


        </div>
    </div>
    
</body>
</html>

<!-- 

                        -->

