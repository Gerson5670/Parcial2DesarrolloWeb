<?php
include '../app/config/config.php';

session_start();


if (isset($_SESSION['u_usuario'])){
  // echo "existe usuario";
    

}else {

  echo "<script>
  alert('Error: No hay sesion iniciada');
          window.location='../login12/index.php?'
        </script>";

}
 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Clientes </title>
<?php include ('../layout/head.php'); ?>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include ('../layout/menu.php'); ?>

  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
      
      </h1>
     </section>
<!--      ------------------------------------------------------------------------             -->
 
    <section class="content">
       
    <div class="panel panel-success class">
                    <div class="panel-heading" class="p-3 mb-2 bg-success text-black">Clientes existentes</div>
                    <div class="panel-body">
                    <table class="table table-bordered table-hover table-condensed table table-striped table-hover ">

                            <th>id Productos</th>
                         
                            <th>producto</th>
                            <th>idMarca</th>
                            <th>Descripcion</th>
                            <th>precio unitario</th>
                            <th>precio costo</th>
                            <th>precio venta</th>
                            <th>existencia</th>
                     
<?php

$query_producto = $pdo->prepare("SELECT * FROM productos");
$query_producto->execute();
$productoX = $query_productos->fetchAll(PDO::FETCH_ASSOC);

foreach ($clientesX as $clientesY) {
    $IdCliente =$clientesY ['Idcliente'];
    $NitClie =$clientesY['Nitcliente'];
    $NombresClie =$clientesY['NombreCliente'];
    $ApellidosClie = $clientesY['ApellidoCliente'];
    $CelularClie=$clientesY['CelularCliente'];
    $DireccionClie=$clientesY['DireccionCliente'];
    $EmailClie=$clientesY['EmailCliente'];
    ?>
         <tr>
           <td> <?php  echo $IdCliente; ?> </td>
           <td> <?php  echo $NitClie; ?> </td> 
           <td> <?php  echo $NombresClie; ?> </td>
           <td> <?php  echo $ApellidosClie; ?> </td>
           <td> <?php  echo $CelularClie; ?> </td>
           <td> <?php  echo $DireccionClie; ?> </td>
           <td> <?php  echo $EmailClie; ?> </td>
        

     </tr>
  <?php 
  }
?>


</table>
</div>
</div>



       </section>  
  </div>
