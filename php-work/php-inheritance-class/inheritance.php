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
    class Animal
    {
        public $weight=70;
        public $height=40;
        private $color='brown';

        public function getcolor(){
            return $this->color;
        }
        public function move(){
            echo "I am jumping. <br>";
        }
        
        public function eat(){
            echo "Badhar ko haat mah nariwal <br>";
            echo "color :". $this->color;
        }
    }

    class Monkey extends Animal
    {

    }

    $monkey=new Monkey();
    $monkey->eat();
    // echo $monkey->getcolor();
    // $animal=new Animal();
    // $animal->move();
    ?>
</body>
</html>
