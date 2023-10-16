<?php
$titre = "Vie quotidienne | CAGSC";
$urlstyle = "css/vie_quotidienne.css";
require_once("include/header.php");
?>
    <div id="vieQuotidienne">
        <h1>Vie quotidienne</h1>
    </div>
    <div id="demarches">
        <h2>Liens utiles</h2>
        <div id="cartes">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <h5 class="card-title">Horaires de bus</h5>
                            <p class="card-text">Consulter les horaires de bus</p>
                            <a href="https://play.google.com/store/apps/details?id=sg.emsystem.eM_USR_Android_TSUD" class="btn btn-primary">Application Android</a>
                            <a href="https://apps.apple.com/fr/app/trans-sud/id6449498067" class="btn btn-primary">Application iOS</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                <div class="card">
                        <img src="images/vie_quotidienne/bus.jpg" class="card-img-top" alt="Autobus">
                        <div class="card-body">
                            <!-- TODO -->
                            <h5 class="card-title">titre</h5>
                            <p class="card-text">texte</p>
                            <a href="#" class="btn btn-primary">lien</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
<?php
require_once("include/footer.php");
?>