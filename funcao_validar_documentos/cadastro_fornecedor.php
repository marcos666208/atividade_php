<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
</head>

<body>
    <h3>CADASTRO DE FORNECEDORES EM PHP</h3>
    <form name="fornecedores" method="post" action="">
        <table>
            <tr>
                <td><label>Razão Social:</label></td>
                <td><input type="text" name="RazaoSocial" size="40" maxlength="60" placeholder="Informe a Razão Social" required></td>
            </tr>
            <tr>
                <td><label>Nome Fantasia:</label></td>
                <td><input type="text" name="NomeFantasia" size="40" maxlength="60" required></td>
            </tr>
            <tr>
                <td><label>Cidade:</label></td>
                <td><input type="text" name="cidade" size="30" maxlength="30" required></td>
            </tr>
            <tr>
                <td><label>CNPJ:</label></td>
                <td><input type="text" name="cnpj" size="18" maxlength="18" required></td>
            </tr>
            <tr>
                <td><label>Inscrição Estadual:</label></td>
                <td><input type="text" name="InscricaoEstadual" size="15" maxlength="15" required></td>
            </tr>
            <tr>
                <td><label>Contato:</label></td>
                <td><input type="text" name="contato" size="14" maxlength="40" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enviar" value="enviar"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["enviar"])) {
        require "validar.php";
        // Validação do CNPJ
        echo "<hr>";
        $cnpj = $_POST["cnpj"];
        if (validaCPF($cnpj)) {
            echo "CNPJ Válido";
        } else {
            echo "CNPJ Inválido";
        }
    }

    if(isset($_POST["enviar"])) {
        $RazaoSocial       =   $_POST["RazaoSocial"];
        $NomeFantasia      =   $_POST["NomeFantasia"];
        $cidade            =   $_POST["cidade"];
        $cnpj              =   $_POST["cnpj"];
        $InscricaoEstadual =   $_POST["InscricaoEstadual"];
        $contato           =   $_POST["contato"];
        require "conexao.php";
        $sql="INSERT INTO tbfornecedores(RazaoSocial, NomeFantasia, cidade, cnpj, InscricaoEstadual, contato)";
        $sql.=" VALUES('$RazaoSocial', '$NomeFantasia', '$cidade', '$cnpj', '$InscricaoEstadual', '$contato')" or die(mysqli_error($conexao));
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<script type=\"text/javascript\">alert('Fornecedor Cadastrado com sucesso!'); </script>";
        echo '<script>window.location.href = window.location.href;</script>';
    }
    ?>

<h4 class="text-center"><a href="index.php">Voltar</a></h4>
</body>

</html>