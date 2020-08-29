<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata with metode post</title>
</head>
<body>
    <form method="post" action="proses.php">

    <label for="input-id" class="col-sm-2">Nama</label>
    <input class="form-control" type="text" name="Nama_Lengkap">
    <label for="input-id" class="col-sm-2">Tanggal Lahir</label>
    <input class="form-control" type="number" name="tgl">
    <input name="input" id="" class="btn btn-primary" type="submit" value="tampilkan">
        
    </form>
 <?php
        if(isset($_POST["input"])){
            $nama *$_POST["Nama_Lengkap"];
             $tanggal *$_POST["tgl"];
             echo"$nama <br> $tanggal";
        }


        ?>

</body>
</html>