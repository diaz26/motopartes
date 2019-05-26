<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>index.php/admin" data-ajax="false" data-transition="flip" data-icon="home">Home</a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/admin/session_dest" data-transition="flip" data-ajax="false" data-icon="back">Salir</a>
    </div>
    <div data-role="main" class="ui-content">
      <h3><b>Agregar producto</b></h3>
      <hr>
      <form action="<?=base_url(); ?>index.php/Productos/agregardeverdad/" method="post" enctype="multipart/form-data" data-ajax="false">
        <div class="ui-field-contain">
          <label for="Nombre" >Nombre:</label>
          <input id="Nombre" type="text" name="nombre" placeholder="Stock CBR 600 RR" required>
          <label for="Marca" >Marca:</label>
          <input id="Marca" type="text" name="marca" placeholder="Honda" required>
          <label for="Año" >Año:</label>
          <input id="Año" type="number" name="year" placeholder="2019" required>
          <label for="Parte" >Parte:</label>
          <input id="Parte" type="text" name="parte" placeholder="Stock" required>
          <label for="Ubicacion" >Ubicacion:</label>
          <input id="Ubicacion" type="text" name="ubicacion" placeholder="Atras" required>
          <label for="Color" >Color:</label>
          <input id="Color" type="text" name="color" placeholder="Rojo" required>
          <label for="Precio" >Precio:</label>
          <input id="Precio" type="number" step="any" placeholder="300 $USD" name="precio" required>
          <label for="Descripcion" >Descripcion:</label>
          <textarea id="Descripcion" name="descripcion" rows="2" placeholder="Stock Led CBR 600 RR Honda, modelo 2019" required></textarea>
          <label for="upload">Imagen:</label>
          <img src="" width="30%" id="imaproducto">
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
        </div>
        <input type="submit" value="Agregar" data-transition="slidedown">
      </form>
    </div>
    <div data-role="footer">
    </div>
  </div>
</body>
</html>
