<?php
  // Arithmetic operators
  // +- * / ** %

  // Increment/decrement operators
  // ++, --

  // Operator precedence
  // ()
  // **
  // * / %
  // + - 

  $x = 10;
  $y = 2;
  $z = null;

  // $z = $x + $y;
  // $z = $x - $y;
  // $z = $x * $y;
  // $z = $x / $y;
  // $z = $x ** $y;
  // $z = $x % $y;
  
  echo $z;

  

?>

<?php
  // Increment/Decrement operators
  
  $counter = 0;
  
  $counter = $counter + 1; // You can use $counter++ instead 
                           // $counter+=2 will increment the counter by 2 each time it is called
  echo "{$counter}<br>";
   


?>

<?php
  //Operator Precendence
  // ()
  // **
  // * / %
  // + -

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo $total;

?>