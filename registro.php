<?php include("templeate/encabezado.php"); ?>
<?php include("templeate/menu.php"); ?>

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Registro</h1>
          <p>Es necesario tener una cuenta para rentar un yate.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Registro</h2>
        <p>Brinda la información requerida para poder registar tus datos satisfactoriamente</p>
      </div>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col-lg-12 mb-5">
      <p id="error" style="color: red;"></p>
      <div class="form" name="registro">
        <div class="form-group row">
          <div class="col-md-6 mb-4 mb-lg-0">
            <input type="text" class="form-control" placeholder="Nombre(s)" id="nombre">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Apellidos" id="apellidos">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-8 mb-4 mb-lg-0">
            <input type="tel" class="form-control" placeholder="Teléfono" id="telefono" pattern="[0-9]+" maxlength="10">
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Edad" id="edad" pattern="[0-9]+" maxlength="2">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <input type="email" class="form-control" placeholder="Email" id="correo">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <input type="password" class="form-control" placeholder="Contraseña" id="password">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" id="password2">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12 mr-auto">
            <button class="btn btn-primary" id="submit" onclick="registro()">Registrarse</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function registro() {

    nombre = $('#nombre').val();
    apellidos = $('#apellidos').val();
    telefono = $('#telefono').val();
    edad = $('#edad').val();
    correo = $('#correo').val();
    pw = $('#password').val();
    pw2 = $('#password2').val();

    if (validar(nombre,apellidos,telefono,edad,correo,pw,pw2)) {
      if (pw == pw2) {
      cadena = "nombre=" + nombre +
        "&apellidos=" + apellidos +
        "&telefono=" + telefono +
        "&edad=" + edad +
        "&correo=" + correo +
        "&pw=" + pw;

      $.ajax({
        type: "POST",
        url: "php/registrar.php",
        data: cadena,
        success: function(r) {
          if (r == 1) { //Cuidado
            alert("ERROR UNU" + r);
          } else {
            alert("Registro Realizado con Éxito!");
            location.href = "usuario/bienvenido.php";
          }
        }
      });
    } else {
      $('#error').text('Verifique que las contraseñas sean iguales');
    }
    }
  }

  function validar(n, a, t, e, c, p ,p2) {
    ex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
    if (n==""||a==""||t==""||e==""||c==""||p==""||p2=="") {
      $('#error').text('No deje campos vacíos');
      return false;
    }else{
      if (isNaN(t)) {
        $('#error').text('Verifique los campos');
        return false;
      }else if(!ex.test(c)){
        $('#error').text('Verifique los campos');
        return false;
      }else if(isNaN(e)){
        $('#error').text('Verifique los campos');
        return false;
      }else{
        return true;
      }
    }
  }

</script>

<?php include("templeate/pie.php"); ?>