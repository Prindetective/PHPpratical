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
    $x=42;
    $y=20;
    $z=$x+$y;
    echo"result of addiction operation: $z <br/>";
    $z=$x-$y;
    echo"result of substraction operation: $z <br/>";
    $z=$x*$y;
    echo"result of multipilication operation: $z <br/>";
    $z=$x/$y;
    echo"result of division operation: $z <br/>";
    $z=$x%$y;
    echo"result of modulus operation: $z <br/>";
    $z=$x++;
    echo"result of increment operation: $z <br/>";
    $z=$x--;
    echo"result of decrement operation: $z <br/>";
    ?>
</body>
</html>