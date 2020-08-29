<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penjualan</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.css">

<body>

    <!--navbar-->

    <div class="container">
        <nav class="navbar navbar-light" style="background-color: #234452;">
            <a class="navbar-brand text-center" href="#">
                <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
                PENJUALAN BLK
            </a>
        </nav>

        <br>
        <div class="row">
            <div class="col-md-6">
                <!--form-->
                <form method="post" action="">
                    <div class="form-group mb-2">
                        <label for="staticEmail2">nama barang</label><br>
                        <input id="staticEmail2" class="form-control" type="text" name="jumlah" placeholder="masukan jumlah barang">
                    </div>
                    <div class="form-group mb-2">
                        <input value="tambah" type="submit" name="tambah" class="btn  btn-outline-success">
                    </div>
                </form>

                <!--php-->

                <?php
                if (isset($_POST['tambah'])) {
                ?>
                    <form method="POST" action="">
                        <?php
                        $jumlah = $_POST['jumlah'];
                        for ($a = 1; $a <= $jumlah; $a++) {
                        ?>

                            <b>data barang ke - <?php echo $a; ?></b><br>
                            <div class="form-group mb-2">
                                <label for="staticEmail2">nama barang : </label>
                                <input id="staticEmail2" class="form-control" type="text" name="nama_barang<?php echo !empty($a) ? $a : ''; ?>" placeholder="masukan jumlah barang">
                            </div>
                            <div class="form-group mb-2">
                                <label for="staticEmail 2">harga barang</label>
                                <input id="staticEmail2" class="form-control" type="number" name="harga<?php echo !empty($a) ? $a : ''; ?>" placeholder="masukan jumlah barang"><br>
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword2">jumlah</label>
                                <input id="inputPassword2" class="form-control" type="number" value="0" name="jumlah<?php echo $a; ?>" placeholder="masukan jumlah barang"><br>
                            </div>
                        <?php
                        }
                        ?>

                        <button type="submit" class="btn btn-success mb-2" name="total">cek harga</button>
                    </form>

                <?php
                }
                ?>
            </div>

            <!--prosessnya-->

            <?php

            if (isset($_POST['total'])) {

                $nama_barang_1 = !empty($_POST['nama_barang1']) ? $_POST['nama_barang1'] : '';
                $harga1 = !empty($_POST['harga1']) ? $_POST['harga1'] : '';
                $jumlah1 = !empty($_POST['jumlah1']) ? $_POST['jumlah1'] : '';


                $nama_barang_2 = !empty($_POST['nama_barang2']) ? $_POST['nama_barang2'] : '';
                $harga2 = !empty($_POST['harga2']) ? $_POST['harga2'] : '';
                $jumlah2 = !empty($_POST['jumlah2']) ? $_POST['jumlah2'] : '';


                $nama_barang_3 = !empty($_POST['nama_barang3']) ? $_POST['nama_barang3'] : '';
                $harga3 = !empty($_POST['harga3']) ? $_POST['harga3'] : '';
                $jumlah3 = !empty($_POST['jumlah3']) ? $_POST['jumlah3'] : '';


                $nama_barang_4 = !empty($_POST['nama_barang4']) ? $_POST['nama_barang4'] : '';
                $harga4 = !empty($_POST['harga4']) ? $_POST['harga4'] : '';
                $jumlah4 = !empty($_POST['jumlah4']) ? $_POST['jumlah4'] : '';


                $nama_barang_5 = !empty($_POST['nama_barang5']) ? $_POST['nama_barang5'] : '';
                $harga5 = !empty($_POST['harga5']) ? $_POST['harga5'] : '';
                $jumlah5 = !empty($_POST['jumlah5']) ? $_POST['jumlah5'] : '';


                $hasil1 = !empty($harga1 * $jumlah1) ? $harga1 * $jumlah1 : '';
                $hasil2 = !empty($harga2 * $jumlah2) ? $harga2 * $jumlah2 : '';
                $hasil3 = !empty($harga3 * $jumlah3) ? $harga3 * $jumlah3 : '';
                $hasil4 = !empty($harga4 * $jumlah4) ? $harga4 * $jumlah4 : '';
                $hasil5 = !empty($harga5 * $jumlah5) ? $harga5 * $jumlah5 : '';

                $total_hasil = !empty($hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5) ?
                $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 : '';
            ?>


                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                    <?php echo "" . !empty($total_hasil) ? "total harga yang harus di bayar Rp." . $total_hasil : '';
                } ?>
                    </div>
                </div>

        </div>
    </div>

<?php

?>

    <script src="..js/jquery.js"></script>
    <script src="..js/bootstrap.js"></script>

</body>
</body>

</html>