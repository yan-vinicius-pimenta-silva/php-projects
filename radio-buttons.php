<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="radio-buttons.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    <!-- If all inputs have the same name, only one can be selected-->
    Visa<br>
    <input type="radio" name="credit_card" value="Mastercard">
    Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">
    American Express<br>
    <input type="submit" name="confirm" value="confirm">

  </form>
</body>

</html>

<?php

  if(isset($_POST["confirm"])){
    $credit_card = null;
  
  if(Isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];
  
  }

  switch($credit_card){

    case"Visa":
      echo"You selected Visa";
    break;

    case"Mastercard":
      echo"You selected Mastercard";
    break;

    case"American Express":
      echo"You selected American Express";
    break;

    default:
      echo"Please select an option";
    break;
  }
  
  }

//   if(isset($_POST["credit_card"])) {
//     $credit_card = $_POST["credit_card"];
//   }

//   if($credit_card == "Visa") {
//     echo"You selected Visa";
//   }

//   else if($credit_card == "Mastercard"){
//     echo"You selected Mastercard";
//   }

//   else if($credit_card == "American Express"){
//     echo"You selected American Express";
//   }
  
//   else{
//     echo"Please make a selection";
//   }
  
// }

?>