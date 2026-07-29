
<?php 
require_once 'rodape.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de busca da loja</title>
</head>
<body>

    <h2>busca</h2>
    <form action="busca.php" method="post">
        <label>nome do produto</label><br>
        <input type="text" name="nome_do_prod" required><br><br>
        <button type="submit">buscar</button>
    </form>

    <footer>
        <hr>
        <h6><?php rodape(); ?></h6>   
    </footer>

</body>
</html>
