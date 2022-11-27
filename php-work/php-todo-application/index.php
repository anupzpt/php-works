<?php
  include('./db_config.php');
  $sql = "select * from todo_list";
  $result = $conn -> query($sql);
  // echo "<pre>";
  // print_r($result);
  // echo "</pre>";

//   $row=$result->fetch_assoc();
//   print_r($row);

//  while($row= $result->fetch_assoc()){
//   print_r($row);
  
//  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
  <h1 class="text-center">Todo Application</h1>
    <div class="container p-3">
    <form action="save-todo.php" method="post">
        <input type="text" class="form-control" name="todo" id=""  placeholder="Enter TODO">
        <div class="d-grid gap-2 col-2 mx-auto">
          <button type="submit" class="btn btn-primary mt-3 ">Add toto</button>
        </div>
    </form>  
    <table class="table table-bordered mt-3 text-center">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Todo Item</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($row= $result->fetch_assoc()){ ?>
      <tr>
      <!-- <td>php echo $row['ID']</td> -->
      <td><?php echo $row['Title'] ?></td>
      <td><button class="btn btn-primary"><a href="update.php?id= <?php echo $row['ID'];?>" class="text-white"><span class="fas fa-pencil ml-3"></a></button>  
      <button class="btn btn-danger"><a href="delete.php?id= <?php echo $row['ID'];?>" class="text-white"><span class="fas fa-trash ml-3"></a></button> </td> 
    </tr>
        <?php
      }
    ?>
    <?php 
    // echo "<h1>test</h1>" 
    ?> 

    <?php
    // $testArray = array('1','2','3');
    // print_r ($testArray);
    // $i=0;
    // while($i<3)
    //   echo $testArray[$i];
    //   $i++;
    // foreach($testArray as $value)
    {?>
       <!-- <li>test</li> -->
       <!-- echo"<li>". $value . "</li>"; -->
    <?php  }
    ?>
  
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html