<?php

$valoresArray = [];

for($i = 0; $i < 20; $i++){
    $valoresArray[$i] = rand(0, 10);
}
print_r($valoresArray);
function naoRepetemNoArray(array $arr){
    $valores = array_unique(
        array_diff_assoc($arr, array_unique($arr))
    );
    
    $naoRepetem = array_diff($arr, $valores );
    print_r($naoRepetem);
}

naoRepetemNoArray($valoresArray);