<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/from-data">

       <label for="" >nama lengkap :</label>
        <input id="" type="text" name="nama_lengkap">
  <br>
        <label for="" >tanggal lahir :</label>
        <input type="date" name="tgl" id="">
  <br>
         <label for="" >tempat lahir :</label>
        <input type="text" name="tmpat_lahir" id="">
  <br>
        <label for="" >jenis kelamin :</label>
        <input type="radio" name="jenis_kelamin" id="" value="laki-laki">laki-laki
        <input type="radio" name="jenis_kelamin" id="" value="perempuan">perempuan
  <br>
         <label for="" >hobbi :</label>
        <input type="checkbox" name="makan" id="" value="makan">makan
        <input type="checkbox" name="olahraga" id="" value="olahraga">olahraga
        <input type="checkbox" name="ngoding" id="" value="ngoding">ngoding
        <input type="checkbox" name="membaca" id="" value="membaca">membaca
  <br>
        <label for="">alamat :</label> <br>
        <textarea name="alamat" id="input" rows="10" cols="30" required="required"></textarea>
<br>
    <label for="my-select">kabupaten :</label>
    <select id="my-select" name="kabupaten">
        <option>kabupaten</option>
        <option>aceh besar</option>
        <option>banda aceh</option>
        <option>aceh tamiang</option>
        <option>aceh timur</option>
        <option>aceh utara</option>
        <option>aceh selatan</option>
    </select>
 <br>
    <label for="my-select">pendidikan :</label>
    <select id="my-select" name="pendidikan">
        <option>tamatan</option>
        <option>SD</option>
        <option>SMP</option>
        <option>SMA</option>
    </select>
<br>
    <label for="">pekerjaan :</label>
    <input type="text" name="pekerjaan" id="">
 <br>
    <label for="my-select">agama :</label>
    <select id="my-select" name="agama">
        <option>pilih agama</option>
        <option>islam</option>
        <option>kristen</option>
        <option>budhaa</option>
        <option>hindu</option>
        <option>prostetan</option>
    </select>
<br>
    <label for="">foto :</label>
    <input type="file" name="foto" id="">
<br>
    <label for="">password :</label>
    <input type="password" name="password" id="">
<br>
    <label for="">user name :</label>
    <input type="text" name="user_name" id="">
<br>
    <input name="input" id="" type="submit" value="tampilkan">
    </form>
    <?php

      if(isset($_POST["input"])){
          $nama =$_POST ["nama_lengkap"];
          $tanggal =$_POST ["tgl"];
          $tmpt_lahir =$_POST ["tmpat_lahir"];
          $jk =! empty($_POST["jenis_kelamin"])?$_POST["jenis_kelamin"]:'anda belum memilih jenis kelamin';
          $hobbi1 =! empty($_POST["makan"])? $_POST["makan"]:'';
          $hobbi2 =! empty($_POST["olahraga"])? $_POST["olahraga"]:'';
          $hobbi3 =! empty($_POST["ngoding"])? $_POST["ngoding"]:'';
          $hobbi4 =! empty($_POST["membaca"])? $_POST["membaca"]:'';
          $alamat =$_POST ["alamat"];
          $kabupaten =$_POST ["kabupaten"];
          $pendidikan =$_POST ["pendidikan"];
          $pekerjaan =$_POST ["pekerjaan"];
          $agama =$_POST ["agama"];

          $foto =$_FILES["foto"]["name"];
          if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name'])){
              echo"gambar berhasil di upload";
          }else {
            echo"file gagal di upload";

          };

        $password =$_POST ["password"];
        $user_name =$_POST ["user_name"];


        echo"
          $nama  <br> $tanggal
          <br> $tmpt_lahir <br> $jk
          <br> $hobbi1 <br> $hobbi2
          <br> $hobbi3  <br> $hobbi4
          <br> <div class='alert alert-primary' role='alert'>$alamat </div> <br> $kabupaten
          <br> $pendidikan <br> $pekerjaan
          <br> $agama <br> <img src='img/$foto'>
          <br> $password <br> $user_name

        ";

      }

    ?>

    <script src="..js/jquery.js"></script>
    <script src="..js/bootstrap.js"></script>

</body>
</html>