<?php
    session_start();

    include_once('config.php');
  //print_r($_SESSION);

  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
  }
  $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Tela principal</title>
    </head>
    <style>

    body {
        background: linear-gradient(to left, #49a09d, #13349e);
        color: white;
        text-align: center;
    }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sistema</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
        </nav>
        <?php
        echo "<h1>Bem vindo(a) <u>$logado</u></h1>";
        ?>
    </body>
</html>