<?php
$titre = "Foire aux questions  | CAGSC";
$urlstyle = "css/faq.css";
require_once("include/header.php");
?>
<div id="contenuFAQ">
    <h1>Foire aux questions</h1>
<div id="foireAuxQuestions">
    <h2 id="titleFAQ">Questions fréquentes</h2>
    <!--TODO mettre plus de questions ?-->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                    Quels moyens de paiement puis-je utiliser pour régler ma facture ?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Pour régler votre facture d'eau, Les Eaux d’Aime mettent à votre disposition plusieurs moyens de paiement.
                    <ul>
                        <li>Le plus simple pour vous est de payer par <strong>prélèvement mensuel</strong> ou à chaque
                            facture pour être sûr de ne pas laisser passer l'échéance.</li>
                        <li>Vous pouvez également opter pour le <strong>paiement sécurisé par carte bancaire</strong> en ligne.
                            Pour ces trois options, il vous suffit d'avoir créé votre espace client.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                    Quelle est la pression « normale » au robinet ?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    La pression à votre robinet dépend de votre localisation par rapport au réservoir ou au château d'eau.
                    <br>
                    Une pression « confortable » se situe <strong>entre 2 et 3 bars</strong>. Si la pression est supérieure à 3 bars,
                    nous vous conseillons de protéger vos installations par la pose d'un réducteur de pression.
                    <br>
                    En réduisant la pression de l'eau, il diminue votre consommation d'eau et vous permet de réaliser des économies.
                    <br>
                    Une pression moins forte prolonge également la durée de vie de vos installations et de vos appareils électroménagers.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                    Je construit ma maison, quelles sont les démarches pour avoir l'eau?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Tout nouveau branchement devra faire l’objet d’une demande écrite auprès du service des Eaux.
                    <br>
                    Le pétitionnaire devra remettre au service des Eaux un dossier complet, en trois exemplaires, conforme
                    aux règlements de service et aux prescriptions techniques du service des Eaux.
                    <br>
                    Le Service des Eaux établira alors un devis précisant les travaux qui seront pris en charge par le
                    Service des Eaux qui spécifiera notamment les modalités de réalisation de ces travaux, les obligations
                    du pétitionnaire et la limite de prestation du Service des Eaux.
                    <br>
                    Dans tous les cas, tous les travaux mandatés directement par l’abonné devront être réalisés par une
                    entreprise de Travaux Publics spécialisée dans l’eau potable. L’abonné devra fournir une attestation
                    d’assurance de cette entreprise auprès du service des Eaux avant le début des travaux.
                    <br>
                    Les travaux seront réalisés après acceptation du devis établi par le service des Eaux, indiquant le
                    délai d’exécution des travaux, sous réserve de l’obtention préalable de l’ensemble des autorisations nécessaires.
                    <br>
                    La mise en service du branchement est effectuée par les agents du service des Eaux, seuls habilités
                    à manœuvrer les robinets de prise en charge sur la conduite de distribution.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="titleFormContactFAQ">
    <h2>Vous n'avez pas la réponse à votre question ? Envoyez-la nous par e-mail !</h2>
</div>
<div id="formContactFAQ">

    <div class="mb-3">
        <label for="formFAQMail" class="form-label">Adresse e-mail (pour vous recontacter)</label>
        <input type="email" class="form-control" id="formFAQMail" placeholder="nom@mail.com" required>
    </div>
    <div class="mb-3">
        <label for="formFAQMess" class="form-label">Votre question :</label>
        <textarea class="form-control" id="formFAQMess" rows="3" required></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Envoyer le message</button>
    </div>

</div>

</div>
<?php
require_once("include/footer.php");
?>