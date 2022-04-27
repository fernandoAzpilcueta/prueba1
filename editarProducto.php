<?php
include('connection.php');

if(isset($_REQUEST['guardar'])){
    $v1 = mysqli_real_escape_string($con, $_REQUEST['nombre']);
    $v2 = mysqli_real_escape_string($con, $_REQUEST['precio']);
    $v3 = mysqli_real_escape_string($con, $_REQUEST['cantidad']);
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);

    $sql = "update productos set nombre='".$v1."', precio='".$v2."', cantidad='".$v3."' where id='".$id."'";
    if (mysqli_query($con, $sql)) {
        echo' <script type="text/javascript"> alert("Datos editados correctamente")</script>';
        header("location: panelProductos.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

$id= mysqli_real_escape_string($con,$_REQUEST['id']??'');
$query="select * from productos where id='".$id."'; ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar producto</h1>
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
                <form action="panelEditarProducto.php" method="post">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control"  required="required" value="<?php echo $row['nombre']?>">
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio" class="form-control" required="required" value="<?php echo $row['precio']?>">
                    </div>

                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" name="cantidad" class="form-control"  required="required" value="<?php echo $row['cantidad']?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
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