<?php
session_start();

if (isset($_SESSION['logado']) && $_SESSION["logado"]) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Rota Exata</a>
    </nav>
    <form name="formulario" id="formulario" action="autenticacao/login.php" method="POST">
        <div class="div_main_login">
            <div class="div_login">
                <img title="imagem-user" src="images/user.png">
                <div class="form-group">
                    <label>Email address</label>
                    <input name="usuario" type="email" class="form-control" placeholder="nome@exemplo.com">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php if (isset($_SESSION['erro']) && $_SESSION["erro"]) : ?>
                    <div class="alert alert-danger" role="alert">
                        Usuário ou senha inválido!
                    </div>
                <?php endif ?>
                <button class="btn btn-primary">Entrar</button>
                <a class="btn btn-primary" href="cadastro.php">Criar nova conta</a>
            </div>
        </div>
    </form>
</body>

</html>