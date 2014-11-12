<?php
$color1="<body style='background-image:url(objetos/1.gif)'>";
$color2="<body style='background-image:url(objetos/2.gif)'>";
$color3="<body style='background-image:url(objetos/3.gif)'>";
$color4="<body style='background-image:url(objetos/4.gif)'>";
$color5="<body style='background-image:url(objetos/5.gif)'>";
$color6="<body style='background-image:url(objetos/6.gif)'>";
/*Sacamos el nº aleatorio.*/
$color=rand(1,6);
/*Y con el bucle marcamos el color del nº, que es una imagen guardada en nuestra carpeta de objetos.*/
switch ($color) {
case 1:
echo $color2;
break;
case 2:
echo $color3;
break;
case 3:
echo $color4;
break;
case 4:
echo $color5;
break;
case 5:
echo $color6;
break;
default:
echo $color1;
}
?>


