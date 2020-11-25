<!--25. Generar un array con 10 numeros entre 0 y 100, y poner en el ultimo puesto el mayor,
hacerlo llamando a una funcion que haga el intercambio. Para resolverlo no usar funciones
de arrays, programar la funcion que hace el intercambio del ultimo elemento por el mayor
de todos.-->
<?php
$array = array();
for ($i=0; $i < 10; $i++) { 
    $array[$i] = rand(0,100); 
}
//compruebo los valores iniciales del array 
var_dump($array);
//llamo a la funcion para poner al final del array el valor mayor
mayor_al_final($array);
function mayor_al_final($array)
{
    //pongo el valor maximo al final del array
    $mayor = max($array);
    array_push($array,max($array));
    unset($array[0]);
    //recompruebo que ahora está al final del array

    var_dump($array);
}

?>


