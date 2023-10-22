<?php
$titre = "Accueil | CAGSC";
$urlstyle = "css/home.css";
require_once("include/header.php");
?>
<div class="accueil">
    <h1>Bienvenue sur le site de la Communauté d'Agglomération Grand Sud Caraïbe&nbsp;!</h1>
</div>

<div class="demarches-conteneur">
    <h2 id="titreDemarches">Mes démarches</h2>
    <div class="row g-0">
        <div class="demarches col-6 col-lg-3">
            <h3>Recherche d'emploi</h3>
            <a href="https://www.emploi-territorial.fr/emploi-mobilite/?search-col=92843" target="_blank">
                <img src="images/demarches/emploi.jpeg" alt="Recherche d'emploi">
            </a>
        </div>
        <div class="demarches col-6 col-lg-3">
            <h3>Demande de CNI/passport</h3>
            <a href="#" onclick="alert('Fonctionnalité disponible prochainement');"><!--TODO-->
                <img src="images/demarches/passeport.jpg" alt="passeport">
            </a>
        </div>
        <div class="demarches col-6 col-lg-3">
            <h3>Paiement d'une facture</h3>
            <a href="#" onclick="alert('Fonctionnalité disponible prochainement');"><!--TODO-->
                <img src="images/demarches/payer.jpg" alt="Payement">
            </a>
        </div>
        <div class="demarches col-6 col-lg-3">
            <h3>Autres démarches</h3>
            <a href="demarches.php#autres-demarches">
                <img src="images/demarches/autre_demarche.jpg" alt="signature">
            </a>
        </div>
    </div>
</div>

<div class="actualites">
    <h2 id="titreActus">Les dernières actualités</h2>
    <div class="conteneur-actus">
        <div class="horizontalBloc">
            <div class="carte" onclick="window.location = ('actualites.php#1')">
                <div class="contenu">
                    <h3 class="title">Résultat de l'enquête médicamenteuse</h3>
                    <p class="texte">Les résultats tant attendus sont enfin là !</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#2')">
                <div class="contenu">
                    <h3 class="title">Tempête Philippe</h3>
                    <p class="texte">Des averses de forte intensité et de gros orages en perspective.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#3')">
                <div class="contenu">
                    <h3 class="title">Augmentation du prix de l’électricité</h3>
                    <p class="texte">La région Guadeloupe octroie 220€ aux foyers modestes.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#4')">
                <div class="contenu">
                    <h3 class="title">Eau interdite à la consommation</h3>
                    <p class="texte">Interdite à la consommation à Sainte-Anne, Saint-François et La Désirade.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#5')">
                <div class="contenu">
                    <h3 class="title">Trois nouvelles brigades de gendarmerie</h3>
                    <p class="texte">Emmanuel Macron annonce la création de trois nouvelles brigades de gendarmerie.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#6')">
                <div class="contenu">
                    <h3 class="title">Semaine Bleue</h3>
                    <p class="texte">Quand les personnes âgées délaissent les tâches administratives.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#7')">
                <div class="contenu">
                    <h3 class="title">Conseil de sécurité de l'ONU</h3>
                    <p class="texte">Feu vert à une force internationale en Haïti.</p>
                </div>
            </div>
            <div class="carte" onclick="window.location = ('actualites.php#8')">
                <div class="contenu">
                    <h3 class="title">Grande Parade du Mardi Gras</h3>
                    <p class="texte">Kasika déchu, suite à une requête de Magma.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="communes">
    <h2 id="titreCommunes">Communes membres</h2>
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
    <h2 id="titreVieQuo">Vie quotidienne</h2>
    <div id="cartes">
        <div class="row justify-content-around g-0">
            <div class="col-10 col-lg-4">
                <div id="carteVieQuoSeDep1" class="card">
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