<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="isset-empty2.php" method="post">

    <label>username: </label>
    <input type="text" name="username"><br>
    <label>password: </label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log In"><br>



  </form>
</body>

</html>

<?php
/*

  // isset() = Returns TRUE if a variable is declared and not null
  // empty() = Returns TRUE if a variable is not declared,false,null,"" 

  // foreach($_POST as $key => $value){
  //   echo"{$key} = {$value} <br>";
  // }

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if(empty($username)){
      echo"Username is missing";  
    }
    else if(empty($password)){
      echo"Password is missing";
    }
    else{
      echo"Hello {$username}";
    }
  
    */
?>