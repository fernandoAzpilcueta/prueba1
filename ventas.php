<?php
    include('connection.php');
    if(isset($_REQUEST['id'])){
        $id=mysqli_real_escape_string($con, $_REQUEST['id']??'');
        $query="delete from productos where id='".$id."';";
        $res=mysqli_query($con, $query);
        if($res){
            ?>
            <div class="alert alert-warning float-right" role="alert">
                Producto borrado con éxito
            </div>
            <?php 
            header("location: panelProductos.php");
        }else{
            ?>
            <div class="alert alert-danger float-right" role="alert">
                Error al borrar producto <?php echo mysqli_error($con);?>
            </div>
            <?php
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
            <h1>Ventas</h1>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Fecha de Pedido</th>
                    <th>Fecha de Entrega</th>
                    <th>Detalles del Pedido</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $query=mysqli_query($con,"select * from pedido;");
                        while($row=mysqli_fetch_assoc($query)){
                         ?>
                            <tr>
                            <td><?php echo $row['idUsuario']?></td>
                            <td><?php echo $row['fechaPedido']?></td>
                            <td><?php echo $row['fechaEntrega']?></td>
                            <td>
                                <a href="panelPedido.php?id=<?php echo $row['codPedido']?>" style="margin-right: 8px;"><i class="fas fa-plus"></i></a>
                            </td>
                            </tr>
                        <?php    
                        }
                    ?>
                  </tbody>
                </table>
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