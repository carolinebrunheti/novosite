<?php

$servidor="127.0.0.1";
$usuario="root";
$senha="example";
$bd="cadastro";

$mysqli= new mysqli($servidor,$usuario,$senha,$bd);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit;
}
?>