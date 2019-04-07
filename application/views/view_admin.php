<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>index.php/admin"  data-transition="flip" data-icon="home">Home</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/inicial.png" width="100%"> </h1>
      <a href="<?= base_url(); ?>index.php/login/session_dest" data-transition="flip"  data-icon="grid">Log out</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="<?= base_url(); ?>index.php/Info">Informacion</a></li><!--hey aqui le cambie info por Info, no me meti con mas att: Felipe -->
          <li><a href="<?= base_url(); ?>index.php/productos">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/pedidos">Pedidos</a></li>
          <li><a href="<?= base_url(); ?>index.php/ventas">Ultimas ventas</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">
      admin
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
