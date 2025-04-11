<?php

$name = "Conrado";
$idade = 120;
$trabalhando = true;

echo "Ola $name," . PHP_EOL;
echo "Voce possui $idade anos," . PHP_EOL;

if ($trabalhando) {
    echo "Atualmente esta trabalhando!";
} else {
    echo "Atualmente esta procurando emprego!";
}

?>