<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ('conexao_bd.php');
    $descricao = $_POST['txtDescricao'];
    $localizacao = $_POST['txtLocal'];
    $responsavel = $_POST['txtResponsavel'];

    $sql = "INSERT INTO filial(descricaoFilial, localizacao, responsavel) VALUES ('$descricao', '$localizacao', '$responsavel')";

    if(executarComando($sql)){
        echo "<h1>Seu serviço foi inserido</h1>";
    } else{
        echo "<h1>Error ao inserir</h1>";
    }
    ?>
</body>
</html>