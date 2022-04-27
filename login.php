<?php 

include('connection.php');
session_start();
if(isset($_POST['login'])){

$user=$_POST['username'];
$pass=$_POST['password'];
$pass=md5($pass);

$query=mysqli_query($con,"select * from usuarios where  username='$user' and password='$pass' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $id=$row['id'];
           $user=$row['username'];
           $counter=mysqli_num_rows($query);
  
  	if ($counter == 0) 
	  {	
	  echo "<script type='text/javascript'>alert('Usuario o password incorrectos!');
	  document.location='loginAdmin.php'</script>";
	  } 
	elseif ($counter > 0){
	  $_SESSION['id']=$id;	
	  $_SESSION['username']=$user;		
      header("location: panelUsuarios.php");
	}
}	 
?>