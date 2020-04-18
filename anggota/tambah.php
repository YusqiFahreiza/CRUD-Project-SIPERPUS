<?php
include '../aset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%;">
					<div class="card-header" style="width: 100%;">
						<h2 class="card-title"><i class="fas fas fa-book"></i> Tambah Anggota</h2>
					</div>
					<div class="card-body">

					<form action="proses-tambah.php" method="post">

					<table class="table">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" required></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="text" name="kelas" required></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input type="text" name="telp" required></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="password" required></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-primary" name="simpan" value="Simpan!"></td>
						</tr>
					</table>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php 

include '../aset/footer.php';

?>