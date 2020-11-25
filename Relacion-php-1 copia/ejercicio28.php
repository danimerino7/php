<!--28. Vamos a guardar un archivo log de registro de acceso a nuestro script. Cada línea del
fichero será una entrada del registro, con estos datos:-->

<?php 
echo "Entrada de Ejemplo:<br> 2019-03-08 11:41|::1|Chrome|ca,es-ES,es--><br>";
setlocale(LC_TIME,"es_ES");
$fechayhora = date("Y-m-d ")." ".strftime(" %H:%M");
$ip =$_SERVER['REMOTE_ADDR'];
$idioma= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,8);
$caden = $_SERVER['HTTP_USER_AGENT'];
$nav= substr(stristr($caden, 'Chrome'),0,6);
echo "Entrada final :<br> " .$fechayhora . " | " . $ip .
 " | " . $nav." | ". $idioma;
?>