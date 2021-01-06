<?php
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $camarrotes=$_POST['camarrotes'];
    $banos=$_POST['banos'];
	$medidas=$_POST['medidas'];
    $capacidad=$_POST['capacidad'];
    $cantidad=$_POST['cantidad'];
    
  
    $sql="INSERT INTO yates (nombre,precio,camarotes,banos,medidas,capacidad) VALUES ('$nombre', '$precio', '$camarrotes', '$banos', '$medidas', '$capacidad','$cantidad')";

    $db->query($sql);
    return $db;
?>
