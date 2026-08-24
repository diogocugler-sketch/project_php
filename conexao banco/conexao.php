<?php
$host = "localhost";
$db   = "db_restaurante";
$user = "root";
$pass = ""; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h1>deu certo a conexao</h1>";

} catch (PDOException $e) {
    echo "<h1>Erro de Conexão:</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
    exit;
}
function buscarProduto($id) {
    global $pdo;
    return $pdo->query("SELECT * FROM produtos WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
}
