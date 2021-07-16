<?php
#menyambungkan database ke file php ini
include "config.php";

#isset memeriksa data apakah data uname,pass.. sudah diisi
if (isset($_POST ['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    #mencari data akun kedatabase
    $result = mysqli_query($koneksi, "select * from akun where username = '$uname' ");

    #verifikasi data yg td dimasukkan kedatabase
    if (mysqli_num_rows($result) > 0){
        foreach ($result as $q) {
            if (!password_verify($pass, $q['password'])) {
                header("location:login.php");
            }
            else {
                session_start();
                $_SESSION['username'] = $uname;
                $_SESSION['first_name'] = $q['first_name'];
                $_SESSION['last_name'] = $q['last_name'];
                
                #data ada didatabase ke file php home
                header("location:home.php");
            }
        }
    }
    #data gaada didatabase ke file php login
    else {
        header("location:login.php");
    }
}

?>