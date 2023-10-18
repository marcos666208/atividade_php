<!DOCTYPE html>
<html>
<head>
    <title>Página de Leitura</title>
    <style>
        /* Estilos CSS para a página de leitura */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        .dados-container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .dados-container h2 {
            color: #333;
            margin-top: 0;
        }
        
        .dados-container p {
            margin: 0;
            line-height: 1.5;
        }
        
        .link-container {
            text-align: center;
        }
        
        .link-container a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Página de Leitura</h1>
    <div class="dados-container">
        <?php
        session_start();
        // Verifica se existem dados na sessão
        if (isset($_SESSION['dados'])) {
            // Obtém os dados da sessão
            $dados = $_SESSION['dados'];
            // Exibe os dados
            $nome = $dados['nome'];
            $email = $dados['email'];
            echo "<h2>Dados Gravados:</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        } else {
            echo "<p>Nenhum dado gravado na sessão.</p>";
        }
        ?>
    </div>
    <div class="link-container">
        <a href="gravar.php">Ir para a página de gravação</a>
    </div>
</body>
</html>
  