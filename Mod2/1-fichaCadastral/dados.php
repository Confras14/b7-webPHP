<?php
require 'constants.php'; // Usado para importar de outro arquivo .php, igual o include, usado quando o programa não pode funcionar se o arquivo não existir, pois da erro.

$nome = 'João Silva';

$idade = 25;

$sexo = 'M';

$salarioMensal = 2210.30;
$salarioMensalExibir = number_format($salarioMensal, 2, ",", "."); # Função usada para formatar numeros para exibição

$salarioAnual = 12 * $salarioMensal;
$salarioAnualExibir = number_format($salarioAnual, 2, ",", ".");

$statusEmprego = true;
$textoStatusEmprego = ($statusEmprego)? "Empregado" : "Desempregado";

$anosParaAposentadoria = ($sexo == 'M') ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
$anosParaAposentadoria -= $idade;

$habilidades = ['PHP', 'Javascript', 'HTML', 'CSS'];

?>