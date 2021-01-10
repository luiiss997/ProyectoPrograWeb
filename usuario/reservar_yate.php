<?php include("templeate_usuario/encabezado.php"); ?>
<?php include("templeate_usuario/menu_usuario.php"); ?>


<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Nuestros Yates para Rentar</h1>
          <p>Selecciona el Yate de tu agrado y siguie el proceso de renta, en pocos minutos renta tu yate.</p>
          <br>
          <p>Todos nuestros yates cuentan con equipo de sonido, cocina, radar, gps, equipo de pesca y snorkel.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row">

     <!--info yate-->
    <?php 
    $link = new PDO('mysql:host=localhost;dbname=proyectoweb', 'root', ''); 
    foreach ($link->query('SELECT * from yates') as $row){
    ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="item-1">
          <img src="../admin/<?php echo $row['foto_ruta'] ?>" alt="Image" class="img-fluid">
          <div class="item-1-contents">
            <div class="text-center">
              <h3><?php echo $row['nombre'] ?></h3>
              <div class="rating">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <div class="rent-price"><span>$<?php echo $row['precio'] ?> USD/</span> Por día.</div>
            </div>
            <ul class="specs">
              <li>
                <span>Camarotes</span>
                <span class="spec"><?php echo $row['camarotes'] ?></span>
              </li>
              <li>
                <span>Baños</span>
                <span class="spec"><?php echo $row['banos'] ?></span>
              </li>
              <li>
                <span>Medida</span>
                <span class="spec"><?php echo $row['medidas'] ?></span>
              </li>
              <li>
                <span>Capacidad</span>
                <span class="spec"><?php echo $row['capacidad'] ?></span>
              </li>
            </ul>
            <div class="d-flex action">
              <a href="rentar_yate.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>&precio=<?php echo $row['precio']; ?>&camarotes=<?php echo $row['camarotes'];
              ?>&banos=<?php echo $row['banos']; ?>&medidas=<?php echo $row['medidas']; ?>&capacidad=<?php echo $row['capacidad']; ?>&cantidad=<?php echo $row['cantidad']; 
              ?>&foto=<?php echo $row['foto_ruta']; ?>" class="btn btn-primary">Rentar</a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- fin info yate-->

      <div class="col-12">
        <span class="p-3">1</span>
        <a href="#" class="p-3">2</a>
        <a href="#" class="p-3">3</a>
        <a href="#" class="p-3">4</a>
      </div>
    </div>
  </div>
</div>


<br><br>


<?php include("templeate_usuario/pie.php"); ?>