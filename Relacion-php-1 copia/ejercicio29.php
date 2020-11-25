<!--29. Dado el siguiente array de alumnos, recorrerlo para comprobar que los correos
electronicos y DNI’s tienen el formato correcto.-->
<?php 
$usuarios=
array('IN2AR3_01' => array ('nombre' => "Alori, Kepa", 'email' =>"kepa- -alor@gmail.com", 'dni' => "74512211A"),
      'IN2AR3_02' => array('nombre' => "Sanchez, Pepe", 'email' => "pepe.san@gmail.com", 'dni' =>"7458558"),
      'IN2AR3_03' => array ('nombre' => "Soler, Alfredo", 'email' =>"alfredo13@hotmail.com", 'dni' => "A-1223344-A")
    );
$valores = array_values($usuarios);
foreach($valores as $valor => $value){
    $test = array_values($value);
    $mail = $test[1];
    $dni  = $test[2];

$valido=filter_var($mail,FILTER_VALIDATE_EMAIL);
            if ($valido) {
                echo($mail." es un  email valido<br>");
            } else {
                echo($mail." no es un email valido<br>");
            }
        $formato=preg_match('/[1-9]{8}[A-Z]/', $dni);
            if ($formato==1)
            {
                echo $test[2].' DNI Válido<br>';
            }
            else
            {
                echo $test[2].' Error, mal dni <br>';
            }
        }
?>