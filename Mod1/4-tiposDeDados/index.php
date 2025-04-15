<?php

  // No PHP existem 4 tipos de dados, sendo eles:

  $tipo1 = 10; // Integer - Número inteiros
  $tipo2 = 12.5; // Float/Double - Números decimais
  $tipo3 = true; // Boolean - Verdadeiro ou falso
  $tipo4 = "Conrado"; // Strings - Conjunto de caracteres


  // Estrutura de dados (Lembrando que em todas essas estruturas é possivel alocar diferentes tipos de dados no mesma estrutura)

  $tipo5 = [ 1, 2, 3]; // Arrays - armazenam mais de um valor de determinado tipo
  $tipo5_1 = [1, "a", true]; // No PHP é possivel armazenar valores de tipos diferentes em arrays
  $tipo5_2 = [[1, 2, 3],[4, 5, 6], [7, 8, 9]]; // Tambem é possivel fazer arrays dentro de arrays, sendo assim uma matriz
  $tipo6_1 = ["valor1" => 1, "valor2" => 2]; //Arrays Associativos


  $tipo6_2 = new stdClass(); //
  $tipo6_2 -> valor1 = 4;    // Objetos (stdClass)
  $tipo6_2 -> valor2 = 3;    //


  class tipo6_3 {            //
    public $valor1;          //
    public $valor2;          // 
  }                          // Classes
                             // Uma forma mais robusta de trabalhar
  $tipo6_3 = new tipo6_3();  //
  $tipo6_3 -> valor1 = 19;   //
  $tipo6_3 -> valor2 = 11;   //
?>