<?php 

  // session = SGB(Super Global Variable) used to sotre information on a user
  //           to be used across multiple pages.
  //           A user is assigned a session-id
  //           ex. login credentials


  session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="index.php" method="post">

    username: <br>
    <input type="text" name="username"><br>
    password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">


  </form>

  This is the login page<br>
  <a href="home.php">This goes to the home page</a>

</body>

</html>

<?php 

if(isset($_POST["login"])){
  
  if(!empty($_POST["username"]) &&
  !empty($_POST["username"])){

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
  
    header("Location: home.php");
    

  }
  else{

    echo"Missing username/password <br>";

  }
  
}
  
?>