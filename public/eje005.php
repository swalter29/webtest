<?php
define("PI", 3.144444 / 15 +150 +333, true);

$a = PI ;
if(isset($a)) {
    echo "Si esta presente";
} else {
    echo "no esta presente";
}


/*
if(defined("PI")) {
    echo "La constante PI: ". PI ." esta definida";
}
    else {
    echo "La constante PI no esta definida";
     
    }
 */   

?>
