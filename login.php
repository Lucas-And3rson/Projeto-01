<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-query.css">

    <title>Login</title>
    <link href="digital.png" rel="icon">
</head>
<body>
    <main>
        <br>
        <div class = "voltar">
            <a href="home.php">Voltar</a>
        </div>
        <section id="login">
            <div id="imagem">
                <!-- Aqui vai a imagem nas CSS -->
            </div>
            <div id="formLogin">
                <h1>Login</h1>
                <p>Seja bem-vindo(a) novamente. Faça login para acessar sua conta.</p>
                <form  action="testLogin.php" method = "POST" autocomplete="on">
                    <div class="campo">
                        <i class="material-symbols-outlined">person</i>
                        <input type="email" name="email" id="email" placeholder="seu e-mail" autocomplete="email" required="" maxlength="40">
                        <label for="email">Login</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">key</i>
                        <input type="password" name="senha" id="isenha" placeholder="sua senha" autocomplete="current-password" required="" minlength="8" maxlength="20">
                        <label for="isenha">Senha</label>
                    </div>
                    <input type="submit" class = "entrar" name="submit" id="submit" value = "Entrar">
                </form>
            </div>
        </section>
    </main>
    <script src = "script.js"></script>

<reclameaqui-extension-pin><section></section></reclameaqui-extension-pin></body>
    
</html>