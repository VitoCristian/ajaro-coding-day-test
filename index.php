<?php

	//koneksi ke database mysql barang
	$koneksi=new mysqli("localhost","root","","db_barang");

	if(isset($_GET['hapus'])){
		$id=$_GET['id'];
		mysqli_query($koneksi,"DELETE FROM barang WHERE id='$id'");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manajemen Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><center>KELOLA DATA BARANG</a></center>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h4>Daftar Barang</h4>
		<hr>
		<br>
		
		<a href="tambah.php" class="btn btn-success btn-lg">Tambah</a>
		<br/>
		<br/>

		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark" align="center">
				<tr>
					<th>Kode</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

					//query ke database SELECT tabel barang 
					$sql = mysqli_query($koneksi, "SELECT * FROM barang");
					
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_array($sql)){

				?>
						<!--menampilkan data dari tabel barang -->	
						<tr>
							<td align="center"><?php echo $data['kode'];?></td>
							<td align="center"><?php echo $data['nama'];?></td>
							<td align="center">Rp. <?php echo number_format($data['harga'],2,',','.');?></td>
							<td align="center">
								<a href="edit.php?id=<?php echo $data['id'];?>" class="badge badge-warning">Edit</a>
								<a href="index.php?hapus=iya&id=<?php echo $data['id'];?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="badge badge-danger">Hapus</a>
							</td>
						</tr>
				<?php
					}
				?>	
						
			<tbody>
		</table>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>