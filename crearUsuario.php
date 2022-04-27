<?php
include('connection.php');

function valid_pass($v2) {
    $r1='/[A-Z]/';  //Uppercase
    $r2='/[a-z]/';  //lowercase
    $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
    $r4='/[0-9]/';  //numbers
 
    if(preg_match_all($r1,$v2, $o)<2) return FALSE;
    if(preg_match_all($r2,$v2, $o)<2) return FALSE;
    if(preg_match_all($r3,$v2, $o)<2) return FALSE;
    if(preg_match_all($r4,$v2, $o)<2) return FALSE;
    if(strlen($v2)<8) return FALSE;
 
    return TRUE;
}

if(isset($_REQUEST['guardar'])){
    $v1 = mysqli_real_escape_string($con, $_REQUEST['username']);
    $v2 = mysqli_real_escape_string($con, $_REQUEST['password']);
    $v3 = mysqli_real_escape_string($con, $_REQUEST['email']);

    if (valid_pass($v2) == true && filter_var($v3, FILTER_VALIDATE_EMAIL)){
        $vn = md5($v2);
        $sql = "insert into usuarios (username, password, email) ";
        $sql .= "VALUES ('$v1', '$vn', '$v3')";
       if (mysqli_query($con, $sql)) {
           echo' <script type="text/javascript"> alert("Datos registrados correctamente")</script>';
           header("location: panelUsuarios.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($con);
       }
   
    }else{
       echo' <script type="text/javascript"> alert("Corregir datos");
       window.location.href = "panelUsuarios.php"
       </script>';
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
            <h1>Crear usuario</h1>
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
                <form action="panelCrearUsuario.php" method="post">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="username1" class="form-control" placeholder="Usuario" required="required">
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required="required">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
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