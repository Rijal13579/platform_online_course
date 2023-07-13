<?php
require('koneksi.php');
?>

<?php
//fungsi untuk mengambil data pada sintaks query mysql
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


//fungsi untuk menambah data pada tabel admin 
function tambah_admin($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_admin = htmlspecialchars($data["iduser"]);
    $namauser = htmlspecialchars($data["namauser"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    //query untuk menambah data
    $query = "INSERT INTO user values('$id_admin','$namauser','$username','$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah data pada tabel admin
function ubah_admin($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk ubah data
    $id_admin = htmlspecialchars($data["iduser"]);
    $username = htmlspecialchars($data["username"]);
    $namauser = htmlspecialchars($data["namauser"]);
    $password = htmlspecialchars($data["password"]);
    //query untuk mengubah / update data
    $query = "UPDATE user SET iduser='$id_admin',namauser ='$namauser',username='$username',password='$password' WHERE iduser = '$id_admin'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data pada tabel admin
function hapus_admin($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM user WHERE iduser = '$id'");
    return mysqli_affected_rows($conn);
}

function tambah_kursus($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $durasi = htmlspecialchars($data["durasi"]);
    //query untuk menambah data
    $query = "INSERT INTO kursus values('$id_kursus','$id_kategori','$judul','$deskripsi','$durasi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_kursus($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk ubah data
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $durasi = htmlspecialchars($data["durasi"]);
    //query untuk mengubah / update data
    $query = "UPDATE kursus SET id_kursus='$id_kursus', id_kategori='$id_kategori', judul='$judul',deskripsi='$deskripsi',durasi='$durasi' 
    where $id_kursus = id_kursus"
    ;
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus_kursus($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM kursus WHERE id_kursus ='$id'");
    return mysqli_affected_rows($conn);
}


//fungsi untuk menambah data pada tabel kategori 
function tambah_kategori($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $jenis_kategori = htmlspecialchars($data["jenis_kategori"]);
    //query untuk menambah data
    $query = "INSERT INTO kategori values('$id_kategori','$jenis_kategori')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi untuk mengubah data pada tabel kategori
function ubah_kategori($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk ubah data
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $jenis_kategori = htmlspecialchars($data["jenis_kategori"]);
    //query untuk mengubah / update data
    $query = "UPDATE kategori SET id_kategori='$id_kategori',jenis_kategori ='$jenis_kategori' WHERE id_kategori = '$id_kategori'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data pada tabel kategori
function hapus_kategori($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = '$id'");
    return mysqli_affected_rows($conn);
}

//fungsi untuk menambah data pada tabel materi
function tambah_materi($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk tambah data
    $id_materi = htmlspecialchars($data["id_materi"]);
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link_embed = htmlspecialchars($data["link_embed"]);
    //query untuk menambah data
    $query = "INSERT INTO materi values('$id_materi','$id_kursus','$judul','$deskripsi','$link_embed')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah data pada tabel materi
function ubah_materi($data)
{
    //memanggil variabel global conn
    global $conn;
    //mendeklariskan variabel untuk ubah data
    $id_materi = htmlspecialchars($data["id_materi"]);
    $id_kursus = htmlspecialchars($data["id_kursus"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link_embed = htmlspecialchars($data["link_embed"]);
    //query untuk mengubah / update data
    $query = "UPDATE materi SET id_materi='$id_materi',id_kursus ='$id_kursus',judul='$judul',deskripsi='$deskripsi',link_embed ='$link_embed' WHERE id_materi = '$id_materi'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi untuk menghapus data pada tabel materi
function hapus_materi($id)
{
    //memanggil variabel global conn
    global $conn;
    //query untuk menghapus data
    mysqli_query($conn, "DELETE FROM materi WHERE id_materi = '$id'");
    return mysqli_affected_rows($conn);
}