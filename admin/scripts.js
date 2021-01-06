$('.message a').click(function () {
  $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});

function divLogin() {
  document.getElementById('log').style.display = 'block';
}

function db_succes() {
  $('input[type="text"]').val('');
  $('input[type="number"]').val('');
  alert("Registro Añadido con Éxito!");
}

function detalles(id,nombre,precio,camarotes,banos,medidas,capacidad,cantidad,foto_ruta) {
  $('#id_c').val(id).attr('disabled','disabled');
  $('#nombre_c').val(nombre).attr('disabled','disabled');
  $('#precio_c').val(precio).attr('disabled','disabled');
   $('#camarotes_c').val(camarotes).attr('disabled','disabled');
   $('#banos_c').val(banos).attr('disabled','disabled');
   $('#medidas_c').val(medidas).attr('disabled','disabled');
  $('#capacidad_c').val(capacidad).attr('disabled','disabled');
   $('#cantidad_c').val(cantidad).attr('disabled','disabled');
 $('#foto_c').val(foto_ruta).attr('disabled','disabled'); 
}

function agregaform(id,nombre,precio,camarotes,banos,medidas,capacidad,cantidad,foto_ruta) {
 $('#idpersona').val(id); 
  $('#nombreu').val(nombre);
  $('#preciou').val(precio);
  $('#camarotesu').val(camarotes);
  $('#banosu').val(banos);
  $('#medidasu').val(medidas);
  $('#capacidadu').val(capacidad);
  $('#cantidadu').val(cantidad);
  $('#fotou').val(foto_ruta);
}

function actualizaDatos() {
  id = $('#idpersona').val();
  nombre = $('#nombreu').val();
  precio = $('#preciou').val();
  camarote = $('#camarotesu').val();
  banos = $('#banosu').val();
  medidas = $('#medidasu').val();
  capacidad = $('#capacidadu').val();
 cantidad = $('#cantidadu').val();
  foto_ruta = $('#fotou').val();


  cadena = "id=" + id +
    "&nombre=" + nombre +
    "&precio=" + precio +
    "&camarotes=" + camarote +
    "&banos=" + banos +
    "&medidas=" + medidas +
    "&capacidad=" + capacidad +
    "&cantidad=" + cantidad +
    "&foto_ruta=" + foto_ruta;

  $.ajax({
    type: "POST",
  url: "actualizaDatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        alert("Registro Actualizado");
        location.reload();
      } else {
        alert("ERROR UNU eee" + r);
      }
    }
  });
}

function eliminarDatos(id) {
  cadena = "id=" + id;
  $.ajax({
    type: "POST",
    url: "eliminarDatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        alert("Registro Eliminado!");
        location.reload();
      } else {
        alert("ERROR UNU" + r);
      }
    }
  });
}

