<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
  <div data-role="page" id="page1">
    <div data-role="header">
      <a href="#"  data-transition="flip" data-icon="home">Inicio</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/leon.png" width="15%"> </h1>
      <a href="#" data-transition="flip"  data-icon="grid">Login</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="#page2">acerca</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Sucursales</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>

    <div data-role="main" data-theme="c">
      <div class="ui-content">
        <form class="" action="<?= base_url(); ?>index.php/login/mostrar" method="post" data-ajax="false">
          <center>
            <input type="number" name="num1" style="text-align:center" placeholder="Columna a">
            <input type="number" name="num2" style="text-align:center" placeholder="Columna b">
            <button type="submit" name="button" style="width:30%">Enviar</button>
          </center>
        </form>
      </div>
    </div>
    <div data-role="footer">

    </div>
  </div>

</body>
</html>
