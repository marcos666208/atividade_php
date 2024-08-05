<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Clientes</title>
</head>
<body>
        <?php
            echo "<h4 class='text-center text-info'>Pesquisa de Clientes</h4>";
            require "conexao.php";
            $sql="SELECT * FROM tbclientes";

            $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<table border='1' align='center' width='40%'>";
                echo "<tr>";
                    echo "<th>Nome</th>";
                    echo "<th>cidade</th>";
                    echo "<th>CPF</th>";
                    echo "<th>RG</th>";
                    echo "<th>Contato</th>";
                echo "</tr>";
                while($linha=mysqli_fetch_array($resultado)) {
                    $nome             =   $linha["nome"];
                    $cidade           =   $linha["cidade"];
                    $cpf              =   $linha["cpf"];
                    $rg               =   $linha["rg"];
                    $contato          =   $linha["contato"];

                    echo "<tr>";
                        echo "<td align='left'>$nome</td>";
                        echo "<td align='left'>$cidade</td>";
                        echo "<td align='left'>$cpf</td>";
                        echo "<td align='right'>$rg</td>";
                        echo "<td align='right'>$contato</td>";                        

                    echo "<tr>";
                }
            echo "</table>";   
        ?>
        <h4 class="text-center"><a href="index.php">Voltar</a></h4>
    </div>
</body>
    

</html>