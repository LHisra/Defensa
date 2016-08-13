<?php
session_start();
//if ($_SESSION['tipo'] != 'estudiante'){
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la
    //pantalla de login, enviando un codigo de error
//header ("Location: ../../index.php");
//}
//	
include_once "conexion.php";
# Conexión a la base de datos
//Limito la busqueda


$TAMANO_PAGINA = 8;
//examino la página a mostrar y el inicio del registro a mostrar

$pagina = $_GET["pagina"];
if (!$pagina) {
    $inicio = 0;
    $pagina=1;
   
}
else {
    $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$lista="";
 //miro a ver el número total de campos que hay en la tabla con esa búsqueda
$ssql = "SELECT * from salidad_entrada "  .$criterio;
$rs = pg_query($link,$ssql);
$num_total_registros = pg_num_rows($rs);

//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

//pongo el número de registros total, el tamaño de página y la página que se muestra

//construyo la sentencia SQL

$ssql =pg_query ("SELECT * FROM usuario ". $criterio. " offset " . $inicio . " limit " . $TAMANO_PAGINA );

$totalRows = pg_num_rows($ssql);
if(empty($totalRows)){
    
            $lista .= "<tr>\n";
			$lista .= "<td colspan='3'><Strong>Su Busqueda No arrojo Resultados</Strong></td>\n";
			$lista .= "</tr>\n";
       
}else{
    
		while ($row=pg_fetch_array($ssql)){
				$lista .= "<tr>\n";
			$lista .= "<td>$row[nombre]</td>";
			$lista .= "<td>$row[descripcion]</td>\n";
			$lista .= "<td><a href=\"download.php?id=$row[id]&amp;f=1\" title='Descargar'><button class='btn btn-primary btn-xs'><span class='glyphicon glyphicon-download-alt'></span></button></a>";
			$lista .= "</tr>\n";
		} 
	}
 

pg_free_result($rs);
pg_close($link); 

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

"<form action="descargas2.php" method="get">
Criterio de búsqueda:
<input type="text" name="criterio" size="22" maxlength="150">
<input type="submit" value="Buscar">
</form> 


</body>
</html>

<?php
//inicializo el criterio y recibo cualquier cadena que se desee buscar

if ($_GET["criterio"]!=""){
    $txt_criterio = $_GET["criterio"];
    $criterio = "WHERE se_paciente=" . $txt_criterio;
} 

 ?>
