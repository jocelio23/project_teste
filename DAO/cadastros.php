<?php
include_once('../DAO/login.php');
session_start();
if (isset($_POST['submit'])) {

    include_once('../BD/config.php');
    $email = $_POST['email'];

    $sql = "SELECT * FROM test_users WHERE email_user = '$email'";
    $resultado = $conexao->query($sql);

    if (mysqli_num_rows($resultado) < 1) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $titulo = $_POST['titulo'];
        $codigo = $_POST['codigo'];
        $result = mysqli_query($conexao, "INSERT INTO test_users(name_user,email_user,password_user,title_user,code_user) VALUES ('$nome','$email','$senha','$titulo','$codigo')");
        
        if($result){
            $_SESSION['msg'] = "Cadastrado com sucesso";
        }
        
        header('Location:../view/index.php');

    }else{
        $_SESSION['msg'] = "<div class alert-sucess'> Emai já cadastrado</div>";
        unset($_SESSION);
        header('Location:../view/index.php');
    }
    header('Location:../view/index.php');
}
