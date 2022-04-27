<?php
        include('connection.php');

?>        
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KülStore</title>
	<link rel="stylesheet" href="css_account.css">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
	<div class="container">
    <div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="img/unicorn.png" height="40px">
			</a>
		</div>
		<nav>
        <ul id="MenuItems">
			<li><a href="index1.php">Home</a></li>
			<li><a href="productosMain1.php">Products</a></li>
			<li><a href="carrito.php">Cart</a></li>
			<li><a href="logout1.php"><img src="img/cerrar-sesion.png" height="25px"></a></li>
			</ul>
		</nav>

	</div>
	</div>	
	</div>
<!------Portada------->
<div class="row row-2">
		<h2 class="title">All Products</h2>	
	</div>

    <div class="row">
        <?php
        $query=mysqli_query($con,"select * from productos;");
        while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="col-3"> 
            <img src="<?php echo $row['imagen']?>"/>
            <h4><?php echo $row['nombre']?></h4>
            <h4><?php echo $row['precio']?></h4>
   
            <a href="detallesProducto.php?id=<?php echo $row['id']?>" class= "btn btn-primary">Ver detalles</a>
        </div>	
        <?php    
            }
        ?>
	</div>
</div>

<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download our App</h3>
					<p>Download KülStore for Android and iOs mobile phone.</p>	
					<ul>
						<a href="https://play.google.com/store?hl=es_PE&gl=US" target="_blank">
						<img src="img/android.png"height="60px"></a>
						<a href="https://play.google.com/store?hl=es_PE&gl=US" target="_blank">
						<img src="img/apple.png"height="60px"></a>
					</ul>
				</div>
				<div class="footer-col-2">
					<h3>Follow us</h3>
					<p>Our social networks ♥</p>
					<ul>
						<a href="https://www.facebook.com/BT21.Official" target="_blank">
						<img src="img/fb.png"height="60px"></a>
						<a href="https://twitter.com/BT21_" target="_blank">
						<img src="img/twitter.png"height="60px"></a>
						<a href="https://www.instagram.com/bt21_official/" target="_blank">
						<img src="img/ins.png"height="60px"></a>
						<a href="https://www.youtube.com/channel/UCINr5W7cwW06ADtsszAToAw" target="_blank">
						<img src="img/ytb.png"height="60px"></a>
					</ul>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>