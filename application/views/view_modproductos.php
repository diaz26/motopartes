<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="#" data-ajax="false" data-transition="flip" data-icon="home">Home</a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/admin/session_dest" data-transition="flip" data-ajax="false" data-icon="back">Salir</a>
    </div>
    <div data-role="main" class="ui-content">
      <h3><b>Editar producto</b></h3>
      <hr>
      <form action="<?=base_url(); ?>index.php/productos/modificar/" method="post" enctype="multipart/form-data" data-ajax="false">
        <div class="ui-field-contain">
          <label for="Nombre" >Nombre:</label>
          <input type="hidden" name="id" value="<?= $producto->id; ?>">
          <input id="Nombre" type="text" name="nombre" value="<?= $producto->nombre; ?>" required>
          <label for="Marca" >Marca:</label>
          <input id="Marca" type="text" name="marca"value="<?= $producto->marca; ?>" required>
          <label for="Año" >Año:</label>
          <input id="Año" type="number" name="year" value="<?= $producto->year; ?>" required>
          <label for="Parte" >Parte:</label>
          <input id="Parte" type="text" name="parte" value="<?= $producto->parte; ?>" required>
          <label for="Ubicacion" >Ubicacion:</label>
          <input id="Ubicacion" type="text" name="ubicacion" value="<?= $producto->ubicacion; ?>" required>
          <label for="Color" >Color:</label>
          <input id="Color" type="text" name="color" value="<?= $producto->color; ?>" required>
          <label for="Precio" >Precio:</label>
          <input id="Precio" type="number" step="any" name="precio" value="<?= $producto->precio; ?>" name="precio" required>
          <label for="Descripcion" >Descripcion:</label>
          <textarea id="Descripcion" name="descripcion" rows="2" required><?= $producto->descripcion; ?></textarea>
          <label for="upload">Imagen:</label>
          <img src="<?= base_url().$producto->img;?>" width="30%" id="imaproducto">
          <input type="file" name="tcarga" id="upload" value="value="<?= $producto->img; ?>"">
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
        </div>
        <input type="submit" value="Actualizar" data-transition="slidedown">
       </form>
    </div>
    <div data-role="footer">

    </div>
  </div>
</body>
</html>
