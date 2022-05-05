<?php
// Divida o ano por 100.
// Se a divisão der exata o resultado da divisão é o século procurado. 
// Exemplo: 1600 dividido por 100 resulta exatamente em 16, logo 1600 pertence ao século XVI.
// Se a divisão tiver resto considere apenas a parte inteira e adicione 1. 
// Exemplo: 1985 dividido por 100 resulta em 19 inteiros e 85 de resto. 
// Logo o século é 19 + 1 = 20. Século XX.

$ano = 1905;


function retornaSeculo(int $ano){
    $seculo = "Seculo: ";
    if($ano % 100 == 0){
        $seculo .= $ano/100;
    }else{
        $anoPorCem = round($ano/100);
        $seculo = (int) str_replace($seculo, ".",$anoPorCem+1);
        
    }
    echo $seculo;
}

retornaSeculo($ano);