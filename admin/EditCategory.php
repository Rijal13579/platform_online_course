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
              $id = $_GET["id_kategori"];
              $rows = "SELECT * FROM kategori WHERE id_kategori = '$id'";
              $select = mysqli_query($conn, $rows);
              $fetch = mysqli_fetch_array($select);
              if (isset($_POST["submit"])) {
              if (ubah_kategori($_POST) > 0) {
              echo "
              <script>
              alert('Data berhasil diubah!');
              document.location.href = 'Category.php';
              </script>";
              } else {
              echo "
              <script>
              alert('Data gagal diubah!');
              document.location.href = 'Category.php';
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

    <li><a class="app-menu__item " href="Admin.php"><i class="app-menu__icon fa fa-address-book"></i><span
          class="app-menu__label">Admin</span></a></li>

    <li><a class="app-menu__item active" href="Category.php"><i class="app-menu__icon fa fa-users"></i><span
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
      <h1><i class="fa fa-th-list"></i> Halaman Data Category</h1>
      <p>Halaman Data Menu Restaurant Memoriam</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-th-list fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Category</a></li>
    </ul>
  </div>

  <!-- isi -->
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Ubah Data Kategori</h3>
        <form action="" method="post">
          <table>
            <div class="form-group">
              <label for="id_kategori">Id Kategori</label>
              <input type="text" class="form-control" name="id_kategori" value="<?= $fetch['id_kategori'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="jenis_kategori">Jenis Kategori</label>
              <input type="text" class="form-control" name="jenis_kategori" value="<?= $fetch['jenis_kategori'] ?>">
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