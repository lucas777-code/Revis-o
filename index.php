<?php
session_start();

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Credenciais fictícias
    $email_correto = "Joao@gmail.com";
    $senha_correta = "12345";

    // Validar as credenciais
    if ($email == $email_correto && $senha == $senha_correta) {
        $_SESSION["logado"] = true;
        header("Location: index.html");
        exit;
    } else {
        $erro = "Email ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cruzeiro dos Sonhos</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
    <h1>Faça login para conhecer sua próxima aventura!</h1>
    <?php if (!empty($erro)) echo "<p class='erro'>$erro</p>"; ?>
    <form action="index.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>
</div>
</body>