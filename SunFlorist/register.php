<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            background: #595B83;
            color: white;
            border: none;
            margin-top: 20px;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
        }
        .section-1{
            text-align: center;
            font-size: 20px;
            padding: 30px;
            background: url('image/4f.jpg')
        }
        .card {
        margin: 5px auto;
        width: 500px;
        padding: 50px;
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
        <h1> Sign Up Your Account</h1>
        <p>
        Masuk dan Lihat bunga yang kamu suka.
       </p>
    </div>
    </header>
    <section>
    <div class="section-1">
            <div class="card">
                <!--akan mengarah ke action_regster-->
            <form action="action_register.php" method="POST">
            <br>
            <table border="0" align="center">
            <tr><td><label class="judul" for="fname">First Name:</td><td></label>
            <input type="text" id="fname" name="fname"></td></tr>
            <tr><td><label class="judul" for="fname">Last Name:</td><td></label>
            <input type="text" id="lname" name="lname"></td></tr>
            <tr><td><label class="judul" for="fname">Username:</td><td></label>
            <input type="text" id="uname" name="uname"></td></tr>
            <tr><td><label class="judul" for="fname">email:</td><td></label>
            <input type="text" id="email" name="email"></td></tr>
            <tr><td><label class="judul" for="fname">Password:</td><td></label>
            <input type="password" id="pass" name="pass"></td></tr>
            </table>
            <input class="tombol-biru" type="submit" value="Sign Up" name="register">
        </form>
        <p class="judul"> Sudah Punya Akun?? <a href="login.php">login</a></p>
            </div>
        </div>
    </section>
    <footer>
        <p>Sun Florist &#169; 2021</p>
    </footer>
</body>
</html>