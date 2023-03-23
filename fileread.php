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
    $file=fopen($filename, "r");
    if($file==false){
        echo "error in opening new file";
        exit ();
    }
    while(!feof($file)){
        echo fgets($file)."<br/>";
    }
    fclose($file);
    ?>
</body>
</html>