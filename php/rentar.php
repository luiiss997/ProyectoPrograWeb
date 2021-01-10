<?php 
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");

session_start();
$entrega=$_POST['entrega'];
$recogida=$_POST['recogida'];
$inicio=$_POST['inicio'];
$salida=$_POST['regreso'];
$id_yate=$_POST['id_yate'];
$precio=$_POST['precio'];
$id_usuario=$_SESSION['id'];

$date1 = date_create($inicio);
$date2 = date_create($salida);
$interval = date_diff($date1, $date2);
$dias=$interval->format('%a');

$total = $precio*$dias;

$query= "INSERT INTO renta (id_yate, id_usuario, total, dias, lugar_recogida, lugar_entrega, fecha_inicio, fecha_salida) 
VALUES ('$id_yate', '$id_usuario', '$total', '$dias', '$recogida', '$entrega', '$inicio', '$salida')";

return $db->query($query);

?>