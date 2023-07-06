<?php
$servername="25dejulho.info";
$username="u751082328_cesar";
$password="matiasgay";
$base="u751082328_cesar";

// criar a coneção
$conn = mysqli_connect($servername, $username, $password, $base);

// checar a conexão
if(!$conn) {
die("Falha na conexão: ".mysqli_connect_error());
}

?>