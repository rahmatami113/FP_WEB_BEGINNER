<div class="container" style="margin-top:20px">
		<h1 class="judul"><center>Update Data</center></h1>
		<hr>
</div>
	<?php
		//menyambungkan database ke file php ini
			include('config.php');

			$id = $_GET['id']; //mengambil id barang yang ingin diubah

		//menampilkan produk berdasarkan id
			$result = mysqli_query($koneksi, "select * from produk where id = '$id'");
			$row = mysqli_fetch_assoc($result);

		?>
	
	<!DOCTYPE html>
		<html lang="en">
			<head>
			<title>Document</title>
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        .judul{
            color: #595B83;
        }
        .tombol-biru{
            background: #060930;
            color: white;
            border: none;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
        }
        footer{
            margin-top: 0px;
            background:#595B83;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            padding-top: 20px;
            padding-bottom: 20px;
			color: white;
        }
				.update {
					margin: 20px auto;
					width: 180px;
					padding: 80px;
					border: 1px solid #ccc;
					background: #D2D3C9;
				}
				
				button{
					background:#060930;
					margin-left: 20px;
					padding-right: 20px;
					padding-left: 20px;
					padding-top: 10px;
					padding-bottom: 10px;
					border-radius: 5px;
					color: white;
				}
				a {
					color: #f5f5f5;
					text-decoration: none;
				}
			</style>
				</head>
					<body>
						<form action="" method="post" role="form">
							<div class="update">
								<label >ID</label><br>
								<input type="text" name="id" readonly required value="<?= $row['id']; ?>"><br><br>
								<label>Nama</label><br>
								<!--  menampilkan nama produk -->
								<input type="text" name="nama_produk" required class="form-control" value="<?= $row['nama_produk']; ?>"><br>
								<!-- ini digunakan untuk menampung id yang ingin diubah -->
								<input type="hidden" name="id" required value="<?= $row['id']; ?>"><br>
								<label>Deskripsi</label><br>
								<textarea name="deskripsi"><?= $row['deskripsi']; ?></textarea><br><br>
								<label>Harga</label><br>
								<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>"><br><br>
								<button type="submit" name="submit" value="simpan">update data</button>
							</div>
						</form>
					<br>
				    <!--mengarahkan ke file php home-->
						<button><a href="home.php?page=tampil_pdk" >Kembali</a></button>
						<br>
						<br>
						<footer>
							<p>Sun Florist &#169; 2021</p>
						</footer>
							
					<?php
					//jika klik tombol submit maka akan melakukan perubahan
						if (isset($_POST['submit'])) {
						$id = $_POST['id'];
						$nama_produk = $_POST['nama_produk'];
						$deskripsi = $_POST['deskripsi'];
						$harga = $_POST['harga'];
						//query mengubah barang
						mysqli_query($koneksi, "update produk set nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga' where id ='$id'") or die(mysqli_error($koneksi));
						//redirect ke halaman home.php
						echo "<script>alert('data berhasil diupdate.');window.location='home.php';</script>";
					}
				?>
			</body>
			</html>
