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
        .tambah {
            margin: 20px auto;
            width: 200px;
            padding: 60px;
            border: 1px solid #ccc;
            background: #D2D3C9;
        }
        button{
                background: #060930;
                margin-left: 20px;
                padding-right: 20px;
                padding-left: 20px;
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
        <p>Create Flower Collection</p>
    </div>

<!--form input, tambah produk-->
<div class="tambah">
   <form action="home.php" method="post">
   <label for="nama_produk">Produk:</label><br>
   <input type="text" id="nama_produk" name="nama_produk"><br><br>
   <label for="harga">Harga:</label><br>
   <input type="text" id="harga" name="harga"><br><br>
   <label>Deskripsi</label><br>
   <textarea type="text" id="deskripsi" name="deskripsi"></textarea><br><br>
   <input class="tombol-biru" type="submit" name="btnsubmit" value="Submit">
   </form>
</div>
<div>
    <button><a href="home.php?page=home" >Kembali</a></button>
</div>
<br>
<footer>
        <p>Sun Florist &#169; 2021</p>
    </footer>
</body>
</html>
