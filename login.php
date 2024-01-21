<?php

session_start();

$errorMessage = '';

if (isset($_SESSION['error'])) {
    $errorMessage = $_SESSION['error'];
    unset($_SESSION['error']);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validarLogin.php" method="POST">
        <h1>Bem vindo ao sistema!</h1>
        <h2>Login</h2>
        <input type="text" name="user" id="" placeholder="username" required>
        <input type="password" name="password" id="" placeholder="Digite sua senha" required>
        <input type="submit" value="Entrar">
        <?php if ($errorMessage): ?>
            <div style=" color: red; padding: 10px; font-weight: bold;">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
    </form>
    
</body>
</html>
