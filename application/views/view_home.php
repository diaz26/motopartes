<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
</head>
<body>
  <div data-role="page">
    <div data-role="header" style="background-color: <?= $info->bg_header; ?>">
      <a href="<?= base_url(); ?>"  data-transition="flip" data-icon="home" style="background-color: <?= $info->bg_botones; ?>; color:<?= $info->color_letra_botones; ?>;border-color: <?= $info->bg_botones; ?>"><?= $info->opcion1; ?></a>
      <h1> <img src="<?= base_url().$info->img; ?>" width="100%"> </h1>
      <a href="<?= base_url(); ?>index.php/login" data-transition="flip"  data-icon="grid" style="background-color: <?= $info->bg_botones; ?>; color:<?= $info->color_letra_botones; ?>;border-color: <?= $info->bg_botones; ?>"><?= $info->opcion2; ?></a>

      <nav data-role="navbar" >
        <ul>
          <li ><a style="background-color: <?php echo $info->bg_opciones; ?>; color: <?php echo $info->color_opciones; ?>" href="<?= base_url(); ?>index.php/productos"><?php echo $info->opcion3; ?></a></li>
          <li><a style="background-color: <?php echo $info->bg_opciones; ?>; color: <?php echo $info->color_opciones; ?>" href="<?= base_url(); ?>index.php/about_us"><?php echo $info->opcion4; ?></a></li>
          <li><a style="background-color: <?php echo $info->bg_opciones; ?>; color: <?php echo $info->color_opciones; ?>" href="<?= base_url(); ?>index.php/contact"><?php echo $info->opcion5; ?></a></li>
        </ul>
      </nav>
    </div>
    <div data-role="main">
      <ul data-role="listview">
        <li style="background-color: <?php echo $info->bg_descripciones; ?>; color: <?php echo $info->color_descripciones; ?> ;padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px"><?php echo $info->descri1; ?></p></li>
        <li style="background-color: <?php echo $info->bg_descripciones; ?>; color: <?php echo $info->color_descripciones; ?> ;padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px"><?php echo $info->descri2; ?><img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/col.png" width="5%" class="ui-li-icon"> </p></li>
        <li style="background-color: <?php echo $info->bg_descripciones; ?>; color: <?php echo $info->color_descripciones; ?> ;padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px"><?php echo $info->descri3; ?></p></li>
      </ul>
      <ul data-role="listview" >
        <li data-role="list-divider" style="color: <?php echo $info->color_titulo; ?>;background-color: <?php echo $info->bg_titulo; ?>;text-align:center"><?php echo $info->titulo; ?></li>
      </ul>
      <div class="ui-grid-a">
        <div class="ui-block-c">
          <div class="ui-bar ui-bar-a" style="background-color:<?php echo $info->bg_subtitulo; ?>;color:<?php echo $info->color_subtitulo; ?> ;text-align: center">Cúpula frontal  - MT 09</div>
          <div class="ui-bar ui-bar-a" style="background-color:<?php echo $info->bg_card; ?>"><img src="<?= base_url(); ?>jquery.mobile/images/cupula.jpg" width="100%"> </div>
          <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Carenaje - R1</div>
          <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/yamaha.jpg" width="100%"> </div>
          <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Kit de arrastre - Evo R3</div>
          <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/kitarr.jpg" width="100%"> </div>
          <div class="ui-bar ui-bar-a" style="background-color:#B2F7D9;text-align: center">Sliders - MT 07</div>
          <div class="ui-bar ui-bar-a" style="background-color:#E1E1E1"><img src="<?= base_url(); ?>jquery.mobile/images/sliders.jpg" width="100%"> </div>
        </div>
      </div>
    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
