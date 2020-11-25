<?php


//formulario inicial
echo '<form action="ejercicio27.php"  method="post" >
Personalice tipo de menu<br>
Nombre del sitio web 
<input type="text" name=nombre><br>
  <label for="menus">Tipo de menu</label>
  <select name="menus" id="menus">
    <option >Menu 1</option>
    <option >Menu 2</option>
  </select>
<br><input type="submit" name =\'ok\' value=Acceder></form> ';

$nombre = $_POST["nombre"]; //atrapo el campo nombre
$ok = $_POST["ok"]; //atrapo envio el formulario




?>


