<!--27. Crear un pagina web generada mediante las siguientes directrices:

1. La cabecera junto con menu, y el pie de pagina deben generarse desde
funciones almacenadas en un archivo biblioteca.
2. La funcion de cabecera y menu debe aceptar un parametro que indique el titulo
de la pagina, y si el menu a mostrar sea el primario o secundario.
3. El menu debera ir enlazado a 2 paginas mas.-->

<?php
//llamada a las funciones
include("funciones27.php");
$web = $_POST["nombre"];
$tipomenu = $_POST["menus"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $web;?></title>
    <style>body {
    color: black;
     } a{ text-decoration:none;} header{background-color:white; width:200px} </style>
</head>
<body>

<?php
crear_cabecera();
echo "<br><br><br><br><br><br><p>Contenido de la web</p><br>";
echo $contenido; //muestro un contenido de la web por variable
echo "<br><br><br><br><br><br>";
crear_pie();

?>

</body>
</html>