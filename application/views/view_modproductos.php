<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>face fet</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/temamotopartes.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/jquery.mobile.icons.min.css" />
  <script type="text/javascript" src=" <?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>



</head>
<body>



  <div data-role="page" id="rta">
    <div data-role="header">

				<h1 style="font-style:Helvetica">motopartes</h1>
				<a href="<?= base_url(); ?>index.php/login/session_dest" data-icon="grid"> Cerrar sesion</a>

			<nav data-role="navbar">


		 </nav>

    </div>
    <div data-role="main">


		<div class="ui-body ui-body-a ui-corner-all">
      <h3><b>Agregar producto</b></h3>
      <hr>
      <form action="<?=base_url(); ?>index.php/productos/modificar/" method="post" enctype="multipart/form-data" data-ajax="false">
        <label><b>Nombre:</b></label><br>
        <input type="text" class="form-control" name="nombre" value="<?php  echo $producto->nombre; ?>" required>
        <input type="hidden" name="id" value="<?php  echo $producto->id; ?>">
        <label><b>Marca:</b></label><br>
        <input type="text" class="form-control" name="marca" value="<?php  echo $producto->marca; ?>" required>
        <label><b>Año</b></label><br>
        <input type="text" class="form-control" name="year" value="<?php  echo $producto->year; ?>" required>
        <label><b>Parte:</b></label><br>
        <input type="ubicacion" class="form-control" name="parte" value="<?php  echo $producto->parte; ?>" required>
        <label><b>Ubicacion:</b></label><br>
        <input type="ubicacion" class="form-control" name="ubicacion" value="<?php  echo $producto->ubicacion; ?>" required>
        <label><b>Color:</b></label><br>
        <input type="parte" class="form-control" name="color" value="<?php  echo $producto->color; ?>" required>
        <label><b>Precio:</b></label><br>
        <input type="number" step="any" class="form-control" name="precio" value="<?php  echo $producto->precio; ?>" required>
        <label><b>Descripcion:</b></label><br>
        <textarea name="descripcion" class="form-control" rows="2" cols="80" required><?php echo $producto->descripcion; ?></textarea>
        <b>Imagen:</b><br><img src="<?php echo base_url().$producto->img;?>" width="100%" id="imaproducto">
        <input type="file" name="tcarga" id="upload" value="<?php echo $producto->img; ?>">
        <script>
        document.getElementById("upload").onchange = function() {
          var reader = new FileReader(); //instanciamos el objeto de la api FileReader

          reader.onload = function(e) {
            document.getElementById("imaproducto").src = e.target.result;
          };

          // read the image file as a data URL.
          reader.readAsDataURL(this.files[0]);
        };

        </script>

       <input type="submit" name="" value="Editar" data-icon="info" data-transition="slidedown">

       </form>

			</div>






    </div>
    <div data-role="footer">

    </div>
  </div>

</body>
</html>
