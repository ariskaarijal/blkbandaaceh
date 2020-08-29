<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <!-- header -->

    <nav class="navbar navbar-light" style="background-color: #234452;">
        <a class="navbar-brand text-center" href="#">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            PENJUALAN BLK
        </a>
    </nav>

    <!-- conten -->

    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form method="post" action="">

                    <div class="form-group">
                        <label for="email">email address</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="masukan email">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="masukan password">
                    </div>

                    <button name="login" type="submit" class="btn btn-large btn-block btn-primary">button</button>

                </form>

            </div>
            <div class="col-md-4"></div>
        </div>

    </div>

    <?php

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($email == 'budi' && $pass == 'kijoko') {
            echo "<script> alert ('selamat datang kijoko bodo ') window.location.href='admin';
        </script>";
        } else {
            echo " <script>alert('kamu bukan ki joko')</script> ";
        }
    }

    // $username = "ani";
    // $password = "admin";

    // if($username = 'ani' && $password = 'admin'){
    //     echo "selamat datang $username";
    // }else {
    //     echo "username atau password salah";
    // }

    ?>

    <!-- <script src="../js/bootstrap.js"></script>

    <script>
        var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function () {
            Document.querySelector(".captcha-image").scr = 'captcha.php?' + Date.now();
        }
    </script> -->
</body>

</html>