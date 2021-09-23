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


$NitClie=$_POST ['NitClie'];
$NombresClie=$_POST['NombresClie'];
$ApellidosClie = $_POST ['ApellidosClie'];
$CelularClie=$_POST ['CelularClie'];
$DireccionClie =$_POST ['DireccionClie'];
$EmailClie=$_POST ['EmailClie'];

$sentencia1=$pdo->prepare ("INSERT INTO clientes (Nitcliente, NombreCliente, ApellidoCliente, CelularCliente, DireccionCliente, EmailCliente)
VALUES(:Nitcliente, :NombreCliente, :ApellidoCliente, :CelularCliente, :DireccionCliente, :EmailCliente)");

$sentencia1->bindParam(':Nitcliente',$NitClie);
$sentencia1->bindParam(':NombreCliente',$NombresClie);
$sentencia1->bindParam(':ApellidoCliente',$ApellidosClie);
$sentencia1->bindParam(':CelularCliente',$CelularClie);
$sentencia1->bindParam(':DireccionCliente',$DireccionClie);
$sentencia1->bindParam(':EmailCliente',$EmailClie);


if ($sentencia1->execute()){
   // echo "usuario insertado a la base de datos";
 header("location: index.php");
}else{
 echo "No se ha insertado ningun dato";

}
