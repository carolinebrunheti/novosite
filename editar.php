<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<h1>Atualização de usuários</h1>
<body>

<?php

include "conexao.php";

if(isset($_GET["id"])){
    $id=intval($_GET["id"]);


$sql="SELECT * FROM novo WHERE idcodigo=$id";
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

}

$usuario = $res->fetch_object();
}
?>
<form action="editar.php" method="post">
<input type="hidden" name="id" value="<?php echo "$usuario->idcodigo"; ?>" >
<label for="nome">Nome</label>
<input type="text" name="nome" value="<?php echo "$usuario->nome"; ?>" placeholder="Digite seu nome">
<br>
<label for="sobrenome ">Sobrenome</label>
<input type="text" name="sobrenome" value="<?php echo "$usuario->sobrenome"; ?>" placeholder="digite seu sobrenome">
<br>
<label for="telefone">Telefone</label>
<input type="text" name="telefone" value="<?php echo "$usuario->telefone"; ?>" placeholder="Seu telefone">
<br>
<label for="email">Email</label>
<input type="text" name="email" value="<?php echo "$usuario->email"; ?>" placeholder="Digite seu email">
<br>
<label for="senha">Senha</label>
<input type="text" name="senha" value="<?php echo "$usuario->senha"; ?>" placeholder="sua senha">
<br>
<input type="submit" name="Confirmar">
<br>


<?php


if(isset($_POST["id"])){
$id=$_POST['id'];
$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$telefone=$_POST["telefone"];
$email=$_POST["telefone"];
$senha=$_POST["senha"];


$sql="UPDATE novo SET nome='$nome', sobrenome='$sobrenome', telefone=$telefone, email= '$email', senha=$senha WHERE idcodigo=$id";
if (!$res = $mysqli->query($sql)) {
    // Oh no! The query failed. 
   echo "Sorry, the website is experiencing problems.";
var_dump($sql);
    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
   echo "Error: " . $mysqli->error . "\n";
   exit;
}
}
$mysqli->close();

?>

</form>
<br>
<a href="index.php">Clique para ver o inicio</a>
</body>
</html>