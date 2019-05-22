<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="#" data-ajax="false" data-transition="flip" data-icon="home">Home</a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/admin/session_dest" data-transition="flip" data-ajax="false" data-icon="back">Salir</a>
    </div>
    <div data-role="main">
      <div data-role="collapsible" data-theme="b" data-content-theme="b">
        <h4>Editar Informacion</h4>
        <div class="ui-body ui-body-a ui-corner-all">
          <form action="<?= base_url() ?>index.php/admin/modNav" method="post" enctype="multipart/form-data" data-ajax="false">
            <h3>Logo: </h3>
            <b>Logo:</b><br><img src="<?php echo base_url().$nav->logo;?>" width="10%" id="algo">
            <input type="file" name="tcarga" id="upload" value="<?php echo $nav->logo; ?>">
            <input type="hidden" name="id" value="<?php echo $nav->id; ?>">
            <script>
            document.getElementById("upload").onchange = function() {
              var reader = new FileReader(); //instanciamos el objeto de la api FileReader

              reader.onload = function(e) {
                document.getElementById("algo").src = e.target.result;
              };

              // read the image file as a data URL.
              reader.readAsDataURL(this.files[0]);
            };
            </script>
            <h3>Nombre:</h3>
            <input type="text" name="nombre"  value="<?php echo $nav->nombre; ?>" required>
            <h3>Ceunta Paypal </h3>
            <input type="email" name="paypal"  value="<?php echo $nav->paypal; ?>" required>
            <center> <button type="submit" value="Actualizar" data-transition="slidedown"></button></center>
          </form>
        </div>
      </div>
      <div data-role="collapsible" data-mini="true">
        <h4>Pedidos</h4>
        <ul data-role="listview">
          <li>
            <fieldset class="ui-grid-a">
              <?php
              foreach ($pedidosP as $key) {
                if ($key->estado_pedido==1) {
                  $letra="a";
                }else {
                  $letra="b";
                }
                ?>
                <div class="ui-block-<?php echo $letra; ?>">
                  <h3>Pedido: <?php echo $key->cod_pedido; ?></h3>
                  <div class="ui-grid-a center">
                    <div class="ui-block-a"><a href="#pedidop<?= $key->cod_pedido; ?>" data-rel="popup" data-position-to="windows" data-transition="pop" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-icon-eye ui-btn-icon-notext ui-btn-inline"></a></div>
                    <div class="ui-block-b"><a href="<?= base_url(); ?>index.php/productos/despachar/<?= $key->cod_pedido; ?>" data-transition="flip" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-icon-arrow-r ui-btn-icon-notext ui-btn-inline"></a></div>
                  </div>
                </div>
                <div class="ui-content" data-role="popup" id="pedidop<?= $key->cod_pedido; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                  <ul data-role="listview">
                    <?php
                    foreach ($products as $ass) {
                      if ($ass->cod_pedido==$key->cod_pedido) {
                        ?>
                        <li>
                          <img src="<?= base_url().$ass->img; ?>" alt="">
                          <p> <?= $ass->descri; ?> </p>
                          <p> <?= $ass->cantidad; ?> </p>
                        </li>
                        <?php
                      }
                    }
                    ?>

                  </ul>
                  <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
                </div>
                <?php
              }
                ?>
            </fieldset>
          </li>
        </ul>
      </div>
      <div data-role="collapsible" data-mini="true">
        <h4>Productos</h4>
        <ul data-role="listview">

              <?php
              foreach ($productos as $row) {
                ?>
                <li>
                <img src="<?= base_url().$row->img;?>" style="width:200px; height:150px" >
                <h2><?php echo $row->nombre; ?></h2>
                <div class="ui-block-b">
                    <div class="ui-block-a"><a href="#prod<?= $row->id; ?>" data-rel="popup" data-position-to="windows" data-transition="pop" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-icon-eye ui-btn-icon-notext ui-btn-inline"></a></div>
                    <div class="ui-block-b"><a href="<?= base_url()."index.php/productos/Editar/".$row->id;?>" data-transition="flip" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-inline"></a></div>
                    <div class="ui-block-c"><a href="#eliminar<?= $row->id; ?>" data-rel="popup" data-position-to="windows" data-transition="pop" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext ui-btn-inline"></a></div>
                </div>
                <div class="ui-content" data-role="popup" id="prod<?= $row->id; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                  <center><img src="<?= base_url().$row->img;?>" width="250" height="200"></center>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$row->descripcion; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$row->marca; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$row->year; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$row->color; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$row->precio; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$row->parte; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$row->ubicacion; ?></p>
                  <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
                </div>
                <div class="ui-content" data-role="popup" id="eliminar<?= $row->id; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                  <center><img src="<?= base_url().$row->img;?>" width="250" height="200"></center>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$row->descripcion; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$row->marca; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$row->year; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$row->color; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$row->precio; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$row->parte; ?></p>
                  <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$row->ubicacion; ?></p>
                  <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
                  <a href="<?= base_url()."index.php/productos/eliminar/".$row->id;?>" data-transition="flip" data-ajax="false" class="ui-shadow ui-btn ui-corner-all ui-mini"></a>
                </div>
                </li>
                <?php
              }
              ?>
        </ul>
      </div>
      <a href="<?=base_url();?>index.php/Productos/agregar" data-ajax="false" class="ui-btn ui-icon-plus ui-btn-icon-right">Agregar producto</a>

    </div>
    <div data-role="footer">

    </div>
  </div>
</body>
</html>
