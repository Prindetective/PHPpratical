<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical</title>
</head>
<body>
    <?php
   /* $x=3562;
    var_dump($x);
    $y=102.34;
    var_dump($y);
    $cars= array("volvo","who","lambo");
    var_dump($cars);*/
    class car{
        public $color;
        public $model;
        public function __construct($color,$model){
           $this->color=$color;
           $this->model=$model;     
        }
        public function message(){
            return "my car is a".$this->color. "" .$this->model. "i";
        }
    }
    $mycar=new car("black","volvo");
    echo $mycar->message();
    echo"<br/>";
    $mycar=new car("whit","Gwagoni");
    echo $mycar->message();
    echo"<br>";
    echo strlen("hello word");
    echo"<br>";
    echo str_word_count("hello word!");
    ?>
    
</body>
</html>