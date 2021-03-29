<?php


include "conexao.php";


if(isset($_GET["id"])){

$id=(int)$_GET["id"];
$sql="DELETE from novo WHERE idcodigo=$id";
if (!$res = $mysqli->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
    
}else{
    echo"Cadastro deletado com sucesso";
}
}
$mysqli->close();

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Deletar cadastro</title>
  </head>
  <body>
  <br>
  <a href='index.php'>INICIO</a>
  </body>
  </html>