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
require_once("koneksi.php");
require_once("header.php");
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

    <li><a class="app-menu__item " href="Category.php"><i class="app-menu__icon fa fa-users"></i><span
          class="app-menu__label ">Category</span></a></li>

    <li><a class="app-menu__item active" href="Course.php"><i class="app-menu__icon fa fa-sticky-note"></i><span
          class="app-menu__label">Course</span></a></li>
    <li><a class="app-menu__item" href="Material.php"><i class="app-menu__icon fa fa-th-list"></i><span
          class="app-menu__label">Material</span></a></li>
  </ul>
</aside>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Data Course</h1>
      <p>Halaman Data Online Course</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-th-list fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Course</a></li>
    </ul>
  </div>

  <!-- isi -->
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Data Course</h3>
        <div class="container-lg">
          <div class="table-responsive">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><span><i
                  class="fa fa-plus-circle"></i>Tambah Kursus</span></a>
            <div class="table-wrapper">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Id Kursus</th>
                    <th>Id Kategori</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Durasi</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <?php
                  if(isset($_POST['cari'])){
                      $keyword=$_POST['keyword'];
                      $data = mysqli_query($conn,"SELECT * FROM kursus WHERE judul LIKE '%$keyword%'");

                  } else{
                      $data = mysqli_query($conn, "SELECT * FROM kursus");
                  }      
                  while ($row = mysqli_fetch_array($data)) {
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['id_kursus'] ?></td>
                    <td><?php echo $row['id_kategori'] ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['deskripsi'] ?></td>
                    <td><?php echo $row['durasi'] ?> Jam</td>
                    <td>
                      <a href="EditCourse.php?id_kursus=<?php echo $row['id_kursus']; ?>" class="edit"><i
                          class="material-icons" title="Edit">&#xE254;</i></a>
                      <a href="DeleteCourse.php?id_kursus=<?php echo $row['id_kursus']; ?>" class="delete"
                        onclick=" return confirm ('Apakah anda ingin menghapus data ini?');"><i class="material-icons"
                          title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                </tbody>
            </div>
          </div>
          <?php
          }               
          ?>
          </table>

        </div>
      </div>

    </div>
  </div>


  <?php 

$data = mysqli_query($conn, "SELECT max((id_kursus)+1) as id FROM kursus");
$row = mysqli_fetch_array($data);

    require_once("fungsi.php");
    if (isset($_POST["submit"])) {
      if (tambah_kursus($_POST) > 0) {
          echo "
          <script>
              alert('Data berhasil ditambahkan!');
              document.location.href = 'Course.php';
          </script>";
      } else {
          echo "
      <script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'Course.php';
      </script>";
      }
    }
?>


  <!-- tambah data -->
  <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Kursus</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Id Kursus</label>
              <input type="text" name="id_kursus" class="form-control" value="<?php echo $row['id']; ?>" required>
            </div>
            <div class="form-group">
              <label>Jenis Kategori</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                <!-- <option value="">Pilih Pegawai</option> -->
                <?php $row_kategori = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($row = mysqli_fetch_array($row_kategori)) {
                                echo "<option value='$row[id_kategori]'>$row[jenis_kategori]</option>";
                            }
                            mysqli_free_result($row_kategori); // untuk penggunaan multiple prosedur
                            mysqli_next_result($conn);
                        ?>
              </select>
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
              <label>Durasi</label>
              <input type="text" name="durasi" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" name="submit" class="btn btn-success" value="Add">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php 
  require_once("footer.php");
?>