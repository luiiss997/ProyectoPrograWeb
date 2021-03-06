<?php include("templeate/encabezado.php"); ?>
<?php include("templeate/menu.php"); ?>

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Bienvenido</h1>
          <p>Encuentra el mejor yate que se adecue a tus necesidades y rentalo de manera fácil y rápida.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h3>Nuestros Yates</h3>
          <p class="mb-4">Todos nuestros yates cuentan con equipo de sonido, cocina, radar, gps, equipo de pesca y snorkel.</p>
          <p>
            <a href="yates.php" class="btn btn-primary custom-prev">Anterior</a>
            <span class="mx-2">/</span>
            <a href="yates.php" class="btn btn-primary custom-next">Siguiente</a>
          </p>
        </div>
        <div class="col-lg-9">
          <div class="nonloop-block-13 owl-carousel">

             <?php
             $link = new PDO('mysql:host=localhost;dbname=proyectoweb', 'root', '');
             foreach ($link->query('SELECT * FROM yates LIMIT 3') as $row) {
             ?>
            <div class="item-1">
              <a href="reservar_yate.php"><img src="admin/<?php echo $row['foto_ruta']; ?>" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                  <h3><a href="reservar_yate.php"><?php echo $row['nombre']; ?></a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$<?php echo $row['precio'] ?> USD/</span>4hrs.</div>
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
                    <span class="spec"><?php echo $row['medidas'] ?> Pies</span>
                  </li>
                  <li>
                    <span>Capacidad</span>
                    <span class="spec"><?php echo $row['capacidad'] ?> personas</span>
                  </li>
                </ul>
                <div class="d-flex action">
                  <a href="reservar_yate.php" class="btn btn-primary">Rentar</a>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-yate"></span>
          </span>
          <div class="service-1-contents">
            <h3>Renta por día</h3>
            <p>Estan disponibles para rentarlos por 24 horas.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-bote"></span>
          </span>
          <div class="service-1-contents">
            <h3>Renta para eventos</h3>
            <p>Se brindara servicio especial para invitados.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-calendario"></span>
          </span>
          <div class="service-1-contents">
            <h3>Renta pora Tours</h3>
            <p>Se renta por determinadas horas para poder hacer un paseo guiado</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-en-renta"></span>
          </span>
          <div class="service-1-contents">
            <h3>Renta por mes</h3>
            <p>Se podrán realizar rentas de yates por 1 mes</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-boya-salvavidas"></span>
          </span>
          <div class="service-1-contents">
            <h3>Incluyen Accesorios</h3>
            <p>Todos lo yates incluyen equipo de seguridad y adornos visibles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-5">
        <div class="service-1">
          <span class="service-1-icon">
            <span class="flaticon-buscar"></span>
          </span>
          <div class="service-1-contents">
            <h3>Términos y Condiciones</h3>
            <p>Realizamos contrato para cualquier tipo de renta.Sugerimos leer los términos y condiciones para la renta de Yates</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php include("templeate/pie.php"); ?>