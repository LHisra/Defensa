<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();
?>
                      
<!DOCTYPE html>
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
        <script type="text/javascript" src="js/jq.js"></script>
	    <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
        <script type='text/javascript' src="js/jq.js"></script>
        <script type='text/javascript' src="js/jquery-ui.js"></script>
	</head>
    
<body>
    <?php
        if(isset($_GET['error'])){ 
            echo "
                <div id='sub' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog '>
                        <div class='modal-body'>
                            <div class=' alert alert-danger'>
                                Error al ingresar los datos <span class='glyphicon glyphicon-'></span>
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
        <div id="head" class ="row-fluid" > 
            <div class="col-lg-10"> 
                <p class="banner-text"> Hospital Periferico de Coche </p>
            </div>
            <div class="col-lg-2"> 
            </div>
        </div>    
        
       <div id="cuerpo" class ="row-fluid" > 
            <div class="row-fluid cuerpo-top" >
                <p id="inicia"> Inicia Sesion para acceder al Sistema</p>
            
            </div>
            <div class="row-fluid" >
                <div class="col-lg-4"> </div>
                <div class=" well col-lg-4">
                    <div class="col-lg-12" id="sesion-logo"> </div> 
                    <form class="form form-margin" method="POST" action="validar.php" name="index">
                        <div class="form-group">
                            <input type="text" class="form-control" required placeholder="Cuenta" name="id">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required placeholder="Contraseña" name="pass">
                        </div>
                        <button type="submit" class="btn btn-danger btn-block">
                            Entrar
                        </button>
                    </form>
                    
                    
                </div>
                
     
            </div>
      
            <div id="footer" class="row-fluid" >
                <div class="col-lg-10"></div>
                <div class="col-lg-2" id="ubv-logo"></div>
            </div>
            <div class="modal fade">
  
        </div>
    </div> 
</body>
</html>