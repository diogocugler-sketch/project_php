<?php
function calcularTotalDireto() {
        $gorjeta = $_POST['quantia'];
        echo "Resultado: " . ($gorjeta * 1.10);
}
calcularTotalDireto();
?>