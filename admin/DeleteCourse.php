<?php 
require('fungsi.php');

$id = $_GET["id_kursus"];
if (hapus_kursus($id) > 0) {
	echo "
				<script>
					alert('Data berhasil dihapus!');
					document.location.href = 'Course.php';
				</script>
		";
} else {
	echo "
		<script>
					alert('Data gagal dihapus!');
					document.location.href = 'Course.php
				</script>
		";
}
?>