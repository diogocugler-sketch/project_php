<?php 
require_once 'rodape.php'; 
?>  
<!doctype html>
<html lang="pt-br">
  <head>
    <title>lista de compra</title>
  </head>
  <body>

    <h1>Minha Lista de Compras</h1>

    <ul>
    <?php
    $produtos = ["Arroz", "Feijão", "Macarrão"];

    foreach ($produtos as $itens) {
        echo "<li>produto: $itens</li>";
    }
    ?>
    </ul>
      <footer>
        <hr>
        <h6><?php rodape(); ?></h6>   
    </footer>
  </body>
</html>
