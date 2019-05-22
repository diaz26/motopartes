<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?= base_url(); ?>index.php/productos" data-ajax="false" data-transition="flip" data-icon="grid"><?= $nav->op2; ?></a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/login" data-transition="flip" data-ajax="false" data-icon="home">Ingresar</a>
    </div>
    <div data-role="main">
      <div class="ui-grid-a">
        <?php
        $cont=0;
        foreach ($productos as $row ){
          $cont++;
          if ($cont==1) {
            ?>
            <div class="ui-block-a">
              <a class="ui-shadow ui-btn ui-corner-all">
                <img src="<?= base_url().$row->img;?>" style="width:200px; height:150px">
                <p style="font-size:14px"><?= $row->nombre; ?></p>
                <p style="font-size:14px"><?= " ".$row->descripcion; ?></p>
                <a href="<?= base_url(); ?>index.php/productos/product/<?= $row->id; ?>" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" data-transition="flip">Ver en tienda</a>
              </a>
            </div>
            <?php
          }else {
            ?>
            <div class="ui-block-b">
              <a class="ui-shadow ui-btn ui-corner-all">
                <img src="<?= base_url().$row->img;?>" style="width:200px; height:150px">
                <p style="font-size:14px"><?= $row->nombre; ?></p>
                <p style="font-size:14px"><?= " ".$row->descripcion; ?></p>
                <a href="<?= base_url(); ?>index.php/productos/product/<?= $row->id; ?>" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" data-transition="flip">Ver en tienda</a>
              </a>
            </div>
            <?php
          }
        }
        ?>
      </div>
      <div class="ui-grid-solo">
        <div class="ui-block-a"><a href="<?= base_url(); ?>index.php/productos" data-ajax="false" data-transition="flip" class="ui-shadow ui-btn ui-corner-all">Ver todos</a></div>
      </div>
    </div>
    <div data-role="footer">

    </div>
  </div>
</body>
</html>
