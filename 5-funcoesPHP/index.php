<?php

// Strlen()
$nome = "Lucas";
$letrasNome = strlen($nome); // A função strlen() tem como objetivo contar a quantidade de caracteres de uma string
echo "O nome $nome  tem $letrasNome caracteres ";


// Strpos
$frase = "Carro, moto, onibus";
$posicaoMoto = strpos($frase, "moto"); // Realizar a pesquisa dentro da string
$posicaoVirgula = strpos($frase, ","); // Retornando o primeiro resultado de forma padrao
echo "$posicaoMoto e $posicaoVirgula";

?>