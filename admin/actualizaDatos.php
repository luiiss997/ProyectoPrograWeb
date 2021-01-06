<?php 
	$servidor = "localhost";
	$usuarioBD = "root";
	$pwdBD = "";
	$nomBD = "proyectoweb";
	$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$camarotes=$_POST['camarotes'];
	$banos=$_POST['banos'];
	$medidas=$_POST['medidas'];
	$capacidad=$_POST['capacidad'];
	$cantidad=$_POST['cantidad'];
	$foto_ruta=$_POST['foto_ruta'];

	$sql="UPDATE yates SET nombre='$nombre',precio='$precio',camarotes='$camarotes',banos='$banos',medidas='$medidas',capacidad='$capacidad',cantidad='$cantidad',foto_ruta='$foto_ruta' where id='$id'";

	echo $result=mysqli_query($db,$sql);
 ?>