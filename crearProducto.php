<?php
include('connection.php');

if(isset($_REQUEST['guardar'])){
    $dir="img/";
    $v4 = $_FILES['imagen']['name'];
    $temp = $_FILES['archivo']['tmp_name'];
    $v1 = mysqli_real_escape_string($con, $_REQUEST['nombre']);
    $v2 = mysqli_real_escape_string($con, $_REQUEST['precio']);
    $v3 = mysqli_real_escape_string($con, $_REQUEST['cantidad']);

    if(!move_uploaded_file($temp, $dir.$v4)){
      echo 'Error';
    }
    
    $sql = "insert into productos (nombre, precio, cantidad, imagen)";
    $sql .= "VALUES ('$v1', '$v2', '$v3' , '$dir$v4')";
    if (mysqli_query($con, $sql)) {  
      echo' <script type="text/javascript"> alert("Datos registrados correctamente")</script>';  
      header("location: panelProductos.php");
    }else{
      echo 'Error';
    }

}

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear producto</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="panelCrearProducto.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="required">
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio" class="form-control" placeholder="Precio" required="required">
                    </div>

                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" required="required">
                    </div>

                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" name="imagen" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>