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
    $filename="newfile.txt";
    $file=fopen($filename, "w");
    if($file==false){
     echo"error in opening new file";
     exit;
    }
    $str=<<<STR
    This is first line\n
    this is the second line\n
    this is the third line
    STR;
    fwrite($file,$str);
    fclose($file);
    echo"created sucessfully "
    ?>
    
</body>
</html>