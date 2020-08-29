<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form action="" method="post" class="in">
                    <div class="form-group mb-2">
                        <label for="statictEmail2" class="sr-only">nilai 1</label>
                        <input id="statictEmail2" class="form-control" type="number" name="nilai_pertama" value="0">
                    </div>
                    <div class="form-group mxsm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">nilai 2</label>
                        <input id="inputPassword2" class="form-control" type="number" name="nilai_dua" value="0">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="tambah">+</button>
                    <button type="submit" class="btn btn-danger mb-2" name="kurang">-</button>
                    <button type="submit" class="btn btn-warning mb-2" name="kali">x</button>
                    <button type="submit" class="btn btn-succcess mb-2" name="bagi">:</button>

                </form>
            </div>

            <?php

            if (isset($_POST['tambah'])){
                $nilai_p=$_POST['nilai_pertama'];
                $nilai_d=$_POST['nilai_dua'];
                $tambah=$nilai_p+$nilai_d;
            }elseif (isset($_POST['kurang'])){
                $nilai_p=$_POST['nilai_pertama'];
                $nilai_d=$_POST['nilai_dua'];
                $tambah=$nilai_p-$nilai_d;
            }elseif (isset($_POST['kali'])){
                $nilai_p=$_POST['nilai_pertama'];
                $nilai_d=$_POST['nilai_dua'];
                $tambah=$nilai_p*$nilai_d;
            }elseif (isset($_POST['bagi'])){
                $nilai_p=$_POST['nilai_pertama'];
                $nilai_d=$_POST['nilai_dua'];
                $tambah=$nilai_p/$nilai_d;
            }

            ?>
            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($tambah)?$tambah:'' ?>
                </div>
               
            </div>
         </div>
    </div>

<script src="..js/jquery.js"></script>
<script src="..js/bootstrap.js"></script>
</body>
</html>