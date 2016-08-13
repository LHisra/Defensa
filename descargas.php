<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

  <title>DataTables example - Zero configuration</title>
  <link rel="stylesheet" type="text/css" href="../../media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
  <link rel="stylesheet" type="text/css" href="../resources/demo.css">
  <style type="text/css" class="init">

  </style>
  <script type="text/javascript" language="javascript" src="../../media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
  <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
  <script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
  $('#example').DataTable();
} );


  </script>
</head>
<body>
  <p class="text-pagina"> Salida/Entrada</p>
  
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">  
        <thead>
          <tr class="active">
            <th>Fecha</th>
            <th>Paciente  </th>
            <th>Nombre</th>
            <th>Medico</th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php 
            include_once "conexion.php";
            $sql = "SELECT * FROM salidad_entrada";
            $result = pg_query($sql) or die('ERROR BD');
            $columna = pg_numrows($result);
            for($i=1; $i<=$columna; $i++){
                 $dato = pg_fetch_array($result);
          ?>
              <tr>
                <td><?php echo $dato['se_fecha'] ?></td>
                <td><?php echo $dato['se_paciente'] ?></td>
                <td><?php echo $dato['se_nombre'] ?></td>
                <td><?php echo $dato['se_medico'] ?></td>
                <td> 
                  <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm<?php echo $dato['se_cod'] ?>'>   
                  </button>
                </td>";
                <td> 
                  <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm<?php echo $dato['se_cod'] ?>'>   
                  </button> 
                </td>";                                                                         
              </tr>
            
               
         </tbody>
              <?php
                }
              ?>
        <tfoot>
          <tr>
            <th>Fecha</th>
            <th>Paciente  </th>
            <th>Nombre</th>
            <th>Medico</th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>

      </table>
  

</body>
</html>