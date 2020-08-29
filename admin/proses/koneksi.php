<?php

    $localhost='localhost';
    $user='root';
    $username='';
    $db ='web_berita';

    $koneksi=mysqli_connect($localhost,$user,$username,$db);
    if($koneksi){

    }else{
        echo"<script>alert('koneksi ke database gagal')</script>";
    }

?>