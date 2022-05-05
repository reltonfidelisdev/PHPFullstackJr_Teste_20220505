<?php
// Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  
// e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, 
// desprezando o número inicial e final recebidos como parâmetro. 

// Inicial
$inicial = 10;
// Final
$final = 29;
$controlador = false;


function primos(int $vInicial, int $vFinal){
  $primos = [];

  
  for ($i=$vInicial; $i < $vFinal ; $i++) {
    for ($j=2; $j < $i; $j++) {
      if($i % $j == 0){
        $controlador = false;
        break;
      }else{
        $controlador = true;
      }
    }
    if($controlador)
      array_push($primos, $i);
  }
      //Remove os números informados do array
      $arraySemNumerosInformados = array_diff($primos, array($vInicial,$vFinal));
  // mostrando os números
  
  print_r($arraySemNumerosInformados);
}

primos($inicial, $final);    