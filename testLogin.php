<?php
    session_start();
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /* Testando se está recebendo email e senha
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);
        */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);

        /* verificando se existe esse usuário
        print_r($result);
        */

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION ['email']);
            unset($_SESSION ['senha']);
            header('Location: login.php');
        }else{
            $_SESSION ['email'] = $email;
            $_SESSION ['senha'] = $senha;
            header('Location: sistema.php');
        }
?>