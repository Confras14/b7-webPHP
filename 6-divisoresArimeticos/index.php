<?php

$valor1 = 14;
$valor2 = 11;

# Arredondamento
## Concatenacao
echo $valor1.$valor2;
echo "<br/>";

## Adicao
echo $valor1+$valor2;
echo "<br/>";

## Subtracao
echo $valor1-$valor2;
echo "<br/>";

## Multiplicacao
echo $valor1*$valor2;
echo "<br/>";

## Divisao
echo $valor1/$valor2;
echo "<br/>";

## Exponenciacao
echo $valor1**$valor2;
echo "<br/>";

## Resto
echo $valor1%$valor2;
echo "<br/>";


# Arredondamento 
$valor3 = 1.5;
$valor4 = 2.1;

## round() - Arredonda um numero
echo round($valor3);
echo "<br/>";
echo round($valor4);
echo "<br/>";

## floor() - Arredonda pra baixo
echo floor($valor3);
echo "<br/>";
echo floor($valor4);
echo "<br/>";

## ceil() - Arredonda pra cima
echo ceil($valor3);
echo "<br/>";
echo ceil($valor4);
echo "<br/>";

?>