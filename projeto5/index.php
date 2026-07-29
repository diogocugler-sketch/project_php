 <?php 
require_once 'rodape.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>site que so da erro nao importa como</title>
</head>
<body>

    <h2>vai dar erro amigao</h2>
        <label>tente a sorte de nao dar erro</label><br>
        <input type="text" name="nome_do_erro" required><br><br>
        <button type="submit" onclick="erro">tenta</button>
<?php 

function erro(){
    echo "erro eminente de explosao de unidade";
}
?>
    <footer>
        <hr>
        <h6><?php rodape(); ?></h6>   
    </footer>

</body>
</html>