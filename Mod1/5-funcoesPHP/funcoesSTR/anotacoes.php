<?php
# Anotacoes!!
// Strlen()
$nome = "Lucas";
$letrasNome = strlen($nome); // A função strlen() tem como objetivo contar a quantidade de caracteres de uma string
echo "O nome $nome  tem $letrasNome caracteres <br>";
$frase = "Carro, moto, onibus";

// strpos()
$posicaoMoto = strpos($frase, "moto"); // Realizar a pesquisa dentro da string, enviando o indice do primeiro caracter
$posicaoVirgula = strpos($frase, ","); // Retornando o primeiro resultado de forma padrao
echo "$posicaoMoto e $posicaoVirgula <br>";

// substr()
$moto = substr($frase, $posicaoMoto, 4); // Retorna uma strign a partir da posicao passada, caso tenha um teceiro parametro, ira contar aquele valor de caracteres para retoranr
echo "$moto <br>";
?>