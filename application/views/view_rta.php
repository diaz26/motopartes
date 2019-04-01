<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div data-role="page" id="rta">
    <div data-role="header">
      <a href="index.php"  data-transition="flip" data-icon="home">Inicio</a>
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
    <div data-role="main">
      <div class="ui-grid-a">
        <div class="ui-block-a">
          <div class="ui-bar ui-bar-a">Block A</div>
          <?php
          for ($i=1; $i <= 10 ; $i++) {
            ?>
            <div class="ui-bar ui-bar-a" style="background-color:white"><?php echo $i; ?></div>
            <?php
          }
          ?>
        </div>
        <div class="ui-block-b">
          <div class="ui-bar ui-bar-a">Block B</div>
          <?php
          for ($j=11; $j <= 20 ; $j++) {
            ?>
            <div class="ui-bar ui-bar-a" style="background-color:white"><?php echo $j; ?></div>
            <?php
          }
          ?>
        </div>
      </div><!-- /grid-a -->
      <!--form class="u-filterable">
        <input id="autocomplete-input" date-type="search" name="" value="" placeholder="Buscando ando...">
      </form-->

      <ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar..." data-filter-reveal="false" date-inset="true">
        <li data-role="list-divider">Carros nuevos</li>

        <li>
          <a href="#">
            <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/tesla-thumb.jpg" alt="">
            <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/gf.png" alt="Francia" class="ui-li-icon ui-corner-none"> Acura
            <span class="ui-li-count">12</span>
            <h2>Los Acura</h2>
            <p>Estos son los acura</p>
          </a>
          <a href="#compra" data-rel="popup" data-position-to="windows" data-transition="pop">Carr</a>
        </li>
        <li data-icon="delete"><a href="#"> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/album-bb.jpg" alt=""> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/de.png" alt="Francia" class="ui-li-icon ui-corner-none">Audi <span class="ui-li-count">0</span> </a></li>

        <li data-role="list-divider">Carros viejos</li>

        <li data-icon="audio"><a href="#"> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/bmw-thumb.jpg" alt=""> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/gb.png" alt="Francia" class="ui-li-icon ui-corner-none">BMW <span class="ui-li-count">32</span>  <h2>Los BMW</h2><p>Estos son los BMW</p> </a></li>
        <li data-icon="camera"><a href="#"> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/landrover-thumb.jpg" alt=""> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/us.png" alt="Francia" class="ui-li-icon ui-corner-none">Cadillac <span class="ui-li-count">2</span> <h2>Los Cadillac</h2><p>Estos son los Cadillac</p> </a></li>
        <li data-icon="check"><a href="#"> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/album-bb.jpg" alt=""> <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/fi.png" alt="Francia" class="ui-li-icon ui-corner-none">Ferrari <span class="ui-li-count">13</span> </a></li>
      </ul>
      <div class="ui-content" data-role="popup" id="compra" data-theme="a" style="max-width:340px; padding-bottom:2em">
        <h3>Artículo de compra</h3>
        <p>Este artícuo contiene las cosas necesarias para que lo compre</p>
        <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-icon-left ui-mini">Compra: 50.00 Buscando</a>
        <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cancelar</a>
      </div>
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
