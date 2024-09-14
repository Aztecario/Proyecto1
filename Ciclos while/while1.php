<?php
  #El algoritmo debe solicitar las notas de N estudiantes y luego clasificarlas en tres categorias: "Excelente" para notas
  #iguales o superiores a 4.0, "Sobresaliente" para notas entre 3.0 y 3.9, y "Deficiente" para notas inferiores a 3.0 Ademas,
  #el algoritmo debe indicar si la nota es un numero par o impar.

    $n = readline("Ingrece numero de estudiantes: ");
    
    $nota =0;
    $excelente = 0;
    $sobresaliente = 0;
    $deficiente = 0;    
    $par = 0;
    $impar = 0;

    for($i=1; $i <= 1; $i++){

        #echo "son " . $n ." estudiantes \n";

        for($j = 1 ; $j <= $n ; $j++){
            $nota = readline("Ingrece nota $j: " );
            if($nota >= 4 && $nota <=5){

                $excelente = $nota;

            }else if($nota >= 3 && $nota < 4 ){

                $sobresaliente = $nota;

            }else if($nota < 3 ){

                $deficiente = $nota;
            }
            if($nota % 2 === 0){

                echo $nota . " es par" . "\n";
                echo "\n";
            }else{
                echo $nota . " es impar". "\n";
                echo "\n";
            }
        
        }
        echo "\n";
        echo "Nota Excelente $excelente". "\n";
        echo "Nota Sobresaliente $sobresaliente". "\n";
        echo "Nota Deficiente $deficiente". "\n";
    }