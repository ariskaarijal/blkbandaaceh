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

        for($i=1;$i<=10;$i++){
            echo" $i";
        }
    ?>
    <hr>

    <?php
        for($i=1; $i<=10; $i++)
        echo"$i";
    ?>
    <hr>

    <?php
        for($i=1; ; $i++){
            if($i > 10){
        break;
    }
        echo"$i";
    }

    ?>
<hr>
    <?php
        
        $i=1;
        for(; ; ){
            if($i >10){
            break;
        }
            echo"$i";
            $i++;
        }

    ?>

<hr>
    <?php
        
        $i=1;
        for($i=1;$i<=10; print"$i", $i++);
            

    ?>

<hr>
    <?php
        
        $i=1;

        for($i=1;$i<=5;$i++){
       
    ?>
    <form action="">
        <label for="">da</label>
        <input type="text">
        <label for="">da</label>
        <input type="text">
        <label for="">da</label>
        <input type="text">
        <label for="">da</label>
        <input type="text">
    </form>
 <br>
    <?php
     }
     ?>

<hr>
    <?php
        
        $hewan=array("kambing","sapi","kerbau","ayam");
        foreach($hewan as $ey => $data){
            echo"".$hewan[3].$hewan[1];
        }

    ?>

    <hr>
        <?php
            
            $angka=array(1,2,3,4);
            foreach($hewan as $ey => $data){
                echo"".$angka[2].$angka[3];
            }

    ?>

    <hr>

    <?php
            
            $hewan=array(
            "kambing",
            "sapi",
            "kerbau"
            ,"ayam"
        );
            foreach($hewan as $ey => $data){
                echo"".$data[3] .$data[3];
            }

    ?>

<hr>

    <?php
            
        $hewan=array(
        "kambing",
        "sapi",
        "kerbau"
        ,"ayam"
        );
        foreach($hewan as $ey => $data){
         echo"".$data[3] .$data[3];
     }

    ?>
        










</body>
</html>