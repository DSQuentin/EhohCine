<?php

use App\Autoloader;

require './templates/header.php';
require '../src/Autoloader.php';
Autoloader::register();
?>

<h1>TEST</h1>



<?php require './templates/footer.php'; ?>
