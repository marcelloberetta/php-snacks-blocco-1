<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random</title>
</head>
<body>
  <?php

    $arr = [];
    
    while (count($arr) < 15) {
      $num = rand(1, 100);
      if (!in_array($num, $arr)) {
        array_push($arr, $num);
      }
    }
  
    var_dump($arr);

  ?>
</body>
</html>