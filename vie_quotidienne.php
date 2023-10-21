<?php
$titre = "Vie quotidienne | CAGSC";
$urlstyle = "css/vie_quotidienne.css";
require_once("include/header.php");
?>
    <div id="vieQuotidienne">
        <h1>Vie quotidienne</h1>
    </div>
    <div id="se-deplacer">
        <h2>Se déplacer</h2>
        <div id="cartes">
            <div class="row justify-content-around">
                <div class="col-4">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus_phone.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <h5 class="card-title">Horaires de bus</h5>
                            <p class="card-text">Vous pouvez consulter les horaires de bus sur l'application</p>
                            <a href="https://play.google.com/store/apps/details?id=sg.emsystem.eM_USR_Android_TSUD" class="btn btn-primary" target="_blank">Android</a>
                            <a href="https://apps.apple.com/fr/app/trans-sud/id6449498067" class="btn btn-primary" target="_blank">iOS</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <h5 class="card-title">Horaires de bus</h5>
                            <p class="card-text">Les horaires des bus sont également téléchargeables au format PDF</p>
                            <a href="documents/horaires_bus.pdf" class="btn btn-primary" target="_blank">Télécharger</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
<div id="gymnases">
    <h2>Les gymnases</h2>
    <p>Voici la carte des gymnases ouverts au public</p>
    <div id="conteneurCarteGym">
        <div id="carteGymnases"></div>
    </div>
</div>
<script src="javascript/carte_gymnases.js"></script>


<?php
require_once("include/footer.php");
?>