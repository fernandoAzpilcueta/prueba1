<?php
include('connection.php');

function valid_pass($v2) {
    $r1='/[A-Z]/';  //Uppercase
    $r2='/[a-z]/';  //lowercase
    $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
    $r4='/[0-9]/';  //numbers
 
    if(preg_match_all($r1,$v2, $o)<2) return FALSE;
    if(preg_match_all($r2,$v2, $o)<2) return FALSE;
    if(preg_match_all($r3,$v2, $o)<2) return FALSE;
    if(preg_match_all($r4,$v2, $o)<2) return FALSE;
    if(strlen($v2)<8) return FALSE;
 
    return TRUE;
}

if(isset($_REQUEST['guardar1'])){
    $v1 = mysqli_real_escape_string($con, $_REQUEST['username']);
    $v2 = mysqli_real_escape_string($con, $_REQUEST['password']);
    $v3 = mysqli_real_escape_string($con, $_REQUEST['email']);

    if (valid_pass($v2) == true && filter_var($v3, FILTER_VALIDATE_EMAIL)){
        $vn = md5($v2);
        $sql = "insert into clientes (username, password, email) ";
        $sql .= "VALUES ('$v1', '$vn', '$v3')";
       if (mysqli_query($con, $sql)) {
           echo' <script type="text/javascript"> alert("Datos registrados correctamente")</script>';
           header("location: account.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($con);
       }
   
    }else{
       echo' <script type="text/javascript"> alert("Corregir datos");
       window.location.href = "account.php"
       </script>';
    }
}

 ?>