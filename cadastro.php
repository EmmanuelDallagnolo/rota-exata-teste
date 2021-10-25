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
    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Rota Exata</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <section class="container mt-5">
        <form name="form_cadastro" id="form_cadastro" method="POST" action="autenticacao/cadastro.php">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <div class="form-group">
                <label>Curso</label>
                <select class="form-control" id="curso" name="curso">
                    <option>Sistemas de informação</option>
                    <option>Sociologia</option>
                    <option>Moda</option>
                    <option>Medicina</option>
                </select>
            </div>
            <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
            </div>
            <div>
                <label>Sexo</label><br>
                <input type="radio" name="sexo" value="Masculino">
                <label>Masculino</label><br>
                <input type="radio" name="sexo" value="Feminino">
                <label>Feminino</label><br>
                <input type="radio" name="sexo" value="Outros">
                <label>Outros</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="termos" name="termos">
                <label class="form-check-label">Li e aceito todos os termos de uso</label>
            </div>
            <div class="mt-3 mb-5">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>