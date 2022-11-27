<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    <?php
        $num=20;
        $count=0;
        for($i=1;$i<$num;$i++)
        {
            if($num % $i ==0)
            {
                $count++;
            }
        }
        if($count==2)
        {
            echo $num . "Is Prime";
        }
        else{
            echo $num . "Is Not Prime";
        }
    ?>
</body>
</html>