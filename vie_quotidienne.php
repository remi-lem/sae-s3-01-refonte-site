<?php
$titre = "Vie quotidienne | CAGSC";
$urlstyle = "css/vie_quotidienne.css";
require_once("include/header.php");
?>
    <div id="vieQuotidienne">
        <h1>Vie quotidienne</h1>
    </div>
    <div id="demarches">
        <h2>En bref</h2>
        <div id="cartes">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <h5 class="card-title">Horaires de bus</h5>
                            <p class="card-text">Vous pouvez consulter les horaires de bus sur l'application</p>
                            <a href="https://play.google.com/store/apps/details?id=sg.emsystem.eM_USR_Android_TSUD" class="btn btn-primary">Application Android</a>
                            <a href="https://apps.apple.com/fr/app/trans-sud/id6449498067" class="btn btn-primary">Application iOS</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <!-- TODO -->
                            <h5 class="card-title">Addresses des gymnases</h5>
                            <p class="card-text">Voici la carte des gymnases ou vous pouvez faire du sport</p>
                            <a href="#" class="btn btn-primary">lien</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <!-- TODO -->
                            <h5 class="card-title">loisirs</h5>
                            <p class="card-text">Voici la carte des gymnases ou vous pouvez faire du sport</p>
                            <a href="#" class="btn btn-primary">lien</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <!-- TODO -->
                            <h5 class="card-title">culture</h5>
                            <p class="card-text">Voici la carte des gymnases ou vous pouvez faire du sport</p>
                            <a href="#" class="btn btn-primary">lien</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
<div id="gymnases">
    <h2>Les gymnases</h2>
    <div id="conteneurCarteGym">
        <div id="carteGymnases"></div>
    </div>
</div>
<script src="javascript/carte_gymnases.js"></script>


<?php
require_once("include/footer.php");
?>