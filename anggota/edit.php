<?php 
include '../koneksi.php';
include '../aset/header.php';
$id = $_GET["id_anggota"];
$query = mysqli_query($kon, ("SELECT * FROM anggota where id_anggota = $id"));
$anggota = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%;">
					<div class="card-header" style="width: 100%;">
						<h2 class="card-title"><i class="fas fas fa-book"></i> Edit Data Anggota</h2>
					</div>
					<div class="card-body">

					<form action="proses-edit.php" method="post">

					<table class="table">
						<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
						<tr>
							<td>Nama</td>
							<td><input style="width:100%" type="text" name="nama" value="<?= $anggota['nama']; ?>" required></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input style="width:100%" type="text" name="kelas" value="<?= $anggota['kelas']; ?>" required></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input style="width:100%" type="text" name="telp" value="<?= $anggota['telp']; ?>" required></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input style="width:100%" type="text" name="username" value="<?= $anggota['username']; ?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input style="width:100%" type="text" name="password" value="<?= $anggota['password']; ?>" required></td>
						</tr>
						<tr>
							<th></th>
							<th><button style="width:100%; height: 70px" type="submit" class="btn btn-primary" name="simpan">EDIT</button>
							</th>
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