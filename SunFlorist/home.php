<!--setelah login menuju hal ini-->
<?php
#melanjutkan sesi yg ada
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>

<!-- bangun proses insert kedatabase-->
<?php
#menyambungkan database ke file php ini
include "config.php";
#isset memeriksa data apakah data nama_produk,harga.. sudah diisi
if(isset($_POST['btnsubmit'])){
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    
    #mysqli_query= menampung perintah insert data produk kedatabase
    mysqli_query($koneksi, "insert into produk (nama_produk,harga,deskripsi) values ('$nama_produk','$harga','$deskripsi')");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        .jumbotron {
            font-size: 20px;
            padding: 30px;
            background-color:#595B83;
            text-align: center;
            color: #F3EEEA;
            font-family: 'Hobo Std';
        }
        nav li {
            display: inline;
            list-style-type: none;
            margin-right: 20px;
            text-align: center;
        }
        nav a {
            font-size: 18px;
            font-weight: 400;
            text-decoration: none;
            color: #595B83;
            text-align: center;
        }
        nav a:hover {
            font-weight: bold;
        }
        nav {
            background-color: #D2D3C9;
            padding: 5px;
            position: sticky;
            top: 0;
            text-align: center;
        }
        .navbar-text{
            text-decoration: none;
            margin-left: 20px;
            margin-right: 20px;
            color: #595B83;
        }
        .judul{
            color: #595B83;
        }
        .tombol-biru{
            background: #595B83;
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
        table{
            margin-top: 20px;
            margin-left:auto;
            margin-right:auto;
        }
         tr th{
             background: #060930;
             color: #fff;
             font-weight: normal;
            }
            th, td {
                padding: 8px 20px;
            }
            tr:hover {
                background-color: #f5f5f5;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            button{
                background: #060930;
                padding-right: 10px;
                margin-left:2px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 5px;
            }
            a {
                color: #f5f5f5;
                text-decoration: none;
            }
            </style>
            <title>Home</title>
        </head>
        <body>
             <!--navbar dari halaman home-->
    <div class="jumbotron">
        <h1>Sun Florist</h1>
        <p>Flower Collection</p>
    </div>
    <nav> 
         <ul>
             <li><a  href="">Home</a></li>
             <li><a  href="">Referensi</a></li>
             <li><a  href="">Flower</a></li>
             <a class="tombol-biru" href="logout.php">Logout</a>
         </ul>
        </nav>
    </header>
    <!--menamplkan sapaan halo "user" -->
    <h1 class="judul">Hello, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?> </h1>
<br>

   <!--tabel hasil insert data produk-->
   <button><a href="tambah.php">Create</a></button>
   <table>
   <tr>
       <th>No</th>
       <th>Produk</th>
       <th>Harga</th>
       <th>Deskrpsi</th>
       <th>Action</th>
    </tr>
    <!--menampilkan hasil data ditabel produk yg ada didatabase -->
    <?php
    $hasil = mysqli_query($koneksi,"select * from produk");
    $no = 1;
    foreach($hasil as $row){
        ?>
        
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_produk']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['deskripsi']; ?></td>
            <td>
                <!--mengarahkan button ke file php delete,update,viw data -->
                <button><a href='delete.php?id=<?php echo $row['id']; ?>'onclick="return confirm('Anda yakin mau menghapus item ini ?')">delete</a> </button>
                &nbsp; 
                <button><a href="update.php?id=<?php echo $row['id']; ?>">update</a> </button>
                &nbsp; 
                <button><a href="view.php?id=<?php echo $row['id']; ?>">View</a> </button>
            </td>
        </tr>
        <?php
        $no++;
    }
    ?>
    </table>
    <br>
    <br>
    <footer>
        <p>Sun Florist &#169; 2021</p>
    </footer>
</body>
</html>