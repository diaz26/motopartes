<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>index.php/admin" data-ajax="false"  data-transition="flip" data-icon="home">Home</a>
      <h1> <img src="<?= base_url(); ?>jquery.mobile/images/inicial.png" width="100%"> </h1>
      <a href="<?= base_url(); ?>index.php/login/session_dest" data-ajax="false" data-transition="flip"  data-icon="grid">Log out</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="<?= base_url(); ?>index.php/Info" data-ajax="false">Informacion</a></li><!--hey aqui le cambie info por Info, no me meti con mas att: Felipe -->
          <li><a href="<?= base_url(); ?>index.php/Productos/llevame" data-ajax="false">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/pedidos" data-ajax="false">Pedidos</a></li>
          <li><a href="<?= base_url(); ?>index.php/ventas" data-ajax="false">Ultimas ventas</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">
      admin
      <form action="<?= base_url(); ?>index.php/Productos/Agregar" method="post"  data-ajax="false">
              <center><input type="submit" value="Agregar producto" data-inline="true"></center>

      </form>
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
