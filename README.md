# Caderno PHP 🐘

Ola, me chamo Conrado e esse portifólio foi feito com o intuito de armazenar na nuvem minhas anotações com PHP, linguagem qual estou me aventurando pela primeira vez! Fazendo uso via Xampp em uma maquina Linux 🐧.

## Módulo I - Introdução ao PHP (10/24 - 42%)

### Declaração de Variáveis

No PHP para declarar variáveis é relativamente simples, sendo de tipagem fraca e dinamica, não precisando declarar o tipo, a linguagem reconhece autamaticamente pela seu próprio valor.

    #numero = 10;       // Int
    #nome = "Conrado"   // String
    #valor = 3.1415;    // Float
    #estuando = true    // Booleano

### Echo e aspas simples/duplas

O 'echo' é nada mais que a forma de saida de um dado de forma visual, indo diretamente para o site como HTML, dentro de sua saido podendo por código HTML, algo como

    echo "<h1>Bye World!<h1 />"

No php, temos diferenças de "" para '', quando se usa as duplas dentro de um echo é possivel chamar uma variável,

    $nome = "Carlos"
    echo "$nome" // Saida -> Carlos

Ja nas aspas simples a saida ja seria um pouco diferente

    $nome = "Carlos"
    echo '$nome' // Saida -> $nome


### Concatenação de Strings

Para concatenar no php fazendo o uso de "." ou jogamos dentro de aspas duplas, segue abaixo exemplo

    $nome1 = "Lucas"
    $nome2 = "Henrique"

    echo = $nome1.' '.$nome2 // Saida -> Lucas Henrique
    echo = "$nome1 $nome2" // Saida -> Lucas Henrique