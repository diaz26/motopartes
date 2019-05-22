<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
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
      <form action="<?=base_url(); ?>index.php/Productos/agregardeverdad/" method="post" enctype="multipart/form-data" data-ajax="false">
        <label><b>Nombre:</b></label><br>
        <input type="text" class="form-control" name="nombre" required>
        <label><b>Marca:</b></label><br>
        <input type="text" class="form-control" name="marca" required>
        <label><b>Año:</b></label><br>
        <input type="number" class="form-control" name="year" required>
        <label><b>Parte:</b></label><br>
        <input type="text" class="form-control" name="parte"  required>
        <label><b>Ubicacion:</b></label><br>
        <input type="text" class="form-control" name="ubicacion" required>
        <label><b>Color:</b></label><br>
        <input type="text" class="form-control" name="color" required>
        <label><b>Precio:</b></label><br>
        <input type="number" step="any" class="form-control" name="precio" required>
        <label><b>Descripcion:</b></label><br>
        <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        <b>Imagen:</b><br><img src="" width="30%" id="imaproducto">
        <input type="file" name="tcarga" id="upload" value="">
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


       <input type="submit" name="" value="agregar" data-icon="info" data-transition="slidedown">

       </form>

			</div>






    </div>
    <div data-role="footer">

    </div>
  </div>

</body>
</html>
