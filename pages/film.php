<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
$film = $films->findById($_GET['id']);

$title = 'Ehoh Ciné | ' . $film->nomfilm;
?>
<div class="container d-flex bg-light rounded p-4 shadow-sm mb-5">
    <img class="rounded shadow-sm" src="<?= $film->urlaffiche ?>" alt="<?= $film->nomfilm ?> (<?= $film->anneereal ?>)" style="height: 350px">
    <div class="ml-4">
        <h1><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h1>
        <p><a href="/public/index.php?p=realisateur&id=<?= $film->real_id ?>"><strong><?= $film->nomreal . ' ' . $film->prenomreal?></strong></a></p>
        <p class="font-italic"><?= $film->nomgenre ?></p>
        <p><strong>Synopsis : </strong><br> <?= $film->synopsis ?></p>
    </div>
</div>



