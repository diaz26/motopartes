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
    <div data-role="main">
      <div data-role="collapsible" data-mini="true">
        <h4>Resumen de tu pedido -- Total <?php echo $Subtotalcar; ?> $USD</h4>
        <ul data-role="listview">
          <?php
          if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
            for($i=0;$i<count($datos);$i++){
              ?>
              <li>
                <a href="#">
                  <img src="<?= base_url().$datos[$i]['Urlimagen']; ?>" style="width:200px; height:150px">
                  <h2><?php echo $datos[$i]['Nombre']; ?></h2>
                </a>
                <p style="font-size: 18px; text-align:center ;">
                  <font style="font-size: 14px; background: #FFFFFF">CANTIDAD= </font>
                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=delete" class="ui-btn ui-btn-inline ui-icon-minus ui-btn-icon-notext ui-corner-all" data-ajax="false" data-transition="flip" style=" font-weight: bold;color:black"></a>
                  <?php echo $datos[$i]['Cantidad']." ";?>
                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=agrega" class="ui-btn ui-btn-inline ui-icon-plus ui-btn-icon-notext ui-corner-all" data-ajax="false" data-transition="flip" style=" font-weight: bold;color:black"></a>
                </p>
                <p> Subtotal <?php echo " ".$datos[$i]['Cantidad']*$datos[$i]['Precio'];?></p>

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

    </div>
    <div data-role="footer">

    </div>
  </div>
</body>
</html>

<div class="col-md-7  ">
  <div class="checkout-tabs">
    <!-- Tab panes -->
    <center> <h4> Completa el siguiente formulario para terminar la compra</h4> </center>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="shipping">
        <?php echo $this->session->flashdata('reco'); ?>
        <form  action="<?= base_url() ?>index.php/carrito/generapedido/" method="post" onsubmit="return validacion()" enctype="multipart/form-data" class="signup-form target-area active">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Correo Electrónico*</label>
                <input type="email" id="correoc" name="correo" class="form-control" required>
              </div><!-- End .form-group -->
              <div class="checkbox pull-left">
              </div><!-- End .checkbox -->
            </div><!-- End .col-sm-4 -->
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nombre completo*</label>
                <input type="text" id="nombrec" name="nombre" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
            <div class="col-sm-6">
              <div class="form-group">
                <label>Celular*</label>
                <input type="text" id="celularc" name="celular" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label>C.C.*</label>
                <input type="text" id="cedula" name="cedula" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
            <div class="col-sm-9">
              <div class="form-group">
                <label>Dirección*</label>
                <input type="text" id="direccionc" name="direccion" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
          </div><!-- End .row -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Departamento*</label>
                <input type="text" id="departamentoc" name="departamento" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
            <div class="col-sm-6">
              <div class="form-group">
                <label>Ciudad*</label>
                <input type="text" id="ciudadc" name="ciudad" class="form-control" required>
              </div><!-- End .form-group -->
            </div><!-- End .col-sm-4 -->
          </div><!-- End .row -->
          <input type="hidden"  name="valorpago" class="form-control" value="<?php echo $Subtotalcar; ?>">
          <?php
          $cant_pro=0;
          if(isset($_SESSION['carrito'])){
            $cant_pro=count($_SESSION['carrito']);
          }
          ?>
          <input type="hidden" name="cant_pro" class="form-control" value="<?php echo $cant_pro; ?>">
          <hr>
          <div class="row">
            <div class="col-sm-5 ml-auto mr-auto">
              <img src="<?= base_url(); ?>images/PayPal.png" alt="">
            </div>
          </div>
          <hr>
          <div class="col-sm-12" style="text-align:center">
            <div class="clearfix form-action">
              <span class="input-group-btn">
                <center><img src="<? base_url(); ?>images/PayPal.png" alt="">
                  <input style="width: 150px;font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>" type="submit" class="form-control" value="COMPRAR"></center>
                </span>
              </div><!-- End .form-action -->
            </div>
          </form>
        </div><!-- End .tab-pane -->
      </div>
    </div><!-- End .product-details-tab -->
  </div><!-- End .col-md-9 -->

</div><!-- End .row -->
</div>
</div>
</div>
</section>

</body>
</html>
