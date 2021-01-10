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
<div class="containter">
    <div class="row" style="margin-left: 250px;">
        <div class="col-md-5" style="margin-left: 50px;">
            <img src="../admin/<?php echo $_GET['foto']; ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-5">
            <div class="text-center">
                <h3><?php echo $_GET['nombre']; ?></h3>
                <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>$<?php echo $_GET['precio']; ?> USD/</span>Por día.</div>
            </div>
            <ul class="specs">
                <li>
                    <span>Camarotes</span>
                    <span class="spec"><?php echo $_GET['camarotes']; ?></span>
                </li>
                <li>
                    <span>Baños</span>
                    <span class="spec"><?php echo $_GET['banos']; ?></span>
                </li>
                <li>
                    <span>Medida</span>
                    <span class="spec"><?php echo $_GET['medidas']; ?> Pies</span>
                </li>
                <li>
                    <span>Capacidad</span>
                    <span class="spec"><?php echo $_GET['capacidad']; ?> Personas</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-12">
            <form class="trip-form">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6">
                        <h3 class="m-0">Reserva ahora</h3>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span class="text-primary"><?php echo $_GET['cantidad']; ?></span> <span> Yates disponibles</span></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="cf-1">Lugar de Recogida</label>
                        <input type="text" id="cf-1" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cf-2">Lugar de entrega</label>
                        <input type="text" id="cf-2" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cf-3">Fecha de inicio</label>
                        <input type="text" id="cf-3" class="form-control datepicker px-3">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cf-4">Fecha de regreso</label>
                        <input type="text" id="cf-4" class="form-control datepicker px-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-primary" onclick="reservar()">Reservar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function reservar() {
        recogida = $('#cf-1').val();
        entrega = $('#cf-2').val();
        inicio = $('#cf-3').val();
        regreso = $('#cf-4').val();
        precio = <?php echo $_GET['precio']; ?>
        id_yate = <?php echo $_GET['id']; ?>

        cadena = "id_yate=" + id_yate +
            "&recogida=" + recogida +
            "&entrega=" + entrega +
            "&inicio=" + inicio +
            "&regreso=" + regreso +
            "&precio=" + precio;

        $.ajax({
            type: "POST",
            url: "../php/rentar.php",
            data: cadena,
            success: function(r) {
                if (r == 1) { //Cuidado
                    alert("ERROR UNU" + r);
                } else {
                    alert("Registro Realizado con Éxito!" + r);
                    $('#cf-1').val("");
                    $('#cf-2').val("");
                    $('#cf-3').val("");
                    $('#cf-4').val("");
                }
            }
        });
    }
</script>

<?php include("templeate_usuario/pie.php"); ?>