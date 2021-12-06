<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/daihatsu-logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin ADM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fab fa-windows text-blue"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fas fa-user text-purple"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database text-orange"></i>
              <p>
                Data Master
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=data_barang" class="nav-link ">
                  <i class="fas fa-box nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php?include=barang_masuk" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt text-green"></i>
              <p>
                Barang Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=barang_keluar" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check text-red"></i>
              <p>
                Barang Keluar
              </p>
            </a>
          </li>
          <?php 
          if (isset($_SESSION['level'])){
            if($_SESSION['level']=="superadmin"){?>
              <li class="nav-item">
                <a href="index.php?include=user"class="nav-link">
                  <i class="nav-icon fas fa-user-cog text-yellow"></i>
                <p>  Pengaturan User  </p></a>
              </li> 
          <?php }}?>
          <li class="nav-item">
            <a href="index.php?include=sign_out" class="nav-link btn btn-danger text-white">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>