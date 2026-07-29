<?php 
require_once 'rodape.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>calculo de gorjeta</title>
</head>
<body>
    <h2>calculo</h2>
    <form action="calculogorjeta.php" method="post">
        <label>gorjeta</label><br>
        <input type="number" name="quantia" required><br><br>
        <button type="submit">calcular</button>
</formm>
    <footer>
        <hr>
        <h6><?php rodape(); ?></h6>   
    </footer>

</body>
</html>