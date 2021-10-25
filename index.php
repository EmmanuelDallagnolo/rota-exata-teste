<?php
    require_once 'run/configuracao.php';

    $produtos = CONST_ARRAY_PRODUCTS;
    $produtosInverso = $produtos;
    if (!isset($_SESSION['logado']) || !$_SESSION["logado"]) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Rota Exata</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <?php if (isset($_SESSION['logado']) && !$_SESSION['logado']) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php endif; ?>

        </ul>
        <span class="my-2 my-sm-0 pl-3 pr-3 text-white"><?= $_SESSION['nome'] ?></span>
        <a class="btn btn-danger my-2 my-sm-0 pl-3 pr-3" href="autenticacao/logout.php">Sair</a>
    </nav>
    <section class="container mt-5">
        <article>
            <header>
                <h2>Ordenação padrão</h2>
            </header>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</td>
                        <th>Descrição</td>
                        <th>Valor</td>
                        <th>Opcionais</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto) : ?>
                        <tr>
                            <td><?= $produto["produtos"]["nome"] ?></td>
                            <td><?= $produto["produtos"]["descricao"] ?></td>
                            <td><?= $produto["produtos"]["valor"] ?></td>
                            <td>
                                <ul>
                                    <?php foreach ($produto["produtos"]["opcionais"] as $opcional) : ?>
                                        <li><?= $opcional ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </article>

        <article class='mt-5 mb-5'>
            <header>
                <h2>Ordenação inversa</h2>
            </header>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</td>
                        <th>Descrição</td>
                        <th>Valor</td>
                        <th>Opcionais</td>
                    </tr>
                </thead>
                <tbody>
                    <?php arsort($produtosInverso);
                    foreach ($produtosInverso as $produto) : ?>
                        <tr>
                            <td><?= $produto["produtos"]["nome"] ?></td>
                            <td><?= $produto["produtos"]["descricao"] ?></td>
                            <td><?= $produto["produtos"]["valor"] ?></td>
                            <td>
                                <ul>
                                    <?php foreach ($produto["produtos"]["opcionais"] as $opcional) : ?>
                                        <li><?= $opcional ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </article>
    </section>
</body>

</html>