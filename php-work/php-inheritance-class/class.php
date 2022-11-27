<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is fun</h2>
    <?php
    class Car{
        public $speed=10;
        public $position=20;
        public $color;

        function __construct($color){
            $this->color=$color;
        }
        function move()
         {
        echo "<br>";
        echo"I am jumping , with current speed ". $this->speed;
         }
    }
    
    $car1=new Car('red');
    echo $car1->speed=200;
    echo $car1->color;
    echo "<br>";

    // $car=new Car;
    // echo $car->speed;
    // echo "<br>";

    // $badhar = new Car;
    // echo $badhar->color='gray';
    // echo "<br>";
    // echo $badhar->move();

    ?>
</body>
</html>