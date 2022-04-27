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
		<!--<img src="img/menu.png" class="menu-icon" onclick="menutoggle()" height="20px">-->
	</div>
	</div>	
	</div>
<!------account page------->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="img/gato.png" >
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>
											
						<form id="LoginForm" action="login1.php" method="post">
							<input type="text" class="form-control" required="required" placeholder="Username" name="username">
							<input type="password" class="form-control" required="required" placeholder="Password" name="password">
							<button type="submit" class="btn" name="login1">Login</button>
						</form>
						
						<form id ="RegForm" action="registrar.php" method="post">
							<input type="text" class="form-control" required="required" placeholder="Username" name="username">
							<input type="email" class="form-control" required="required"placeholder="Email" name="email">
							<input type="password" class="form-control" required="required" placeholder="Password" name="password">
							<button type="submit" class="btn" name="guardar1">Register</button>
						</form>
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
<!------ js for Toggle Form ------>	
<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");
	
		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
		}
		
		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indicator.style.transform = "translateX(0px)";
		}
	
</script>
</body>
</html>