<?php session_start();
if (!$_SESSION['username']){
  echo "<script> alert ('Anda Belum Login, Silahkan Login Dulu!!');
  window.location = 'login.php'</script>";

} else { ?>

<?php
require_once("koneksi.php");
require_once ("header.php");
?>

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <img class="app-sidebar__user-avatar" src="https://brighterwriting.com/wp-content/uploads/icon-user-default.png"
      width="50" height="50" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>
      <p class="app-sidebar__user-designation">Pegawai Toko</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span
          class="app-menu__label">Dashboard</span></a></li>

    <li><a class="app-menu__item " href="Admin.php"><i class="app-menu__icon fa fa-address-book"></i><span
          class="app-menu__label">Admin</span></a></li>

    <li><a class="app-menu__item " href="Category.php"><i class="app-menu__icon fa fa-users"></i><span
          class="app-menu__label">Category</span></a></li>

    <li><a class="app-menu__item" href="Course.php"><i class="app-menu__icon fa fa-sticky-note"></i><span
          class="app-menu__label">Course</span></a></li>
    <li><a class="app-menu__item" href="Material.php"><i class="app-menu__icon fa fa-th-list"></i><span
          class="app-menu__label">Material</span></a></li>
  </ul>
</aside>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-home"></i> Dashboard</h1>
      <p>Selamat Datang Pegawai Resto Memoriam</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>

  <div class="row">
    <?php
        include 'koneksi.php';
        $sql = mysqli_query($conn, 'SELECT * FROM user');
        $id_admin = mysqli_num_rows($sql);
        ?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-user fa-3x"></i>
        <div class="info">
          <h4>Jumlah Admin</h4>
          <p><b><?php echo $id_admin; ?></b></p>
        </div>
      </div>
    </div>

    <?php
        include 'koneksi.php';
        $sql = mysqli_query($conn, 'SELECT * FROM kategori');
        $id_kategori = mysqli_num_rows($sql);
        ?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small success coloured-icon" style="background:#fff;"><i
          class="icon bg-success fa fa-users"></i>
        <div class="info">
          <h4 class="text-dark">Jumlah kategori</h4>
          <p class="text-dark" value="<?php echo $id_kategori; ?>">
            <b><?php echo $id_kategori; ?></b>
          </p>
        </div>
      </div>
    </div>

    <?php
        include 'koneksi.php';
        $sql = mysqli_query($conn, 'SELECT * FROM  materi');
        $id_Materi = mysqli_num_rows($sql);
        ?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa fa-tags fa-3x"></i>
        <div class="info">
          <h4>Jumlah Materi</h4>
          <p><b><?php echo $id_Materi; ?></b></p>
        </div>
      </div>
    </div>

    <?php
        include 'koneksi.php';
        $sql = mysqli_query($conn, 'SELECT * FROM  kursus');
        $id_kursus = mysqli_num_rows($sql);
        ?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-sticky-note fa-3x"
          style="background-color: #d66a04;"></i>
        <div class="info">
          <h4>Jumlah kursus</h4>
          <p><b><?php echo $id_kursus; ?></b></p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php } ?>
<?php
    require_once 'footer.php';
    ?>