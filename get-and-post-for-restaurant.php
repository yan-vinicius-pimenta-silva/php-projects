<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="variables-and-data-types.php" method="post">
    <label>quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form>
</body>

</html>

<?php
  $item = "pizza";
  $price = 5.99;
  $quantity = $_POST["quantity"];
  $total = null;
  $total = $quantity * $price;



  echo"You have ordered {$quantity} x {$item}/s";
  echo"Your total is: \${$total}";



?>