<?php
session_start();
include'koneksi.php';
if(isset($_POST['input_user'])){
    $id = uniqid();
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $level = $_POST['level'];

    $query_input = mysqli_query($koneksi, "INSERT INTO user VALUES (md5('$id'),'$username','$email',md5('$pass'),'$nohp','','$level')");


    if ($query_input){
        echo '<script>alert ("data user berhasil")
         window.location.href="../data_user.php";
        </script>';
    }

}

?>