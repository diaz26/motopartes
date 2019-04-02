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
      <ul data-role="listview">
        <li data-role="list-divider" style="text-align:center">Algunos de nuestros productos</li>
      </ul>
      <div class="ui-grid-a">
        
        <div class="ui-block-c">
          <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Cúpula frontal  - MT 09</div>
          <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/cupula.jpg" width="100%"> </div>
          <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Carenaje - R1</div>
          <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/yamaha.jpg" width="100%"> </div>
            <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Kit de arrastre - Evo R3</div>
            <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/kitarr.jpg" width="100%"> </div>
            <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Sliders - MT 07</div>
            <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/sliders.jpg" width="100%"> </div>
        </div>
      </div>
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
