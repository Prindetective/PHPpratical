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
     $z=$x+$y;// assigment operator
     echo"result of addiction operation: $z <br/>";
     $z += $y;//z value of was 42+20=62
     echo"ADD AND ASSIGMENT OPERATION: $z <br/>";
     $z -= $y;// z value of 42+20+20=82
     echo"MINUS AND ASSIGMENT OPERATION: $z <br/>";
     $z*= $y; // z value of 42+20+20-20=62
     echo"MULTIPLICATON AND ASSIGMENT OPERATION:$z <br/>";
     $z/= $y;// z values of 62*20
     echo"DIVISON AND ASSIGMENT OPERATION: $z <br/>";
     $z %= $y;// z values of   1240/20
     echo"MODULUS AND ASSIGMENT OPERATION: $z <br/>";
     
    ?>
</body>
</html>