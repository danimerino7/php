<?php 

//abrimos el archivo en lectura
$archivo = 'ejercicio30.php';
$fp = fopen($archivo,'r');
//leemos el archivo
$texto = fread($fp, filesize($archivo));

//transformamos los saltos de linea en etiquetas <br>
$texto = nl2br($texto);

if (strstr($texto,'~')){
    echo $texto;
}else{
    echo "no se ha encontrado el caracter ~~";
}

?>