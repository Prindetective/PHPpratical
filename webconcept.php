<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" >
        document.write("client 's date:"+ Date()+"<br/>");
    </script>
</head>
<body>
    <?php
   function mytest(){
    Static $x=0;
    echo $x."<br>";
    $x++;

   }
   mytest();
   mytest(); 
   mytest();

    ?>
    
</body>
</html>