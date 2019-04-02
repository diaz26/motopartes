<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>"  data-transition="flip" data-icon="home">Home</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/inicial.png" width="100%"> </h1>
      <a href="<?= base_url(); ?>index.php/login/session_dest" data-transition="flip"  data-icon="grid">Log out</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="<?= base_url(); ?>index.php/info">Informacion</a></li>
          <li><a href="<?= base_url(); ?>index.php/about_us">¿Quienes Somos?</a></li>
          <li><a href="<?= base_url(); ?>index.php/contact">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">

    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
