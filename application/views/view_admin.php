<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/temamotopartes.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/jquery.mobile.icons.min.css" />
  <script type="text/javascript" src=" <?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

  <div data-role="main">
    <div data-role="collapsible" data-theme="b" data-content-theme="b">
            <h4>editar pagina</h4>
  <div class="ui-body ui-body-a ui-corner-all">

    <form action="<?= base_url() ?>index.php/admin/modNav" method="post" enctype="multipart/form-data" data-ajax="false">
        <h3>Logo: </h3>
        <p>
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
        </p>

        <h3>Abreviacion </h3>

        <p><input type="text" name="nombre" class="form-control" value="<?php echo $nav->nombre; ?>">"></p>

        <h3>Nombre de pagina </h3>

        <p><input type="text" name="nombre_web" class="form-control" value="<?php echo $nav->nombre_web; ?>"></p>

        <h3>Opcion 1: </h3>
        <input type="text" name="op1" class="form-control" value="<?php echo $nav->op1; ?>">
        <h3>Opcion 2: </h3>
        <input type="text" name="op2" class="form-control" value="<?php echo $nav->op2; ?>">
        <h3>Opcion 3: </h3>
        <input type="text" name="op3" class="form-control" value="<?php echo $nav->op3; ?>">
        <h3>Opcion 4: </h3>
        <input type="text" name="op4" class="form-control" value="<?php echo $nav->op4; ?>">
        <h3>Opcion 31: </h3>
        <input type="text" name="op31" class="form-control" value="<?php echo $nav->op31; ?>">
        <h3>Opcion 32: </h3>
        <input type="text" name="op32" class="form-control" value="<?php echo $nav->op32; ?>">
        <h3>Opcion 33: </h3>
        <input type="text" name="op33" class="form-control" value="<?php echo $nav->op33; ?>">
        <h3>Fondo: </h3>
        <input type="text" name="bg_color" class="form-control" value="<?php echo $nav->bg_color; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
        <h3>Fuente: </h3>
        <input type="text" name="fuente" class="form-control" value="<?php echo $nav->fuente; ?>">
        <h3>Tamaño: </h3>
        <input type="number" name="size" class="form-control" value="<?php echo $nav->size; ?>">
        <h3> Buscar </h3>
        <input type="text" name="search" class="form-control" value="<?php echo $nav->search; ?>">
        <h3> Color Boton</h3>
        <input type="text" name="btn_bgcolor" class="form-control" value="<?php echo $nav->btn_bgcolor; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
        </div></p>
        <h3>Letra Boton </h3>
        <input type="text" name="btn_bordercolor" class="form-control" value="<?php echo $nav->btn_bordercolor; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
        <h3>Ceunta Paypal </h3>
        <input type="email" name="paypal" class="form-control" value="<?php echo $nav->paypal; ?>" required>
        <center> <input type="submit" name="" value="agregar" data-icon="info" data-transition="slidedown"></center>


      </form>
    </div>
      </div>
    </div>      
</div>
<div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Editar Productos</h4>

