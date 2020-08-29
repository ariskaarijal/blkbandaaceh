<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $usernama="nana";
        $password=225;
    
        switch ($usernama) {
            case 'nana':
                # code...
                echo"selamat datang $usernama";
                break;
            case 'ariska arijal':
                # code...
                echo"selamat datang $usernama";
                break;
            
            default:
                # code...
                echo"salah masuk";
                break;
        }
        
    ?>
    <hr>

    <?php 
        $usernama="nana";
        $password=225;
        
        echo"masukan <label>Nama Lengkap :</label>
		<input type='text' placeholder='Masukkan nama kamu'> <button $usernama>input</button>
		<br>";



        switch ($usernama) {
            case 'nana':
                # code...
                echo"selamat datang $usernama";
                break;
            case 'ariska arijal':
                # code...
                echo"selamat datang $usernama";
                break;
            
            default:
                # code...
                echo"salah masuk";
                break;
        }
        
    ?>
    <hr>
    <?php 
        $usernama="ariska arijal";
        $password=222;
    
        switch ($usernama &&  $password) {
            case 'nana && 225':
                # code...
                echo"selamat datang $usernama";
                break;
            case 'ariska arijal && 222':
                # code...
                echo"selamat datang $usernama";
                break;
            
            default:
                # code...
                echo"salah masuk";
                break;
        }
        
    ?>


</body>
</html>