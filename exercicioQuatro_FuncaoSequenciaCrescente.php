<?php

// Receba como parametro um array de números inteiros e responda; TRUE or FALSE; 
// se é possível obter uma sequencia crescente removendo apenas um elemento do array.
// Exemplos para teste 

// Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
// -  Sequencias com apenas um elemento são consideradas como;
$arrayMatriz = [
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3],
];

// Esse eu realmente não entendi
// Não conseui entender a lógica 
// Exemplo: Onde [1, 2, 3, 4, 99, 5, 6] pode ser true
// Se no enunciado não fala nada sobre ordenação nem qual posição será removida
// Dessa forma, se eu removesse a posição 4 do array acima continuaria como true?
// Talvez um enunciado com uma descrição mais elaborada ajudaria os candidatos a entender melhor
//
// Essa eu vou ficar devendo
// Passei quase de duas horas pra entender e ainda não consegui :(
//
// [1, 3, 2, 1]  false
// [1, 3, 2]  true
// [1, 2, 1, 2]  false
// [3, 6, 5, 8, 10, 20, 15] false
// [1, 1, 2, 3, 4, 4] false
// [1, 4, 10, 4, 2] false
// [10, 1, 2, 3, 4, 5] true
// [1, 1, 1, 2, 3] false
// [0, -2, 5, 6] true
// [1, 2, 3, 4, 5, 3, 5, 6] false
// [40, 50, 60, 10, 20, 30] false
// [1, 1] true
// [1, 2, 5, 3, 5] true
// [1, 2, 5, 5, 5] false
// [10, 1, 2, 3, 4, 5, 6, 1] false
// [1, 2, 3, 4, 3, 6] true
// [1, 2, 3, 4, 99, 5, 6] true
// [123, -17, -5, 1, 2, 3, 12, 43, 45] true
// [3, 5, 67, 98, 3] true