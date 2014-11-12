<?php
$host = "127.0.0.1";
$user = "root";
$password = "mmili..29";
$database = "prueba";
$port = "3306";

//$conexion = mysqli_connect("localhost", "root", "mmili..29", "prueba");
$conexion = mysqli_connect("localhost", "root", "mmili..29", "prueba1");



if($conexion) {
    die("Error a conectar a la Base de Datos");
}

//$query = mysql_query($conexion, "SELECT * FROM agenda");
//$rows = mysql_num_rows($query);
//die(var_dump($query));

//echo "$conexion Estoy vivo";

?>