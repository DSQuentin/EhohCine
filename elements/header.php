<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>
    <?php if (isset($title)) : ?>
        <?= $title; ?>
    <?php else :?>
        Eh Oh Ciné !
    <?php endif ?>    
    </title>
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="/">Eh Oh Ciné !</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">Liste des Films</a>
      <a class="nav-link" href="#">Gestion des Films</a>
    </div>
  </div>
</nav>