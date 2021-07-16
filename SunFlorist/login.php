<?php
#melanjutkan sesi yg ada
session_start();

if(isset($_SESSION['username'])){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
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
            margin-top: 20px;
        }
        .section-1{
            text-align: center;
            font-size: 20px;
            padding: 40px;
            background: url('image/4f.jpg')
        }
        .card {
        margin: 5px auto;
        width: 500px;
        padding: 55px;
        border-radius: 30px;
        background: #D2D3C9;
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
    <title>Document</title>
</head>
<body>
<div class="jumbotron">
        <h1> Enter Your Account</h1>
        <p>
        Masuk dan Lihat bunga yang kamu suka.
       </p>
    </div>
       <!--navbar dari halaman login-->
    <nav>
        <ul>
            <li>
               <a href="login.html">LOGIN | SIGN UP</a>
           </li> 
        </ul>
        </nav>
    </header>
    <section>
           <!--form untuk menginput username,password-->
    <div class="section-1">
            <div class="card">
                <!--akan mengarah ke action_login-->
            <form action="action_login.php" method="POST">
            <table border="0" align="center">
            <tr><td><label class="judul" for="lname">Username</td><td></label>
            <input type="text" id="uname" name="uname"></td></tr>
            <tr><td><label class="judul" for="lname">Password</td><td></label>
            <input type="password" id="pass" name="pass"></td></tr>
        </table>
        <input class="tombol-biru" type="submit" value="Login" name="login">
            </form>
            <p class="judul"> Belum punya akun?? <a href="register.php">SIGN UP</a></p>
            </div>
        </div>
    </section>
    <footer>
        <p>Sun Florist &#169; 2021</p>
    </footer>
</body>
</html>
   