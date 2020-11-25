<!--24. Escribir una función recursiva que busque una clave en un array asociativo como el que se
indica:
Ejemplo de busqueda: buscar("pescado",$alimentos);-->  


<?php

$alimentos =  [
    'carne' => [],
    'pescado' => [
        'azul' => ['atun','sardinas'],
        'blanco' => ['rosada','merluza']
    ],
    'vegetales' => [
        'hojas' => ['col', 'acelga', 'chard', 'espinaca', 'lechuga'],
        'raices' => ['rabano', 'berzas', 'patata', 'remolacha'],
        'otras' => ['brocoli', 'habichuelas verdes', 'maiz', 'tomates']
    ],
    'granos' => ['pan', 'arroz', 'avena'],
    'legumbres' => ['habas', 'lentejas', 'guisantes'],
    'frutas' => ['manzana', 'frambuesa', 'pera', 'platano'],
    'dulces' => ['galletas', 'brownie', 'tarta', 'pastel'],
    ];

    $key ='pescado'; //introduciriamos la clave a buscar
    busca2($key,$alimentos); //llamamos a la funcion

    //funcion
            function busca2($key,$array)
            { 
                    if (key_exists($key,$array)) {
                        var_dump($array[$key]);
                    }
            }

?>