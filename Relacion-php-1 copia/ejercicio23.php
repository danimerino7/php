<?php

//23. Escribir una función recursiva para calcular el factorial de un numero, sabiendo que el
//factorial de 0 es 1, y que por ejemplo de 4! se calcula así: 4 * 3 * 2 * 1
   
    $n=4;
    $x = factorial($n);


    function factorial($numero)
    {
         $a=$numero;
        for ($i=1; $i <= $numero ; $i++ ) { 
            $a--;
           $acumulado = $numero*$a;
           $factorial += $acumulado;
        }
        echo "El factorial de $numero es $factorial\n";
        return $acumulado;
    }




    


?>