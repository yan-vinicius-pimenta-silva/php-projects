<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="math-functions.php" method="post">

    <label>x</label>
    <input type="text" name="x"><br>
    <label>y: </label>
    <input type="text" name="y"><br>
    <label>z:</label>
    <input type="text" name="z"><br>
    <input type="submit" value="total">

  </form>
</body>

</html>

<?php


  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];
  $total = null;

  // $total = abs($x);
  // $total = round($x);
  // $total = floor($x);
  // $total = ceil($x);
  // $total = sqrt($x);
  // $total = pow($x,$y);
  // $total = max();
  // $total = max($x,$y,$z);
  // $total = min($x,$y,$z);
  // $total = pi();
  // $total = rand(1,6);
  

  echo $total;
  

?>