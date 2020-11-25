<?php 
//biblioteca de funciones
$contenido= "<table style='width:10%'>
<tr>
  <th>Contenido</th>
  <th>Por</th>
  <th>Variable</th>
</tr>
<tr>
  <td>Es</td>
  <td>para</td>
  <td>rellenar</td>
</tr>
</table>";

function crear_cabecera()
{ 
  //impido q introduzcan codigo html por el campo nombre
  $name = strip_tags($_POST["nombre"]);
    echo '<h2>'.$name.'</h2>';
//si en el select elijo menu 1 se muestra menu 1 y sino pues menu 2
if ($_POST["menus"] == "Menu 1") {
    //menu rojo
    echo '<header ><div class="topnav">
    <a style="color:#FF0000;" href="#inicio">Menu 1</a>
    <a  style="color:#FF0000;" href="https://www.php.net/manual/es/index.php">Pagina 1</a>
    <a style="color:#FF0000;" href="https://www.w3schools.com/default.asp">Pagina 2</a>
  </div></header>';
}else{//menu verde
    echo '<header><div class="topnav">
    <a style="color:#d8da3d;" href="#inicio">Menu 2</a>
    <a style="color:#d8da3d;" href="https://www.php.net/manual/es/index.php">Pagina 1</a>
    <a  style="color:#d8da3d;"href="https://www.w3schools.com/default.asp">Pagina 2</a>
   </div></header>';
}
}


function crear_pie()
{
   echo '<footer>
   <p>Pie de pagina</p>
   <p><a href="mailto:daniel.merino@escuelaestech.es">daniel.merino@escuelaestech.es</a></p>
 </footer>';
}


?>