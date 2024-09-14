
<?php 
$nombre = "Aner"; 
$array = array(1, 2, 3, "casa", $nombre);
 
//saco el numero de elementos
$longitud = count($array);
 
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $array[$i];
	  echo "<br>";
      }

      $numbers = [1, 2, 3, 4, 5];
$numbers = array_filter($numbers, function($value) {
    return $value % 2 == 0;
});



$numbers = [1, 2, 3, 4, 5];
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $index => $number) {
    echo "El elemento " . $index . " tiene el valor " . $number . "<br>";
}