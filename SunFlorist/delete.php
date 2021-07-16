<!--delete data dari tabel produk-->
<?php
#menyambungkan database ke file php ini
include "config.php";
//mengambil id barang yang ingin dihapus
$id_produk = $_GET['id'];
#mysqli_query= menampung perintah delete data kedatabase
mysqli_query($koneksi, "delete from produk where id = $id_produk ");

header("location:home.php");

?>