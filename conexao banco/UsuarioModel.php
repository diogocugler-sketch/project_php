<?php
class UsuarioModel {
private $db;
public function __construct($conexao) {
$this->db = $conexao;
}
public function buscarPorId($id) {
// 1. PREPARE: O SQL vai com um '?' (o marcador de posição)
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $this->db->prepare($sql);
// 2. EXECUTE: O valor entra separado, impedindo que comandos maliciosos rodem
$stmt->execute([$id]);
return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
