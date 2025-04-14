<?php
// # Anotacoes!!
// Strlen()
// $nome = "Lucas";
// $letrasNome = strlen($nome); // A função strlen() tem como objetivo contar a quantidade de caracteres de uma string
// echo "O nome $nome  tem $letrasNome caracteres ";


// $frase = "Carro, moto, onibus";

// strpos()
// $posicaoMoto = strpos($frase, "moto"); // Realizar a pesquisa dentro da string, enviando o indice do primeiro caracter
// $posicaoVirgula = strpos($frase, ","); // Retornando o primeiro resultado de forma padrao
// echo "$posicaoMoto e $posicaoVirgula";

// substr()
// $moto = substr($frase, $posicaoMoto, 4); // Retorna uma strign a partir da posicao passada, caso tenha um teceiro parametro, ira contar aquele valor de caracteres para retoranr
// echo $moto;


// # Desafio 
// Imprima uma frase e peça para o usuario escolher uma palavra, e retorne a proxima palavra

$frase = "O rato roeu a roupa do rei de roma.";
echo "$frase <br/>";

$palavraEscolhida = "roeu";
echo "$palavraEscolhida <br/>";

$tamanhoPalavraEscolhida = strlen($palavraEscolhida);
$indicePalavraEscolhida = strpos($frase, $palavraEscolhida);
$indiceProximaPalavra = $tamanhoPalavraEscolhida + $indicePalavraEscolhida + 1;

$indiceFimProximaPalavra = strpos($frase, " ", $indiceProximaPalavra);
$tamanhoProxPalavra = $indiceFimProximaPalavra - $indiceProximaPalavra + 1;
$proximaPalavra = substr($frase, $indiceProximaPalavra, $tamanhoProxPalavra);

echo "$proximaPalavra <br/>";

?>