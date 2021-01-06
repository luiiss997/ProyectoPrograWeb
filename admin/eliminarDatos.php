<?php 
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

	$id=$_POST['id'];

	$sql="DELETE FROM yates WHERE id='$id'";
    echo $result=mysqli_query($db,$sql);
    
 ?>