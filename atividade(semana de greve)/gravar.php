<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Grava os dados na sessão
    $_SESSION['dados'] = array(
        'nome' => $nome,
        'email' => $email
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Gravação</title>
    <link rel="stylesheet" href="gravar.css">
</head>
<body>
    <h1>Página de Gravação</h1>

    <form method="POST" action="gravar.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Gravar">
        <a href="ler.php">ler</a>

    </form>
</body>
</html>