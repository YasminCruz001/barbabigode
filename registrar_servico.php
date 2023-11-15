<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ("conexao_bd.php");
    $descricao = $_POST["txtDescricao"];
    $valor = $_POST["txtPreco"];

    $sql = "INSERT INTO servico(descricao, preco) VALUES ('$descricao', '$valor')";

    if(executarComando($sql)){
        echo "<h1>Seu serviço foi inserido</h1>";
    } else{
        echo "<h1>Error ao inserir</h1>";
    }
    ?>
</body>
</html>