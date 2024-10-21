<?php

//verificação para saber se tem sessões ativas
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true) ){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:../view/index.php');
}

$user = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <div class="page">
        <div class="page">
            <form method="POST" class="panel">
                <h1>Painel central</h1>
        seja bem vindo(a), Sr(a) <?php echo $user;?>

        <div class="tenor-gif-embed" data-postid="4533805" data-share-method="host" data-aspect-ratio="1.32773" data-width="100%"><a href="https://tenor.com/view/thumbs-up-computer-kid-okay-gif-4533805">Thumbs Up Computer GIF</a>from <a href="https://tenor.com/search/thumbs+up-gifs">Thumbs Up GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>        <a href="../DAO/sair.php">Sair</a>
        </div>
    </div>
    
</body>
</html>
