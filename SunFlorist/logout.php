<?php
#melanjutkan sesi yg ada
session_start();
#menyelesaikan semua sesi yg dilakukan
session_destroy();
#mengarahkan ke file php login
header("location:login.php")
?>