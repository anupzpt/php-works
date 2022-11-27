<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    $num=5;
    echo factorial($num);
    function factorial($num)
    {
        if($num==0)
        {
            return 1;
        }
        if($num>0)
        {
            return($num*factorial($num-1));
        }

    }
    ?>
</body>
</html>