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
    <script src="javascript/hamburger_menu.js" defer></script>
</head>
<body>
    <!--<nav class="navigation">
        <div class="nav-gauche">
            <a href="index.php"><img src="images/logo.png" alt="Logo CASBT" width="270" height="147"></a>
        </div>

        <div class="nav-droite">
            <ul>
                <li><a href="demarches.php">Mes Démarches</a>
                    <ul>
                        <li><a href="demarches.php#demarches-en-bref-dessus">Démarches en bref</a></li>
                        <li><a href="demarches.php#autres-demarches">Autres démarches</a></li>
                    </ul>
                </li>
                <li><a href="actualites.php">Actualités</a>
                </li>
                <li><a href="communes.php">Communes</a>
                </li>
                <li>
                    <a href="vie_quotidienne.php">Vie Quotidienne</a>
                    <ul>--><!--TODO : ??-->
                        <!--<li><a href="vie_quotidienne.php#se-deplacer">Transports</a></li>
                        <li><a href="vie_quotidienne.php#gymnases">Sports</a></li>
                    </ul>
                </li>
                <li><a href="foire_question.php">FAQ</a></li>
            </ul>-->
            <!--
            <input id="searchbar" type="text" name="search" placeholder="Rechercher">
            -->
        <!--</div>
    </nav>-->

    <div id="root">
        <div id="topnav" class="topnav">
            <a id="home_link" class="topnav_link" href="/">HOME</a>

            <!-- Classic Menu -->
            <nav role="navigation" id="topnav_menu">
                <a class="topnav_link" href="/about">ABOUT</a>
                <a class="topnav_link" href="/contact-us">CONTACT</a>
            </nav>

            <a id="topnav_hamburger_icon">
                <!-- Some spans to act as a hamburger -->
                <span></span>
                <span></span>
                <span></span>
            </a>

            <!-- Responsive Menu -->
            <nav role="navigation" id="topnav_responsive_menu">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/contact-us">CONTACT</a></li>
                    <li><a href="/privacy-policy">PRIVACY POLICY</a></li>
                    <li><a href="/terms-and-conditions">TERMS AND CONDITIONS</a></li>
                </ul>
            </nav>
        </div>
    </div>