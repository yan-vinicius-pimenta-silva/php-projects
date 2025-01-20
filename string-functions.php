<!DOCTYPE html>
<html lang="en">

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


<?php

  // $username = "Bro The Code";

  $username = array("Bro","The","Code");
  $phone = "123-456-7890";

  // $username = strtolower($username);
  // $username = strtolower($username);
  // $username = str_pad($username,20,"/");
  // $phone = str_replace("-","",$phone);
  // $username = strrev($username);
  // $username = str_shuffle($username);
  // $equals = strcmp($username,"Bro Code");
  // $count = strlen($username);
  //  $phone = strlen($phone);
  // $index = strpos($phone,"-");  // tells the position of the specified character
  // $first = substr($username, 0, 3); //creates a new string from the original, but have to to specify the beginning and ending index 
  // $lastname = substr($username,3);
  // $fullname = explode(" ",$username);
  // echo $fullname;
  $username = implode("-",$username);

  echo $username; 
  
  // foreach($fullname as $name){
  //   echo $name . "<br>";

  // }
  

?>