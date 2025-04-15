<?php

# Manipulando arrays

$frutas = ["uva", "pera"];

# array_push() - Adiciona um elemento ao array, sendo: primeiro parametro o array, e o segundo o dado que deseja inserir
array_push($frutas, "limao"); # Adicionaria limao ao final do array (indice 2)

# Tambem é possivel adicionar um elemento ao array apenas o declarando
$frutas[3] = "kiwi";

# Caso escolha um indice que ja possui valor, apenas ira atualiza-lo
$frutas[1] = "manga";

# array_pop() - Remove o ultimo elemento do array
array_pop($frutas); # Removeu o elemento "kiwi"

# array_shift() - Remove o primeiro elemento do array
array_shift($frutas); # Removeu o elemento "uva"

# count() - Conta a quantidade de elementos do array
count($frutas);

# in_array - Realiza uma pesquisa no array e retorna um valor boleano
in_array("manga", $frutas); # Retorna true
in_array("abacaxi", $frutas); # Retorna false
# O primeiro parametro é o item pesquisado e o segundo o array

# array_merge - Junta dois arrays
$frutas2 = ["laranja", "melancia"];

$todasFrutas = array_merge($frutas, $frutas2);
?>