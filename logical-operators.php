<?php
  // Logical operators = combine conditional statements
  // if(condition1 && condition2)


  // && = True if both conditions are true
  // || = True if at least one condition is true
  //  ! = True if false. False if true.


  $temp = 1;

  if ($temp >= 0 && $temp <= 10) {
    echo "It's a little cold outside.<br>";
  }

  else if($temp >= 0 && $temp <= 30) {
    echo"The weather is good.";
  }
  
  else{
    echo"The weather is bad";
  }

?>

<?php
  $temp = 15;
  $cloudy = false;

  if($temp < 0 || $temp > 30) {
    echo"The weather is bad.<br>";
  }
  else {
    echo"The weather is good.<br>";
  }

  if(!$cloudy){
    echo"It's sunny.<br>";
  }
  else {
    echo "It's cloudy.<br>";
  }
 
?>

<?php
  $age = 25;
  $citizen = true;

  if($age >= 18 && $citizen){
    echo "You can vote.<br>"; 
  }
  else {
    echo"You cannot vote.<br<";
  }
  
?>

<?php

$balrog = true;

if($balrog) {
  echo"You shall not pass!<br>";
}
else{
  echo "You shall pass!.<br>";
}

?>

<?php

$child = false;
$senior = true;
$ticket = null;

if($child || $senior){
  $ticket = 10;

}

else {
  $ticket = 15;
}

echo"The ticket price is \${$ticket}";





?>