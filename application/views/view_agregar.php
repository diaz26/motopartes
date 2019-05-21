<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">


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
        <li style="background-color: <?php echo $info->bg_descripciones; ?>; color: <?php echo $info->color_descripciones; ?> ;padding-top: 0px;padding-bottom: 0px">
          <p style="font-size:14px"><img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/col.png" width="5%" class="ui-li-icon">
            <?php echo $info->descri2; ?>
          </p>
        </li>
        <li style="background-color: <?php echo $info->bg_descripciones; ?>; color: <?php echo $info->color_descripciones; ?> ;padding-top: 0px;padding-bottom: 0px"><p style="font-size:14px"><?php echo $info->descri3; ?></p></li>
      </ul>

      <ul data-role="listview" >
        <li data-role="list-divider" style="color: <?php echo $info->color_titulo; ?>;background-color: <?php echo $info->bg_titulo; ?>;text-align:center"><?php echo $info->titulo; ?></li>
      </ul>
      <hr>

    </div>
    <div data-role="footer">

    </div>

  </div>

</body>
</html>
