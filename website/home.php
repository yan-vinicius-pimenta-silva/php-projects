<?php 

  session_start();

?>


<?php 
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  This is the home page<br>
  <form action="home.php" method="post">

    <input type="submit" name="logout" value="logout">


  </form>

</body>

</html>

<?php 

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
  }

?>