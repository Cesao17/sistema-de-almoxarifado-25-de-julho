<?php
$servername="25dejulho.info";
$username="u751082328_cesar";
$password="matiasgay";
$base="u751082328_cesar";

// criar a cone��o
$conn = mysqli_connect($servername, $username, $password, $base);

// checar a conex�o
if(!$conn) {
die("Falha na conex�o: ".mysqli_connect_error());
}

?>