<?php

# Exercio 1
$cidades = ["São Paulo", "Londres", "Berlim", "Osaka", "Cusco"];
echo $cidades[2].'<br>';

# Exercio 2
$alunos = [
  "Pedro" => 13,
  "Julio" => 12,
  "Gustavo" => 11,
];

echo $alunos["Julio"].'<br>';

# Exercio 3
$cores = ["Preto", "Branco", "Cinza"];

array_push($cores, "Rosa");
# Ou a linha abaixo:
# $cores[] = "Rosa";

array_shift($cores);

print_r($cores);
echo'<br>';

# Exerciio 4
$produtos = [
  "Agua" => 3.5,
  "Salgadinho" => 13,
  "Bolacha" => 7,
];

$produtos["Bolacha"] += 10;
$produtos["Agua"] -= 1;

print_r($produtos);
?>