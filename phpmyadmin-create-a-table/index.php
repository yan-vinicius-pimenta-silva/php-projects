<?php 

  include("database.php")

  $sql = "SELECT * FROM users WHERE user = 'Sandy'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result));
    echo $row["id"] . "<br>"; 
    echo $row["user"] . "<br>";
    echo $row ["reg_date"] . "<br>";
    
    
  }
  else{
    echo"No user found";
    

  }
  
  mysqli_close($conn);

?>