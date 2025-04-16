<?php

# Array normal
$nomes = ["Lucas", "Pedro", "Julio"];

for($i = 0; $i < 3; $i+=1) {
  echo $nomes[$i].PHP_EOL;
}

echo '<br />';

# Array Associativo

$numeros = [
  "um" => 1,
  "dois" => 2,
  "tres" => 3,
  "quatro" => 4
];

echo $numeros["dois"] . '<br />';

# Arrays multidimencionais 

$pessoas = [
  "Lucas" => [
    "idade" => 19,
    "carros" => 2,
    "vivo" => true,
    "nomeMae" => "Andreia"
  ],

  "Pedro" => [
    "idade" => 20,
    "carros" => 3,
    "vivo" => true,
    "nomeMae" => "Maria"
  ],

  "Carlos" => [
    "idade" => 12,
    "carros" => 0,
    "vivo" => true,
    "nomeMae" => "Julia"
  ],
];

echo '<pre>'; // Tag HTML para deixar o texto preformatado
  var_dump($pessoas); // Exibe a array (ja que o echo nao funciona)
  echo "<br>";
  var_dump($pessoas["Lucas"]);
  echo "<br>";
  var_dump($pessoas["Pedro"]["idade"]);
echo '<pre/>';

?>