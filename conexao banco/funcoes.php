<?php
require_once 'conexao.php';
require_once 'UsuarioModel.php';

$usuarioModel = new UsuarioModel($pdo);
echo "<h1>Testes do Sistema</h1>";
$produto = buscarProduto($pdo, 1);
if ($produto) {
    echo "<p>Produto encontrado: " . $produto['nome'] . " - R$ " . $produto['preco'] . "</p>";
} else {
    echo "<p>Produto 1 não encontrado.</p>";
}
if ($usuarioModel->update(1, 'João da Silva Sauro', 'joao.novo@email.com')) {
    echo "<p>Usuário 1 atualizado com sucesso!</p>";
} else {
    echo "<p>Erro ao atualizar usuário 1.</p>";
}
if ($usuarioModel->delete(2)) {
    echo "<p>Usuário 2 excluído com sucesso!</p>";
} else {
    echo "<p>Erro ao excluir usuário 2.</p>";
}
if ($usuarioModel->insert('Carlos Andrade', 'carlos@email.com')) {
    echo "<p>Novo usuário cadastrado com sucesso!</p>";
} else {
    echo "<p>Erro ao cadastrar novo usuário.</p>";
}
