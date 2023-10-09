<?php
$titre = "Accueil | CAGSC";
$urlstyle = "css/home.css";
require_once("include/header.php");
?>
<div class="accueil">
    <h1>Bienvenue sur le site de la Communauté d'Agglomération Grand Sud Caraïbe !</h1>
</div>

<div class="demarches-conteneur">
    <h1>Mes démarches</h1>
    <div class="conteneur">
        <div class="demarches">
            <h2>Recherche de Travail</h2>
            <a href="https://www.emploi-territorial.fr/emploi-mobilite/?search-col=92843">
                <img src="images/demarches/emploi.png" alt="Recherche d'emploi" width="251" height="201">
            </a>
        </div>
        <div class="demarches">
            <h2>Autre Démarche</h2>
            <a href="https://www.emploi-territorial.fr/emploi-mobilite/?search-col=92843">
                <img src="images/demarches/emploi.png" alt="Recherche d'emploi" width="251" height="201">
            </a>
        </div>
    </div>
</div>

<div class="actualites">
    <h1 id="titreActus">Les dernières actualitées</h1>
    <div class="conteneur-actus">
        <div class="horizontalBloc">
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Résultat de l'enquête médicamenteuse</h2>
                    <p class="texte">Les résultats tant attendus sont enfin là !</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Tempête Philippe</h2>
                    <p class="texte">Des averses de forte intensité et de gros orages en perspective.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Augmentation du prix de l’électricité</h2>
                    <p class="texte">La région Guadeloupe octroie 220€ aux foyers modestes.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Eau interdite à la consommation</h2>
                    <p class="texte">Interdite à la consommation à Sainte-Anne, Saint-François et La Désirade.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Trois nouvelles brigades de gendarmerie</h2>
                    <p class="texte">Emmanuel Macron annonce la création de trois nouvelles brigades de gendarmerie.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Semaine Bleue</h2>
                    <p class="texte">Quand les personnes âgées délaissent les tâches administratives.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Conseil de sécurité de l'ONU</h2>
                    <p class="texte">Feu vert à une force internationale en Haïti.</p>
                </div>
            </div>
            <div class="carte">
                <div class="contenu">
                    <h2 class="title">Grande Parade du Mardi Gras</h2>
                    <p class="texte">Kasika déchu, suite à une requête de Magma.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("include/footer.php");
?>