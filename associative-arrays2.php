<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="associative-arrays2.php" method="post">
    <label>Enter a country</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>

</html>


<?php

  // associative array = An array made of key=>value pairs

  $capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                     "India"=>"New Delhi");
  $capital = $capitals[$_POST["country"]];

  echo"The capital is {$capital }";
         
?>