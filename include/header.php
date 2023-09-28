<?php
global $titre;
global $urlstyle;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre; ?></title>
    <link href="css/global.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $urlstyle; ?>" rel="stylesheet">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="images/logo_favicon.jpg">

    <nav class="navigation">
        <div class="nav-gauche">
            <a href="index.php"><img src="images/logo.png" alt="Logo CASBT" width="140" height="113"></a>
        </div>
        <div class="nav-droite">
            <a href="demarches.php"><h2>Mes Démarches</h2></a>
            <a href="actualites.php"><h2>Actualités</h2></a>
            <a href="communes.php"><h2>Communes</h2></a>
            <a href="vie_quotidienne.php"><h2>Vie Quotidienne</h2></a>
            <a href="foire_question.php"><h2>Foire aux Questions</h2></a>
            <h2><label for="searchbar"></label><input id="searchbar" type="text" name="search" placeholder="Besoin d'une recherche..."></h2>
        </div>
    </nav>
</head>