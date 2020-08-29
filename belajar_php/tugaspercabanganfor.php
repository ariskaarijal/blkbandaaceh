<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i=1;

        for($i=0;$i<=20;$i++){
            if(($i %2)==0){
                echo"$i <br>";
            }
        }
    ?>

    <hr>

    <?php

        for($i=1;$i<=20;$i++){
            if(($i %3)==0){
            echo"$i <br>";
            }
        }
    ?>

    <hr>

    <?php

        for($i=2;$i<=64;$i*=2){
            echo"$i<br>";
        }
    ?>

    <hr>

    <?php

        for($i=3;$i<=20;$i+=3){
            echo"$i <br>";
        }
    ?>



</body>
</html>