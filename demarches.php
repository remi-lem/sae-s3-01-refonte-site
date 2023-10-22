<?php
$titre = "Mes Démarches | CAGSC";
$urlstyle = "css/demarches.css";
require_once("include/header.php");
?>

<div class="orientation-conteneur" id="demarches-en-bref-dessus">
    <h1>Mes démarches</h1>
    <div id="demarches-en-bref">
        <h2>Mes démarches en bref</h2>
        <div class="conteneur row g-0">
            <div class="demarches">
                <h2>Recherche d'emploi</h2>
                <a href="https://www.emploi-territorial.fr/emploi-mobilite/?search-col=92843" target="_blank">
                    <img src="images/demarches/emploi.jpeg" alt="Recherche d'emploi">
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
                    <img src="images/demarches/payer.jpg" alt="Payement">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="abonnement-conteneur" id="autres-demarches">
    <h2>Plus de démarches</h2>
    <div class="accordion" id="accordionExample" data-bs-theme="light">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                    Prendre rendez-vous avec votre maire
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    La procédure à suivre change en fonction de chaque commune.<br>
                    Merci de vous référer au site inscrit sur la page <a href="communes.php">Communes</a> afin de vous renseigner sur la marche à suivre.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                    Louer une salle
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Chaque commune possède son propre fonctionnement pour la location de salles.<br>
                    Merci d'appeler votre mairie au numéro inscrit sur la page <a href="communes.php">Communes</a> pour plus d'informations.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("include/footer.php");
?>
	