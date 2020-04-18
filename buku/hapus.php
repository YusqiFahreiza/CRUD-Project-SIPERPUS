<?php  
include '../koneksi.php';

$id = $_GET["id_buku"];

	$query = "DELETE FROM buku WHERE id_buku='$id' ";
	$buku = mysqli_query($kon, $query);

	if (!$buku) {
		die ("Gagal menghapus data: ".mysqli_errno($connect)." - ".mysqli_error($connect));
	}else{
		echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
	}

?>