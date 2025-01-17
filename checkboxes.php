<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="checkboxes.php" method="post">
    <label><input type="checkbox" name="foods[]" value="pizza"> Pizza</label><br>
    <label><input type="checkbox" name="foods[]" value="hamburger"> Hamburguer</label><br>
    <label><input type="checkbox" name="foods[]" value="hotdog"> Hotdog</label><br>
    <label><input type="checkbox" name="foods[]" value="taco"> Taco</label><br>
    <input type="submit" name="submit" value="Submit">
  </form>


</body>

</html>

<?php 

  if(isset($_POST["submit"])) {
    if(isset($_POST["foods"])) { // Verifica se o array 'foods' existe
      foreach($_POST["foods"] as $food) { // Itera pelas opções selecionadas
        echo "Você gosta de $food!<br>";
      }
    } else {
      echo "Nenhuma comida foi selecionada!<br>"; // Caso nenhum checkbox tenha sido selecionado
    }
  }
?>