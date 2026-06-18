<!DOCTYPE html>
<html>

<head>
    <title>loja</title>
</head>

<body>
    <?php define("NOME_LOJA", "lojinha fodinha");
    $nome = "cocacola";
    $preco = "20";
    $compra = "2";
    $total = $preco * $compra;
    echo "compra na " . NOME_LOJA . " onde comprei apenas $compra de $nome a cada uma saindo $preco ficando ao todo $total"
    ?>
</body>