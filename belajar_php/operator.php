<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nama="ariska arijal";
        $uang=60000;
        $aqua=3000;
        $mie_instan=2500;
        $saos=5000;
        $jumlah_aqua=2;
        $jumlah_mie=3;
        $jumlah_saos=1;
        $total_aqua=$aqua*$jumlah_aqua;

        $total_harga=($aqua*$jumlah_aqua)+($mie_instan*$jumlah_mie)+($saos*$jumlah_saos);
        $pengembalian= $uang-$total_harga;

        echo"nama  $nama <br>";
        echo"uang yang di bawa $uang <br>";
        echo"jumlah pembelian aqua sebanyak  $jumlah_aqua, dengan total   $total_aqua <br>";
        echo"jumlah pembelian mie  $mie_instan <br>";
        echo"jumlah pembelian saos $jumlah_saos <br>";

        echo"$nama harus membayar sebesar Rp.$total_harga,<br> 
        dan uang pengembalian yang di peroleh $nama adalah sebesar Rp.$pengembalian ";
        
      ?>
</body>
</html>