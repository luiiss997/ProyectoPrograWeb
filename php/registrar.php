<?php
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $telefono=$_POST['telefono'];
    $edad=$_POST['edad'];
	$correo=$_POST['correo'];
    $pw=$_POST['pw'];
    
    $sql="INSERT INTO usuarios (nombre, apellidos, telefono, edad, email, password) VALUES ('$nombre', '$apellidos', '$telefono', '$edad', '$correo', '$pw')";

    if ($db->query($sql)) {
        session_start();

        $sql2="SELECT * FROM usuarios WHERE email='$correo' and password='$pw'";
        $result=mysqli_query($db,$sql2);
        $row=mysqli_fetch_array($result);
          $_SESSION['id']=$row['id'];
          $_SESSION['nombre']=$row['nombre'];
          $_SESSION['apellidos']=$row['apellidos'];
          $_SESSION['telefono']=$row['telefono'];
          $_SESSION['edad']=$row['edad'];
          $_SESSION['email']=$row['email'];
          echo "success";
        return $db;
    }else{
        echo 1;
    }
?>
