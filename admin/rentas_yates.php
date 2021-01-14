<?php include("templeate_admin/encabezado.php"); ?>
<?php include("templeate_admin/menu_admin.php"); ?>


<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Yates en Renta</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php

$link = new PDO('mysql:host=localhost;dbname=proyectoweb', 'root', ''); 

?>

    <div class="container">
    <div class="row justify-content-center text-center">  

    <div class="col-lg-12 text-center">
        <h3>Yates Rentados</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Persona</th>
                    <th>Modelo</th>
                    <th>Precio día</th>
                    <th>Inicio de la renta</th>
                    <th>Fin de la renta</th>
                    <th>Precio total</th>   
                </tr>
            </thead>
            <?php foreach ($link->query('SELECT u.nombre as usu, y.nombre, y.precio,r.fecha_inicio,r.fecha_salida,r.total from usuarios u JOIN renta r on u.id=r.id_usuario JOIN yates y on y.id=r.id_yate') as $row){  ?> 
<tr>
<td><?php echo $row['usu'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['fecha_inicio'] ?></td>
    <td><?php echo $row['fecha_salida'] ?></td>
    <td><?php echo $row['total'] ?></td>
</tr>
<?php } ?>
        </table>

    </div>
    
</div>
</div>


<?php include("templeate_admin/pie.php"); ?>