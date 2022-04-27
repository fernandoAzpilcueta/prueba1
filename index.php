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
			<li><a href="index.php">Home</a></li>
			<li><a href="productosMain.php">Products</a></li>
			<li><a href="account.php">Account</a></li>
            <li><a href="loginAdmin.php">Admin</a></li>
			</ul>
		</nav>
		</div>
	<!------Portada------->
		<div class="row">
				<div class="col-2">
					<h1>KülStore</h1>
					<p>The day will come back around.<br>
					As if nothing happened.<br>Yeah, life goes on.</p>
					<a href="productosMain.php" class="btn">Explore now &#8594</a>
				</div>
				<div class="col-2">
					<img src="img/bt21tres.png">
				</div>
		</div>		
	</div>
	</div>	

	<div class="small-container">
	<p>.</p>
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-3">
				<img src="img/Jacket_Wings.jpg">
				<h4>Jacket Wings</h4>
				<p>S/. 150.00</p>
			</div>		
			<div class="col-3">
				<img src="img/Polo_2cool_4skool.jpg">
				<h4>Polo 2 cool 4 skool</h4>
				<p>S/. 58.00</p>
			</div>
			<div class="col-3">
				<img src="img/Polera_134340.jpg">
				<h4>Polera 134340</h4>
				<p>S/. 110.00</p>
			</div>
		</div>
		

		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-3">
				<img src="img/Polera_Telepathy.jpg">
				<h4>Polera Telepathy</h4>
				<p>S/. 110.00</p>
			</div>		
			<div class="col-3">
				<img src="img/Polo_RM_Playlist.jpg">
				<h4>Polo Mono:Seoul</h4>
				<p>S/. 48.00</p>
			</div>
			<div class="col-3">
				<img src="img/Bolso_Blue_Grey.jpg">
				<h4>Bolso Blue&Grey</h4>
				<p>S/. 37.00</p>
			</div>
		</div>
	</div>

	<div class="offer">	
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="img/puzzle.jpg" class="offer-img"	width="400px">
				</div>
				<div class="col-2">
					<p>Exclusively Available on KülStore</p>
					<h1>Puzzle BT21</h1>
					<small> Relax with your friends &
					enjoy unraveling the fun BT21 themes, 
					one puzzle piece at a time.
					Jigsaw puzzle comes in 4 different themes 
					(500pcs).Collect them all!</small>
				</div>
			</div>
		</div>
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