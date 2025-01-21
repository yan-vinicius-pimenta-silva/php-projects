<?php 

  // cookie = Information about a user stored in a user's web-browser
  //          targeted advertisements, browsing preferences, and
  //          other non-sensitive data



  setcookie("fav_food", "pizza", time() - (86400 * 2), "/");  //setcookie() is an associative array
  setcookie("fav_drink", "coffee", time() + (86400 * 3),"/"); 
  setcookie("fav_dessert", "ice cream", time() + (86400 * 4),"/");
  
  foreach($_COOKIE as $key  => $value ) {
    echo"{$key} = {$value} <br>";
    


  }
  
  if(isset($_COOKIE[""])) {
    echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
  }
  else{
    echo"I don't know your favorite food";
  }

?>