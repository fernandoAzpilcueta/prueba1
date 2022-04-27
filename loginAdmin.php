
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KülStore</title>
  <link rel="stylesheet" href="css_account.css">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
	</div>
	</div>	
  <div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="img/unicorn.png" >
				</div>
				<div class="col-2">
					<div class="form-container">		
          <span onclick="login()">Login Admin</span>					
						<form action="login.php" method="post">
							<input type="text" class="form-control" required="required" placeholder="Username" name="username">
							<input type="password" class="form-control" required="required" placeholder="Password" name="password">
							<button type="submit" class="btn" name="login">Sign in</button>
			      </form>		
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
