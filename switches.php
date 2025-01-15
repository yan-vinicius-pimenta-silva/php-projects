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
    echo"You did great";
  break;

  case "B":
    echo"You did good";
  break;

  case "C":
    echo"You did okay!";
  break;

  case "D":
    echo"You did poorly";
  break;

  case "F":
    echo"You failed";
  break;
  
}



?>