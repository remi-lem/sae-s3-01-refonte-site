<?php
$titre = "Accueil | CAGSC";
$urlstyle = "css/home.css";
require_once("include/header.php");
?>
<div class="accueil">
    <h1>Bienvenue sur le site de la Communauté d'Agglomération Grand Sud Caraïbe !</h1>
</div>

<div class="demarches-conteneur">
    <h1 id="titreDemarches">Mes démarches</h1>
    <div class="conteneur">
        <div class="demarches">
            <h2>Recherche d'emploi</h2>
            <a href="https://www.emploi-territorial.fr/emploi-mobilite/?search-col=92843" target="_blank">
                <img src="images/demarches/emploi.jpeg" alt="Recherche d'emploie">
            </a>
        </div>
        <div class="demarches">
            <h2>Demande de CNI/passport</h2>
            <a href="#" onclick="alert('Fonctionnalité disponible prochainement');"><!--TODO-->
                <img src="images/demarches/passeport.jpg" alt="passeport">
            </a>
        </div>
        <div class="demarches">
            <h2>Paiement d'une facture</h2>
            <a href="#" onclick="alert('Fonctionnalité disponible prochainement');"><!--TODO-->
                <img src="images/demarches/payer.jpg" alt="Recherche d'emploie">
            </a>
        </div>
        <div class="demarches">
            <h2>Autres démarches</h2>
            <a href="demarches.php#autres-demarches">
                <img src="images/demarches/autre_demarche.jpg" alt="passeport">
            </a>
        </div>
    </div>
</div>

<div class="actualites">
    <h1 id="titreActus">Les dernières actualités</h1>
    <div class="conteneur-actus">
        <div class="horizontalBloc">
            <div class="carte" onclick="window.location = ('actualites.php#1')">
                <div class="contenu">
                    <h2 class="title">Résultat de l'enquête médicamenteuse</h2>
                    <p class="texte">Les résultats tant attendus sont enfin là !</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#2')">
                <div class="contenu">
                    <h2 class="title">Tempête Philippe</h2>
                    <p class="texte">Des averses de forte intensité et de gros orages en perspective.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#3')">
                <div class="contenu">
                    <h2 class="title">Augmentation du prix de l’électricité</h2>
                    <p class="texte">La région Guadeloupe octroie 220€ aux foyers modestes.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#4')">
                <div class="contenu">
                    <h2 class="title">Eau interdite à la consommation</h2>
                    <p class="texte">Interdite à la consommation à Sainte-Anne, Saint-François et La Désirade.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#5')">
                <div class="contenu">
                    <h2 class="title">Trois nouvelles brigades de gendarmerie</h2>
                    <p class="texte">Emmanuel Macron annonce la création de trois nouvelles brigades de gendarmerie.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#6')">
                <div class="contenu">
                    <h2 class="title">Semaine Bleue</h2>
                    <p class="texte">Quand les personnes âgées délaissent les tâches administratives.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#7')">
                <div class="contenu">
                    <h2 class="title">Conseil de sécurité de l'ONU</h2>
                    <p class="texte">Feu vert à une force internationale en Haïti.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#8')">
                <div class="contenu">
                    <h2 class="title">Grande Parade du Mardi Gras</h2>
                    <p class="texte">Kasika déchu, suite à une requête de Magma.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="communes">
    <h1 id="titreCommunes">Communes membres</h1>
    <div id="flexAccueilCommunes">
        <figure>
            <img src="images/accueil/paysage.jpg" alt="paysage">
            <figcaption>Paysage des Saintes (Terre-de-Haut et Terre-de-Bas)</figcaption>
        </figure>
        <figure>
            <img src="images/accueil/reunion_cagsc.jpg" alt="reunion CAGSC">
            <figcaption>Réunion au siège de la CAGSC</figcaption>
        </figure>
    </div>
    <p><a href="communes.php">Voir les communes</a></p>
</div>

<div class="vieQuotidienne">
    <h1 id="titreVieQuo">Vie quotidienne</h1>
    <div id="cartes">
        <div class="row justify-content-around">
            <div class="col-10 col-lg-4">
                <div class="card">
                    <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                    <div class="card-body">
                        <h5 class="card-title">Horaires de bus</h5>
                        <a href="vie_quotidienne.php#se-deplacer">Consulter</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4">
                <div class="card">
                    <img src="images/vie_quotidienne/basket.jpg" class="card-img-top" alt="basketball">
                    <div class="card-body">
                        <h5 class="card-title">Carte des gymnases</h5>
                        <a href="vie_quotidienne.php#gymnases">Consulter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("include/footer.php");
?>