<?php
  // variable = a reusable container that holds data
  //            string, integer, float, boolean

?>

<?php

  $name = "Bro Code";
  $food = "pizza";
  $email = "fake123@gmail.com";

  $age = 21;
  $users = 2 ;
  $quantity = 3;

  $gpa = 2.5; //great point average
  $price = 4.99; 
  $tax_rate = 5.1;

  $employed = true;
  $online = true; // nothing is displayed for false in booleans
  $for_sale = true;

  echo "Hello {$name}<br>";
  echo "You like {$food}<br>";
  echo "Your email is {$email}<br>";

  echo"You are {$age} years old.<br>";
  echo"There are {$users} users online.<br>";
  echo"You would like to buy {$quantity} items.<br>";
  
  echo"Your gpa is: {$gpa}<br>";
  echo"You pizza is \${$price}<br>.";
  echo"The sales tax rate is: {$tax_rate}%<br>";

  echo"Online status: {$online}<br>";

?>