<?php
# Desafio 
# Imprima uma frase e peça para o usuario escolher uma palavra, e retorne a proxima palavra
# Utilize somente as funcoes strlen(), strpos() e substr()

$frase = "O rato roeu a roupa do rei de roma.";
echo "$frase <br>";

$palavraEscolhida = "roeu";
echo "$palavraEscolhida <br>";

$tamanhoPalavraEscolhida = strlen($palavraEscolhida);
$indicePalavraEscolhida = strpos($frase, $palavraEscolhida);
$indiceProximaPalavra = $tamanhoPalavraEscolhida + $indicePalavraEscolhida + 1;

$indiceFimProximaPalavra = strpos($frase, " ", $indiceProximaPalavra);
$tamanhoProxPalavra = $indiceFimProximaPalavra - $indiceProximaPalavra + 1;
$proximaPalavra = substr($frase, $indiceProximaPalavra, $tamanhoProxPalavra);

echo "$proximaPalavra <br>";
?>