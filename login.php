<?php include("inc/login.header.php"); ?>
<div id="login">
  <div class="container-fluid">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-login">
        <div class="panel-heading">
          Login
          <div class="angled-deco-orange"></div>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="&#61701; Email">
          </div>
          <div class="form-group">
            <input id="password" class="form-control toggle-pass" type="password" data-toggle="password" placeholder="&#61702; Enter Password">
            <a class="forgot-pass" href="#">Forgot password?</a>
          </div>
          <a class="btn btn-primary" href="#">Login</a>
        </div>
      </div>

      <div class="not-member">
        Not a member yet?<br>
        <a href="#">Sign up here</a>
      </div>
    </div>
  </div>
</div>
<?php include("inc/footer.php"); ?>
