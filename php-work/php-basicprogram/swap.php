<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swap</title>

</head>
<body>
    <?php
        $x=10;
        $y=20;
        $temp;
        echo"Number to be swapped of x:" .$x ;
        echo"<br>Number to be swapped of y :" .$y;
        $temp=$x;
        $x=$y;
        $y=$temp;
        echo"<br>number after swapped of x:".$x;
        echo"<br>number after swapped of y:".$y;
    ?>
</body>
</html>