<section id="productos">
    <table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Jugar con la tabla" data-column-popup-theme="a">
      <thead>
        <tr class="ui-bar-d">
          <th data-priority="2">Producto</th>
          <th>ver</th>
          <th data-priority="3">modificar</th>
          <th data-priority="1"><abbr title="Rotten Tomato Rating">eliminar</abbr></th>
          <th data-priority="5">Reviews</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($productos as $row)
        {
          ?>
          <tr>
            <th><?php  echo $row->nombre; ?></th>
            <td>  <button type="button" style="width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control" data-toggle="modal" data-target="#producto<?= $row->id; ?>">

              <h4>Ver</h4>

            </button>
          </td>
          <td>
            <center>
              <a href="<?= base_url()."index.php/productos/Editar/".$row->id;?>" style="text-align: center;width:150px;border-color: blue;background-color: white;color: blue" class="form-control" >Modificar</a>
            </center>
          </td>
          <td class="text-center">
            <center>
              <button type="submit" style="background-color: white;border-color:red ;text-align: center;width:150px;color: red" class="form-control" data-toggle="modal" data-target="#eliminar<?= $row->id; ?>">Eliminar
              </button>
            </center>
          </td>
        </tr>

        <div class="modal fade" id="producto<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $row->nombre; ?></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center><img src="<?= base_url().$row->img;?>" width="300" height="300"></center>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$row->descripcion; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$row->marca; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$row->year; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$row->color; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$row->precio; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$row->parte; ?></p>
                <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$row->ubicacion; ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="eliminar<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar el producto?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-footer">
                <button type="button" style="text-align: center;width:50%;background-color: #C3C3C3;color: black" class="form-control" data-dismiss="modal">Close</button>
                <a href="<?= base_url()."index.php/productos/Eliminar/".$row->id;?>"  style="text-align: center;width:50%;background-color: #c82333;color: black" class="form-control">Eliminar</a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>


    </tbody>

  </table>

</section>

</div>
<div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Pedidos y demas</h4>



        <h1>Pedidos </h1>
        <center><h5>Pendientes</h5></center>
        <table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">
          <thead>
            <tr>
              <th data-priority="2">codigo pedido</th>
              <th>detalles</th>
              <th data-priority="3">Opcion</th>

            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($pedidosP as $key) {
              ?>
              <tr>
                <th><?php echo $key->cod_pedido; ?></th>
                <td><a href="#" data-toggle="modal" data-target="#productos<?= $key->id; ?>">Ver</a> </td>
                <td><a href="<?= base_url(); ?>index.php/productos/despachar/<?= $key->cod_pedido; ?>">Despachado</a></td>

              </tr>
              <div class="modal fade" id="productos<?= $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Productos pedidos: <?= $key->cod_pedido; ?></h5>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">

                  <?php
                  foreach ($products as $ass) {
                    if ($ass->cod_pedido==$key->cod_pedido) {
                      ?>
                      <div class="row">
                        <div class="col-2">
                          <img src="<?= base_url().$ass->img; ?>" width="100%" alt="">
                        </div>
                        <div class="col-8">
                          <p> <?= $ass->descri; ?> </p>
                        </div>
                        <div class="col-2">
                          <p> <?= $ass->cantidad; ?> </p>
                        </div>
                      </div>
                      <?php
                    }
                  }
                  ?>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <?php
              }
                  ?>
          </tbody>

        </table>

</div>


<div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Otros</h4>
    <center><h5>Despachados</h5></center>
    <table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">
      <thead>
        <tr>
          <th data-priority="2">cpdigo pedido</th>
          <th>Detalles</th>

        </tr>
      </thead>
    <tbody>
    <?php
    foreach ($pedidosD as $key) {
      ?>
      <tr>
        <td><?php echo $key->cod_pedido; ?></td>
        <td><a href="#" data-toggle="modal" data-target="#productos<?= $key->id; ?>">Ver</a></td>
      </tr>
    </tr>

  <div class="modal fade" id="productos<?= $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Productos pedidos: <?= $key->cod_pedido; ?></h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <?php
          foreach ($products as $ass) {
            if ($ass->cod_pedido==$key->cod_pedido) {
              ?>
              <div class="row">
                <div class="col-2">
                  <img src="<?= base_url().$ass->img; ?>" width="100%" alt="">
                </div>
                <div class="col-8">
                  <p> <?= $ass->descri; ?> </p>
                </div>
                <div class="col-2">
                  <p> <?= $ass->cantidad; ?> </p>
                </div>
              </div>
              <?php
            }
          }
        ?>

      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <?php
              }
      ?>
    </tbody>
</table>
</div>

<div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Agregar Producto</h4>
    <p>        <a href="<?=base_url();?>index.php/Productos/agregar" data-icon="info"  data-role="button" data-transition="slidedown"data-ajax="false"> agregar producto</a></p>
</div>
</body>

</html>
