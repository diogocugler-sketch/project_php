<?php
require_once 'conexao.php';
require_once 'UsuarioModel.php';

if ($produto = buscarProduto(11)){
echo "Produto: " . $produto['nome'] . " - R$ " . $produto['preco'];
}
else {echo "deu errado mano";}