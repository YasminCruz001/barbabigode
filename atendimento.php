
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
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formAtendimento" action="registrar_atendimento.php" method="post">
            <div id="body">

                <h1><span>Agende o Atendimento</span></h1>

                <ol>
                    
                    <li><input type="text" name="txtNome" placeholder="Nome completo" class="input"/>
                    </li>

                    

            <li>
                        <label for=" " > Serviço </label><br>
                        <select name="txtServico" id="" class="input">

                        <?php
                            require_once 'conexao_bd.php';
                            $descricao ="SELECT idServico, descricao FROM servico";
                            $result = $conn->query($descricao);

                            if($result->num_rows>0){
                                while($row=$result->fetch_assoc()){
                                    echo "<option value='".$row['idServico']."'>".$row['descricao']. "</option>";
                               
                            }
                        }
                        ?>
                        </select>
            </li>

            <li>

                    <label for=" " >Filial </label><br>
                    <select name="txtFilial" id="" class="input">
                    <?php
                            require_once 'conexao_bd.php';
                            $descricao ="SELECT idFilial, descricaoFilial FROM filial";
                            $result = $conn->query($descricao);

                            if($result->num_rows>0){
                                while($row=$result->fetch_assoc()){
                                    echo "<option value='".$row['idFilial']."'>".$row['descricaoFilial']. "</option>";
                                
                            }
                        }
                        ?>
                    </select>

             </li>

                   
                    <li>
                    <label for=" "> Data </label><br>
                    <input type="date" name="txtData" placeholder="Data" class="input"/>
                    </li>

<li>

                    <select name="txtHorario" class="input" >
                     <option value="07:00 ÀS 09:00">07:00 ÀS 09:00</option>
                     <option value="09:00 ÀS 10:30">09:00 ÀS 10:30</option>
                     <option value="10:30 ÀS 12:00">10:30 ÀS 12:00</option>
                     <option value="13:00 ÀS 15:00">13:00 ÀS 15:00</option>
                    <option value="15:00 ÀS 16:30">15:00 ÀS 16:30</option>
                    <option value="16:30 ÀS 19:00">16:30 ÀS 19:00</option> 
                </select>
</li>
                </ol>

                <li><input type="submit" value="Cadastrar" class="botao" />
                    </li>

            </div>
        </form>
                
                

                    

        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>