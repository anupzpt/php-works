<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pattern</title>
</head>
<body>
    <?php
    for($i=1;$i<=8;$i++){
        for($j=8;$j>=$i;$j--){
            echo $i;
        }
        echo"<br>";
    }
    echo"<br>";
    for($i=8;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo $j;
        }
        echo"<br>";
    }
    ?>
</body>
</html>