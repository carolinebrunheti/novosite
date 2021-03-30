<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <?php

    include "conexao.php";

  

        $sql = "SELECT * FROM novo";
       
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

    ?>
    <a class="btn btn-primary" href="cadastro.php" role="button">Novo cadastro</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">*</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">email</th>
                <th scope="col">telefone</th>
                <th scope="col"></th>
                <th scope="col"></th>
              
            </tr>
        </thead>
        <tbody>
            <?php
            while ($obj = $res->fetch_object()) {
                echo " <tr>";
                echo " <th scope='row'>$obj->idcodigo</th>";
                echo " <td>$obj->nome</td>";
                echo " <td>$obj->sobrenome</td>";
                echo "<td>$obj->email</td>";
                echo "<td>$obj->telefone</td>";
                echo "<td><a class='btn btn-primary' href='deletar.php?id=$obj->idcodigo'>DELETAR</a>";
                echo "<td><a class='btn btn-primary' href='editar.php?id=$obj->idcodigo'>EDITAR</a>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
<?php

$mysqli->close();
?>
</html>