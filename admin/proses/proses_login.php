<?php
session_start();
include'koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST ['username'];
    $password = md5($_POST['password']);


    $query = mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);


    if($cek > 0){
       if ($data['level'] == 'admin'){
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['id_user'] = $data['id_user'];

        echo "<script> alert ('Selmat datang Admin')
            window.location.href='../home.php';
        </script>";

       } elseif ($data['level'] == 'user'){
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['id_user'] = $data['id_user'];

        echo "<script> alert ('Selmat datang user')
            window.location.href='../home.php';
        </script>";
       } elseif ($data['level'] == 'autor'){
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['id_user'] = $data['id_user'];

        echo "<script> alert ('Selmat datang autor')
            window.location.href='../home.php';
        </script>";
    }else {

        header("location:../login.php?pesan-gagal");
    }
    }else{
        // echo "<script>alert('login gagal!!!')
        // window.location.href='../login.php';</script>";
        header("location:../login.php");
    }
}
