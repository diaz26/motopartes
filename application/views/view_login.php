<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <a href="<?=  base_url(); ?>" data-icon="home">Inicio </a>
      <h1><img src="<?=base_url(); ?>images/logo.png" width="100%"></h1>
      <a href="<?= base_url(); ?>index.php/productos" data-icon="grid" data-ajax="false">Productos</a>

    </div>
    <div data-role="main" class="ui-content">
      <form class="" action="<?= base_url(); ?>index.php/Login/validar" method="post" data-ajax="false">
        <center>
          <div style="width:65%">
            <?php echo $this->session->flashdata('msg'); ?>
            <input required type="text" name="user" style="text-align:center" placeholder="Usuario">
            <input required type="password" name="pass" style="text-align:center" placeholder="contrasena">

            <button type="submit" name="button" style="width:50%">Ingresar</button>
            <div style="text-align:center">
            </div>
          </div>
        </center>
      </form>
    </div>
  </div>
</body>
</html>
