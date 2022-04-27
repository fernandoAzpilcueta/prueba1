<?php

include 'BE_carrito.php';
include 'connection.php';

$fEntrega=$_POST['fecha'];
$fechaActual = date('Y-m-d');
$pago=$_POST['pago'];
$username=$_SESSION['username'];

echo "<h3>$fEntrega</h3>";
echo "<h3>$fechaActual</h3>";
echo "<h3>$pago</h3>";

$sql = "INSERT INTO `pedido`(`fechaPedido`, `fechaEntrega`, `idUsuario`)";
$sql .= "VALUES ('$fechaActual','$fEntrega' , '$username')";

mysqli_query($con, $sql);

echo "<h3>Entro</h3>";
$consulta=mysqli_query($con, "SELECT codPedido FROM pedido where idUsuario='$username' and fechaPedido='$fechaActual'");

    if(mysqli_num_rows($consulta)>0){
        $row = mysqli_fetch_array($consulta);
        
        $cod = $row[0];
        echo $cod;

        foreach($_SESSION['carrito'] as $indice =>$producto){

            $idP = $producto['idProducto'];
            $precio = $producto['precio'];
            $cantidad = $producto['cantidad'];


            

            $sql = "INSERT INTO `detallpedido`(`idPedido`, `idProducto`, `precio`, `cantidad`)";
            $sql .= "VALUES ('$cod' ,'$idP' ,'$precio', '$cantidad')";
            mysqli_query($con, $sql);

            
        
        }
        if($_POST['pago']==1){
            $numTarjeta = $_POST['numTarjeta'];
            $nomTarjeta = $_POST['nomTarjeta'];
            $fechaVenc = $_POST['fechaVenc'];
            $cvc = $_POST['cvc'];
            $sql = "INSERT INTO `tarjeta`(`numero`, `nombre`, `fecha`,`cvc`,`idPedido`)";
            $sql .= "VALUES ('$numTarjeta','$nomTarjeta' , '$fechaVenc','$cvc','$cod')";
        
            mysqli_query($con, $sql);
        }
        header("Location:index1.php");

    }




?>