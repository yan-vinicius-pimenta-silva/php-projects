<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="restaurant-brocode.php" method="get"></form>
  <label>quantity: </label><br>
  <input type="text" name="quantity">
  <input type="submit" value="total">


  </form>

</body>

</html>

<?php
  $item = "pizza";
  $price = 5.99; // for some reason this code doesn't work
  $quantity= $_GET["quantity"];
  $total = null;

  $total = $quantity * $price; 

  echo"You have ordered {$quantity} x {$item}/s <br>";
  echo"Your total is: \${$total}";
?>