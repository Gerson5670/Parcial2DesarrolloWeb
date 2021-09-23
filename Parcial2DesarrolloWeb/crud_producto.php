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

$productos=$_POST['productos'];
$idMarca = $_POST ['idMarca'];
$Descripcion =$_POST ['Descripcion'];
$precio_costo =$_POST ['precio_costo'];
$precio_venta=$_POST ['precio_venta'];
