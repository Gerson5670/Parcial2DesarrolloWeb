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

foreach ($productoX as $productoY) {
    $Idproductos =$productoY ['Idproductos'];
    $producto =$productoY['producto'];
    $idMarca =$productoY['idMarca'];
    $descripcion = $productoY['descripcion'];
    $precio_costo=$productoY['precio_costo'];
    $precio_venta=$prodcutoY['precio_venta'];
    $existencia=$productoY['existencia'];
    ?>
         <tr>
           <td> <?php  echo $Idproductos; ?> </td>
           <td> <?php  echo $producto ; ?> </td> 
           <td> <?php  echo $idMarca; ?> </td>
           <td> <?php  echo $descripcion ; ?> </td>
           <td> <?php  echo $precio_costo; ?> </td>
           <td> <?php  echo $precio_venta; ?> </td>
           <td> <?php  echo $existencia; ?> </td>
        

     </tr>
  <?php 
  }
?>


</table>
</div>
</div>



       </section>  
  </div>
