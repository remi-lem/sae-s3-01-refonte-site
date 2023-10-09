<?php
// -------------------------------------------------------------------
// ATTENTION : ne PAS mettre ../ avant les images/liens sur ce fichier
// -------------------------------------------------------------------
?>

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
    <link rel="stylesheet" href="leaflet/leaflet.css">
    <script src="leaflet/leaflet.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="images/logo_favicon.jpg">
</head>
<body>
    <nav class="navigation">
        <div class="nav-gauche">
            <a href="index.php"><img src="../images/logo.png" alt="Logo CASBT" width="216" height="117"></a>
        </div>

        <div class="nav-droite">
            <ul>
                <li><a href="demarches.php">Mes Démarches</a>
                    <ul>
                        <li><a href="#">Orientations et offres d'emploi</a></li>
                        <li><a href="#">Modifier mes coordonnées</a></li>
                        <li><a href="#">Mes abonnements</a>
                            <ul>
                                <li><a href="#">Mon eau</a></li>
                                <li><a href="#">Ma facture</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mes tarifs</a></li>
                    </ul>
                </li>
                <li><a href="actualites.php">Actualités</a>
                </li>
                <li><a href="communes.php">Communes</a>
                    <ul>
                        <li><a href="#">Maps</a></li>
                        <li><a href="#">Les élus</a></li>
                        <li><a href="#">Environnement</a>
                            <ul>
                                <li><a href="#">Déchets</a></li>
                                <li><a href="#">Énergie</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="vie_quotidienne.php">Vie Quotidienne</a>
                    <ul>
                        <li><a href="#">Les Transports</a>
                            <ul>
                                <li><a href="#">Réseaux</a></li>
                                <li><a href="#">Scolaire</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Complexes sportifs</a></li>
                        <li><a href="#">Tourisme</a></li>
                        <li><a href="#">Culture</a>
                            <ul>
                                <li><a href="#">Médiathèque</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="foire_question.php">FAQ</a></li>
            </ul>
            <!--
            <input id="searchbar" type="text" name="search" placeholder="Rechercher">
            -->
        </div>
    </nav>
