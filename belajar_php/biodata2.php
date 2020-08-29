<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="get" action="">

        <label for="input-id" class="col-sm-2">nama</label>
        <input class="form-control" type="text" name="nama_lengkap" placeholder="masukan nama lengkap">
        <label for="input-id" class="col-sm-2">tanggal lahir</label>
        <input class="form-control" type="date" name="tanggal" placeholder="">
        <input name="input" id="" class="btn btn-primary" type="submit" value="tampilkan">
    </form>

<?php
    if(isset($_GET["tampilkan"])){
        $nama *$_GET["nama_lengkap"];
        $tanggal *$_GET["tgl"];
        echo"$nama <br> $tanggal";
    }
?>

</body>
</html>