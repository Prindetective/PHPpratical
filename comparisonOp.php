<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=42;
    $b=20;
    if($a==$b){
        echo"TEST1 : A IS EQUAL TO B <br/>";
    }else{
        echo"TEST1 : A IS NOT EQUAL TO B <br/>";
    }
    if($a>$b){
        echo"TEST1 : A IS GREATER THAN TO B <br/>";
    }else{
        echo"TEST1 : A IS NOT GREATER THAN TO B <br/>";
    }
    if($a<$b){
        echo"TEST1 : A IS LESS THAN TO B <br/>";
    }else{
        echo"TEST1 : A IS NOT LESS THAN TO B <br/>";
    }
    if($a!=$b){
        echo"TEST1 : A IS NOT EQUAL  TO B <br/>";
    }else{
        echo"TEST1 : A IS EQUAL  TO B <br/>";
    }
    ?>
</body>
</html>