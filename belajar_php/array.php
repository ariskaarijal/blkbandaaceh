<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nama="joko";
        $hewan=array("kambing","sapi","kerbau","ayam");
        $tumbuhan=array("rumput","mawar","sawi","bayam");
        $makanan=array("ayam goreng","nasi goreng","telor puyoh","dedak");

        echo"$nama membeli makanan $makanan[3] untuk $hewan[3] <br>";
        echo"".$hewan[0][2].$hewan[1][1].$hewan[2][5] ;    
    ?>
</body>
</html>