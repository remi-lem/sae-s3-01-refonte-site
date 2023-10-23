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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre; ?></title>

    <link href="css/global.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $urlstyle; ?>" rel="stylesheet">

    <link rel="icon" href="images/logo_favicon.jpg">
    <script src="javascript/global.js" defer></script>

    <!--bootstrap, leaflet et jquery-->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css">
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>
</head>
<body>
    <div id="root">
        <div id="topnav" class="topnav">
            <div class="nav-gauche">
                <a class="home_link" href="index.php"><img src="images/logo.png" alt="Logo CASBT" width="270" height="147"></a>
            </div>

            <!-- Classic Menu -->
            <nav id="topnav_menu">
                <ul>
                    <li><a class="topnav_link" href="demarches.php">Mes Démarches</a>
                        <ul>
                            <li><a class="topnav_link_link" href="demarches.php#demarches-en-bref-dessus">Démarches en bref</a></li>
                            <li><a class="topnav_link_link" href="demarches.php#autres-demarches">Autres démarches</a></li>
                        </ul>
                    </li>
                    <li><a class="topnav_link" href="actualites.php">Actualités</a></li>
                    <li><a class="topnav_link" href="communes.php">Communes</a></li>
                    <li>
                        <a class="topnav_link" href="vie_quotidienne.php">Vie Quotidienne</a>
                        <ul>
                            <li><a class="topnav_link_link" href="vie_quotidienne.php#se-deplacer">Transports</a></li>
                            <li><a class="topnav_link_link" href="vie_quotidienne.php#gymnases">Sports</a></li>
                            <!--TODO : rajouter culture et loisir-->
                        </ul>
                    </li>
                    <li><a class="topnav_link" href="foire_question.php">FAQ</a></li>
                </ul>
            </nav>

        <a id="topnav_hamburger_icon">
            <!-- Some spans to act as a hamburger -->
                <span></span>
                <span></span>
                <span></span>
            </a>

            <!-- Responsive Menu -->
            <nav id="topnav_responsive_menu">
                <ul>
                    <li><a href="demarches.php">Mes Démarches</a></li>
                    <li><a href="actualites.php">Actualités</a></li>
                    <li><a href="communes.php">Communes</a></li>
                    <li><a href="vie_quotidienne.php">Vie Quotidienne</a></li>
                    <li><a href="foire_question.php">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </div>