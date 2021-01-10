<?php include("templeate_usuario/encabezado.php"); ?>
<?php include("templeate_usuario/menu_usuario.php"); ?>


<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Reservar Yate</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php session_start(); ?>

<div class="container">
    <div class="text-center">
        <h3>Datos de Usuario:</h3>
        <h4>
            Nombre:
        </h4>
        <h5><?php echo $_SESSION['nombre']; ?></h5>
        <h4>
            Apellidos:
        </h4>
        <h5><?php echo $_SESSION['apellidos']; ?></h5>
        <h4>
            Edad:
        </h4>
        <h5><?php echo $_SESSION['edad']; ?></h5>
        <h4>
            Correo:
        </h4>
        <h5><?php echo $_SESSION['email']; ?></h5>
    </div>
    <br>

    <div class="text-center">
        <h3>Historial de yates rentados:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Precio por día</th>
                    <th>Inicio de la renta</th>
                    <th>Fin de la renta</th>
                    <th>Precio total</th>
                </tr>
            </thead>
            <tr>
                <td>Azimut 116</td>
                <td>7,800</td>
                <td>21/12/2020</td>
                <td>25/12/2020</td>
                <td>187,200</td>
            </tr>
        </table>

    </div>
</div>


<?php include("templeate_usuario/pie.php"); ?>