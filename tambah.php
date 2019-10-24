<?php

	//koneksi ke database mysql barang
	$koneksi = mysqli_connect("localhost","root","","db_barang");
		//jika tombol simpan di klik
		if(isset($_POST['tombol_simpan'])){	
			$kode_barang=$_POST['kode'];
			$nama_barang=$_POST['nama'];
			$deskripsi_barang=$_POST['deskripsi'];
			$stok_barang=$_POST['stok'];
			$harga_barang=$_POST['harga'];
			$berat_barang=$_POST['berat'];

				//sql menambahkan data di tabel barang
				mysqli_query($koneksi,"INSERT INTO barang VALUE ('$id','$kode_barang','$nama_barang','$deskripsi_barang','$stok_barang','$harga_barang','$berat_barang')");

				header("location:index.php");	
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
		<h4>Tambah Data Barang</h4>
		
		<hr>
		
		<form method="post">
			<div class="form-group">
				<div class="col-sm-10">
					<label>Kode</label><br>
					<input type="text" name="kode" class="form-control" required><br>
					<label>Nama</label><br>
					<input type="text" name="nama" class="form-control" required><br>
					<label>Deskripsi</label><br>
					<textarea type="text" class="form-control" name="deskripsi" cols="40" rows="5" required></textarea><br>
					<label>Stok</label><br>
					<input type="text" name="stok" class="form-control" required><br>
					<label>Harga</label><br>
					<input type="decimal" name="harga" class="form-control" required><br>
					<label>Berat (Gram)</label><br>
					<input type="decimal" name="berat" class="form-control" required><br>
					<button class="btn btn-primary" name="tombol_simpan" type="submit">SIMPAN</button>
					<a href="index.php" class="btn btn-warning">KEMBALI</a>
				</div>	
			</div>	
		</form>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>