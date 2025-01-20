<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  html {
    background-color: brown;
  }
  </style>
</head>

<body>
  <form action="sanitize-validate-input.php" method="get">

    username:<br>
    <input type="text" name="username"><br>
    age:<br>
    <input type="text" name="age"><br>
    email:<br>
    <input type="text" name="email">
    <input type="submit" name="login" value="login"> <br>
  </form>
</body>

</html>


<?php 

  if(isset($_POST["login"])){
    
    $username = filter_input(INPUT_POST,"username",
                            FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age",
                        FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email",
                          FILTER_SANITIZE_EMAIL);
    echo "Your email is {$email}";
    echo "You are {$age} years old";
    
    
    $age = filter_input(INPUT_POST, "age",
                       FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email",
                          FILTER_VALIDATE_EMAIL);

    
    if(empty($email)) {
      echo"That email wasn't valid";
    }
    else{
      echo"Your email is: {$email}";
    }
  }
  
?>