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
    $num=array(20,30,10,50,5);
    $n=count($num);
    $max=$num[0];
    for($i=0;$i<=$n-1;$i++)
    {
       if($max<$num[$i]){
        $max=$num[$i];
       }
    }
    echo"the greatest no is $max.";
    ?>
</body>
</html>