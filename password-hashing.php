<?php 

  // hashing = transforming sensitive data (password)
  //           into letters, numbers, and/or symbols
  //           via a mathematical process. (similar to encryption)
  //           Hides the original data from 3rd parties

  $password = "pizza123";
  
  $hash = password_hash($password, PASSWORD_DEFAULT);

  if(password_verify("hotdog123", $hash)){

    echo"You are logged in!";
    
  }
  else{
    echo"Incorrect password";
  }

  

  

?>

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

</body>

</html>