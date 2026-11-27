<?php
$thm = $_GET['thm'] ?? 1;
$nb = intval($_GET['nb']) ?? 10;

$dsn = "mysql:host=db;dbname=teetim;charset=utf8mb4";

$cnx = new PDO($dsn, 'teetim', 'teetim', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$sql = "SELECT nom, prix, ventes FROM produit WHERE thm_id=? LIMIT $nb";
$reqParemetree = $cnx->prepare($sql);

$resultat = $reqParemetree->execute([$thm]);
$enregistrements = $reqParemetree->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test intégration PHP/MySQL</title>
</head>
<body>
    <h2><?= $nb; ?> produits par thème (<?= $thm; ?>)</h2>
    <?php foreach($enregistrements as $ligne) :  ?>
        <div>
            <span><?= $ligne->nom; ?></span>
            <span><?= $ligne->prix; ?></span>
            <span><?= $ligne->ventes; ?></span>
        </div>
    <?php endforeach;  ?>
</body>
</html>