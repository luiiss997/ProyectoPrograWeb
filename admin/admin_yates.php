<?php include("templeate_admin/encabezado.php"); ?>
<?php include("templeate_admin/menu_admin.php"); ?>
<?php require_once 'datos.html';?>
  <!-- Modal para edicion de datos -->
  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="background-color:rgb(42, 192, 192);" >
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                </div>
                <div class="modal-body">
                    <input type="text" hidden="" id="idpersona" name="">
                    <label>Nombre</label>
                    <input type="text" name="" id="nombreu" class="form-control input-sm">
                    <label>Precio</label>
                    <input type="number" name="" id="preciou" class="form-control input-sm">
                    <label>Camarotes</label>
                    <input type="number" name="" id="camarotesu" class="form-control input-sm">
                    <label>banos</label>
                    <input type="number" name="" id="banosu" class="form-control input-sm">
                    <label>medidas</label>
                    <input type="number" name="" id="medidasu" class="form-control input-sm">
                    <label>Capacidad</label>
                    <input type="number" name="" id="capacidadu" class="form-control input-sm">
                    <label>Cantidad</label>
                    <input type="number" name="" id="cantidadu" class="form-control input-sm">
                    <label>Foto</label>
                    <input type="text" name="" id="fotou" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" id="actualizadatos"  onclick="datos()" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para ver datos unu -->
    <div class="modal fade" id="modales" name="modales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="background-color:rgb(42, 192, 192);" >
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Datos</h4>
                </div>
                <div class="modal-body">
                    <label>ID</label>
                    <input  type="number" name="id_c" id="id_c" class="form-control input-sm">
                    <label>Nombre</label>
                    <input type="text" name="" id="nombre_c" class="form-control input-sm" >
                    <label>Precio</label>
                    <input type="number" name="" id="precio_c" class="form-control input-sm" >
                    <label>Camarotes</label>
                    <input type="number" name="" id="camarotes_c" class="form-control input-sm" >
                    <label>Baños</label>
                    <input  type="number" name="" id="banos_c" class="form-control input-sm">
                    <label>Medidas</label>
                    <input type="number" name="" id="medidas_c" class="form-control input-sm" >
                    <label>Capacidad</label>
                    <input type="number" name="" id="capacidad_c" class="form-control input-sm" >
                    <label>Cantidad</label>
                    <input type="number" name="" id="cantidad_c" class="form-control input-sm" >
                    <label>Ruta de Foto</label>
                    <input type="text" name="" id="foto_c" class="form-control input-sm" >
                </div>
            </div>
        </div>
    </div>






<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('../images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Administración General de los Yates</h1>
                    <p>Se podran realizar las siguientes acciones: actualizar información,eliminar un yate y visualizar a detalle la información</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$link = new PDO('mysql:host=localhost;dbname=proyectoweb', 'root', ''); 

?>

<br>
<div class="container">
    <div class="row justify-content-center text-center">  

    <div class="col-lg-12 text-center">
        <h3>Yates Rentados</h3>
        <br>
        <table class="table ">
           <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Camarotes</th>
                    <th>Baños</th>
                    <th>Medida</th>
                    <th>Capacidad</th>
                    <th>Cantidad</th>
                    <th> Ruta de Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php foreach ($link->query('SELECT * from yates') as $row){  ?> 
<tr>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['camarotes'] ?></td>
    <td><?php echo $row['banos'] ?></td>
    <td><?php echo $row['medidas'] ?></td>
    <td><?php echo $row['capacidad'] ?></td>
    <td><?php echo $row['cantidad'] ?></td>
    <td><?php echo $row['foto_ruta'] ?></td>
    <td>
    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modales" onclick="detalles
                            ('<?php echo $row['id'] ?>', '<?php echo $row['nombre'] ?>', '<?php echo $row['precio'] ?>', '<?php echo $row['camarotes'] ?>', '<?php echo $row['banos'] ?>', '<?php echo $row['medidas'] ?>', '<?php echo $row['capacidad'] ?>', '<?php echo $row['cantidad'] ?>', '<?php echo $row['foto_ruta'] ?>')">Datos</button>
                        </td>
                        <td>
                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform 
                            ('<?php echo $row['id'] ?>', '<?php echo $row['nombre'] ?>', '<?php echo $row['precio'] ?>', '<?php echo $row['camarotes'] ?>', '<?php echo $row['banos'] ?>', '<?php echo $row['medidas'] ?>', '<?php echo $row['capacidad'] ?>', '<?php echo $row['cantidad'] ?>', '<?php echo $row['foto_ruta'] ?>')">Editar</button>
                        </td>
                        <td><button class="btn btn-danger" type="button" onclick="eliminarDatos('<?php echo $row['id'] ?>')">Eliminar</button></td>
                    </tr>
                <?php } ?>
        </table>

    </div>
</div>
</div>

<script type="text/javascript">
    function datos(){
        actualizaDatos();
    }
</script>

<?php include("templeate_admin/pie.php"); ?>