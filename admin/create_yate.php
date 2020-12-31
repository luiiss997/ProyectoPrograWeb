<?php include("templeate_admin/encabezado.php"); ?>
<?php include("templeate_admin/menu_admin.php"); ?>


<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Agregar Información de Yates</h1>
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
    <div class="container">    
      <div class="card" style="width:400px">
        <img class="card-img-top" src="../images/yate.jpg" alt="Card image" style="width:100%" >
      </div>
  </div>

    </div>
    <div class="col-lg-6 text-center">
    
    <div class="row text-center justify-content-center">
      <div class="col-lg-12 mb-5">
        
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Nombre</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Nombre" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Precio</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Precio" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Carrotes</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Carrotes" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Baños</label>
            </div>
            <div class="col-md-9">
              <input type="number" class="form-control" placeholder="Numero de Baños" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Medidas</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="altura x largo x ancho" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Capacidad</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Capacidad kg" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-4 mb-lg-0">
            <br>
            <label for="nom">Cantidad</label>
            </div>
            <div class="col-md-9">
              <input type="number" class="form-control" placeholder="Cantidad" id="nombre">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12 mr-auto">
              <button class="btn btn-primary" id="submit" onclick="registro()">Agregar</button>
            </div>
          </div>
       
      </div>
    </div>
  </div>
    </div>
</div>
</div>


<?php include("templeate_admin/pie.php"); ?>