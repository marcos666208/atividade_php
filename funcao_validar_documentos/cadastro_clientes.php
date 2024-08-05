<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <h3 class="text-center p-3 mb-2 bg-primary">CADASTRO DE CLIENTES EM PHP</h3>
    <form name="clientes" method="post" action="">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" size="40" maxlength="40" placeholder="Informe o nome completo" required></td>
            </tr>
            <tr>
                <td><label>Cidade:</label></td>
                <td><input type="text" name="cidade" size="30" maxlength="30" required></td>
            </tr>
            <tr>
                <td><label>CPF:</label></td>
                <td><input type="text" name="cpf" size="30" maxlength="30" required></td>
            </tr>
            <tr>
                <td><label>RG:</label></td>
                <td><input type="text" name="rg" size="20" maxlength="20" required></td>
            </tr>
            <tr>
                <td><label>Contato:</label></td>
                <td><input type="text" name="contato" size="14" maxlength="14" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enviar" value="enviar"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["enviar"])) {
        require "validar.php";
        //$cpf = "052.801.548-15";
        $cpf    =   $_POST["cpf"];
        if (validaCPF($cpf)) {
            echo "CPF Válido";
        } else {
            echo "CPF Inválido";
        }
    }

    if(isset($_POST["enviar"])) {
        $nome       =   $_POST["nome"];
        $cidade     =   $_POST["cidade"];
        $cpf       =   $_POST["cpf"];
        $rg        =   $_POST["rg"];
        $contato   =   $_POST["contato"];
        require "conexao.php";
        $sql="INSERT INTO tbclientes(nome, cidade, cpf, rg, contato)";
        $sql.=" VALUES('$nome', '$cidade', '$cpf', '$rg', '$contato')" or die(mysqli_error($conexao));
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<script type=\"text/javascript\">alert('Cliente Cadastrado com sucesso!'); </script>";
        echo '<script>window.location.href = window.location.href;</script>';
    }
    ?>

<h4 class="text-center"><a href="index.php">Voltar</a></h4>
</body>

</html>