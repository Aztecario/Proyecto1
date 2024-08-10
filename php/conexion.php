<?php

#Sinatsis de PHP
#Tipos de variables

#Enteros
$entero = 10;


#Flotantes
$decimal = 10.5;

#Cadenas
$cadena ="Hola Mundo";

#Booleanos
$verdadero = true;
$falso = false;

#Ciclos
#ciclo for

for($i = 0; $i <10; i++){
    echo $i ."<br>";
}

#Cilo while
 $i = 0;
 while ($i < 10){
    echo $i . "<br>"
 }

 #Ciclo do while
    $i = 0;
    do{
        echo $i . "<br>";
        $i++;

    }while ($i <10);

#Estructuras de control

    if($verdadero){
        echo "Verdadero";

    }else{
        echo "false";
    }


#If anidado

if($Verdadero){
    if($falso){
        echo "verdadero";
    }else{
        echo "falso";
    }
}else{
    echo "falso"
}

?>