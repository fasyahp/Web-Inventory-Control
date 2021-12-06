<?php 
  
  if(isset($_GET['data'])){
    $id_admin = $_GET['data'];
    $_SESSION['id_admin']=$id_admin;
    
    //get data user
    $sql_u = "select `nama`, `email`, `username`, `password`, `level` from `admin` where `id_admin` = '$id_admin'";
    $query_u = mysqli_query($koneksi,$sql_u);
    while($data_u = mysqli_fetch_row($query_u)){
        $nama= $data_u[0];
        $email= $data_u[1];
        $username= $data_u[2];
        $password= $data_u[3];
        $level= $data_u[4];
      }
    }
?>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data User</h3>
        <div class="card-tools">
          <a href="index.php?include=user" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div><br>
      <!-- /.card-header -->
      <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
              <div class="alert alert-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
          <?php }?>
      </div>

      <!-- form start -->
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_user" method="post">
      <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data User</u></span></label>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
              <input type="hidden" value="<?php echo $id_admin ?>" name="id_admin" id="id_admin"> 
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level</label>
            <div class="col-sm-7">
              <select class="form-control" id="level" name="level">
              <?php 
              $sql_level = "SELECT DISTINCT `level` FROM `admin`";
              $query_l = mysqli_query($koneksi,$sql_level);
              while($data_l = mysqli_fetch_row($query_l)){
              $level_user = $data_l[0];
              ?>
              <option><?php echo $level_user; ?></option>
              <?php } ?>
              </select>
            </div>
          </div>

          </div>
          <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        </div>
      </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

</body>
</html>
