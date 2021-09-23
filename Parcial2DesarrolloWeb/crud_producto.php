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
  <title> Creacion de productos  </title>
<?php include ('../layout/head.php'); ?>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include ('../layout/menu.php'); ?>

  <div class="content-wrapper">  
    <section class="content-header">
    
     </section>
<!--      ------------------------------------------------------------------------             -->
 
    <section class="content">
  
    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success class">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Ingresos de productos</h3>
                            </div>
                            <div class="panel-body">
                                <form action="create_ProductoController.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="glyphicon glyphicon-list-alt"></i> Producto </label>
                                                <input type="text" class="form-control" name="NitClie" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> <i class="glyphicon glyphicon-user"></i> Id Marca</label>
                                                <input type="text" class="form-control" name="NombresClie" required>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for=""> <i class="glyphicon glyphicon-user"></i> Descripcion </label>
                                                <input type="text" class="form-control" name="ApellidosClie" >
                                            </div>
                                                     



                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="glyphicon glyphicon-phone"></i> Precio Costo</label>
                                                <input type="text" class="form-control" name="CelularClie" >
                                            </div>
                                         
                                
                                            <div class="form-group">
                                                <label for=""><i class="glyphicon glyphicon-list-alt"></i> Precio venta </label>
                                                <input type="text" class="form-control" name="DireccionClie" >
                                            </div>

                                            <div class="form-group">
                                                <label for=""><i class="glyphicon glyphicon-list-alt"></i> Existencia </label>
                                                <input type="text" class="form-control" name="DireccionClie" >
                                            </div>
                                           

                                          
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br>
                                        <div class="ol-md-12">
                                            <center>
                                                <a href="" class="btn btn-default btn-lg">Cancelar</a>
                                                <input type="submit" class="btn btn-success btn-lg" value="Registrar">
                                            </center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    
</div>

       </section>  
  </div>
 
<?php include ('../layout/footer.php'); ?>  


<?php include ('../layout/aside.php'); ?>
  
<?php include ('../layout/footer_link.php'); ?>

</div>
</body>
</html>
