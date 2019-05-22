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
      <a href="<?= base_url(); ?>index.php/carrito/carga_carrito" data-transition="flip" data-ajax="false" data-icon="shop">Carrito</a>
    </div>
    <div data-role="main">
      <div data-role="collapsible" data-mini="true">
        <h4>Categorias</h4>
        <ul data-role="listview">
          <?php
          $cont=0;
          foreach ($categ as $files) {
            $cont=$cont+$files->num;
          }
          ?>
          <li><a href="<?= base_url() ?>index.php/productos" style="color:black" data-ajax="false" data-transition="flip">Todas <span class="ui-li-count" style="color:#2E2E2E"><?php echo $cont; ?></span></a></li>
          <?php
          foreach ($categ as $files) {
            ?>
            <li><a href="<?= base_url() ?>index.php/productos/categoria/<?php echo $files->parte; ?>"style="color:black" data-ajax="false" data-transition="flip"><?php echo $files->parte; ?> <span class="ui-li-count" style="color:#2E2E2E"><?php echo $files->num; ?></span></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
      <ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar Productos..." data-filter-theme="a" data-inset="true">
        <?php
        if (!empty($productos)) {
          foreach ($productos as $key) {
            ?>
            <li>
              <a href="#compra<?= $key->id; ?>" data-rel="popup" data-position-to="windows" data-transition="pop">
                <img src="<?= base_url().$key->img;?>" style="width:200px; height:150px" >
                <h2><?php echo $key->nombre; ?></h2>
                <p><?php echo $key->precio; ?> $USD</p>
              </a>
              <form action="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito" method="get" data-ajax="false">
                <input type="hidden" name="id" value="<?php echo $key->referencia; ?>">
                <input type="hidden" name="valor_prod" value="<?php echo $key->precio; ?>">
                <input type="hidden" name="nombre_prod" value="<?php echo $key->nombre; ?>">
                <input type="hidden" name="ban" value="agrega" id="ban">
                <button class="ui-btn ui-btn-inline ui-icon-shop ui-btn-icon-right" type="submit" name="cagregarcar">Al carrito</button>
              </form>
              <div class="ui-content" data-role="popup" id="compra<?= $key->id; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                <center><img src="<?= base_url().$key->img;?>" width="250" height="200"></center>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$key->descripcion; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$key->marca; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$key->year; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$key->color; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$key->precio; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$key->parte; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$key->ubicacion; ?></p>
                <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
              </div>

            </li>
            <?php
          }
        }
        if (!empty($product)) {
            ?>
            <li>
              <a href="#compra<?= $product->id; ?>" data-rel="popup" data-position-to="windows" data-transition="pop">
                <img src="<?= base_url().$product->img;?>" style="width:200px; height:150px" >
                <h2><?php echo $product->nombre; ?></h2>
                <p><?php echo $product->precio; ?> $USD</p>
              </a>
              <div class="ui-content" data-role="popup" id="compra<?= $product->id; ?>" data-theme="a" style="max-width:340px; padding-bottom:2em">
                <center><img src="<?= base_url().$product->img;?>" width="250" height="200"></center>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$product->descripcion; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$product->marca; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$product->year; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$product->color; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$product->precio; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$product->parte; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$product->ubicacion; ?></p>
                <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-mini">Cerrar</a>
              </div>
              <form action="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito" method="get" data-ajax="false">
                <input type="hidden" name="id" value="<?php echo $product->referencia; ?>">
                <input type="hidden" name="valor_prod" value="<?php echo $product->precio; ?>">
                <input type="hidden" name="nombre_prod" value="<?php echo $product->nombre; ?>">
                <input type="hidden" name="ban" value="agrega" id="ban">
                <button class="ui-btn ui-btn-inline ui-icon-shop ui-btn-icon-right" type="submit" name="cagregarcar">Al carrito</button>
              </form>

            </li>
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
