<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="while-loops.php" method="post">
    <input type="submit" name="stop" value="stop">


  </form>

</body>

</html>









<?php

  // while loop = do some code infinitely while some
  //              condition remains true
  $seconds = 0;
  $running = true;

  while($running){

    if(isset($_POST["stop"])){
      $running = false;
      
    }
    else{
      //wait 1 second
      $seconds++;
      echo $seconds . "<br>";
        
    }
    
  }
  ?>