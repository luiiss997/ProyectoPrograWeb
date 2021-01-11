<?php include("templeate_admin/encabezado.php"); ?>
<?php include("templeate_admin/menu_admin.php"); ?>


<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Crear nuevos yates</h1>
          <p>Proporciona los datos del yate nuevo y verifica que la información este correcta antes de dar clic en el boton agregar</p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-7 text-center mb-5">
      <h2>Registro de Yate</h2>
      <p>Brinda la información requerida para poder registar el yate satisfactoriamente</p>
    </div>
  </div>
  <div class="container">

    <div class="row justify-content-center text-center">
      <div class="col-lg-6 text-center">
        <img class="card-img-top" src="../images/yate.jpg" alt="Card image" style="width: 500px;">
        <br><br>
      </div>

      <div class="col-lg-6 text-center">
        <div class="row text-center justify-content-center">
          <div class="col-lg-12 mb-5">
            <form method="post" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Nombre</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="Nombre del Yate" name="nombre">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Precio</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Precio por día" name="precio">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Camarotes</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Número de Camarotes" name="camarrotes">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Baños</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Número de Baños" name="banos">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Medidas</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Pies" name="medidas">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Capacidad</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Capacidad de Personas" name="capacidad">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Cantidad</label>
                </div>
                <div class="col-md-9">
                  <input type="number" class="form-control" placeholder="Cantidad de Yates" name="cantidad">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mb-4 mb-lg-0">
                  <br>
                  <label for="nom">Foto</label>
                </div>
                <div class="col-md-9">
                  <input type="file" name="foto" class="form-control" accept="image/*">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 mr-auto">
                  <button class="btn btn-primary" type="submit" id="submit" name="submit">Agregar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
if (isset($_POST["submit"])) {
       
  if (insertar($_POST['nombre'], $_POST['precio'], $_POST['camarrotes'], $_POST['banos'], $_POST['medidas'], $_POST['capacidad'], $_POST['cantidad'], $_FILES)) {
   ?> 
   <script type="text/javascript">
    alert("Almacenado Correctamente");
</script>
    
    <?php
  } else {
      ?>
    <script type="text/javascript">
    alert("Almacenado Incorrectamente");
</script>
     <?php
  }
}

function insertar($nombre, $precio, $camarrotes, $banos, $medidas, $capacidad, $cantidad, $imagen){
  $ruta = 'img/' . $nombre . '.png';
  move_uploaded_file($imagen['foto']['tmp_name'], $ruta);

  $servidor = "localhost";
  $usuarioBD = "root";
  $pwdBD = "";
  $nomBD = "proyectoweb";
  $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");
  
  $sql = "INSERT INTO yates (nombre,precio,camarotes,banos,medidas,capacidad,cantidad,foto_ruta) 
  VALUES ('$nombre','$precio','$camarrotes','$banos','$medidas','$capacidad','$cantidad','$ruta')";

  $db->query($sql);

  return $db;
}


?>

<?php include("templeate_admin/pie.php"); ?>