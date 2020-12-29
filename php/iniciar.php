<?php
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

$correo=$_POST['correo'];
$pw=$_POST['pw'];
    
$sql="SELECT * FROM usuarios WHERE email='$correo' and password='$pw'";
$result=mysqli_query($db,$sql);

if($row=mysqli_fetch_array($result)){
  session_start();

  $_SESSION['id']=$row['id'];
  $_SESSION['nombre']=$row['nombre'];
  $_SESSION['apellidos']=$row['apellidos'];
  $_SESSION['telefono']=$row['telefono'];
  $_SESSION['edad']=$row['edad'];
  $_SESSION['email']=$row['email'];
  echo "success";
 }else{
  echo 1;
 }

?>
