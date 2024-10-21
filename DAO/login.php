<?php

/* var_dump($_REQUEST['email'], $_REQUEST['senha']); */
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('../BD/config.php');

    $email =  $_POST['email'];
    $senha =  $_POST['senha'];

    $sql = "SELECT * FROM test_users WHERE email_user = '$email' and password_user = '$senha'";

    $resultado = $conexao->query($sql);
    /* print_r($resultado); */

    if(mysqli_num_rows($resultado) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: ../view/index.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location: ../view/painel.php');

    }
}else{
    header('Location:../view/index.php');
}

?>