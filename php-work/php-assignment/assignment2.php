<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment2</title>
</head>
<body>
  <?php
  function evaluate($name,$attendance,$hygiene,$rating)
  {
    if($attendance<80 ||$hygiene<50 || $rating<2)
    {
       echo $name ,", You are fired from the Rojan Krina Passal!";
    }
  
    else
    {
        echo "Not Fired for now";
    }
  }
  $Name="Kusal Karki";
  $Attendance=20;
  $Hygiene=70;
  $Rating=3;
  evaluate($Name,$Attendance,$Hygiene,$Rating)
  
  ?>
</body>
</html>