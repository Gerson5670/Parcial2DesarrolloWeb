<?php

include('../app/config/config.php');
session_start();


if (isset($_SESSION['u_usuario'])){
  // echo "existe usuario";
    

}else {

  echo "<script>
  alert('Error: No hay sesion iniciada');
          window.location='../login12/index.php?'
        </script>";

}


$producto=$_POST ['producto'];
$idMarca=$_POST['idMarca'];
$descripcion = $_POST ['Descripciom'];
$precio_costo=$_POST ['precio_costo'];
$precio_venta=$_POST ['precio_venta'];
$existencia=$_POST ['existencia'];

$sentencia1=$pdo->prepare ("INSERT INTO producto (producto, idMarca, Descripcion, precio_costo, precio_venta, existencia)
VALUES(:producto, :idMarca, :Descripcion, :precio_costo, :precio_venta, :existencia)");

$sentencia1->bindParam(':producto',$producto);
$sentencia1->bindParam(':idMarca',$idMarca);
$sentencia1->bindParam(':Descripcion',$descripcion);
$sentencia1->bindParam(':precio_costo',$precio_costo);
$sentencia1->bindParam(':precio_venta',$precio_venta);
$sentencia1->bindParam(':existencia',$existencia);


if ($sentencia1->execute()){
   // echo "usuario insertado a la base de datos";
 header("location: index.php");
}else{
 echo "No se ha insertado ningun dato";

}
