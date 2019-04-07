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
          <li><a href="<?= base_url(); ?>index.php/info">Informacion</a></li>
          <li><a href="<?= base_url(); ?>index.php/productos">Productos</a></li>
          <li><a href="<?= base_url(); ?>index.php/pedidos">Pedidos</a></li>
          <li><a href="<?= base_url(); ?>index.php/ventas">Ultimas ventas</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">
      <?php
      /*
      if ($Nombre != FALSE) {
        // code...
        foreach ($Nombre->result() as $row) {
          // code...
        echo  "<tr>";
        echo "<td>".$row->nombre."</td>";
        echo "<td>".$row->apellido."</td>";
        echo "<td>".$row->contrasena."</td>";
        echo"</tr>";
        }
      }else {
        echo "no hay nada";
      }
*/
      ?>

      <ul data-role="listview" data-inset="true">
    <li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
    <li><a href="index.html">
      <?php
          foreach ($Datos->result() as $row) {
            // code...

        ?>
    <h2>Mision</h2>
    <p><strong>jeff pi trabaja por el progreso del huila</strong></p>
    <p><?php echo " ".$row->mision." "; ?></p>
        <p class="ui-li-aside"><strong>6:24</strong>PM</p>
    </a></li>
    <li><a href="index.html">
    <h2>Estado del arte</h2>
    <p><strong>No importa como, lo importante es empezar...</strong></p>
    <p><?php echo " ".$row->estadodelarte." " ?></p>
        <p class="ui-li-aside"><strong>9:18</strong>AM</p>
    </a></li>
<?php
}
 ?>

</ul>
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
