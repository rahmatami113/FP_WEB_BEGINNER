<?php
#menyambungkan database ke file php ini
include 'config.php';

#isset memeriksa data apakah data fname,lname.. sudah diisi
if (isset($_POST ['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];

    #password_hash -> enkripsi pass
    $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);

    #mysqli_query= menampung perintah insert data akun kedatabase
    mysqli_query($koneksi, "insert into akun(first_name,last_name,username,email,password) values ('$fname','$lname', '$uname', '$email', '$pass')");

    #mengarahkan ke login php
    header("location:login.php");

}