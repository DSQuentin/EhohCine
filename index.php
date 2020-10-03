<?php
use App\Connection;

$title = Accueil;
$pdo = Connection::getPDO();

//$request = 'SELECT * FROM user';
//$query = $file_db->prepare($request);
//$query->execute(bdd.sql);


require 'elements/header.php';
?>

<h1>Test</h1>

<?php require 'elements/footer.php'; ?>