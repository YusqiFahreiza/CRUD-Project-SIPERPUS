<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  				<div class="card-header">
  					<h2 class="card-title"> <i class="fas fa-edit"></i> Data Buku</h2>

  					<center><a href="tambah.php"><span class="badge badge-info">+ Tambah Buku </span></a></center>
  				</div>
  				<div class="card-body">
   					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">NO</th>
					      <th scope="col">Judul</th>
					      <th scope="col">Pengarang</th>
						  <th scope="col">Stok</th>
						  <th scope="col">Aksi</th>					      
					    </tr>
					  </thead>
					  <tbody>
					    <?php  
					    	$no =1;
					    	foreach ($pinjam as $p) { ?>

					    	<tr>
					    		<th scope="row"><?= $no ?></th>
					    		<td><?= $p['judul'] ?></td>
					    		<td><?= $p['pengarang'] ?></td>
					    		<td><?= $p['stok'] ?></td>
					    		<td>
					    			<a href="detail.php?id_buku=<?= $p['id_buku']; ?>" class="badge badge-success">Detail</a>
					    			<a href="edit.php?id_buku=<?= $p['id_buku']; ?>" class="badge badge-warning">Edit</a>
					    			<a href="hapus.php?id_buku=<?= $p['id_buku']; ?>" class="badge badge-danger">Hapus</a>
					    		</td>
					    	</tr>

					    <?php  
					    	$no++;
					    }
					    ?>
					  </tbody>
					</table>
  				</div>
			</div>

<?php 
include '../aset/footer.php';
?>