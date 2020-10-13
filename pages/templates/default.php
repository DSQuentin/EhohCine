<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/public/index.php?p=home">
            <strong>EhohCine</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/public/index.php?p=home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public/index.php?p=listefilms">Liste des films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public/index.php?p=gestionfilms">Gestion des films</a>
                </li>
            </ul>
        </div>
        <?php if (isset($_GET['p']) && ($_GET['p'] === 'listefilms' || $_GET['p'] === 'gestionfilms')): ?>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-light" href="/public/index.php?p=createfilm">Ajouter un film
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        <?php endif ?>
    </div>

</nav>

<main class="mt-5">
    <div>
        <?= $content; ?>
    </div>
</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Retourner en haut de la page</a>
        </p>
        <p>&copy; 2020 Copyright : DA SILVA Quentin, GOMES Bruno, GRONEAU Benoit</p>
    </div>
</footer>

</body>
</html>