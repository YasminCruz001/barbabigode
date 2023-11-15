<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <link rel="stylesheet" href="css/tabela.css">
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">

                <h1><span>Atendimentos</span></h1>

                <table>
                    <th>NOME</th>
                    <th>SERVIÇO</th>
                    <th>FILIAL</th>
                    <th>DATA</th>
                    <th>HORARIO</th>

                    <?php

                        require_once 'conexao_bd.php';
                        $query = "SELECT servico.descricao, filial.descricaoFilial, atendimento.* FROM servico JOIN 
                        atendimento on servico.idServico = atendimento.idServico JOIN filial ON filial.idFilial = atendimento.idFilial";
                        $result = $conn->query($query);

                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                            echo "<tr>";

                            echo "<td>".$row["nome"]."</td>";
                            echo "<td>".$row["descricao"]."</td>";
                            echo "<td>".$row["descricaoFilial"]."</td>";
                            echo "<td>".$row["dataAtendimento"]."</td>";
                            echo "<td>".$row["horario"]."</td>";

                            echo "</tr>";
                        }
                    
                    }
                    ?>
            </table>
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
