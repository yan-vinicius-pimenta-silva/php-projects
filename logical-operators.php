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
  $cloudy = true;

  if($temp < 0 || $temp > 30) {
    echo"The weather is bad.";
  }
  else {
    echo"The weather is good";
  }

  if($cloudy){
    echo"It's cloudy";
  }
  else {
    echo "It's sunny";
  }
 
?>