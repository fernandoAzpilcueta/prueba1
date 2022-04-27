<?php
include('connection.php');

if(isset($_REQUEST['guardar'])){
    $v1 = mysqli_real_escape_string($con, $_REQUEST['username']);
    $v2 = mysqli_real_escape_string($con, $_REQUEST['password']);
    $v3 = mysqli_real_escape_string($con, $_REQUEST['email']);
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);

    if (filter_var($v3, FILTER_VALIDATE_EMAIL)){
        $vn = md5($v2);
        $sql = "update usuarios set username='".$v1."', password='".$vn."', email='".$v3."' where id='".$id."'";
       if (mysqli_query($con, $sql)) {
           echo' <script type="text/javascript"> alert("Datos editados correctamente")</script>';
           header("location: panelUsuarios.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($con);
       }
   
    }else{
       echo' <script type="text/javascript"> alert("No se pudo editar.");
       window.location.href = "panelUsuarios.php"
       </script>';
    }
}

$id= mysqli_real_escape_string($con,$_REQUEST['id']??'');
$query="select * from usuarios where id='".$id."'; ";
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
            <h1>Editar usuario</h1>
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
                <form action="panelEditarUsuario.php" method="post">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="username" class="form-control"  required="required" value="<?php echo $row['username']?>">
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"  required="required" value="<?php echo $row['email']?>">
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