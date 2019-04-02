<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>"  data-transition="flip" data-icon="home">Home</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/inicial.png" width="100%"> </h1>
      <a href="<?= base_url(); ?>index.php/login" data-transition="flip"  data-icon="grid">Login</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="<?= base_url(); ?>index.php/productos">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/about_us">¿Quienes Somos?</a></li>
          <li><a href="<?= base_url(); ?>index.php/contact">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">
      <ul data-role="listview">
        <li style="padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px">Compra tus repuestos desde la comodidad de tu hogar</p></li>
        <li style="padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px">Envíos Nacionales <img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/col.png" width="5%" class="ui-li-icon"> Garantizados</p></li>
        <li style="padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px">Respuestos importados 100% originales</p></li>
      </ul>
      <h3 style="font-size:hughs; text-align:center; color: red;">¡MotoRepuestos JeffPi, tu vendedor confiable!</h3>
      <ul data-role="listview">
        <li data-role="list-divider" style="text-align:center">Algunos de nuestros productos</li>
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
