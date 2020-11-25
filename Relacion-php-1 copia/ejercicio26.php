<!--26. Usando la funcion usort, ordenar un array usando una funcion anonima.-->
<?php
$array = array(333,111,222);
$ordena;
$ordena = function() use ($array){
    sort($array);
    print_r($array);
};

echo "<br>Array original <br>";
print_r($array);

echo "<br>La funcion anonima<br>";
$ordena($array);

?>



