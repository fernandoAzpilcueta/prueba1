<?php


include 'BE_carrito.php';



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
<!------ cart items details ------>
	<div class="small-container cart">
		<table>
			<thead>
				<tr>
					<th>Image</th>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
					<th>Operacion</th>
				</tr>
			</thead>
			<tbody>                           
				<?php
					$total=0;
					foreach($_SESSION['carrito'] as $indice =>$producto){
				?>
						<tr>						
						<td width="15%"><img src="<?php echo $producto['foto'];?>" ></td>
						<td width="40%"><?php echo $producto['nombreProducto'] ?></td>
						<td width="20%"><?php echo $producto['precio'] ?></td>
						<td width="10%"><?php echo $producto['cantidad'] ?></td>
						<td width="15%"><?php echo $producto['precio']*$producto['cantidad'] ?></td>
						
						<td>
							<a href="carrito.php?action=remove&id=<?php echo $producto["idProducto"]?>">
								Eliminar
							</a>
						</td>
						</tr>

					
					
					<?php
						$total = $total + ($producto['precio']*$producto['cantidad']);

					}
				
				?>
				<tr>
					<td colspan="4"  style="font-weight:bold;">Total</td>
					<td><?php echo $total ?></td>
					<td></td>
				</tr>
			
					
			</tbody>
		
			
		</table>
		
		
	</div>

	<form action="BE_compra.php" class="formCompra" method="POST">

		<div class="small-container cart">  
					<div class="field">
                        <label for="pago">Pago</label>
                        <div class="select_mate" data-mate-select="active" >
                            <select name="pago" onchange="seleccionarTipoPago();" onclick="return false;" id="selectTipo">
                                <option value=""  >Seleciona una Opcion </option>
                                <option value="1">Tarjeta/PayPal</option>
                                <option value="2" >Recoger en Local</option>
                            </select>
                    </div>  
		
			<div class="field">
				<label for="fecha">Fecha de entrega</label>
				<input type="date" name = "fecha" placeholder="Fecha de recojo" required>  
			</div> 
			   
			<div id="datosTarjeta" style="display: none; visibility: hidden" class="field">
				<label for="fecha">Numero de la tarjeta</label>
				<input type="number" name = "numTarjeta" placeholder="Numero de la tarjeta" >  
				<label for="fecha">Nombre de la tarjeta</label>
				<input type="text" name = "nomTarjeta" placeholder="Nombre de la tarjeta" >  
				<label for="fecha">Fecha de vencimiento</label>
				<input type="month" name = "fechaVenc" placeholder="Fecha de vencimiento" > 
				<label for="fecha">CVC</label>
				<input type="number" name = "cvc" placeholder="CVC" >  
			</div>
			<button class="btn btn-primary" href="index1.php">Cancelar</button>
            <button class="btn btn-primary" id="compra">Realizar Compra</button>

		</div>


	</form>
	<script src="dist/js/eventoSelect.js"></script>
</body>
</html>