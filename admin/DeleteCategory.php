<?php 
require('fungsi.php');

$id = $_GET["id_kategori"];
if (hapus_kategori($id) > 0) {
	echo "
				<script>
					alert('Data berhasil dihapus!');
					document.location.href = 'Category.php';
				</script>
		";
} else {
	echo "
		<script>
					alert('Data gagal dihapus!');
					document.location.href = 'Category.php
				</script>
		";
}
?>