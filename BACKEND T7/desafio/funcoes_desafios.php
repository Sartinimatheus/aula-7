<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   //código aqui
   if ($sexo == 'feminino' && $idade < 25) {
      return "$nome ACEITA";
} else { 
   return "$nome NÂO ACEITA";
}
}
function ordenarNumeros($num1, $num2, $num3) {
   //código aqui
   $numeros = array ($num1, $num2, $num3);
   rsort ($numeros);
   return implode(",", $numeros);
}
// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   //código aqui
      $media = ($nota1 + $nota2 + $nota3) / 3;
      if ($media >=7) {
         return "média = $media está Aprovado"; 
      } else {
         return "média = $media está Reprovado";
      }
         
      }
?>