<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/daihatsu-logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 " style="width: 150px;"><br>
    <a href="index.php"><b>Admin</b>ADM</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php if (!empty($_GET['gagal'])){?>
        <?php if($_GET['gagal']=="userKosong"){?>
          <span class="text-danger">
            Maaf username Tidak Boleh Kosong
          </span>
        <?php } else if($_GET['gagal']=="passKosong"){?>
          <span class="text-danger">
            Maaf Password Tidak Boleh Kosong
          </span>
        <?php }else { ?>
          <span class="text-danger">
            Maaf Username dan Password Anda Salah
          </span>
        <?php } ?>
      <?php } ?>
      <form action="index.php?include=konfirmasi_login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" tpye="login" class="btn btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>