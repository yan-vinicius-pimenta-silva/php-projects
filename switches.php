<?php

  //switch = replacement to using many elseif statements
  //         more efficient, less code to write

  // $grade = "A";

  // if($grade == "A"){
  //   echo "You did great";
  // }
  // else if($grade == "B"){
  //   echo "You did good";
  // }
  // else if($grade == "C"){
  //   echo "You did okay";
  // }
  // else if($grade == "D"){
  //   echo "You did poorly";
  // }
  // else if($grade == "F"){
  //   echo "You failed";
  // }
  // else {
  //   echo"{$grade} is not a valid grade";
  // }
  
   
$grade = "A"; 

switch($grade){
  case "A":
    echo"You did great<br>";
  break;

  case "B":
    echo"You did good<br>";
  break;

  case "C":
    echo"You did okay!<br>";
  break;

  case "D":
    echo"You did poorly<br>";
  break;

  case "F":
    echo"You failed<br>";
  break;

  default:
    echo"{$grade} does not exist<br>";
  break;
}


?>

<?php
  //switch = replacement to using many elseif statements
  //         more efficient, less code to write

  
$date = date("l");

switch($date) {
  
  case "Monday":
    echo"I hate Mondays";
  break;

  case"Tuesday":
    echo"It is Taco Tuesday";
  break;

  case"Wednesday":
    echo"The work week is half over!";
  break;

  case"Thursday":
    echo"It's almost Friday";
  break;

  case"Friday":
    echo"It's friday!";
  break;

  case"Saturday":
    echo"Time to party";
  break;

  case"Sunday":
    echo"Time to relax";
  break;

}

?>