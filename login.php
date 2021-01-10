<?php include("templeate/encabezado.php"); ?>
<?php include("templeate/menu.php"); ?>

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Inicio de Sesión</h1>
          <p>Iniciar sesión para rentar tu yate.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Iniciar Sesión</h2>
        <p>Brinda el correo y la contraseña para tener acceso</p>
      </div>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col-lg-12 mb-5">
        <p id="error" style="color: red;"></p>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Email" id="correol">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="password" class="form-control" placeholder="Contraseña" id="passwordl">
            </div>
          </div>
            <div class="text-center">
               <button class="btn btn-primary" id="submit" onclick="login()">Iniciar Sesión</button>
            </div>
      </div>
      <p>¿No estás registrado? Regístrate <a href="registro.php">Aquí</a></p>
    </div>
  </div>
</div>


<script type="text/javascript">
  function login() {
    correo = $('#correol').val();
    pw = $('#passwordl').val();

    if (correo=="admin@yates.com") {
      location.href = "admin/administracion.php";
    }else{
      cadena = "correo=" + correo +
        "&pw=" + pw;

      $.ajax({
        type: "POST",
        url: "php/iniciar.php",
        data: cadena,
        success: function(r) {
          if (r == 1) { //Cuidado
            $('#error').text('Usuario o contraseña incorrectos');
           // alert(r);
          } else {
           // alert(r);
            location.href = "usuario/bienvenido.php";
          }
        }
      });
    }
  }
</script>

<?php include("templeate/pie.php"); ?>