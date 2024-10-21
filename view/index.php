<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <div class="page">
        <form method="POST" action="../DAO/login.php" class="formLogin">
            <h1>Login</h1>
            <?php
            include_once('../DAO/msg.php');
            ?>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite seu e-mail" />
            <a href="cad.php">Criar acesso</a>
            <input type="submit" name="submit" value="Acessar" class="btn" />
        </form>
    </div>
</body>

</html>