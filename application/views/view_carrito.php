<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>index.php/home" data-ajax="false" data-transition="flip" data-icon="home">Inicio</a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/productos" data-transition="flip" data-ajax="false" data-icon="grid">Productos</a>
    </div>
    <div data-role="main" class="ui-content">
      <div data-role="collapsible" data-mini="true">
        <h4>Resumen de tu pedido -- Total <?php echo $Subtotalcar; ?> $USD</h4>
        <ul data-role="listview">
          <?php
          if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
            for($i=0;$i<count($datos);$i++){
              ?>
              <li>
                <a href="#compra<?= $datos[$i]['Id']; ?>" data-rel="popup" data-position-to="windows" data-transition="pop">
                  <img src="<?= base_url().$datos[$i]['Urlimagen']; ?>" style="width:200px; height:150px">
                  <h2><?php echo $datos[$i]['Nombre']; ?></h2>
                </a>
                <div class="ui-content" data-role="popup" id="compra<?= $datos[$i]['Id']; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                  <center><img src="<?= base_url().$datos[$i]['Urlimagen']; ?>" width="250" height="200"></center>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Nombre:</b> <?= " ".$datos[$i]['Nombre']; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio Unidad:</b> <?= " ".$datos[$i]['Precio']." $ USD"; ?></p>
                  <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
                </div>

                <p style="font-size: 18px; text-align:center ;">
                  <font style="font-size: 14px; background: #FFFFFF">CANTIDAD= </font>
                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=delete" class="ui-btn ui-btn-inline ui-icon-minus ui-btn-icon-notext ui-corner-all" data-ajax="false" data-transition="flip" style=" font-weight: bold;color:black"></a>
                  <?php echo $datos[$i]['Cantidad']." ";?>
                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=agrega" class="ui-btn ui-btn-inline ui-icon-plus ui-btn-icon-notext ui-corner-all" data-ajax="false" data-transition="flip" style=" font-weight: bold;color:black"></a>
                </p>
                <p> Subtotal: <?php echo " ".$datos[$i]['Cantidad']*$datos[$i]['Precio'];?> $USD</p>

              </li>
              <?php
            }
            ?>
            <li>TOTAL: <?php echo $Subtotalcar." "; ?>$USD</li>
            <?php
          }
          ?>
        </ul>
      </div>
      <center><h3>Termina tu compra</h3></center>
      <form action="<?=base_url(); ?>index.php/carrito/generapedido/" method="post" data-ajax="false">
        <center><?php echo $this->session->flashdata('reco'); ?></center>
        <div class="ui-field-contain">

          <label for="correo">E-mail*:</label>
          <input id="correo" type="email" name="correo" placeholder="example@gmail.com" required>

          <label for="nombre">Nombre*:</label>
          <input id="nombre" type="text" name="nombre" placeholder="Nombre y apellidos" required>

          <label for="celular" >Celular*:</label>
          <input id="celular" type="number" name="celular" placeholder="Telefono/celular" required>

          <label for="cc" >C.C.*:</label>
          <input id="cc" type="number" name="cedula" placeholder="Cédula de ciudadania" required>

          <label for="Ubicacion" >Dirección*:</label>
          <input id="Ubicacion" type="text" name="direccion" placeholder="Dirección de residencia" required>

          <label for="depart" >Dpto*:</label>
          <input id="depart" type="text" name="departamento" placeholder="Departamento" required>

          <label for="ciudad" >Ciudad*:</label>
          <input id="ciudad" type="text" placeholder="Ciudad" name="ciudad" required>

          <input type="hidden" name="valorpago" value="<?php echo $Subtotalcar; ?>">
          <?php
          $cant_pro=0;
          if(isset($_SESSION['carrito'])){
            $cant_pro=count($_SESSION['carrito']);
          }
          ?>
          <input type="hidden" name="cant_pro" value="<?php echo $cant_pro; ?>">
        </div>
        <center><img src="<?= base_url(); ?>images/PayPal.png" width="50%"></center>
        <input type="submit" value="Comprar" data-transition="slidedown">
      </form>

    </div>
    <div data-role="footer">

    </div>
  </div>
</body>
</html>
