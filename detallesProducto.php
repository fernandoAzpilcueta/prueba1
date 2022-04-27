<?php
    include('connection.php');
	$id= mysqli_real_escape_string($con,$_REQUEST['id']??'');
	$query="select * from productos where id='".$id."'; ";
	$res=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($res);
?>        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KülStore</title>
  <!--CSS -->
  <link rel="stylesheet" href="css.css">
  <!--Font Size -->
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
</head>
<body>
<div class="container">
    <!-- Barra de navegación -->
	<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="img/unicorn.png" height="40px">
			</a>
		</div>
		<nav>
			<ul id="MenuItems">
			<li><a href="index.php">Home</a></li>
			<li><a href="productosMain.php">Products</a></li>
			<li><a href="account.php">Account</a></li>
            <li><a href="loginAdmin.php">Admin</a></li>
			</ul>
		</nav>
	</div>
    <div class="single-product">
		<div class="row">
		<form action="carrito.php" method="post" class="form">
			<div class="col-5">
                <img src="<?php echo $row['imagen']?>" width="100%"/></td>
				
			</div>
			<div class="col-5">
				<h1><?php echo $row['nombre']?></h1>
				<h4><?php echo $row['precio']?></h4>

			<form action="carrito.php" method="post" class="form">

				<input style="display:none;" name="foto" id="foto" value="<?php echo $row['imagen'];?>">
                <input style="display:none;" type="text" name="id" id="id" value="<?php echo $id?>">
                <input style="display:none;" type="text" name="nombre" id="nombre" value="<?php  echo $row['nombre']?>">
                <input style="display:none;" type="text" name="precio" id="precio" value="<?php  echo $row['precio']?>">
				
				<input type="number" max="25" min="1"  name="cantidad" placeholder="Ingrese la cantidad" required />
					
				

				<input class="productChosen__buy btn btn-info" type="submit" id="add_to_cart"name="add_to_cart"value="Agregar a carrito">
				
			</form>


			<!--<a href="carrito.php" class="btn"> Add to Cart</a>-->
			
			</div>
		</div>
	</div>

    <div class="row row-2">
		<h2 class="title">All Products</h2>	
	</div>

    <div class="row">
        <?php
        $query=mysqli_query($con,"select * from productos;");
        while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="col-4"> 
            <img src="<?php echo $row['imagen']?>"/>
            <h4><?php echo $row['nombre']?></h4>
            <h4><?php echo $row['precio']?></h4>
            <a href="#" class= "btn btn-primary">Ver detalles</a>
        </div>	
        <?php    
            }
        ?>
	</div>
    <!--
    <div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
	</div>-->
</div>  

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/dist/js/pages/dashboard.js"></script>
</body>
</html>