<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<h1>Cadastro de usuários</h1>
<body>

<?php

include "conexao.php";
if(isset($_POST["nome"])){

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$senha=$_POST['senha'];

$sql="INSERT INTO novo (nome, sobrenome, telefone, email, senha) values('$nome', '$sobrenome',$telefone,'$email',$senha)";
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
    echo "cadastro realizado com sucesso";
}
}
?>
<form action="cadastro.php" method="post">
<label for="nome">Nome</label>
<input type="text" name="nome" placeholder="Digite seu nome">
<br>
<label for="sobrenome ">Sobrenome</label>
<input type="text" name="sobrenome" placeholder="digite seu sobrenome">
<br>
<label for="telefone">Telefone</label>
<input type="text" name="telefone" placeholder="Seu telefone">
<br>
<label for="email">Email</label>
<input type="text" name="email" placeholder="Digite seu email">
<br>
<label for="senha">Senha</label>
<input type="text" name="senha" placeholder="sua senha">
<br>
<input type="submit" name="Confirmar">
<br>
<a class="btn btn-primary" href="index.php" role="button"> Inicio</a>



</form>
<?php

$mysqli->close();
?>
</body>
</html>