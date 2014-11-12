<?php
echo "Hoy es: ";
$dia = date ("D");

if ($dia == "mon") echo "Lunes";
    elseif ($dia == "Tue") echo "Martes"; 
    elseif ($dia == "Wed") echo "Miercoles"; 
    elseif ($dia == "Thu") echo "Jueves"; 
    elseif ($dia == "Fri") echo "Viernes";
    elseif ($dia == "Sat") echo "Sabado";
    else echo "Domingo";


?>

