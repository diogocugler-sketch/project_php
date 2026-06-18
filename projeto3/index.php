<?php
$valor = "3000";
if ($valor < 200) {
    echo "nao há desconto o valor no final ficou $valor";
} elseif ($valor < 500) {
    $desconto1 = ($valor * 0.90);
    echo "o valor no fim com o desconto ficou: $desconto1";
} elseif ($valor >= 500) {
    $desconto2 = ($valor * 0.80);
    echo "o valor no fim com o desconto ficou: $desconto2";
}
?>