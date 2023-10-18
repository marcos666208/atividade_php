


<!DOCTYPE html>
<html>
<head>
    <title>Página de Leitura</title>
    <style>
        /* Estilos CSS para a página de leitura */
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<h1>Página de Leitura</h1>
<?php
session_start();

// Verifica se existem dados na sessão
if (isset($_SESSION['dados'])) {
    // Obtém os dados da sessão
    $dados = $_SESSION['dados'];

    // Exibe os dados
    $nome = $dados['nome'];
    $email = $dados['email'];

    echo "Nome: $nome<br>";
    echo "Email: $email";
} else {
    echo "Nenhum dado gravado na sessão.";
}
?>
  

    <h4><a href="gravar.php">Ir para a página de gravação</a></h4>
</body>
</html>