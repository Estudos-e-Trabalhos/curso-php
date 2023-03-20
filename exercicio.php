<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header>
        <h1 class="title">Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="voltar">Voltar</a>
    </nav>
    <main>
        <div class="conteudo">
            <?php 
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer>
        COD3R & ALUNOS <?= date('Y'); ?>
        <button class="button-33" role="button"><a href="https://www.udemy.com/course/php-7-completo/">Faça o
                curso!</a></button>
    </footer>
</body>

</html>