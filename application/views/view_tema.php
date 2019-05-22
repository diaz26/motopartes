<!DOCTYPE html>
<html>
<head>

  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/temamotopartes.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/jquery.mobile.icons.min.css" />
	<script type="text/javascript" src=" <?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

</head>

</head>
<body>
  <div class="ui-grid-a">
    <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:60px">Block A</div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:60px">Block B</div></div>
  </div><!-- /grid-a -->
  <div data-role="page" id="rta">
    <div data-role="header">
      <a href="index.php" data-icon="home">inicio </a>
			<h1><img src="<?php echo base_url(); ?>images/images1.jpg" alt=""> </h1>
			<a href="<?= base_url(); ?>index.php/Todoloderegistro/" data-icon="grid" data-ajax="false"> Registrarse</a>
			<nav data-role="navbar">
					<ul>
							<li><a href="#page2">a ningun lado </a> </li>
							<li><a href="<?= base_url(); ?>index.php/login/Todoloderegistros" data-ajax="false">Registrarme</a> </li>

					</ul>
		 </nav>

    </div>
    <div data-role="main">
			<div class="ui-body ui-body-a ui-corner-all">
      	<form class="" action="<?= base_url(); ?>index.php/Login/validar" method="post" data-ajax="false">
          	<center>
            	<div style="width:65%">
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
    <div data-role="footer">
				<div class="ui-body ui-body-a ui-corner-all">
				</div>

    </div>
  </div>
</body>
</html>
