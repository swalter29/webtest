<?php
session_status();
setcookie("WalterCOOKIE", "Hola", time() + 3600 );
$_SESSION["WalterSESSION"] = "Valor";

if(isset($_COOKIE["WalterCOOKIE"])){
    echo $_COOKIE["WalterCOOKIE"];
}


if(isset($_SESSION["WalterSESSION"])){
    echo $_SESSION["WalterSESSION"];
}


?>

