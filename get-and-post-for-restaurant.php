<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedido de Restaurante</title>
</head>

<body>
  <form action="" method="post">
    <label for="quantity"> Quantidade </label><br>
    <input type="number" name="quantity" id="quantity" min="1" required>
    <input type="submit" value="Calcular Total">
  </form>
</body>

</html>

<?php

// Verifica se o formuláro foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $item = "pizza";
  $price = 5.99;
}

// Sanitiza e valida a entrada do usuário
  $quantity = filter_input(INPUT_POST,"quantity", FILTER_VALIDATE_INT);

  if ($quantity && $quantity > 0) {
    $total = $quantity * $price;

    echo "<p>Você pediu {$quantity} x {$item}(s).</p>";
    echo "<p>O total é: R$ " . number_format($total,2,',',',') . "</p>";
  } else {
    echo "<p>Por favor, insira uma quantidade válida </p>";
  }


?>