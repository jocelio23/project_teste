<?php
include_once('../DAO/pegaId.php');

unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <div class="page">
        <form action="../DAO/cadastros.php" method="POST" class="formCad">
            <p>Digite os dados para Cadastro nos campos abaixo</p>

            <a href="index.php">Retornar</a>
    
            <input type="text" name="nome" placeholder="Digite o nome" autofocus="true" required />
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" required />

            <label>
                <h5>Os dois campos abaixo são preenchidos automaticamente</h6>
            </label>
            <input type="text" name="codigo" placeholder="Código único" autofocus="true" value="<?php echo "00" . $row[0] + 1 ?>" autocomplete="off" readonly />


            <!-- Consumindo de API -->
            <?php

            $url = "https://jsonplaceholder.typicode.com/posts/" . $row[0] + 1;

            $campo = json_decode(file_get_contents($url), true);
            ?>
            <input type="text" name="titulo" placeholder="Título" autofocus="true" value="<?php echo $campo['title'] ?> " readonly />

            <input type="password" name="senha" placeholder="Digite sua senha" required />

            <input type="submit" name="submit" value="CADASTRAR" class="btn" />
        </form>
    </div>


</body>

</html>
<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>

    <div class="pageCad">
        <form method="POST" class="formCad">
            <p>Digite os dados para Cadastro nos campos abaixo</p>

        <a href="index.html">Retornar</a>
            <input type="name" placeholder="Digite o nome" autofocus="true" required />
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" required/>
            <input type="cod" placeholder="Código único" autofocus="true" disabled  required/>
            <input type="title" placeholder="Título" autofocus="true" disabled  required/>

            <input type="password" placeholder="Digite sua senha" required />

            <input type="submit" value="CADASTRAR" class="btn" />
        </form>
    </div>

    
</body>
</html>
 -->