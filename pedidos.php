<?php
    include('connection.php');
    $codPedido= mysqli_real_escape_string($con,$_REQUEST['id']??'');
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
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $query=mysqli_query($con,"select productos.nombre, detallpedido.cantidad, productos.precio from detallpedido inner join pedido on detallpedido.idPedido = pedido.codPedido
                        inner join productos on detallpedido.idProducto = productos.id where idPedido=$codPedido;");
                        while($row=mysqli_fetch_assoc($query)){
                         ?>
                            <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['cantidad']?></td>
                            <td><?php echo $row['precio']?></td>
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