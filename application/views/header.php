<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>MotoPartes JeffPi</title>
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>themes/jeffthems.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>themes/jquery.mobile.icons.min.css">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>"  data-transition="flip" data-icon="home">Inicio</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/inicial.png" width="35%"> </h1>
      <a href="<?= base_url(); ?>index.php/login" data-transition="flip"  data-icon="grid">Login</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="#page2">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/productos">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/about_us">¿Quienes Somos?</a></li>
          <li><a href="<?= base_url(); ?>index.php/contact">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </div>
</body>
</html>
