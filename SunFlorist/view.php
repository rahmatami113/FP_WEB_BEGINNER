<?php 

    // Koneksi file php ke database
    include('config.php');

    // Proses pengambilan data dari table produk berdasarkan ID
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      
    // Query untuk menampilkan data dari tabel produk berdasarkan ID
    $query = mysqli_query($koneksi, "select * from produk where id = '$id'");
    
    // Menampilkan produk dalam bentuk array
    $result = mysqli_fetch_array($query); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>View Record</title>
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        .judul{
            color: #595B83;
            text-align: center;
        }
        table{
            margin-top: 20px;
            margin-left:auto;
            margin-right:auto;
        }
        button{
                background: #060930;
                padding-right: 10px;
                margin-left:2px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 5px;
                margin-bottom: 405px;
            }
            a {
                color: #f5f5f5;
                text-decoration: none;
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
	</style>
</head>
<body>
	<h2 class="judul">Detail Data Produk</h2>
		</div>
	<hr>
	<p class="judul">Dibawah ini adalah detail produk berdasarkan ID Produk </i><b><?php echo $id?></b></p>
    <table>
        <tr>
            <td>Nama Produk</td>
            <td>: <?php echo $result['nama_produk']?> </td>
        </tr>
        <tr>
            <td>Deskripsi Produk</td>
            <td>: <?php echo $result['deskripsi']?> </td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td>: Rp <?php  echo number_format($result['harga'],0,',','.');?> </td>
        </tr>
   </table>
   <button><a href="home.php">kembali</a></button>
</div>
<footer>
    <p>Sun Florist &#169; 2021</p>
</footer> 
</body>
</html>