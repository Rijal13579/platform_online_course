<style>
.btn-success {
  background-color: #00152b !important;
  border: none !important;
}
</style>
<?php session_start();
if (!$_SESSION['username']){
  echo "<script> alert ('Anda Belum Login, Silahkan Login Dulu!!');
  window.location = 'login.php'</script>";

} else { ?>
<?php
include('header.php');
require 'fungsi.php';

              //deklarasi edit
              $id = $_GET["iduser"];
              $rows = "SELECT * FROM user WHERE iduser = '$id'";
              $select = mysqli_query($conn, $rows);
              $fetch = mysqli_fetch_array($select);
              if (isset($_POST["submit"])) {
              if (ubah_admin($_POST) > 0) {
              echo "
              <script>
              alert('Data berhasil diubah!');
              document.location.href = 'Admin.php';
              </script>";
              } else {
              echo "
              <script>
              alert('Data gagal diubah!');
              document.location.href = 'Admin.php';
              </script>";
              }
}
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
    <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span
          class="app-menu__label">Dashboard</span></a></li>

    <li><a class="app-menu__item active" href="Admin.php"><i class="app-menu__icon fa fa-address-book"></i><span
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
      <h1><i class="fa fa-th-list"></i> Halaman Data Menu</h1>
      <p>Halaman Data Menu Restaurant Memoriam</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-th-list fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Menu</a></li>
    </ul>
  </div>

  <!-- isi -->
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Ubah Data Admin</h3>
        <form action="" method="post">
          <table>
            <div class="form-group">
              <label for="iduser">Id Admin</label>
              <input type="text" class="form-control" name="iduser" value="<?= $fetch['iduser'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="namauser">Nama Admin</label>
              <input type="text" class="form-control" name="namauser" value="<?= $fetch['namauser'] ?>">
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" value="<?= $fetch['username'] ?>">
            </div>
            <div class="form-group">
              <label for="password"></label>
              <input type="text" name="password" class="form-control" value="<?= $fetch['password'] ?>">
            </div>

          </table>

          <button type="submit" name="submit" class="btn btn-primary mt-3"><span><i
                class="fa fa-plus"></i>Simpan</button>
          <a href="Admin.php" onclick=" return confirm ('Apakah anda ingin membatal data ini?');"><button type="button"
              class="btn btn-danger mt-3">
              <span><i class="fa fa-pencil-square-o"></i> Batal</button></span></a>
        </form>
      </div>
    </div>
  </div>
  </div>
  <?php } ?>
  <?php 
include('footer.php');
?>