<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
  <div data-role="page">
    <div data-role="header">

    </div>
    <div data-role="main">
      <div class="ui-content">
        <form class="" action="<?= base_url(); ?>index.php/login/valida" method="post" data-ajax="false">
          <center>
            <input type="text" name="user" style="text-align:center" placeholder="User">
            <input type="password" name="pass" style="text-align:center" placeholder="Pass">
            <input type="password" name="security" style="text-align:center" placeholder="Security">
            <button type="submit" name="button" style="width:30%">Ingresar</button>
          </center>
        </form>
      </div>
    </div>
    <div data-role="footer">

    </div>
  </div>

</body>
</html>
