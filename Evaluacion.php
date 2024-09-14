<?php
## Hacer un algoritmo que digitados N cantidad de numeros los guarde en un array y me halle lo siguiente
## 1 numeros pares, suma de todos los numeros pares
## 2 numeros inpares resta de numeros impares
## 3 numeros negativos si hay, si no hay 0
## 4 si hay ceros y en que posicion se encuentra

    $numero = readline("Digite cantidad de numeros: ");
    $array = array();
    $n =0;
    $pares = 0;

    for($i=0; $i < $numero;$i++){
        $n = readline("Digite un numero $i: " );
        $array[$i] = $n;
        array_push($array);

        if(count($array) % 2 == 0){
            $pares= $array[$i] + $pares;
            
        }
        print_r($array);
        echo "Numeros pares: " . $pares;
        
    }

       



?>