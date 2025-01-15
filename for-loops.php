<?php
  // for loop = repeat some code a certain # of times


  for($i = 1; $i < 10; $i++){
    echo $i . "<br>";
  }

  


  

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="for-loops.php" method="post">
    <label>Enter a number to count to: </label>
    <input type="text" name="counter">
    <input type="submit" value="start">
    <input type="text" name="">

  </form>

</body>

</html>

<?php
  // for loop = repeat some code a certain # of times

  $counter = $_POST["counter"];  

?>