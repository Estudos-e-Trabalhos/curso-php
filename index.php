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
    <title>Curso PHP</title>
</head>

<body>
    <header>
        <h1 class="title">Curso PHP</h1>
        <h2>Indice de Exercicios</h2>
    </header>
    <main>
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo">
                    <h3>Módulo 01</h3>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                            Desafio
                        </a>
                    </li>
                </div>
            </nav>
        </div>
    </main>
    <footer>
        COD3R & ALUNOS <?= date('Y'); ?>
        <button class="button-33" role="button"><a href="https://www.udemy.com/course/php-7-completo/">Faça o
                curso!</a></button>
    </footer>
</body>

</html>