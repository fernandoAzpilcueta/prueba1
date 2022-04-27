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
            <h1>Productos</h1>
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
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Imagen</th>
                    <th>Acciones
                        <a href="panelCrearProducto.php"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 8px;"></i></a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $query=mysqli_query($con,"select * from productos;");
                        while($row=mysqli_fetch_assoc($query)){
                         ?>
                            <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['precio']?></td>
                            <td><?php echo $row['cantidad']?></td>
                            <td><img src="<?php echo $row['imagen']?>" height ="50" width ="50"/></td>
                            <td>
                                <a href="panelEditarProducto.php?id=<?php echo $row['id']?>" style="margin-right: 8px;"><i class="fas fa-edit"></i></a>
                                <a href="productos.php?id=<?php echo $row['id']?>" class="text-danger borrar"><i class="fas fa-trash"></i></a>
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