<?php

$ruta=".";
recorre($ruta);

function recorre($path)
{
  $archivos= scandir($path);
  var_dump($archivos);
for ($i=0; $i< count($archivos) ;$i++) { 
    if( $archivos[$i] != "." && $archivos[$i] != ".."){
        echo $archivos[$i]."<br>";
        }
}

}

//~~

?>