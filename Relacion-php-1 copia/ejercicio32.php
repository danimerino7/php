<!--32. Entrar en lipsum.com y generar un archivo txt con 5 parrafos. Usando la funcion yield,
abrir el archivo y mostrar las líneas hasta que se le indique que pare cuando ya se hayan
leido 3, usando para ello el método send.-->
<?php


//abrimos el archivo en lectura
$archivo = 'lorem.txt';
$fp = fopen($archivo,'r');
//leemos el archivo
$texto = fread($fp, filesize($archivo));
//transformamos los saltos de linea en etiquetas <br>
$texto = nl2br($texto);
//saco el texto entero espaciado bien
//echo $texto;

echo "<br><br><br>Lo divido en una array y saco los que yo desee<br><br>";

$textodividido = explode("\n",$texto);

for ($i=0; $i < 6; $i++) { 
   echo $textodividido[$i];
   $i+2;
}


//print_r($textodividido);
?>